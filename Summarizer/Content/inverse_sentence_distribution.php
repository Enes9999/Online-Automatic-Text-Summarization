<?php

class InverseClass{
    function inverse_sentence_distribution($terms, $other_docs){
        $SentenceInstance = new SentenceClass();
        $InverseInstance = new InverseClass();
        $WordInstance = new WordClass();

        $isd = array();
        
        $all_terms = array($terms);
        foreach ($other_docs as $doc){
            array_push($all_terms, $WordInstance->terms_from_sentences($SentenceInstance->sentences_from_doc($doc)));
        }
        
        $doc_frequency_array = array();
        foreach ($all_terms as $doc){
            $doc_frequency = array();
            foreach ($doc as $sentence){
                foreach ($sentence as $term){
                    if (!array_key_exists($term, $doc_frequency)){
                        $doc_frequency[$term] = 1;
                    }
                    else {
                        $doc_frequency[$term]++;
                    }
                }
            }
            array_push($doc_frequency_array, $doc_frequency);
        }
        
        foreach ($doc_frequency_array[0] as $term => $val){
            $count = 0;
            $sum = 0; 
            foreach ($doc_frequency_array as $doc_frequency){
                $freq = 0;
                if (array_key_exists($term, $doc_frequency)) $freq = $doc_frequency[$term]/$InverseInstance->words_in_doc($all_terms[$count++]);
                $sum += $freq;
            }
            $sum /= count($doc_frequency_array);
            
            $count = 0;
            $newsum = 0;
            foreach ($doc_frequency_array as $doc_frequency){
                $freq = 0;
                if (array_key_exists($term, $doc_frequency)) $freq = $doc_frequency[$term]/$InverseInstance->words_in_doc($all_terms[$count++]);
                $newsum += pow($freq-$sum,2)/$sum;
            }
            $isd[$term] = $newsum;
        }
        
        return $isd;
        
    }
    
    function words_in_doc($doc){
        $count = 0;
        foreach ($doc as $sentence){
            foreach ($sentence as $term){
                $count++;
            }
        }
        return $count;
    }
}
?>