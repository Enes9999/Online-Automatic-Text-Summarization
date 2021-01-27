<?php
require_once('../Storage/Database.php');

class Deactivate
{
    public static function deleteUser($id)
    {
        $db = Database::getInstance();

        $sql = "DELETE FROM users WHERE id = {$id}";
        $result = $db->query($sql);

        return $result;
    }
}
