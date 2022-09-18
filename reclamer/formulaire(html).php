
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Effet indesirable d'un medicament</title>
    <link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style2.css">
</head>
<body >


<!-- l'entete du formulaire -->
<br>
<fieldset>
   <img  src="images/phar.png" >
   <img class="topcenter" src="images/titre.png" >
   <img class="topright" src="images/chu1.JPG" >
</fieldset>
<br>			
			
				
<!--Debut de Form-->
<form method="post" action="php/formulaire(php).php">



<!-- la date d'aujourd huit -->
<b>
 <div Align=CENTER>
  <script>
    date = new Date().toLocaleDateString();
    document.write(date);
  </script>
 </div>
</b>


<!-- 1er fieldset -->
<fieldset>
  <legend alin="center">
	 Patient:
  </legend>
    Date  <input type="date" name="date_aujourd_huit" value="2022-01-01">
	IP     :<input type="text" name="ip"  size="15">
	Nom    :<input type="text" name="nom"  size="15">
	Prenom :<input type="text" name="prenom"  size="15">
	Je suis  :
    <input type="radio" name="Genre" value="Femme">Femme
    <input type="radio" name="Genre" value="Homme">Homme



	<br>
	
	Poids       :<input type="text" name="poids"  size="15">
	Taille(cm)  :<input type="text" name="taille"  size="15">
	Age  :<input type="text" name="age"  size="15">
	Ville  :<input type="text" name="ville"  size="15">

	<br>

	Antecedants:<textarea name="antecedants"></textarea>
</fieldset>

<br>

<!-- 2me fieldset -->
<fieldset>
  <legend alin="center">
	      Produit de Sante :
	 <FONT color="gray">
         ( Medicament*/Dispositif Medical/Plante/Autre(cosmetique,...))
     </FONT>
  </legend>
	

	<label>Nom de la specialite:</label>
           <input type="text" name="specialite"  size="15">
	<label>Indication:</label>
	       <input type="text" name="indication"  size="15">
	<label>Posologie:</label>
	       <input type="text" name="posologie"  size="15">
		  <br>
	<label>*Si vaccin ou produit biologique,indiquez le numero de lot :</label>
	       <input type="text" name="num_vacin"  size="15">
		  <br>
	<label>Type de traitement:</label>
	      <input type="radio" name="type_traitement" value="Automedication"> Automedication
          <input type="radio" name="type_traitement" value="Prescription"> Prescription			
			<br>
	<label id="start"> Debut:</label>
          <input type="date" name="Debut" value="2022-01-01">
	<label for="start">Fin:</label>
	      <input type="date" name="Fin" value="2022-01-12">
		  <br>
</fieldset>
		<br>
		<br>

<!-- 3eme fieldset -->
<fieldset >
	<legend alin="center">
	     Evenement(s) indesirable(s):
    </legend>

	<label for="start">Date de survenue:</label>
	      <input type="date" name="date_survenue" value="2022-01-12">
    <label for="start">Duree de l effet Indesirable:</label>
	      <input type="text" name="dure_effet_inds"  size="15">
	<label for="start">Delai de survenue:</label>
	      <input type="text" name="delai_effet_inds"  size="15">
		  <br>
	<label for="start">Signe Cliniques observes:</label>
	      <textarea name="signes"></textarea>
	<label for="start">Effet(s) indesirable(s) observe:</label>
	      <textarea name="effets_inds"></textarea>
</fieldset>
    <br>

<!-- 4me fieldset -->
<fieldset >
	<legend alin="center">
	    Gravite/Evolution:
    </legend>

	<label for="start"><b>Gravitee:</b></label> <br>
	
			<input type="checkbox" name="Gravitee" value="Deces"> <label>Deces</label>
			<input type="checkbox" name="Gravitee" value="Mise en jeu du pronostic vital"><label>Mise en jeu du pronostic vital</label>
			<input type="checkbox" name="Gravitee" value="Prolongation d Hospitalition"><label>Prolongation d'Hospitalition</label>	
			<input type="checkbox" name="Gravitee" value="Incapacite/invalidite permanente"><label>Incapacite/invalidite permanente</label>
			<br>

	<label for="start"><b>Evolution:</b></label>
           </br>
	<input type="checkbox" name=""> <label>Guérison sans séquelle</label>
			<input type="checkbox" name="Evolution" value="Guerison avec sequelle"><label>Guerison avec sequelle</label>
			<input type="checkbox" name="Evolution" value="Deces du a l effet"><label>Deces du a l'effet</label>	
			<input type="checkbox" name="Evolution" value="Deces sans raport avec l effet"><label>Deces sans raport avec l'effet</label>
			<input type="checkbox" name="Evolution" value="Deces auquel l effet a pu contribuer"><label>Deces auquel l'effet a pu contribuer</label>
			<input type="checkbox" name="Evolution" value="inconnue"><label>inconnue</label>
</fieldset>
           <br>

<!-- 5eme fieldset -->
<fieldset>
	<legend alin="center">
	    Description du cas :
    </legend>

	<label for="start">Readministration:</label>   
	          <input type="radio"  name="Readministration" value="Oui" > Oui
			  <input type="radio"  name="Readministration" value="Non"> Non
			  <br>
	<label for="start">Si oui, l'evenement indesirable recidive t-il?:</label>
	          <input type="radio"  name="indes" value="Oui" > Oui
			  <input type="radio"  name="indes" value="Non"> Non
			  <br><br>
	<label for="start">Bilans biologiques/Examens effectues en rapport avec l'effet suspecte:</label><br>
	        <textarea name="Bilans"></textarea>
	<label for="start">Traitement correcteur eventuel:</label>
	        <textarea name="traitement"></textarea>
	<label for="start">Autres:</label>
	        <textarea name="autre"></textarea>
</fieldset>
            <br>

<!-- 6eme fieldset -->
<fieldset >
	<legend alin="center">
	   Service et/ou Profil Declarant:
    </legend>

	<label for="start"><b>Service:</b></label>
	    <input type="text" name="service"  size="45">
	    <br>

	<label for="start"><b>Profile:</b></label>
	        <input type="checkbox" name="Profile" value="Medecin"> <label>Medecin</label>
			<input type="checkbox" name="Profile" value="Pharmacien"><label>Pharmacien</label>
			<input type="checkbox" name="Profile" value="Dentiste"><label>Dentiste</label>	
			<input type="checkbox" name="Profile" value="Infirmier"><label>Infirmier</label>
			<input type="checkbox" name="Profile" value="Sage Femme"><label>Sage Femme</label>
			<input type="checkbox" name="Profile" value="Autre"><label>Autre</label>
			<br>
	<label for="start"><b>Telephone:</b></label>
			<input type="text" name="tel"  size="45">
</fieldset>
            <br>
			<br>

<!-- boutton envoyer-->     
      <input class="styled1" type="submit" name="forminscription" value="Save">

<!-- Fin de la form-->
</form>

<!-- pied du formulaire -->
<div class="adress">Adress : Centre Règional de Pharmacovigilance de l'Oriental, Service de pharmacie et de Pharmacologie clique</div><div class="adress2">
Centre Hospitalier Universitaire Mohammed VI, Bp 4806 Oujda Université 60049 Oujda.</div>

<div class="tel">
<table>
	<tr>
		<td class="te">Tel : 0536569119</td>
		<td>Fax : 0536533554</td>
		<td class="cr">Courriel : crpvorientaimaroc@gmail.com</td>
	</tr>
</table><br><br>
</div>

</body>
</html>

