<?php
if (isset($_POST['submit']) and ! empty($_POST['submit'])) {
    if (isset($_POST['radio'])) {
        $radio_input = $_POST['radio'];
        echo $radio_input;
    }
} else {

}
?>
<form action="" method="post">
   <p>MP3<input type="radio" name="radio" label = "mp3" value="mp3"/></p>
   <p>MP4<input type="radio" name="radio" value="mp4"/></p>
   <input type= "submit" name="submit"value="submit"/>
</form>