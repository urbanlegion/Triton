<?php
$json = file_get_contents('lib/games.json');
$data =  json_decode($json);
$featured = $data->featured;
/*echo '<pre>';
print_r($data->featured);
echo '</pre>';*/
function Sanitizer($game){
    $lowerCase = strtolower($game);
    $stringCleaner = str_replace(array(' ', ',', '!',"'", '-', '?',), '', $lowerCase);
    $jpgFileName = 'http://cacheimg.casinomidas.com/images/www/games/minipods/'.$stringCleaner.'-minipod.jpg';
    return $jpgFileName;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script>console.log('im in')</script>
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
        <div class="shadowfilter featured_games">Featured Games</div><div class="shadowfilter slot_games">Slot Games</div></a><div class="shadowfilter card_games">Card Games</div><div class="shadowfilter table_games">Table Games</div>
    </div>
    <div class="container game_wrapper">
        <div class="row">
            <?php
            $gameName = '$value->game_name';
            $sanitizeFunc = 'Sanitizer($value->game_name)';
            $spit = '
                <div class="col-sm-4 game_body ">
            <div class="game_header">
                <h1><!--\'.$value->game_name.\'--></h1>
                <div class="game_image shadowfilter_games">
                    <a href="#"><div class="game_overlay"></div><!--<img src="\'.Sanitizer($value->game_name).\'">--></a>\';
                </div>
            </div>
        </div>
        ';
            ?>
<script>
    $(document).ready(function () {
        $('.featured_games').on('click', function () {
            var foreach = "<?php foreach( $featured as $key=>$value){?>";
            var echo = 'echo';

            var endForeach = <?php }?>;
        });
    });
</script>

</body>
</html>