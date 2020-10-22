<!DOCTYPE html>
<!-- saved from url=(0063)file:///C:/softronic-cm.com/A%20propos/Qui%20sommes%20nous.HTML -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>AUTOSMA</title>

    
    <meta name="viewport" content="width=device-width" ,="" initial-scale="1">
   
    <style type="text/css">
        
        body {
    font-family: verdana, calibri, sans-serif;
    margin: 0px;
    padding:0px;
    background-color: rgba(43, 60, 60, 0.48);
}

/*------------------le porteur du menu principal------------------*/
.middle{
    position: absolute;
    width: 100%;
    transform: translate(50%,50%);/*------if un commented, the hole menu will centered-------*/
}
/*----------------------------------------------------------------------*/

/* Pour Permetre l'affichage du contenu de la page a 100% de la longueur de l'ecran*/
nav {
    box-shadow: 0px 2px 30px 2px;
    width:100%;
    background-color:rgba(0,87,197,1);
    font-size: 10px;
}
.nav1{
   box-shadow: 0px 2px 30px 2px;
    width:100%;
    background-color:rgba(59,89,152,1);
    font-size: 10px;    
}


/*-----------------pour le logo PROF ---------------------*/
.nav2{
     box-shadow: 3px 16px 60px 2px;

}
/*-----------------pour le logo softronic ---------------------*/
.nav3{
     box-shadow: /*0px 0px 30px 2px;*/
    background-size: 32px 32px;

}

/*-----------------pour les logo reseaux socieaux facebook, tweeter etc ---------------------*/
.nav4 { /*box-shadow: 0px 2px 30px 2px;*/
    width:100%;
    background-color:rgba(89,89,89,0.40);
    font-size: 12px;
    }
/*---------------modifie les elements menu de nav ELEVES, Service etc--------------------- */
nav li a{

    width:100%;
    font-size: 14px;
    text-align: left;
}

/*---- Indexe les couleures des elements des sous menu au passage de la souri------*/
.nav1:hover li{
    color: rgb(0,0,0);

}
header{
    width: 100%;
float:left;
text-align: left;
}

nav li{
    list-style-type:none;
    float: left;

}
/*------------------Modifie la position des element de nav ------------------------ */
nav > ul > li{
        float: left;
    position: relative;
}
nav > ul::after{
    content: "";
    display: table;
    clear: both;
}
.menu {
    text-align:center;
    display: none;


}
/* Pour faire disparaitre les elements du sous menu (submenu)*/
.submenu{
    display: none;
    box-shadow: 0px 2px 30px 2px;
}
/* Pour faire disparaitre la case a cocher (le checkbox)*/
nav input[type=checkbox]{
    display: none;
}

nav label{
    display: none;
}

.submenu label{
    display: none;
}
nav a{
    display: inline-block;
    text-decoration:none;
}

.Maintenance a{
    display: inline-block;
    text-decoration: none;
}


nav > ul > li > a {
    padding:15px 25px;
    color: white;
}

.submenu > ul > li > a {
    padding:15px 25px;
    color: white;
}

nav > ul > li:hover a{
    padding:2px,10px, 6px,21Px;
}

.submenu > ul > li:hover a{
    padding:2px,10px, 6px,21Px;
}

nav li:hover .submenu{
    display: inline-block;
    position: absolute;
    top: 100%;
    left: 0px;
    padding:0px;
    z-index: 1000;
    text-align: left;
}

.submenu li:hover .submenu1{
    display: inline-block;
    position: relative;
    top: 100%;
    left: 0px;
    padding:0px;
    z-index: 1000;
    text-align: left;
}


.submenu li a{
    padding: 0px 2px;
    color:rgb(255,255,255);
    width: 100%;
}

.submenu1 li a{
    padding: 0px 2px;
    color:rgba(255,255,255, 0.45);
    width: 100%;
}

.submenu3 li a{
    text-align: right;
    color: rgba(255,255,255v,0.60);
}

.Rotation{
    -webkit-transition:-webkit-transform 0.3s ease-out;
    -moz-transition: -moz-transform 0.3s ease-out;
    -transition: -transform 0.3s ease-out;
}

.Rotation-link:hover.rotate-icon{
    -webkit-transition:-rotate (90deg);
    -moz-transition: rotate (90deg);
    -transition: rotate (46deg);
}


/*---- Indexe les couleures des elements des sous menu au passage de la souri------*/
.submenu li:hover a{
    color:rgb(0,0,0);
}
.submenu2 li:hover a{
    color: white;
}

.submenu1 li:hover a{
    color: rgba(255,255,255,0.90);
}

.submenu3 li:hover a{
    color: rgb(255,255,255);
}

/*-------------- FIN ----------------------------*/


/*----------------------------------------------------STYLE de Menu Accordion (+ Deroulante et - Retractable)---------------------------------------*/

button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 30%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion:hover {
    background-color: #eee;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 60%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;

}
button.accordion.active,
button.accordion:hover {

    background-color:rgba(20,60,200,0.60);
}


button.accordion:after {

/* Unicode character for "plus" sign
(+) is '\02795' */

    content: '\02795';
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}


button.accordion.active:after {

/* Unicode character for "minus" sign
(-) is '\2796' */

    content: "\2796";
}


div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height: 320px;
}


/*--------------------------------------------------------------FIN DES STYLE ACCORDION-------------------------------------------------------------*/


@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
/* Declaration des couleures de font des elements des sous menu*/

.ELEVES{
    background-color: rgba(3,3,255,1);
    border-right: 2px solid white;
    border-left: 2px solid white;
    border-top-right-radius: 40px;
    border-bottom-left-radius: 30px;
    text-align: center;
}
.ELEVES:hover{
    background-color: rgba(30,130,255,0.90);
    border-top-right-radius: 40px;
    border-bottom-left-radius: 30px;

}
.ELEVES .submenu{
    background-color:rgba(3,133,255,0.60);

}

.SOL:hover{
    border-top: 5px solid green;
    background-color:  rgba(196,172,9,0.85);
    border-bottom: 0px solid green;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 0px;
}

.SOL .submenu{
    background-color: rgba(196,172,9,1);

}

.PROF:hover{
    border-top: 0px solid red;
    background-color:  rgba(196,172,9,0.85);
    border-right:0px solid green;
    border-bottom: 0px black;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
}

.PROF .submenu{
    background-color: rgba(3,3,180,0.60);
}

.COURS:hover{
    border-top: 5px solid green;
    background-color:  rgba(196,172,9,0.85);
    border-bottom: 0px solid green;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 0px;
}

.COURS .submenu{
    background-color:rgba(3,200,1,1);
}

.HALL:hover{
    border-top: 5px solid black;
    background-color: rgba(0,0,0,0);
    border-right: 0px solid white;
    border: 0px solid white;
}

.HALL .submenu{
    background-color: rgba(0,80,255,1);
}

.HORAIRE .submenu{
    background-color: rgba(230,012,96,1);
    text-align: left;
}
.HORAIRE:hover{
    background-color: rgba(230,012,96,0.80);
    border-right: 0px  rgba(230,012,96,0.80);
}

.INFOS:hover{

    background-color: rgba(49,233,228,0.75);
    border-right: 0px solid white;
    border-bottom: 0px solid green;
    border: 0px solid white;
}

.INFOS .submenu{
    background-color: rgba(49,233,228,0.90);
}
.APROPOS:hover{
    border-top: 5px solid magenta;
    background-color: rgba(60,237,4,0.80);
    border-right: 0px solid white;
    border-bottom: 0px solid green;
    border: 0px solid white;
}
.APROPOS .submenu{
    background-color: rgba(130,237,4,1);
}

section{
    -webkit-column-count:4 100px;  /* Opera, Safari, Google Chrome */
    -moz-column-count:4 100px; /* Firefox */
    column-count:4 100px; /* Internet Explorer */
    -moz-column-gap: 100px;
    column-gap: 100px;

}

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------NEW      DEFINITIONS       FOR      MOBILE    DIMENSION    VERSION---------------------------------------------------------*/
/*------------------------------------ -------------ALL    ATTRIBUTE     BEING      RECONFIGURED---------------------------------------------------------------*/
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------*/


nav input[type=checkbox]:checked ~ ul{
    display: block;
}

@media screen and (max-width: 720px){
    .menu-mobile {
        display: block;
        color: #ffffff;
        background-color: rgba(29,197,210,.097);
        text-align: center;
        padding: 10px, 0px;
    }
     body{
            background-color: rgba(43, 60, 60, 0.48);
    }
    /* Pour Permetre l'affichage du contenu de la page a 100% de la longueur de l'ecran*/
    nav {
    width:100%;
    background-color:rgb(0,87,168);
    font-size: 18px;
    }
    nav li a{
    width:100%;
    font-size: 12px;
    text-align: left;
    } 
    /*---- Indexe les couleures des elements des sous menu au passage de la souri------*/
    .nav:hover li{
    color: rgb(255,255,255);
    font-size: 16px;
    }

    header {
    width: 100%;
    text-align: center;
    float:left;
    }

    button:hover{
    border-top: 0px solid green;
    background-color: rgba(0,130,255,0.90);
    border-bottom: 0px solid green;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 0px;
}

button.submenu{
    background-color: rgba(196,172,9,1);
}



    nav li{
        list-style-type:none;
        float: right;
    }
    /*-----modifie la position(left [gauche] ou right [droite]) entiere de des contenu du menu----*/
    nav > ul > li{
        float: left;
        position:relative;
    }
/*-------------------------------------------------------------------------------*/
nav > ul::after{
    content: "";
    display:table;
    clear:both;
}
.menu {
    text-align: center;
    display: none;

}
/* Pour faire disparaitre les elements du sous menu (submenu)*/
.submenu{
    display: none;
}
/* Pour faire disparaitre la case a cocher (le checkbox)*/
nav input[type=checkbox]{
    display: none;
}



/*-------------ELEMENT COPIER------------*/

/*-------------------------------------------*/
nav label{
    display: none;
}

nav a{
    display: inline-block;
    text-decoration:none;
}

nav > ul > li > a {
    padding:6px 10px;
    color: white;
}

nav > ul > li:hover a{
    padding:10px,25px, 15px,25px;
}

}

nav li:hover .submenu{
    display: inline-table;
    position: absolute;
    top: 100%;
    left: 0px;
    padding:0px;
    z-index: 1000;
    text-align: left;
    background-color: gray;
}

.submenu li a{

    font-size: 14px;
    color: blue;
    width: 100%;
    text-align: left;
}

/*---- Indexe les couleures des elements des sous menu au passage de la souri------*/
.submenu li:hover a{
    color:rgb(0,0,0);
}
.submenu2 li:hover a{
    color: white;
}

.submenu3 li:hover a{
    color: white;
}

/*-------------- FIN ----------------------------*/

/* Declaration des couleures de font des elements des sous menu*/

.ELEVES{
    background-color: rgba(3,3,255,1);
    border-right: 2px solid white;
    border-left: 2px solid white;
    border-top-right-radius: 40px;
    border-bottom-left-radius: 30px;
}
.ELEVES:hover{
    background-color: rgba(30,130,255,0.90);
    border-top-right-radius: 40px;
    border-bottom-left-radius: 30px;
}
.ELEVES .submenu{
    background-color:rgba(3,133,255,0.60);

}

.SOL:hover{
    border-top: 0px solid green;
    background-color: rgba(0,130,255,0.90);
    border-bottom: 0px solid green;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 0px;
}

.SOL .submenu{
    background-color: rgba(196,172,9,1);
}

.PROF:hover{
    border-top: 0px solid red;
    background-color: rgba(0,130,255,0.90);
    border-right:0px solid green;
    border-bottom: 0px black;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
}

.PROF .submenu{
    background-color: rgba(3,3,180,0.60);
}

.COURS:hover{
    border-top:;
    background-color: rgba(0,130,255,0.90);
    border-right: 0px solid green;
    border-bottom: 0px ;
    border: 0px solid white;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 0px;
}

.COURS .submenu{
    background-color:rgba(3,200,1,1);
}

.HALL:hover{
    border-top:;
    background-color: rgba(0,130,255,0.90);
    border-right: 0px solid white;
    border-bottom: 0px solid green;
    border: 0px solid white;
}

.HALL .submenu{
    background-color: rgba(0,80,255,0.60);
}

.HORAIRE:hover{

    background-color: rgba(0,130,255,0.90);
    border-right:  rgba(230,012,96,0.80);
}

.HORAIRE .submenu{
    background-color: rgba(230,012,96,1);
    content-align: left;
}

.INFOS:hover{

    background-color: rgba(0,130,255,0.90);
    border-right: 0px solid white;
    border-bottom: 0px solid green;
    border: 0px solid white;
}

.INFOS .submenu{
    background-color: rgba(49,233,228,0.90);
}
.APROPOS:hover{
    border-top: 5px solid magenta;
    background-color: rgba(0,130,255,0.90);
    border-right: 0px solid white;
    border-bottom: 0px solid green;
    border: 0px solid white;
}
.APROPOS .submenu{
    background-color: rgba(130,237,4,1);
}

nav input [type=checkbox]:checked ~ ul{
    display: block;
}
@media screen and (max-width: 720px){
    .menu-mobile {
        transition:All 1s ease;
        -webkit-transition:All 1s ease;
        -moz-transition:All 1s ease;
        -o-transition:All 1s ease;
        transform:  rotate(4deg) scale(1) skew(1deg) translate(10px);
         -webkit-transform:  rotate(0deg) scale(1) skew(1deg) translate(10px);
         -moz-transform:  rotate(0deg) scale(1) skew(1deg) translate(10px);
         -o-transform:  rotate(0deg) scale(1) skew(1deg) translate(1px);
         -ms-transform:  rotate(0deg) scale(1) skew(1deg) translate(1px);
        display: block;
        color: #ffffff;
        background-color: rgba(29,197,210,.097);
        padding: 10px, 0px;
        align-items: center;
    }
nav ul{
    display: none;
    }

.dis{
    display: none;
}
.nav2{
}
.menu-mobile:hover{transform:  rotate(0deg) scale(0.67) skew(1deg) translate(0px);
        -webkit-transform:  rotate(0deg) scale(0.67) skew(1deg) translate(0px);
        -moz-transform:  rotate(0deg) scale(1.5) skew(1deg) translate(0px);
        -o-transform:  rotate(0deg) scale(1.5) skew(1deg) translate(0px);
        -ms-transform:  rotate(0deg) scale(1.5) skew(1deg) translate(0px);
    }
.google_translate_element2,select,.goog-te-combo,.skiptranslate goog-te-gadget{
    display:none;
    background-color:rgba(29,100,210,0.30);
    text-decoration-color: white;
}
select option:hover{
    display:;
    background-color:rgba(29,100,210,0.30);
    text-decoration:underline;
    color: transparent;

 }
img{
    position:relative;
  }

}

    </style>
</head><body style="position: relative; min-height: 100%; top: 0px;">  


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
<div>
    
    <nav><input type="checkbox" id="menu-mobile" role="button">

        <label for="menu-mobile" class="menu-mobile">Menu</label>
        <input type="checkbox" id="menu-mobile" role="button">
<ul>
    
    <li class="ELEVES"><a href="eleves.php">ELEVES</a></li>

    <li class="SOL"><a href="Solvable.php">SOLVABILITERS</a></li>
    
    <li class="PROF"><a href="prof.php">ENSEIGNANTS </a></li>
    
    <li class="COURS"><a href="cours.php">COURS</a></li>

    <li class="HALL"><a href="hall.php">CLASSES</a></li>

    <li class="HORAIRE"><a href="horaire.php">HORAIRES</a></li>
    <li class="INFOS"><a href="infos.php">INFORMATOINS</a></li>
</ul>
</nav>
</div>
</body></html>