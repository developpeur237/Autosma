	
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
th,td, table{
	border: 3px solid green;
	text-align: center;
	background-color: white;
}



</style>

<?php
function Affichage_cours(){
global $id_Matiere, $Nom_Matiere,$Code_Matiere,$Nom_Ens,$Matri_Ens;
try{

include("connexion.php");
echo "
<table width=\"auto\" align=center>
	<tr><fieldset><Center>
	<tr><center><th><b><u>Non des responsables</u></b></th><th><b><u>Matricule</u></b></th><th><b><u>CODE MATIERE / SUBJECT CODE</u></b></th></center></tr>";

$sql="select id_Matiere, Nom_Ens, Pren_Ens,Grade, Photo, Matri_Ens, Nom_Matiere, Code_Matiere from cours,Enseignant";
$sql=$db-> prepare($sql);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
echo "<tr width=\"auto\" ><tr><td>".$donnees['Nom_Ens']."</td></td><td>".$donnees['Matri_Ens']."</td><td>".$donnees['Code_Matiere']."</td></tr>";





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