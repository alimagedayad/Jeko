<?php
session_start();
error_reporting(0);
?>
<html>
    <header>
        <link rel = "stylesheet" href = "css/style.css">
    </header>
<body>
    <script type="text/javascript" src="https://ycapi.org/js/link.js"></script>
    <a href=""data-href="<?php echo $_SESSION['longurl']; ?>" target="_blank" class="y2m mp4">Download</a>
</body>
</html>