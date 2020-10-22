<link rel="stylesheet" type="text/css" href="bootstraop.mim.css">
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
th, table{
	border: 3px solid green;
	text-align: center;
	background-color: white;
}
td {
    border: 2px solid gray;
    text-align: center;
    background-color: white;
        transition-duration: 0.6s;

}


td:hover{
   box-shadow: inset 1px 0px 14px 4px #3bbd11;
    position: relative;
    transition-duration: 0.6s;
}

.titre{
	    
    background-color: rgba(95, 95, 95, 0.7);
    background-image: url(images/login1.png);
	text-align: center;
	top: -12px;
    color: chartreuse;
    position: relative;
    text-transform: uppercase;
}

</style>

	<div class="Row">
<table width="auto" align=center>
	<tr>.<Center><u><b class="titre">Liste des élèves enregistré dans la base de données<br></b></u><font color=white></tr>
	<tr><th><b><u alt="identifiant" >--ID--</u></b></th><th><b><u>--Photo--</u></b></th><th><b><u>---Nom/Name---</u></b></th><th><b><u>----Prenom/Surname----</u></b></th><th><b><u>----Sex---</u></b></th><th><b><u>-Age-</u></b></th><th><b><u>-------Section-------</u></b></th><th><b><u>--------Classe------</u></b></th><th><b><u>Filiere</u></b></th><th><b><u>Matricule</u></b></th><th><b><u>Tel 1Parent</u></b></th><th><b><u>Tel 2Parent</u></b></th><th><b><u>EmailParent</u></b></th></tr>

	</div>


<?php
function Affichage_eleve(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{

include("connexion.php");
echo "
<table width=\"auto\" align=center>
    <tr><fieldset><Center>
    <tr><center><th><b><u>ID</u></b></th><th max-width=250px max-height=250px ><b><u>Photo</u></b></th><th ><b><u> Nom/Name </u></b></th><th><b><u> Prenom/Surname </u></b></th><th><b><u> Sex </u></b></th><th><b><u> Age </u></b></th><th><b><u> Section </u></b></th><th><b><u> Classe </u></b></th><th><b><u> Filiere </u></b></th><th><b><u> Matricule </u></b></th><th><b><u> Tel 1Parent </u></b></th><th><b><u> Tel 2Parent </u></b></th><th><b><u> EmailParent </u></b></th></th></center></tr>";

$sql="select id_E, Nom_E, Prenom_E, Sex, dateNais_E, Age, Photo, TelParent_E, Tel2Parent_E, EmailP_E, Email2P_E, Nom_Sec, Nom_Clas, Nom_Fil,Matri_E from eleve";
$sql=$db-> prepare($sql);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
echo "<tr width=\"auto\" ><td>".$donnees['id_E']."</td><td>".$donnees['Photo']."</td><td>".$donnees['Nom_E']."</td><td>".$donnees['Prenom_E']."</td><td>".$donnees['Sex']."</td><td>".$donnees['Age']."</td><td>".$donnees['Nom_Sec']."</td><td>".$donnees['Nom_Clas']."</td><td>".$donnees['Nom_Fil']."</td><td>".$donnees['Matri_E']."</td><td>".$donnees['TelParent_E']."</td><td>".$donnees['Tel2Parent_E']."</td><td>".$donnees['EmailP_E']."</td></tr>";
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


    <div>


<?php Affichage_eleve(); ?>

    </div>
