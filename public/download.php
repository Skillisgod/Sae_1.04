<?php
$fichier = 'cv.jpg';
 
// Création des headers, pour indiquer au navigateur qu'il s'agit d'un fichier à télécharger
  header('Content-Transfer-Encoding: binary'); //Transfert en binaire (fichier)
  header('Content-Disposition: attachment; filename="cv.jpg"'); //Nom du fichier
  header('Content-Length: ' . filesize($fichier)); //Taille du fichier
  
//Envoi du fichier dont le chemin est passé en paramètre
  readfile($fichier);