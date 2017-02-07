<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum</title>
	<meta charset="utf-8">
	<base href="http://camillec.dijon.codeur.online/CodeIgniter-3.1.3/">
</head>
<body>
	<form method="post" action="lorem/generer">
		<label>Combien de mot ?</label>
		<input type="number" id="nb" name="nombre" min="1" max="150">

		<label>Combien de paragraphe ?</label>
		<input type="number" id="nb" name="paragraphe" min="1" max="10">
	  <input type="checkbox" name="theme[]" value="creation">Création
	  <input type="checkbox" name="theme[]" value="astronomie">Astronomie

		<input type="submit" /> 
	</form>

