//modify compression/summary percentage
function ShowAndHide() {
    var x = document.getElementById('SectionName');
    if (x.style.display == 'none') {
        x.style.display = 'block';

    } else {
        x.style.display = 'none';

    }
}
// search for words/keywords button
function HideAndShow(){
	var x = document.getElementById('keywordSection');
	if(x.style.display =='none'){
		x.style.display = 'block';
	}else{
		x.style.display='none';
	}
}

