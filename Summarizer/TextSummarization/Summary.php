<?php

    ini_set('display_errors', true);
    error_reporting(-1);
    
    include "../../Summarizer/Content/Inverse_Sentence_Distribution.php";
    include "../../Summarizer/Content/Sentence.php";
    include "../../Summarizer/Content/Text.php";
    include "../../Summarizer/Paragraph.php";
    include "../../Summarizer/Content/Word.php";
    
    $text = $_POST["text"];
    $other_docs = json_decode($_POST["others"]);
    $percent = intval($_POST["perc"]);
    // 
    $SentenceInstance = new SentenceClass();
    $sentences = $SentenceInstance->sentences_from_doc($text);
    // 
    // 
    $WordInstance = new WordClass();
    $terms = $WordInstance->terms_from_sentences($sentences);
    // 
    $ParagraphInstance = new ParagraphClass();
    $td = $ParagraphInstance->term_distribution($terms, 1);

    // 
    $InverseInstance = new InverseClass();
    $isd = $InverseInstance->inverse_sentence_distribution($terms, $other_docs);
    // 

    // 
    $SummaryInstance = new SummaryClass();
    $ww_from_TDandISD = $SummaryInstance->word_weight_from_TDandISD($terms, $td, $isd);
    $pageranks = $SummaryInstance->pageRanks_from_wordWeights($ww_from_TDandISD, 1);
    
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

class SummaryClass{
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
        $SimilarityInstance = new SimilarityClass();
        $pageranks = array();
        
        for ($i = 0; $i < count($ww); $i++){
            array_push($pageranks, 1/count($ww));
        }
        
        for ($i = 0; $i < $iterations; $i++){
            $newpageranks = array();
            for ($first_sent = 0; $first_sent < count($ww); $first_sent++){
                $sum = 0;
                for ($secnd_sent = 0; $secnd_sent < count($ww); $secnd_sent++){
                    if ($first_sent !== $secnd_sent){
                        $Wji = $SimilarityInstance->similarity_between_sentences($ww[$first_sent], $ww[$secnd_sent]);
                        $denominator_sum = 0;
                        
                        for ($third_sent = 0; $third_sent < count($ww); $third_sent++){
                            if ($third_sent !== $secnd_sent) $denominator_sum += $SimilarityInstance->similarity_between_sentences($ww[$secnd_sent], $ww[$third_sent]);
                        }

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
}
?>
