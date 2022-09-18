<?php
     /* Creer la connection :*/
     $conn=mysqli_connect('localhost','root','root','bd_effet_indesi_medic');

     /* Definir les variables des champs a remplir :*/
     $IP=$_POST['ip'];
     $DATE=$_POST['date_aujourd_huit'];
     $NOM=$_POST['nom'];
     $PRENOM=$_POST['prenom'];
     $GENRE=$_POST[Genre];
     $POIDS=$_POST['poids'];
     $TAILLE=$_POST['taille'];
     $AGE=$_POST['age'];
     $VILLE=$_POST['ville'];
     $ANTECEDANTS=$_POST['antecedants'];

     $NOM_SPECIALITE=$_POST['specialite'];
     $INDICATION=$_POST['indication'];
     $POSOLOGIE=$_POST['posologie'];
     $NUM_VACCIN=$_POST['num_vacin'];
     $TYPE_TRAITEMENT=$_POST['type_traitement'];
     $DATE_DEBUT=$_POST['Debut'];
     $DATE_FIN=$_POST['Fin'];
     $DATE_SURVENUE=$_POST['date_survenue'];
     $DUREE_SURVENUE=$_POST['dure_effet_inds'];

     $DELAI_SURVENUE=$_POST['delai_effet_inds'];
     $SIGNE_CLINIQUE=$_POST['signes'];
     $EFFET_INDESIRABLE=$_POST['effets_inds'];
     $GRAVITE=$_POST['Gravitee'];
     $EVOLUTION=$_POST['Evolution'];
     $READMINISTRATION=$_POST['Readministration'];
     $EVN_INDS_RECIDIVE=$_POST['indes'];
     $BILAN_BIOLOGIQUE=$_POST['Bilans'];
     $TRAITEMENT_CORRECTEUR=$_POST['traitement'];
     $AUTRE=$_POST['autre'];

     $SERVICE=$_POST['service'];
     $PROFIL=$_POST['Profile'];
     $TEL=$_POST['tel'];

     /* Definir notre requete Inserer*/

    /* $req= "INSERT INTO `formulaire1` (`IP`,'date_aujourd huit', `Nom`, `Prenom`, `Sexe`, `Poids`, `Taille`, `Age`, `Ville`, `Antecedant`) 
     VALUES ('$IP', '$NOM', '$PRENOM', '$GENRE', '$POIDS', '$TAILLE', '$AGE', '$VILLE', '$ANTECEDANTS')";*/

$req= "INSERT INTO `formulaire2` (`IP`, `Date`, `Nom`, `Prenom`, `Sexe`, `Poids`, `Taille`, `Age`, `Ville`, `Antecedant`,
       `Nom_Specialite`, `Indication`, `Posologie`, `Num_Vaccin`, `Type_Traitement`, `Date_Debut`, `Date_Fin`, `Date_Survenue`, 
       `Duree_Survenue`, `Delai_Survenue`, `Signe_Clinique`, `Effets_Indes_Observe`, `Gravite`, `Evolution`,
        `Readministration`, `Eve_Inds_Recidive`, `Bilans_Biologiques`, `Traitement_Correcteur`, `Autres`,
         `Service`, `Profil`, `Tel`)
          VALUES ('$IP', '$DATE', '$NOM', '$PRENOM', '$GENRE', '$POIDS', '$TAILLE', '$AGE', '$VILLE', '$ANTECEDANTS',
           '$NOM_SPECIALITE', '$INDICATION', '$POSOLOGIE', '$NUM_VACCIN', '$TYPE_TRAITEMENT', '$DATE_DEBUT', '$DATE_FIN',
            '$DATE_SURVENUE', '$DUREE_SURVENUE', ' $DELAI_SURVENUE', ' $SIGNE_CLINIQUE', '$EFFET_INDESIRABLE', '$GRAVITE', '$EVOLUTION', 
            '$READMINISTRATION', '$EVN_INDS_RECIDIVE', '$BILAN_BIOLOGIQUE', ' $TRAITEMENT_CORRECTEUR', '$AUTRE', '$SERVICE', '$SERVICE', '$TEL')";

     /* Excecuter notre requete Insert ( la connection,la requette ) */
     $res=mysqli_query($conn,$req);

 ?>

<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        page  inscription
    </title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
<h1>Votre reclamation a ete bien envoye</h1>

<!--Boutton-->
<button class="styled1"
        type="button"
        onclick="window.location.href = 'index.html';">
    Retour au page d'acceil
</button>


</body>
</html>