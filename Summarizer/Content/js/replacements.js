

function replacements(text, regex) {
    
    text = text.replace(/\n/g," ");
    
    for (var replacement in regex){
        text = text.replace(regex[replacement], replacement);
    }
    
    return text;
    
}