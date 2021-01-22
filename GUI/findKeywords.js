
function findKeywords(){
var textarea = document.getElementById('summary').value;
var word = document.getElementById('txt1').value;


if (textarea.match(word) != null) {
document.getElementById('summary').value = word ;
}else{
	alert('The word you are looking for is not in the summary!');
}
}