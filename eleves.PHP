<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1, scalable="yes" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Zone des Elèves</title>
</head>
<?php
session_start();
?>
<body>

<!------------Loading sound------------------>
<embed src="audio/eleve.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />
<!------------End of Loading sound------------------>

<!------------Including pages/fucntions----------------->
<?php
include('header.php');
?><div><iframe style="position: fixed; transform: translate(0.5%,-1% );width: 98%;height: 65%;" src="El.php"></iframe></div>
<?php
include('js.php');
?>

<div>
<!---<iframe style="position: fixed; top: 255px; /* left: 52%; */ width: 99.6%; height: 60.5%;;" src="EL2.php"></iframe>
</div>--->
<?php
include('footer.php');
?>
</body>