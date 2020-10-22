
<!---	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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
</style>
<br>

	<div class="row" style="background-color: rgba(58, 101, 58, 0.74);">

		<div class="col-12" style="background-color: green; border-style: groove; height: 30px;    background-color: rgba(35, 96, 96, 0.79);height: 30px;
    color: white;  text-shadow: -4px -2px 1px black;  border: 3px solid mediumspringgreen;  border-left: 18px solid mediumspringgreen;  border-right: 19px solid mediumspringgreen;" id="play"><marquee direction=left behavior=scroll>Ce Logiciel est une proprieter privee donc les droit d'utilisation sont strictement guider en accord avec Les droit d'auteur. Toutes copie ou modification du code sources est considerer comme non permis.</marquee>
		 </div>
		
		
	</div>
	<div class="row" style="left: 20px;position: relative;">

		<div> <select>
			<option name="" value="None" >Tri par :</option>
			<option name="" value="$class" >Classe</option>
			<option name="" value="$Section" >Section</option>
			<option name="" value="$Prenim_E" >Prenom</option>
			<option name="" value="$Age" >Age</option>
			<option name="" value="Masculin" >Masculin</option>
			<option name="" value="Feminin" >Feminin</option>
			<
		</select> <small><input type="text" placeholder="Entrez le nom de l'élève" name="search"></small></div> <input type="submit" name="btnSearch"> </div>
		
		
	</div>---->
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
	<tr>.<Center><u><b class="titre">Liste des ENSEIGNANTS enregistré dans la base de données<br></b></u><font color=white></tr>
	<!---<tr><th><b><u alt="identifiant" >--ID--</u></b></th><th><b><u>--Photo--</u></b></th><th><b><u>---Nom/Name---</u></b></th><th><b><u>----Prenom/Surname----</u></b></th><th><b><u>----Sex---</u></b></th><th><b><u>-Age-</u></b></th><th><b><u>-------Section-------</u></b></th><th><b><u>--------Classe------</u></b></th><th><b><u>Filiere</u></b></th><th><b><u>Matricule</u></b></th><th><b><u>Tel 1Parent</u></b></th><th><b><u>Tel 2Parent</u></b></th><th><b><u>EmailParent</u></b></th></tr>

	</div>-->


<?php
function Affichage_Ens(){
global $id_Ens,$Nom_Ens,$Pren_Ens, $Sex,$CNI_Ens, $Age, $Photo,$Email, $Grade, $RecordTime,$Matri_Ens;
try{

include("connexion.php");
echo "
<table width=\"auto\" align=center>
    <tr><fieldset><Center>
    <tr><center><th><b><u>ID</u></b></th><th max-width=250px max-height=250px ><b><u>Photo</u></b></th><th ><b><u> Nom/Name </u></b></th><th><b><u> Prenom/Surname </u></b></th><th><b><u> Sex </u></b></th><th><b><u> Contact </u></b></th><th><b><u> Email </u></b></th><th><b><u> Grade </u></b></th><th><b><u> No CNI</u></b></th><th><b><u> Matricule</u></b></th></center></tr>";

$sql="select * from enseignant";
$sql=$db-> prepare($sql);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
echo "<tr width=\"auto\" ><td>".$donnees['id_Ens']."</td><td>".$donnees['photo']."</td><td>".$donnees['Nom_Ens']."</td><td>".$donnees['Pren_Ens']."</td><td>".$donnees['Sex']."</td><td>".$donnees['Contact']."</td><td>".$donnees['Email']."</td><td>".$donnees['Grade']."</td><td>".$donnees['CNI_Ens']."</td><td>".$donnees['Matri_Ens']."</td></tr>";
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


<?php Affichage_Ens(); ?>

    </div>