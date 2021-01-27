<?php

    /*
     *
     *  GENERATES SUMMARY OF TEXT
     *
     *  INPUT: (POST) THE ACTUAL TEXT
     *
     *  OUPTUT: THE SUMMARIZED TEXT
     *
     */
    
    // get any errors
    ini_set('display_errors', true);
    error_reporting(-1);
    
    // include all necessary functions
    include "../../Summarizer/Content/Inverse_Sentence_Distribution.php";
    include "../../Summarizer/Content/Sentence.php";
    include "../../Summarizer/Content/Text.php";
    include "../../Summarizer/Paragraph.php";
    include "../../Summarizer/Content/Word.php";
    
    // get the text
    $text = $_POST["text"];
    $other_docs = json_decode($_POST["others"]);
    $percent = intval($_POST["perc"]);
    
    // generate array of sentences from the text
    $sentences = sentences_from_doc($text);
    $terms = terms_from_sentences($sentences);
    $td = term_distribution($terms, 1);
    $isd = inverse_sentence_distribution($terms, $other_docs);
    $ww_from_TDandISD = word_weight_from_TDandISD($terms, $td, $isd);
    $pageranks = pageRanks_from_wordWeights($ww_from_TDandISD, 1);
    
    $newdoc = array();
    for ($i = 0; $i < count($sentences); $i++){
        $newdoc[$sentences[$i]] = $pageranks[$i];
    }
    array_multisort($pageranks, SORT_DESC, SORT_NUMERIC);
    
    $summary = "";
    $max_sentence_count = round($percent/100*count($sentences));
    foreach ($newdoc as $sentence => $pr){
        for ($rank = 0; $rank < $max_sentence_count; $rank++){
            if ($pr === $pageranks[$rank]){
                $summary .= $sentence . "\n\n";
                array_splice($pageranks, $rank, 1);
                $max_sentence_count--;
                break;
            }
        }
    }
    
    echo $summary;
    //var_dump($td);


    function word_weight_from_TDandISD($terms, $td, $isd){
        
        $ww = array();
        
        foreach ($terms as $sentence){
            $newsentence = array();
            foreach ($sentence as $term){
                $newsentence[$term] = $td[$term]*$isd[$term];
            }
            array_push($ww, $newsentence);
        }
        
        return $ww;
    }

    function match($string, $regex){
        $matches = array();
        $result = preg_match_all($regex, $string, $matches);
        return ($result === 0 || !$result ? false : $matches[0]);
    }
    function pageRanks_from_wordWeights($ww, $iterations){
        
        $pageranks = array();
        
        // initial pageranks (1/total_number_of_sentences)
        for ($i = 0; $i < count($ww); $i++){
            array_push($pageranks, 1/count($ww));
        }
        
        for ($i = 0; $i < $iterations; $i++){
            $newpageranks = array();
            for ($first_sent = 0; $first_sent < count($ww); $first_sent++){
                $sum = 0;
                for ($secnd_sent = 0; $secnd_sent < count($ww); $secnd_sent++){
                    if ($first_sent !== $secnd_sent){
                        // get similarity between first and second sentences
                        $Wji = similarity_between_sentences($ww[$first_sent], $ww[$secnd_sent]);
                        $denominator_sum = 0;
                        
                        // get similarity between sentence 2 and every other sentence pointing to it
                        for ($third_sent = 0; $third_sent < count($ww); $third_sent++){
                            if ($third_sent !== $secnd_sent) $denominator_sum += similarity_between_sentences($ww[$secnd_sent], $ww[$third_sent]);
                        }
                        
                        // calculate sum from similarity between product of all similarities between
                        // sentence 1 and 2, the PR of sentence2, divided by the sum of all similarities
                        // between sentence2 and all other sentences
                        if ($denominator_sum != 0) $sum += $Wji*$pageranks[$secnd_sent]/$denominator_sum;
                    }
                }
                $newrank = $sum;
                array_push($newpageranks, $newrank);
            }
            $pageranks = $newpageranks;
        }
        
        return $pageranks;
    }

?>
