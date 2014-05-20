<?php
/**
 * Created by PhpStorm.
 * User: topwebmasterblog@gmail.com
 * Date: 20.05.14
 * Time: 18:49
 */
function bbcode($input){
    $input = strip_tags($input);
    $input = htmlentities($input);

    $search = array(
        '/\[b\](.*?)\[\/b\]/is',
        '/\[i\](.*?)\[\/i\]/is',
        '/\[u\](.*?)\[\/u\]/is',
        '/\[img\](.*?)\[\/img\]/is',
        '/\[url=(.*?)\](.*?)\[\/url\]/is',
        '/\[font color=(.*?) size=(.*?) face=(.*?)\](.*?)\[\/font\]/is',
        '/\[h1\](.*?)\[\/h1\]/is',
        '/\[special\](.*?)\[\/hat\]/is'
    );

    $replace = array(
        '<b>$1</b>',
        '<i>$1</i>',
        '<u>$1</u>',
        '<img src="$1">',
        '<a href="$1">$2</a>',
        '<font style="color:$1;font-size:$2;font-face:$3">$4</font>',
        '<h1>$1</h1>',
        '<a href="http://google.com" style="font-size:32pt;text-decoration:blink;color:#FF0099">$1</a>'
    );

    return preg_replace($search,$replace,$input);
}

?>