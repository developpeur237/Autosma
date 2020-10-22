	
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<style type="text/css">
	body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: rgba(95, 95, 95, 0.7);
}
td{
	border: 3px solid gray;
	text-decoration: bold;
	background-color: #fffcc4;
	text-transform: capitalize;
}

th{
	border: 3px solid gray;
	text-align:center;
	background-color: #fffcc4;
	
}

table{
	background-color: #fffcc4;
	border: 3px solid green;
}


</style>

<?php
function Affichage_cours(){
global $id_Matiere, $Nom_Matiere,$Code_Matiere, $Nom_Ens;
try{

include("connexion.php");
echo "
<table width=\"auto\" align=center>
	<tr><fieldset><Center>
	<tr><center><th><b><u>ID</u></b></th><th><b><u>MATIERE / SUBJECT</u></b></th><th ><b><u>CODE MATIERE / SUBJECT CODE</u></b></th><th>Nom du Responsable</center></tr>";

$sql="SELECT id_Matiere, Nom_Matiere,Code_Matiere FROM cours";
$sql=$db-> prepare($sql);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
echo "<tr width=\"auto\"><td><b>".$donnees['id_Matiere']."</b></td><td><font aligne=left><b>".$donnees['Nom_Matiere']."</b></td><th width=140px;><font color=green>".$donnees['Code_Matiere']."</font></th></tr>";
}
$sql->closecursor();
echo"<table>";
}
catch(Exception $e)
{
die($e->getMessage());
}
}

?>
<?php Affichage_cours(); ?>