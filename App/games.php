<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
          <script>
              $(document).ready(function (){
                  console.log('im in');
                  function openGame() {
                      $('.game_image').on('click', function (a, b, c, d, e) {
                          a = $(this).data('gameName');
                          b = $(this).data('gameCode');
                          c = $(this).data('machineId');
                          d = $(this).data('denominations');
                          e = $(this).data('hands');
                          console.log(a);
                          console.log(b);
                          console.log(c);
                          console.log(d);
                          console.log(e);
                      });
                  }
                  openGame();
                  });
          </script>
</head>
<body>
<div class="opacityWrapper"></div>
<div class="videoWrapper" style="position: fixed; z-index: -99; width: 100%; height: 100%; pointer-events: none;">
    <iframe id="ytplayer" frameborder="0" height="100%" width="100%"
            src="https://www.youtube.com/embed/JPfdnO6Qcj8?rel=0&autoplay=1&loop=1&playlist=Cedd901DMEc,oP_Tk9WD_JI,0AZbb3aC2tU&start=5&controls=0&showinfo=0&autohide=1&fs=1&autohide=2 mute=1">
    </iframe>
</div>
<div class="games">
    <div class="games_type">
        <a href="games.php?type=featured"><div class="shadowfilter featured_games">Featured Games</div></a> <a href="games.php?type=slots"><div class="shadowfilter slot_games">Slot Games</div></a> <a href="games.php?type=card"><div class="shadowfilter card_games">Card Games</div></a> <a href="games.php?type=table"><div class="shadowfilter table_games">Table Games</div></a>
    </div>
<div class="container game_wrapper">
    <div class="row">

<?php
$game_type = $_GET['type'];
$json = file_get_contents('lib/games.json');
$data =  json_decode($json);
/*$featured = $data->featured;
$slots = $data->slots;*/
$chosenGame = $data->$game_type;
/*echo '<pre>';
print_r($data->featured);
echo '</pre>';*/
//sanitizing game name for image production
function Sanitizer($game){
    $lowerCase = strtolower($game);
    $stringCleaner = str_replace(array(' ', ',', '!',"'", '-', '?',), '', $lowerCase);
    $jpgFileName = 'http://cacheimg.casinomidas.com/images/www/games/minipods/'.$stringCleaner.'-minipod.jpg';
    return $jpgFileName;
}
//running a loop on my parameter called from the get req
foreach( $chosenGame as $key=>$value){
    echo '<div class="col-sm-4 game_body "><div class="game_header"><h1>'.$value->game_name.'</h1>'.
        '<div
        data-game-name ="'.$value->game_name.'"
        data-game-code ="'.$value->game_code.'"
        data-machine-id ="'.$value->machine_id.'"
        data-denominations ="'.$value->denominations.'"
        data-hands ="'.$value->hands.'"
         class="game_image shadowfilter_games">';
    echo '<a href="#"><div class="game_overlay"><img src="img/Play.png"></div><img src="'
        .Sanitizer($value->game_name).'"></a>';
    echo '</div></div></div>';
}
echo '</div></div>';
?>
</div>
    <script>

        //play @ your own risk, very annoying fat ladys in casino.

/*        var current_player = "a";
        var player_a = document.createElement("audio");
        var player_b = document.createElement("audio");
        player_a.src = "audio/ambience_casino-stephan_schutze-1391090820.mp3";
        player_b.src = player_a.src;
        function loopIt(){
            var player = null;
            if(current_player == "a"){
                player = player_b;
                current_player = "b";
            }
            else{
                player = player_a;
                current_player = "a";
            }
            player.play();
            setTimeout(loopIt, 5333); //5333 is the length of the audio clip in milliseconds.
        }
        loopIt();*/
    </script>
</body>
</html>