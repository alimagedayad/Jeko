<?php
session_start();
error_reporting(0);
?>
<html>
<head>
    
    <link rel = "stylesheet" href = "https://necolas.github.io/normalize.css/latest/normalize.css">
    <link rel = "stylesheet" href = "css/1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="js/typer.js"></script>  
    <title id="title">I'm Coming</title>
    </head>
    <body>
        <form method = "POST">
        <div ng-app="">
        <input type = "text" ng-model="name" class="link" name = "url" type = "link"placeholder = "Enter the video link you want to download" required>
    </div>
    <div class = "radio1">
    <p>Would you prefer MP3 or MP4</p>
        <label for="mp3">MP3</label>   
    <input type="radio" name="radio" value="mp3" id = "mp3"><br>
    <label for="mp4">MP4</label>
    <input type="radio" name="radio" value="mp4" id = "mp4"><br>  
</div>  
    <input type= "Submit"class = "submit" name="submit" value="Search"/>
    </form>
    </body>
    <html>
<?php
$url = isset($_POST['url']) and ! empty($_POST['url']);
$url = $_POST['url'];
$a = explode("?v=",$url);
$print = $a[1];
$_SESSION['url'] = $print;
$_SESSION['longurl'] = $url;
#echo $print;
#echo file_get_contents('https://ycapi.org/iframe/?v=KMU0tzLwhbE&f=mp3');
$submit = isset($_POST['submit']) and ! empty($_POST['submit']);
$type = $_POST['radio'];
if($type == 'mp3'){
    include('mp3.php');
}
else if($type == 'mp4')
{
   include('mp4.php');
}
?> 


