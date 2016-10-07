<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 10/7/2016
 * Time: 7:15 PM
 */
$game_type = $_GET['type'];
$json = file_get_contents('lib/games.json');
$data =  json_decode($json);
/*$featured = $data->featured;
$slots = $data->slots;*/
$chosenGame = $data->$game_type;
/*echo '<pre>';
print_r($data->featured);
echo '</pre>';*/

function Sanitizer($game){
    $lowerCase = strtolower($game);
    $stringCleaner = str_replace(array(' ', ',', '!',"'", '-', '?',), '', $lowerCase);
    $jpgFileName = 'http://cacheimg.casinomidas.com/images/www/games/minipods/'.$stringCleaner.'-minipod.jpg';
    return $jpgFileName;
}


foreach( $chosenGame as $key=>$value){
    echo '
<div class="col-sm-4 game_body ">
<div class="game_header"><h1>'.$value->game_name.'</h1>'.
        '<div class="game_image shadowfilter_games">';
    echo '<a href="#"><img src="'.Sanitizer($value->game_name).'"></a>';

    echo '</div></div></div>';
}