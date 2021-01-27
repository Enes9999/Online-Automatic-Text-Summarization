function Keywords() {
    var $commonWords = ['i', 'a', 'about', 'an', 'and', 'are', 'as', 'at', 'be', 'by', 'com', 'de', 'en', 'for', 'from', 'how', 'in', 'is', 'it', 'la', 'of', 'on', 'or', 'that', 'the', 'this', 'to', 'was', 'what', 'when', 'where', 'who', 'will', 'with', 'und', 'the', 'www'];
    var $text = document.getElementById('doc').value;
    $text = $text.toLowerCase();    
    var result = $text.split(' ');
    result = result.filter(function (word) {
        return $commonWords.indexOf(word) === -1;
    });    
    var currentIndex = result.length, temporaryValue, randomIndex;
    while (0 !== currentIndex) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = result[currentIndex];
      result[currentIndex] = result[randomIndex];
      result[randomIndex] = temporaryValue;
    }
    document.getElementById("iputi").value = result;
}