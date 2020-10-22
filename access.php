         <style type="text/css">
        .div{
                border: 10px solid #007b14;
                position: relative;
                border-top: 4px solid #2e9932;
                border-bottom: 5px solid #23610a;
                border-bottom-style: ridge;
                background-color: #7cff00;
                color: #000000; float: right;
                order-bottom-left-radius: 15px;
                border-top-right-radius: 15px;
        }

     </style>
        <?php
    if (isset($_POST['User']) && $_POST['Pass'] ==  "autosma2019") // Si le mot de passe est bon
    {
        if (isset($_POST['User']) AND $_POST['User'] == 'Deltoro' ) {
            # code...
        
    // On affiche la page
 header('Location: welcome.php');
}
    else // Sinon, on affiche un message d'erreur
    {
          
        header('Location: login12.php');
    }
}
    ?>