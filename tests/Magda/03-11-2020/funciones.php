<?php

function OpenHTMLtag(){
    echo "<html>";
}
function CloseHTMLtag(){
    echo "</html>";
}   
function OpenTag($tag){
    echo "<".$tag.">";
}

function CloseTag($tag){
    echo "</".$tag.">";
}

function Text($text){
    echo "$text";
}

OpenHTMLtag("html");

OpenTag("head");
OpenTag("title");
Text("Este es el título")
CloseTag("title");
CloseTag("head");
OpenTag("body");
OpenTag();
CloseTag();
OpenTag();
CloseTag();
CloseTag("body");
CloseHTMLtag("/html");

?>