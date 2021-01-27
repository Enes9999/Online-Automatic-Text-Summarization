<?php

    function term_distribution($terms, $sentences_per_paragraph){

        $td = array(); 
        $doc = array(array()); 
        $paragraph = array();

        while (count($terms)%$sentences_per_paragraph !== 0) $sentences_per_paragraph++;
        
        $paragraph_count = count($terms)/$sentences_per_paragraph;
        
        
        $end = count($doc)-1;
        foreach ($terms as $sentence){ 
            if (count($doc[$end]) === $sentences_per_paragraph){ 
                array_push($doc, array());
                $end = count($doc)-1;
            }
            array_push($doc[$end], $sentence);
        }
        
    
        $f_ip_array = array();
        $f_id = array();

        foreach ($doc as $p){ 
            $f_ip = array();
            foreach ($p as $sentence){ 
                foreach ($sentence as $term){ 
                  
                    if (!array_key_exists($term, $f_ip)){
                        $f_ip[$term] = 0;
                        $f_id[$term] = 0;
   
                    }
                    if (!$f_ip[$term]){
                        $f_ip[$term] = 1;
                    }
                    else {
                        $f_ip[$term]++;
                    }
                    if (!$f_id[$term]){
                        $f_id[$term] = 1/$paragraph_count;
                    }
                    else {
                        $f_id[$term] += 1/$paragraph_count;
                    }
                  
                }
            }
            array_push($f_ip_array, $f_ip);
        }
        
        
    
        foreach ($f_id as $term => $val){
            $sum = 0;
            foreach ($f_ip_array as $f_ip){
                $f_ip_term = (array_key_exists($term, $f_ip) ? $f_ip[$term] : 0);
                $sum += pow($f_ip_term-$f_id[$term],2)/$f_id[$term];
            }
            $td[$term] = 1/(1+$sum);
        }
        
        return $td;
        
    }

?>