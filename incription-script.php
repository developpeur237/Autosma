

<?php
function enregistrer_eleve(){
global $Nom_E, $Prenom_E, $Sex, $dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil,$Matri_E;
try{
include("connexion.php");
$sql="INSERT INTO eleve( Nom_E, Prenom_E,Sex, dateNais_E, Age, Photo, TelParent_E, Tel2Parent_E, EmailP_E, Email2P_E, Nom_Sec, Nom_Clas, Nom_Fil, Matri_E) VALUES (:Nom_E, :Prenom_E, :Sex, :dateNais_E, :Age, :Photo, :TelParent_E, :Tel2Parent_E,:EmailP_E, :Email2P_E, :Nom_Sec, :Nom_Clas, :Nom_Fil, :Matri_E)";
$sql=$db->prepare($sql); 
$sql->bindvalue(':Nom_E',$Nom_E);
$sql->bindvalue(':Prenom_E',$Prenom_E);
$sql->bindvalue(':Sex',$Sex);  
$sql->bindvalue(':dateNais_E',$dateNais_E);
$sql->bindvalue(':Age',$Age);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':TelParent_E',$TelParent_E);
$sql->bindvalue(':Tel2Parent_E',$Tel2Parent_E);
$sql->bindvalue(':EmailP_E',$EmailP_E);
$sql->bindvalue(':Email2P_E',$Email2P_E);
$sql->bindvalue(':Nom_Sec',$Nom_Sec); 
$sql->bindvalue(':Nom_Clas',$Nom_Clas);
$sql->bindvalue(':Nom_Fil',$Nom_Fil);
$sql->bindvalue(':Matri_E',$Matri_E);
$sql->execute();
if($sql){
echo"<src=\"images/tick.png\">";
}else{
echo"<font color=red> Desolé! echec d'enregistrement de vos informations </font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}

//-----------------------Modifiage-----------------

function Modifier_infos_eleve(){
global $id_E,$Nom_E,$Prenom_E, $Sex,$dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil, $Matri_E;
try{
include("connexion.php");
$sql="update eleve set Nom_E=:Nom_E, Prenom_E=:Prenom_E, Sex=:Sex, dateNais_E=:dateNais_E, Age=:Age, Photo=:Photo, TelParent_E=:TelParent_E, Tel2Parent_E=:Tel2Parent_E, EmailP_E=:EmailP_E, Email2P_E=:Email2P_E, Nom_Sec=:Nom_Sec,  Nom_Clas=:Nom_Clas, Nom_Fil=:Nom_Fil, Matri_E=:Matri_E where id_E=:id_E";
$sql=$db->prepare($sql);
$sql->bindvalue(':id_E', $id_E);
$sql->bindvalue(':Nom_E',$Nom_E);
$sql->bindvalue(':Prenom_E',$Prenom_E);
$sql->bindvalue(':Sex',$Sex); 
$sql->bindvalue(':dateNais_E',$dateNais_E);
$sql->bindvalue(':Age',$Age);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':TelParent_E',$TelParent_E);
$sql->bindvalue(':Tel2Parent_E',$Tel2Parent_E);
$sql->bindvalue(':EmailP_E',$EmailP_E);
$sql->bindvalue(':Email2P_E',$Email2P_E);
$sql->bindvalue(':Nom_Sec',$Nom_Sec);
$sql->bindvalue(':Nom_Clas',$Nom_Clas);
$sql->bindvalue(':Nom_Fil',$Nom_Fil);
$sql->bindvalue(':Matri_E',$Matri_E);
$sql->execute(); 
if($sql){
echo"<font color=green> Modification de vos information enregistrer avec succes </font>";
}else{
echo"<font color=red> Desolé! echec de modification de vos informations </font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}

//-----------------------Supprimer-----------------

function Supprimer_eleve(){
global $id_E, $Nom_E, $Prenom_E, $Sex,$dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec;
try{
include("connexion.php");
echo $id_E;
$sql="delete from eleve where id_E=:id_E" ;
$sql=$db->prepare($sql);
$sql->bindvalue(':id_E',$id_E);
echo " eleve ";
$sql->execute();
if($sql){
echo"<font color=green> eleve supprimer avec succes </font>";
}else{
echo"<font color=red> echec de suppression du eleve </font>";
}
$sql->closecursor();
}
catch(Exception $e)
{
die($e->getMessage());
}
}

//-----------------------affichage-----------------


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
echo "<tr width=\"auto\" ><td>".$donnees['id_E']."</td><td><img src=\"http://localhost/autosma/photos/".$donnees['Photo']."\" /></td><td>".$donnees['Nom_E']."</td><td>".$donnees['Prenom_E']."</td><td>".$donnees['Sex']."</td><td>".$donnees['Age']."</td><td>".$donnees['Nom_Sec']."</td><td>".$donnees['Nom_Clas']."</td><td>".$donnees['Nom_Fil']."</td><td>".$donnees['Matri_E']."</td><td>".$donnees['TelParent_E']."</td><td>".$donnees['Tel2Parent_E']."</td><td>".$donnees['EmailP_E']."</td></tr>";
}
$sql->closecursor();
echo"<table>";
}
catch(Exception $e)
{
die($e->getMessage());
}
}

//-----------------------Recuperer-----------------

function Recuperer_infos_eleve(){
global $id_E, $Nom_E,$Prenom_E,$Sex,$dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil, $Matri_E;
try{
include("connexion.php");
$sql="select id_E,Nom_E,Prenom_E,Sex,dateNais_E, Age, Photo, TelParent_E, Tel2Parent_E, EmailP_E, Email2P_E, Nom_Sec Nom_Clas, Nom_Fil, Matri_E from eleve where id_E=:id_E";
$sql=$db-> prepare($sql);
$sql->bindvalue(':id_E', $id_E);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
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

//-----------------------Rechercher-----------------

function Rechercher_un_nom(){
global $id_E, $Nom_E,$Prenom_E,$Sex,$dateNais_E, $Age, $Photo, $TelParent_E, $Tel2Parent_E, $EmailP_E, $Email2P_E, $Nom_Sec, $Nom_Clas, $Nom_Fil, $Matri_E;
try{
$trouver="";
include("connexion.php");
$sql="select Tel2Parent_E from eleve where concat(Nom_E, Prenom_E)=:Nom_E";
$sql=$db-> prepare($sql);
$sql->bindvalue(':Nom_E', $Nom_E.$Prenom_E);
$sql->execute();
while($donnees=$sql->fetch(PDO::FETCH_ASSOC)){
$trouver=$donnees['Tel2Parent_E'];

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


<!----------------Preparetion des Variables--------------->


<?php
$id_E="";
$Nom_E="";
$Prenom_E="";
$Sex="";
$dateNais_E="";
$Age="";
$Photo="";
$TelParent_E="";
$Tel2Parent_E="";
$EmailP_E="";
$Email2P_E="";
$Nom_Sec="";
$Nom_Clas="";
$Nom_Fil="";
$Matri_E="";
if(isset($_POST['id_E'])){
$id_E=intval($_POST['id_E']);
}
if(isset($_POST['Nom_E'])){
$Nom_E=htmlentities($_POST['Nom_E']);
}
if(isset($_POST['Prenom_E'])){
$Prenom_E=htmlentities($_POST['Prenom_E']);
}
if(isset($_POST['Sex'])){
$Sex=htmlentities($_POST['Sex']);
}
if(isset($_POST['dateNais_E'])){
$dateNais_E=htmlentities($_POST['dateNais_E']);
}
if(isset($_POST['Age'])){
$Age=intval($_POST['Age']);
}
if(isset($_POST['Photo'])){
$Photo=htmlentities($_POST['Photo']);
}
if(isset($_POST['TelParent_E'])){
$TelParent_E=intval($_POST['TelParent_E']);
}
if(isset($_POST['Tel2Parent_E'])){
$Tel2Parent_E=intval($_POST['Tel2Parent_E']);
}
if(isset($_POST['EmailP_E'])){
$EmailP_E=htmlentities($_POST['EmailP_E']);
}
if(isset($_POST['Email2P_E'])){
$Email2P_E=htmlentities($_POST['Email2P_E']);
}
if(isset($_POST['Nom_Sec'])){
$Nom_Sec=htmlentities($_POST['Nom_Sec']);
}
if (isset($_POST['Nom_Clas'])) {
    $Nom_Clas=htmlentities($_POST['Nom_Clas']);
}
if (isset($_POST['Nom_Fil'])) {
    $Nom_Fil=htmlentities($_POST['Nom_Fil']);
}
if (isset($_POST['Matri_E'])) {
    $Matri_E=htmlentities($_POST['Matri_E']);
}
if(isset($_POST['btnEnregistrer'])){
if(Rechercher_un_nom()==""){
Enregistrer_eleve();

echo "<font size=5 color=chartreuse><small>L'Éleve ".$Nom_E." ".$Prenom_E." enregistré avec succes</small></font>";


}else{
echo "<font size=4 color=red> Aucune Information Enregistrée</font>";
}
}
if(isset($_POST['btnModifier'])){
Modifier_infos_eleve();
}
if(isset($_POST['btnSupprimer'])){
Supprimer_eleve();
}
if(isset($_POST['btnRechercher'])){
Recuperer_infos_eleve();
}

?>