<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1, scalable="yes" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Zone des Informations</title>
</head>
<?php
session_start();
?>
<body>

<!------------Loading sound------------------>
<embed src="audio/class.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />
<!------------End of Loading sound------------------>

<!------------Including pages/fucntions----------------->
<?php
include('header.php');
?>
<?php
include('js.php');
?>

<div>
<iframe style="position: fixed;top: 205px;width: 50%;left: 1%;height: 70%;" src="body.php"></iframe>
</div>
<div>
<iframe style="position: fixed;top: 205px;left: 52%; width: 47%;height: 70%;" src="body.php"></iframe>
</div>
</body>
<?php
include('footer.php');
?>
</body>