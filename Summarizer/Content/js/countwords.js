var count = document.getElementById('count');
var input = document.getElementById('doc');

input.addEventListener('keyup', function(e){
    wordCounter(e.target.value);
  });

  function wordCounter(text) {
    var text = input.value;
    var wordCount = 0;
    for (var i = 0; i <= text.length; i++) {
      if (text.charAt(i) == ' ') {
        wordCount++;
      }
    }
    count.innerText = wordCount;
  }

var countgenerated = document.getElementById('countgenerated');
var inputgenerated = document.getElementById('summary');
var inputge = document.getElementById('mouse');

inputge.addEventListener('mouseover', function(e){
    wordCountergenerated(e.target.value);
  });

  function wordCountergenerated(textgenerated) {
    var textgenerated = inputgenerated.value;
    var wordCountgenerated = 0;
    for (var i = 0; i <= textgenerated.length; i++) {
      if (textgenerated.charAt(i) == ' ') {
        wordCountgenerated++;
      }
    }
    countgenerated.innerText = wordCountgenerated;
  }
