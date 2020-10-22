
title>Function</title>
<?php
function Enregistrer(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent,$EmailP_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E, $Solde, $MoyTrim, $Moygen_C;
try{
include("connexion.php");
$sql="INSERT INTO eleve( Nom_E, Prenom_E, Sex, dateNais_E, Age, Photo, TelParent, EmailP_E, Nom_Sec, Nom_Clas, Nom_Fil, Matri_E, Solde, MoyTrim, Moygen_C) VALUES (:Nom_E, :Prenom_E, :Sex, :dateNais_E, :Age, :Photo, :TelParent, :EmailP_E :Nom_Sec, :Nom_Clas, :Nom_Fil, :Matri_E, :Solde, :MoyTrim, :Moygen_C)";
$sql=$db->prepare($sql); 
$sql->bindvalue(':Nom_E',$Nom_E);
$sql->bindvalue(':Prenom_E',$Prenom_E);
$sql->bindvalue(':Sex',$Sex);
$sql->bindvalue(':dateNais_E',$dateNais_E);
$sql->bindvalue(':Age',$Age);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':TelParent',$TelParent);
$sql->bindvalue(':EmailP_E',$EmailP_E);
$sql->bindvalue(':Nom_Sec',$Nom_Sec);
$sql->bindvalue(':Nom_Clas',$Nom_Clas);
$sql->bindvalue(':Nom_Fil',$Nom_Fil);
$sql->bindvalue(':Matri_E',$Matri_E);
$sql->bindvalue(':Solde',$Solde);
$sql->bindvalue(':MoyTrim',$MoyTrim);
$sql->bindvalue(':Moygen_C',$Moygen_C);
$sql->execute();
if($sql){
echo"<font color=#7fff00 class=\"font\"><small>Informations de L'élève enregistrer avec succes </small></font>";
}else{
echo"<font color=#ff8c00 class=\"font\"><small> Desolé! echec d'enregistrement des infos de L'élève. Reéssayez s'il vous plait </small></font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}



function Modifier(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent, $EmailP_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E, $Solde, $MoyTrim, $Moygen_C;
try{
include("connexion.php");
$sql="update eleve set Nom_E=:Nom_E, Prenom_E=:Prenom_E, Sex=:Sex, dateNais_E=:dateNais_E, Age=:Age, Photo=:Photo, TelParent=:TelParent, Nom_Sec=:Nom_Sec, Nom_Clas=:Nom_Clas, Nom_Fil=:Nom_Fil, Matri_E=:Matri_E, Solde=:Solde, MoyTrim=:MoyTrim, Moygen_C=:Moygen_C
where id_E=:id_E";
$sql=$db->prepare($sql);
$sql->bindvalue(':id_E', $id_E);
$sql->bindvalue(':Nom_E',$Nom_E);
$sql->bindvalue(':Prenom_E',$Prenom_E);
$sql->bindvalue(':Sex',$Sex);
$sql->bindvalue(':dateNais_E',$dateNais_E);
$sql->bindvalue(':Age',$Age);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':TelParent',$TelParent);
$sql->bindvalue(':Nom_Sec',$Nom_Sec);
$sql->bindvalue(':Nom_Clas',$Nom_Clas);
$sql->bindvalue(':Nom_Fil',$Nom_Fil);
$sql->bindvalue(':Matri_E',$Matri_E);
$sql->bindvalue(':Solde',$Solde);
$sql->bindvalue(':MoyTrim',$MoyTrim);
$sql->bindvalue(':Moygen_C',$Moygen_C);
if($sql){
echo"<font color=#7fff00 class=\"font\"> Modification des infos de L'élève enregistrer avec succes </font>";
}else{
echo"<font color=red class=\"font\"> Desolé! echec de modification des infos de L'élève </font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}


<?php
function Affichage_eleve(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{

include("connexion.php");
echo "
<table width=\"auto\" align=center>
    <tr><fieldset><Center><u><b><u>LISTE DES ELEVES ENREGISTRE DANS LA BASE DE DONNEES</u></b></u><hr></fieldset></tr>
    <tr><center><th><b><u>ID</u></b></th><th max-width=250px max-height=250px ><b><u>Photo</u></b></th><th ><b><u>Nom/Name</u></b></th><th><b><u>Prenom/Surname</u></b></th><th><b><u>Sex</u></b></th><th><b><u>Age</u></b></th><th><b><u>Section</u></b></th><th><b><u>Classe</u></b></th><th><b><u>Filiere</u></b></th><th><b><u>Matricule</u></b></th><th><b><u>Tel 1Parent</u></b></th><th><b><u>Tel 2Parent</u></b></th><th><b><u>EmailParent</u></b></th></th></center></tr>";

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
<?php

function Rechercher(){
global $Id_tache, $Nom_E,$Prenom_E,$Sex, $dateNais_E;
try{
$trouver="";
include("connexion.php");
$sql="select dateNais_E from so_planning where concat(Id_tache,dateNais_E,Nom_E)=:Nom_E";
$sql=$db-> prepare($sql);
$sql->bindvalue(':Nom_E', $Id_tache.$dateNais_E.$Nom_E);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
$trouver=$donnees['Id_tache'];

}
$sql->closecursor();
if($trouver==""){
return "";
}else{
return "Present";
}
}
catch(Exception $e)
{
die($e->getMessage());
}
}

?>
<div>


    <?php 

function Del(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{
include("connexion.php");
echo $id_E;
$sql="delete from eleve where id_E=:id_E" ;
$sql=$db->prepare($sql);
$sql->bindvalue(':id_E',$id_E);
echo " eleve ";
$sql->execute();
if($sql){
echo"<font color=green> élève supprimer avec succes </font>";
}else{
echo"<font color=red> echec de suppression de l'élève </font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}


function Modifier(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent, $EmailP_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{
include("connexion.php");
$sql="update eleve set Nom_E=:Nom_E, Prenom_E=:Prenom_E, Sex=:Sex, dateNais_E=:dateNais_E, Age=:Age, Photo=:Photo, TelParent=:TelParent, Nom_Sec=:Nom_Sec, Nom_Clas=:Nom_Clas, Nom_Fil=:Nom_Fil, Matri_E=:Matri_E, Solde=:Solde, MoyTrim=:MoyTrim, Moygen_C=:Moygen_C
where id_E=:id_E";
$sql=$db->prepare($sql);
$sql->bindvalue(':id_E', $id_E);
$sql->bindvalue(':Nom_E',$Nom_E);
$sql->bindvalue(':Prenom_E',$Prenom_E);
$sql->bindvalue(':Sex',$Sex);
$sql->bindvalue(':dateNais_E',$dateNais_E);
$sql->bindvalue(':Age',$Age);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':TelParent',$TelParent);
$sql->bindvalue(':Nom_Sec',$Nom_Sec);
$sql->bindvalue(':Nom_Clas',$Nom_Clas);
$sql->bindvalue(':Nom_Fil',$Nom_Fil);
$sql->bindvalue(':Matri_E',$Matri_E);
$sql->bindvalue(':Solde',$Solde);
$sql->bindvalue(':MoyTrim',$MoyTrim);
$sql->bindvalue(':Moygen_C',$Moygen_C);
if($sql){
echo"<font color=#7fff00 class=\"font\"> Modification des infos de L'élève enregistrer avec succes </font>";
}else{
echo"<font color=red class=\"font\"> Desolé! echec de modification des infos de L'élève </font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}

function Recuperer_infos_eleve(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{
include("connexion.php");
$sql="select id_E, Nom_E, Prenom_E, Sex, dateNais_E, Age, Photo, TelParent_E, Tel2Parent_E,EmailP_E, Email2P_E, Nom_Sec, Nom_Clas, Nom_Fil, Matri_E from eleve where id_E=:id_E";
$sql=$db-> prepare($sql);
$sql->bindvalue(':id_E', $id_E);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
$id_E=$donnees['id_E'];
 $Nom_E=$donnees['Nom_E'];
 $Prenom_E=$donnees['Prenom_E'];
 $Sex=$donnees['Sex'];
 $dateNais_E=$donnees['dateNais_E'];
 $Age=$donnees['Age'];
 $Photo=$donnees['Photo'];
 $TelParent_E=$donnees['TelParent_E'];
 $Tel2Parent_E=$donnees['Tel2Parent_E'];
 $EmailP_E=$donnees['EmailP_E'];
 $Email2P_E=$donnees['Email2P_E'];
 $Nom_Sec=$donnees['Nom_Sec'];
 $Nom_Clas=$donnees['Nom_Clas'];
 $Nom_Fil=$donnees['Nom_Fil'];
 $Matri_E=$donnees['Matri_E'];

}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}



function Rechercher(){
global $id_E, $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{
$trouver="";
include("connexion.php");
$sql="select Photo, Nom_E, Prenom_E, Sex, dateNais_E, Age, TelParent_E, Tel2Parent_E,EmailP_E, Email2P_E, Nom_Sec, Nom_Clas, Nom_Fil, Matri_E from eleve where Nom_E=:Nom_E or Prenom_E=:Prenom_E";
$sql=$db-> prepare($sql);
$sql->bindvalue(':Nom_E', $Nom_E.' '.$Prenom_E);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
$trouver=$donnees['Nom_E'];

}
$sql->closecursor();
if($trouver==""){
return "";
}else{
return "Present";
}
}
catch(Exception $e)
{
die($e->getMessage());
}
}

    ?>
</div>