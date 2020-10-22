<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1, scalable="yes" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Zone des Salles de Classes</title>
</head>
<?php
session_start();
?>
<body>

<!------------Loading sound------------------>
<embed src="audio/cours.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />
<!------------End of Loading sound------------------>

<!------------Including pages/fucntions----------------->
<?php
include('header.php');
?>
<?php
include('js.php');
?>
<!----------------------frame 1 ---------------->
<div>
<iframe style="position: fixed;top: 205px;width: 50%;left: 1%;height: 70%;" src="body.php"></iframe>
</div>
<!------------------------------------------------------>

<!----------------------frame 2 ---------------->
<div>
<iframe style="    position: fixed;
    top: 205px;
    left: 49%;
    width: 50%;
    border: 4px solid black;
    border-radius: 22PX;
    height: 42%;" src="body.php"></iframe>
</div>
<!------------------------------------------------------>

<!----------------------frame 3 ---------------->
<div>
<iframe style="position: fixed;    bottom: 31px;
    left: 52%;
    width: 10%;
    height: 10%;
    margin-top: 6px;" src="body.php"></iframe>
</div>
<!------------------------------------------------------>

<!----------------------frame 4 ---------------->
<div>
<iframe style="position: fixed;    bottom: 31px;
    left: 52%;
    width: 47%;
    height: 20%;
    margin-top: 6px;background-color: rgba(58, 101, 58, 0.84);" src="body.php"></iframe>
</div>
<!------------------------------------------------------>
</body>
<?php
include('footer.php');
?>
</body>