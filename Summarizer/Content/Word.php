<?php

    /*
     *
     *  TAKES THE ARRAY OF SENTENCES, THEN GENERATES AN ARRAY OF TERMS FOR EACH SENTENCE
     *
     *  INPUT: ARRAY OF SENTENCES
     *
     *  OUTPUT: ARRAY OF ARRAY OF TERMS
     *
     */
    
    function terms_from_sentences($sentences){
        
        $terms = array();
        
        foreach ($sentences as $sentence){

            $bad_chars = "/\,|\.|\"|\(|\)|\'s|\t|\:/";
            $sentence = strtolower(preg_replace($bad_chars, "", $sentence));

            $sentence_terms = preg_split("/\s/", $sentence);
            
            for ($i = 0; $i < count($sentence_terms); $i++){
                if (search($sentence_terms[$i], "/\w|\d/") === -1) array_splice($sentence_terms, $i--, 1);
            }
            
            array_push($terms, $sentence_terms);
            
        }
        
        return $terms;
        
    }
    function search($string, $regex){
        return (preg_match($regex, $string, $matches, PREG_OFFSET_CAPTURE) === 1 ? $matches[0][1] : -1);
    }

?>
