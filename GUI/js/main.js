
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    

})(jQuery);


// counteri i words
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



//   counteri i words
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
  

// counteri masi tgjenerohet

  // counteri masi tgjenerohet