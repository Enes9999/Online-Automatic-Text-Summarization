function Keywords(){
    var $commonWords = ['i','a','about','an','and','are','as','at','be','by','com','de','en','for','from','how','in','is','it','la','of','on','or','that','the','this','to','was','what','when','where','who','will','with','und','the','www'];
    var $text = document.getElementById('doc').value;
    var $inputi = document.getElementById('iputi').value;
    
    // Convert to lowercase
    
    $text = $text.toLowerCase();
    
    // replace unnesessary chars. leave only chars, numbers and space
    $text = $text.replace(/[^\w\d ]/g, '');
    
    var result = $text.split(' ');
    
    // remove $commonWords
    result = result.filter(function (word) {
        return $commonWords.indexOf(word) === -1;
    });
    
     document.getElementById("iputi").value = result;
    
    
    }