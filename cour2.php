<style type="text/css">
	.sel1,.sel2,option{
		    -webkit-appearance: button;
    /*-webkit-box-reflect: below;*/
    box-shadow: inset 3px -2px 3px #ffffff;
    background-color: #00b2ff;
    border-radius: 5px;
    height: 20px;
	}
	.inp1{
		-webkit-appearance: button;
	}
	.hide{
        width: 30%;
    border-radius: 27px;
    transform: translate(0px, -13px);
    background-color: #12abaf;
    -webkit-appearance: button;
    /* text-transform: uppercase; */
    box-shadow: inset 2px 1px 11px black;
    transition-duration: 10s;	}



	.hide:hover{
		cursor: pointer;
        width: 30%;
		position: relative;
        background-color: #ff1212;
		transition-duration: 9s; 
	}
	 
.img{
        height: 32px;
    width: 32px;
        transform: translate(4px);
   }

   .b{
   	 text-transform: uppercase;
   }

	.b:hover{
	color: white;
    text-decoration: none;
    text-transform: uppercase;
	} 
	 .form{
	 	transform: translate(-102px, 20px);
	 	border-radius: 27px;
    transform: translate(105px, -28px);
    background-color: #12abaf;
    -webkit-appearance: button;
    /* text-transform: uppercase; */
    box-shadow: inset 2px 1px 11px black;
    transition-duration: 10s;
	 }


	.sel2{
		text-align: center;
}

.save{
	    position: relative;
    margin: 6px;
    border-size: 6px #22b14c;
    background-color: #6fe392;
    width: 83px;
}
.save:hover{
	position: relative;
    margin: 6px;
    border-bottom: 2px solid green;
    border-left: 4px solid green;
    border-right: 4px solid green;
    background-color: #12bb0c;
    color: white;
    width: 89px;
    transition-duration: 0.4s;
    transform: translate(30px 20px);
}

.reset{
	position: relative;
    margin: 6px;
    border-size: 6px #22b14c;
    background-color: #da7878;
    width: 80px;
}
.reset:hover{
	    position: relative;
    margin: 6px;
    transition-duration: 0.4s;
    color: white;
    border-bottom: 2px solid #e82323;
    border-left: 8px solid #e82323;
    border-right: 8px solid #e82323;
    background-color:#d24545;
    width: 86px;
    transform: translate(30px 20px);
}
.formulaire{
	    height: 100%;
    transform: translate(7px, -16px);
}
</style>
<!---*******************************************************--->
<!----------------------------------------
---------------Enregistrer--------------------------
------------------------------------------
------------------------------------------>

<?php
function Save(){
global $Nom_Matiere , $Code_Matiere, $Sex, $CNI_Ens, $Age, $Photo, $Email, $Matri_Ens;
try{
include("connexion.php");
$sql="INSERT INTO enseignant( Nom_Matiere , Code_Matiere,Sex, CNI_Ens, Age, Photo, Email, , , Matri_Ens) VALUES (:Nom_Matiere , :Code_Matiere, :Sex, :CNI_Ens, :Age, :Photo, :Email, :, :, :Matri_Ens)";
$sql=$db->prepare($sql); 
$sql->bindvalue(':Nom_Matiere ',$Nom_Matiere );
$sql->bindvalue(':Code_Matiere',$Code_Matiere);
$sql->bindvalue(':Sex',$Sex);  
$sql->bindvalue(':CNI_Ens',$CNI_Ens);
$sql->bindvalue(':Age',$Age);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':Email',$Email);
$sql->bindvalue(':Matri_Ens',$Matri_Ens);
$sql->execute();
if($sql){
echo"<font color=green><img src=\"images/checkmark.png\"/><b>..</b></font>";
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
 ?>

<?php

//-----------------------Modifiage-----------------

function Modifier_Ens(){
global $id_Ens,$Nom_Matiere ,$Code_Matiere, $Sex,$CNI_Ens, $Age, $Photo,$Email, $Matri_Ens;
try{
include("connexion.php");
$sql="update enseignant set Nom_Matiere =:Nom_Matiere , Code_Matiere=:Code_Matiere, Sex=:Sex, CNI_Ens=:CNI_Ens, Age=:Age, Photo=:Photo,Email=:Email,=:,  =:,Matri_Ens=:Matri_Ens where id_Ens=:id_Ens";
$sql=$db->prepare($sql);
$sql->bindvalue(':id_Ens', $id_Ens);
$sql->bindvalue(':Nom_Matiere ',$Nom_Matiere );
$sql->bindvalue(':Code_Matiere',$Code_Matiere);
$sql->bindvalue(':Sex',$Sex); 
$sql->bindvalue(':CNI_Ens',$CNI_Ens);
$sql->bindvalue(':Photo',$Photo);
$sql->bindvalue(':Email',$Email);
$sql->bindvalue(':Matri_Ens',$Matri_Ens);
$sql->execute(); 
if($sql){
echo"<font color=chartreuse> Modification de vos information enregistrer avec succes </font>";
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
?>


<?php
//------------------------------End-------------------------


$Nom_Matiere="";
$Code_Matiere="";
if(isset($_POST['Nom_Matiere '])){
$Nom_Matiere =htmlentities($_POST['Nom_Matiere ']);
}
if(isset($_POST['Code_Matiere'])){
$Code_Matiere=htmlentities($_POST['Code_Matiere']);
}
if(isset($_POST['btnEnregistrer'])){
Save();

echo "<font size=5 color=chartreuse><small>Le cours de ".$Nom_Matiere." de code ".$Code_Matiere." enregistré avec succes</small></font>";
}else{
echo "<font size=5 color=#45a8ec><small><img   src=\"images/information.png\" style=\"height:40p; width:40px; transform: translate(-2px, 10px);\" /> Veillez programmer un nouveau Cours</small></font>";
}

if(isset($_POST['btnModifier'])){
Modifier_Ens();
}
if(isset($_POST['btnSupprimer'])){
Supprimer_Ens();
}
if(isset($_POST['btnRechercher'])){
Recuperer_infos_Ens();
}

?>

<!----------------------------------------------------->



<!---*******************************************************--->
<div>
    <button class="hide"><u><a rel="parent" href="Cour2a.php" target="_self"><b class="b" >Cacher la zone de programmation des cours</b></a></u></button><img class="img" src="images/spry_accordion.png"/>
</div><div class="formulaire">
<br>
<form method="Post" enctype="multipart/form-data"  action="cour2.php">
<table>
	<tr>
		<td>
			<select class="sel1" name="Nom_Matiere">

<option>Choix du cours a programmer 🔎 ▾
</option>
<option value="Informatique">Informatique</option>
<option value="Geography">Geography</option>
<option value="Geographie">Geographie</option>
<option value="Cheminstry">Cheminstry</option>
<option value="Biology">Biology</option>
<option value="Biologie">Biologie</option>
<option value="Physique-Chimie-Technologie">Physique-Chimie-TechnologiePCT</option>
<option value="Mathematique">Mathematique</option>
<option value="Mathematique">Mathematique</option>
<option value="Sport">Sport</option>
<option value="Histoir">Histoir</option>
<option value="Phylosophie">Phylosophie</option>
<option value="Phylosophy">Phylosophy</option>
<option value="Francais">Francais</option>
<option value="Anglais">Anglais</option>
<option value="Geology">Geology</option>
<option value="Computer Sciences">Computer Sciences</option>
<option value="Economy">Economy</option>
<option value="Cityzenship">Cityzenship</option>
<option value="Pure Mathematic">Pure Mathematic</option>
<option value="Geomorphology">Geomorphology</option>
<option value="Additionnal Mathematic">Additionnal Mathematic</option>
<option value="Sciences de la Vie et de la Terre">Sciences de la Vie et de la Terre</option>
<option value="Statistiques">Statistiques</option>
<option value="Probalité">Probalité</option>
<option value="Literature"></option>
<option value="English">English</option>
<option value="Drawing">Drawing</option>
<option value="Hand Writing">Hand Writing</option>
</selct><input class="inp1" placeholder="Inserez un Nouveau cours" type="text" name="Code_Matiere" value="">
</td>
<td>
	<select name="Code_Matiere" class="sel2" align=center>
<option>Choix du code Matiere 🔎▾</option>
<option value="Info" > Info</option>
<option value="Geo En" > Geo En</option>
<option value="Geo Fr" > Geo Fr</option>
<option value="Chem" > Chem</option>
<option value="Biol En" > Biol En</option>
<option value="Biol Fr" > Biol Fr</option>
<option value="PCT" > PCT</option>
<option value="Math C" > Math C</option>
<option value="Math A" > Math A</option>
<option value="Sp01" > Sp01</option>
<option value="His 3" > His 3</option>
<option value="Phylo" > Phylo</option>
<option value="Phylo En" > Phylo En</option>
<option value="LFF" > LFF</option>
<option value="LAF" > LAF</option>
<option value="GEOL" > GEOL</option>
<option value="ICT" > ICT</option>
<option value="Econ" > Econ</option>
<option value="CZSP" > CZSP</option>
<option value="P Math" > P Math</option>
<option value="GEOM" > GEOM</option>
<option value="A Math" > A Math</option>
<option value="SVT" > SVT</option>
<option value="PROBA" > PROBA</option>
<option value="LIT" > LIT</option>
<option value="ENL" > ENL</option>
<option value="DWG" > DWG</option>
<option value="HWT" > HWT</option>
</select><input class="inp1" type="text" name="Code_Matiere" placeholder="Inserez le code approprier" value="">
</td>
<td><input class="save" type="submit" name="btnSave" value="Enregistrer"><input class="reset" type="reset" value="Annuler"></td>
</table>
</form>
</div>