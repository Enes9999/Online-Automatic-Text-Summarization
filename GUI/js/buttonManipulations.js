//modify compression/summary percentage
function ShowAndHide() {
    var x = document.getElementById('maxSentenceCount');
    if (x.style.display == 'none') {
        x.style.display = 'block';

    } else {
        x.style.display = 'none';
    }
}
// search for words/keywords button
function HideAndShow(){
	var x = document.getElementById('keywordSection');
	var y
	if(x.style.display =='none'){
		x.style.display = 'block';
		;
	}else{
		x.style.display='none';
	}
}
