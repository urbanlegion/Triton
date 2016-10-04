<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 10/4/2016
 * Time: 11:01 PM
 */

require '../vendor/autoload.php';

$app = new Slim\App();

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animals</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="jumbotron">
        	<div class="container">
        		<h1>The Animals Speak</h1>
        		<p>Press to see what they say...</p>
        		<p>
        			<a class="btn btn-primary btn-lg" href="../animals/Dolphin.php">Dolphin</a>
        			<a class="btn btn-primary btn-lg" href="../animals/Lion.php">Lion</a>
        			<a class="btn btn-primary btn-lg" href="../animals/Eagle.php">Eagle</a>
        			<a class="btn btn-primary btn-lg" href="../animals/Bee.php">Bee</a>
        		</p>
        	</div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
</body>
</html>