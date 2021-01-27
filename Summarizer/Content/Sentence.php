<?php

    function sentences_from_doc($text){

        $pattern_length2 = "/[\.\?\!]\s/";
            
        $pattern_length3 = "/[\.\?\!]\"\s/";
        
        $pattern = "/[\.\?\!]\"?\s/";
        
        $index = search($text, $pattern);
        
        $sentences = array();
        
        while ($index !== -1){
            if ($index === search($text, $pattern_length2)){
                array_push($sentences, substr($text, 0, $index+2));
                $text = substr($text, $index+2);
            }
            else if ($index === search($text, $pattern_length3)){
                array_push($sentences, substr($text, 0, $index+3));
                $text = substr($text, $index+3);
            }
            $index = search($text, $pattern);
        }
        
        if (strlen($text) !== 0){
            array_push($sentences, $text);
        }
        
        $quote_count = array();
        foreach($sentences as $sentence){
            $matches = match($sentence, "/\"/");
            array_push($quote_count, ($matches ? count($matches) : 0));
        }
        
        $combined_sentences = array();
        $concat = "";
        
        for ($i = 0; $i < count($sentences); $i++){
            if ($quote_count[$i]%2 === 0 && $concat === ""){
                array_push($combined_sentences, $sentences[$i]);
            }
            else {
                $concat .= $sentences[$i];
                if (count(match($concat, "/\"/"))%2 === 0){
                    array_push($combined_sentences, $concat);
                    $concat = "";
                }
            }
        }
        
        return $combined_sentences;
    }

?>