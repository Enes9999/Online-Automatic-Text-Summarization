<?php

  class SimilarityClass{
    function similarity_between_sentences($first, $secnd){
        
        $dotProductSum = 0;
        $magnitude = array(0,0);
        
        foreach ($first as $first_wrd => $first_sent){
            foreach ($secnd as $secnd_wrd => $secnd_sent){
                if ($first_wrd === $secnd_wrd){
                    $dotProductSum += $first[$first_wrd]*$secnd[$secnd_wrd];
                    break;
                }
            }
        }
        
        foreach ($first as $first_wrd => $first_sent){
            $magnitude[0] += pow($first[$first_wrd],2);
        }
        
        foreach ($secnd as $secnd_wrd => $secnd_sent){
            $magnitude[1] += pow($secnd[$secnd_wrd],2);
        }
        
        return ($magnitude[0] === 0 || $magnitude[1] === 0 ? 0 : $dotProductSum/sqrt($magnitude[0])/sqrt($magnitude[1]));
        
    }
}
