<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1, scalable="yes" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Zone des Cours</title>
<style type="text/css">
	.c1{
    position: fixed;
    top: 230px;
    width: 40%;
    left: 1%;
    height: 65%;
    border-style: hidden;
	}

	.c2{    position: fixed;
    top: 141px;
    left: 4.8%;
    width: 90%;
    height: 62%;
    border: 4px solid #969595;
    border-style: inset;
    border-top-style: hidden;
    border-left-style: inset;
    border-top-left-radius: 35px;
    border-bottom-left-radius: 14px;
    box-shadow: -20px 18px 16px 0px black;
    background-color: #262626e6;
    border-top-right-radius: 35px;
    border-bottom-right-radius: 0px;
    border-right-style: groove;
    border-right: 3px solid #565656;
	}

			.c2b{
text-align: center;
height: 75px;
    top: 141px;
    left: 138px;
    width: 90%;
    transition-duration: 13s;
    transform: translate(-127px, 8px);
    color: #000000;
    box-shadow: inset 2px 1px 11px black;
    text-align: center;
    color: #000000;
    box-shadow: inset 2px 1px 20px #5d5c5c;
    border-bottom-style: none;
    border: 0px solid black;
    border: 4px solid #969595;
    border-style: inset;
    border-top-style: hidden;
    border-left-style: inset;
    border-top-left-radius: 35px;
    border-bottom-left-radius: 14px;
    box-shadow: -20px 18px 16px 0px black;
    background-color: #c3c3c300;
    border-top-right-radius: 35px;
    border-bottom-right-radius: 0px;
    border-right-style: groove;
    border-right: 3px solid #565656;
	}
	.c2b:hover{
		cursor: pointer;
        height: 20%;
    top: 141px;
    left: 145px;
    width: 80%;
		transition-duration: 3s; 
	}
*
</style>

<!---
INSERT INTO cours VALUES (,'Informatique',info);
INSERT INTO cours VALUES (,'Geography','Geo');
INSERT INTO cours VALUES (,'Cheminstry','Chem');
INSERT INTO cours VALUES (,'Biologie','Bio');
INSERT INTO cours VALUES (,'Physique-Chimie-Technologie','PCT');
INSERT INTO cours VALUES (,'Mathematique','Math C');
INSERT INTO cours VALUES (,'Mathematique','Math A');
INSERT INTO cours VALUES (,'Sport','Sp01');
INSERT INTO cours VALUES (,'Histoir','His 3');
INSERT INTO cours VALUES (,'Phylosophie','Phylo');
INSERT INTO cours VALUES (,'Phylosophy','Phylo En');
INSERT INTO cours VALUES (,'Francais','LFF');
INSERT INTO cours VALUES (,'Anglais',' LAF');
INSERT INTO cours VALUES (,'Geology','GEOL');
INSERT INTO cours VALUES (,'Computer Sciences','ICT');
INSERT INTO cours VALUES (,'Economy','Econ');
INSERT INTO cours VALUES (,'Cityzenship','CZSP');
INSERT INTO cours VALUES (,'Pure Mathematic','P Math');
INSERT INTO cours VALUES (,'Geomorphology','GEOM');
INSERT INTO cours VALUES (,'Additionnal Mathematic','A Math');
INSERT INTO cours VALUES (,'Sciences de la Vie et de la Terre','SVT');
INSERT INTO cours VALUES (,'Statistiques','STAT');
INSERT INTO cours VALUES (,'Probalité','PROBA');
INSERT INTO cours VALUES (,'Literqture','LIT');
INSERT INTO cours VALUES (,'English','ENL');
INSERT INTO cours VALUES (,'Drqzing','DWG');
INSERT INTO cours VALUES (,'Hand Writing','HWT');
---->
</head>
<?php
session_start();
?>
<body>

<!------------Loading sound------------------>
<embed src="audio/cours.mp3" autoplay="true" autostart="True" width="0" height="0" />
<!------------End of Loading sound------------------>

<!------------Including pages/fucntions----------------->
<?php
include('header.php');
?>
<?php
include('js.php');
?>
<div>
    <iframe style="border-style: none;transform: translate(556px, -15px);" src="courtitre.php"></iframe>
</div>
<div>
<iframe class="c1" src="cour1.php"></iframe>
</div>
<div>
<iframe class="c2b" style="transform: translate(23px, 3px);" src="Cour2a.php"></iframe>
</div>
</body>
<?php
include('footer.php');
?>
</body>