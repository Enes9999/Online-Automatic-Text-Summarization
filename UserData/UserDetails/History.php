<?php

require_once '../Storage/Database.php';

class History {

  
    public static function saveHistory($data) {
        $db = Database::getInstance();

        if(!isset($data['history'])) {
            return false;            
        }

        $history = $data['history'];
        $date = date("Y/m/d");


        $sql = "INSERT INTO history SET History = '$history', ID = '" . $_SESSION['user']['id'] . "', Date= '$date';";

        $result = $db->query($sql);

        return $result;
    }

    
  
    public static function deleteHistory($id) {
        $db = Database::getInstance();

        $sql = "DELETE FROM history WHERE IDHISTORY = {$id}";
        $result = $db->query($sql);

        return $result;
    }

    public static function getHistory() {
        $db = Database::getInstance();

        $sql = "SELECT * FROM history WHERE id = '" . $_SESSION['user']['id'] . "'";
        $history = $db->find($sql);

        return $history;
    }
}