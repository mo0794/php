<?php
// top obligatoire : variables commencent $ 
    //Les Variables
    $chaine= "Coucou";

    $nombre= 4;
    $tab= array(5, "test");

    //Affichage des variabkes --> inline, tout apparaitre sur la meme ligne
    echo $chaine. '<br>'; // <br> pour le FORCER a partir dans une autre ligne
    echo $nombre;
    // (.) c'est une concatenation, c'est pour lier 
    // il faut toujours declarer les variants avant de les imprimer, sinon echo ne les trouvera
    $prenom= "Mohamed";
    $nom= "CHORFI";

    echo $prenom;
    echo "<br><br>"; // 

    $fullname= $prenom. " ".$nom;
    echo $fullname;

    echo $prenom. " ".$nom;
  
?>
