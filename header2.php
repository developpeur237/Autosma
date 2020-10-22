<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1, scalable="yes" />
    <link rel="stylesheet" type="text/css" href="autosma.css">
    <title>Autosma Welcome Page</title>
<style type="text/css">
    body{
            background-color: rgba(43, 60, 60, 0.48);
    }


</style>
</head>

<body>

<header>    
<center><div>
    <table style="width: 100%; align-content: center; border:6px solid green; background-color: rgba(0, 255, 255, 0.46);"><tr>
    <th style="width: 20px"><div id="google_translate_element2"><div class="skiptranslate goog-te-gadget" dir="ltr"><div class="divlang" id=":0.targetLanguage">
        <select name="Lang" class="goog-te-combo" aria-label="Widget de traduction" bgcolor="green" id="Lang" >
            <option value="">Choix de langue</option>
            <option value="fr" selected="Français">Français</option>
            <option value="af">Afrikaans</option>
            <option value="de">Allemand</option>
            <option value="en">Anglais</option>
            <option value="ar">Arabe</option>
            <option value="es">Espagnol</option>
            <option value="ha">Haoussa</option>
            <option value="ig">Igbo</option>
            <option value="it">Italien</option>
            <option value="yo">Yorouba</option>
            <option value="zu">Zoulou</option>
        </select>&nbsp;<span style="white-space:nowrap">
            <a href="https://translate.google.com/" target="_blank"></a></span><p></p></div><p></p><p></p></div></div></th>
    <th style="padding: 15px; border: none;"></th><th style="padding: 15px; border: none;"></th><th class="divwel"><a href="welcome3.php"> BIENVENUE DANS AUTOSMA</a></th>
    <th style=" font-size: 16px; position: relative;
    float: right; padding-left: 35px;"><div style=" border: 10px solid #007b14; position: relative;  border-top: 4px solid #2e9932; border-bottom: 5px solid #23610a; border-bottom-style: ridge; background-color: #7cff00;color: #000000; float: right;border-bottom-left-radius: 15px; font-size: 12px; border-top-right-radius: 15px;">

    Bienvenue Adrian</div><div><a href="index1.php"> Deconnexion</a></div>
        </th>
</tr></table></center>
</div>
    <nav><input type="checkbox" id="menu-mobile" role="button">

        <label for="menu-mobile" class="menu-mobile">Menu</label>
        <input type="checkbox" for="menu-mobile" id="menu-mobile" role="button" class="menu-mobile" name="MENU">
<ul class="ul" style="padding: 0px;">
    <li><input type="button" name="" style="position: relative;
    margin: 6px;border-size: 6px #22b14c;background-color: #0057c5;border-style: hidden;"></li>
    <li><a href="inscription.php" class="eleve">INSCRIPTION</a></li>

    <li><a href="eleves.php" class="eleve">ELEVES</a></li>

    <li><a href="solvable.php" class="sol">SOLVABILITER</a></li>
    
    <li><a href="prof.php" class="prof">ENSEIGNANTS/ PROFESSEURS</a></li>
    
    <li><a href="cours.php" class="cours">COURS</a></li>

    <li><a href="hall.php" class="clas">CLASSES</a></li>

    <li><a href="horaire.php" class="hora">HORAIRES</a></li>

    <li><a href="infos.php" class="infos">INFORMATIONS</a></li>
   


</ul><div style="    background-color: rgba(6, 7, 7, 0.61); box-shadow: 23px 2px 10px green">
     <?php
include('date.php');
?>
</div>
</nav>   
  </header>   
</body>
</html>
