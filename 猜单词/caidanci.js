// JSON Document
var POSSBILE_WORDS = ["content","comprehension","potential","comparatively","involvement","fraction","unconcerned","effortless"];
var MAX_GUESSES = 6;

var word = "?";
var guesses ="";
var guessCount=MAX_GUESSES;

function newGame(){
    var randomIndex = parseInt(Math.random() * POSSBILE_WORDS.length);
    word = POSSBILE_WORDS[randomIndex];
    guessCount=MAX_GUESSES;
    guesses="";
    updatePage();
}

function guessLetter(){
    var input = document.getElementById("guess");
    var clue = document.getElementById("clue");
    var letter = input.value;
    if(guessCount==0||clue.innerHTML.indexOf("_")<0||guesses.indexOf(letter)>=0){
        return;
    }
    guesses += letter;
    if(word.indexOf(letter)<0){
        guessCount--;
    }
    updatePage();
}

function updatePage(){
    var clueString="";
    for(var i=0;i<word.length;i++){
        var letter = word.charAt(i);
        if(guesses.indexOf(letter)>=0){
            clueString+=letter+" ";
        }
        else{
            clueString+="_ ";
        }
    }
    
    var clue=document.getElementById("clue");
    clue.innerHTML=clueString;
    
    var guessArea=document.getElementById("guesses");
    if(guessCount==0){
        guessArea.innerHTML="抱歉，你输了！";
    }else if(clueString.indexOf("_")<0){
        guessArea.innerHTML="恭喜，你赢了！";
    }else{
        guessArea.innerHTML="猜过的字母："+guesses;
    }
    
    var image=document.getElementById("caidancipic");
    image.src="xiaoren"+guessCount+".jpg";
}


