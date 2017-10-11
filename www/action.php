// pour quentin j'ai remis le fichier d'origine en attendant car ca foire avec ton code :D
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="/css/youte.css" />
 
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>

<meta name="description" content="Je t'aime" />
<meta name="author" content="Jérémy Lheureux" />
<meta name="keywords" content="amour, sentiment, je t'aime," />
<meta name="language" content="french francais" />

<title>Je voulais te dire que je t'aime</title>
</head>
<body>
<?php
$nom = $_POST['nom'];

if ($_post['valid']="je t'aime") {
	if (strlen($nom)>0) {
		$nom = trim($nom);
		$nom = str_replace(' ', '_', $nom);
		$nom = str_replace("'",".", $nom);
		$nom = idn_to_ascii($nom);
		//$nom=htmlentities($nom, ENT_QUOTES, "UTF-8");
		$redirection = "location: http://$nom.jetaim.eu/";
	}
	else
	{
		$redirection = "location: http://jetaim.eu";
	}
else
{
	if (strlen($nom)>0) {
		$nom = trim($nom);
		$nom = str_replace(' ', '_', $nom);
		$nom = str_replace("'",".", $nom);
		$nom = idn_to_ascii($nom);
		//$nom=htmlentities($nom, ENT_QUOTES, "UTF-8");
		$redirection = "location: http://$nom.jetaim.eu/pas";
	}
	else
	{
		$redirection = "location: http://jetaim.eu/pas";
	}
}
header($redirection);
?>    
</body>
</html>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22842465-3', 'auto');
  ga('send', 'pageview');

</script>





