<?php

function OpenHTMLtag($tag){
    echo "<".$tag.">";
}

function CloseHTMLtag($tag){
    echo "</".$tag.">";
}

OpenHTMLtag("html");
CloseHTMLtag("html");