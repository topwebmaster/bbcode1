<?php
include "bbcoder.php";
$var = $_POST['text'];
echo bbcode($var);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>bbcode</title>

    <link rel="stylesheet" href="/wysibb/theme/default/wbbtheme.css"/>
</head>
<body>
<div class="container" style="margin: 80px 0 0 0">
    <form class="comForm" method="post" action="" name="post">
        <textarea id="editor" name="text" style="height: 500px; display: none;" class="wysibb-texarea"></textarea>
        <input type="submit" name="Отправить">
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/wysibb/jquery.wysibb.min.js"></script>
<script src="/wysibb/lang/ru.js"></script>
<script>
    $(document).ready(function () {
        var wbbOpt = {
            buttons: "bold,italic,underline,strike"
        }
        $("#editor").wysibb(wbbOpt);
    })
</script>
</body>
</html> 