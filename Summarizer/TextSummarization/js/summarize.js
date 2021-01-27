/*
 *
 *  CALLS THE SUMMARIZER
 *
 */

function summarize() {
    
        
    GLOBALS.spinner = new Spinner().spin(document.getElementById("main"));
    
    var doc = replacements(document.getElementById("doc").value, GLOBALS.replacements);
    
    setTimeout(function(){
        
        var percent = parseInt(document.getElementById("maxSentenceCount").value);
        
        var other_docs = [];
        for (var i = 2; i < GLOBALS.doc_count+1; i++){
            other_docs.push(document.getElementById("doc" + i).innerText);
        }
        
        var summary = "";
        var request = new XMLHttpRequest();
        request.onreadystatechange = function(){
            if (request.readyState === 4 && request.status === 200) {
                summary = request.responseText;
            }
            else {
                summary = "no response";
            }
        };
        request.open("POST", "../Summarizer/TextSummarization/Summary.php", false);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send("text=" + encodeURIComponent(doc) + "&others=" + encodeURIComponent(JSON.stringify(other_docs)) + "&perc=" + percent);
        
        document.getElementById("summary").value = summary;
        GLOBALS.spinner.stop();
    },100);
    
}
