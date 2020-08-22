<?php
require_once "inc/functions.php";
$info='';
$task=$_GET['task'] ?? 'report';
if('seed'== $task){
    seed(DB_NAME);
    $info = "Seeding is Completed";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
        <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        <style>
            body{
                margin-top:30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <h1>CRUD</h1>
                    <h2>
                      Crud Project
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magnam fugiat doloribus officia. Vero illum debitis ipsam necessitatibus eaque sed.</p>
               <?php include_once('inc/templates/nav.php'); ?>
			   <hr/>
               <?php
               if($info!=''){
                   echo"<p>{$info}</p>";
               }
               ?>

               </div>
            </div>
		
        </div>
    </body>
</html>