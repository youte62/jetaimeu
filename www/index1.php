<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="/css/youte.css" />
 
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Je t'aime" />
<meta name="author" content="Jérémy Lheureux" />
<meta name="keywords" content="amour, sentiment, je t'aime, prénom" />
<meta name="language" content="french francais" />

<title>Je voulais te dire que je t'aime</title>
</head>
<body>

    <div id='div-header'></div>
    <div id='div-body'>
        <div id='div-inb'>
            <div id='div-int'>
                <?php
                $nom = idn_to_utf8(substr($_SERVER['HTTP_HOST'],0,-10));
                    if (($nom != "www")) {
                        $nom2 = $nom;
                        $nom = str_replace('_', ' ', $nom); 
                        $lgt= strlen($nom);
			$nom = str_replace(".","'", $nom);
				if ($lgt > 15)  {
				$phrase = explode(" ", $nom);
				$xmax=count($phrase);
				$x=0;
				$nom1 = $phrase[$x]." ";
				$lgpt= strlen($nom1);
					while ($x < $xmax){
						if ($lgpt < 20){
							while ($lgpt < 20){
							$x++;
							$nom1= $nom1.$phrase[$x]." ";
							$nomx= $nom1.$phrase[$x+1]." "; 
							$lgpt = strlen($nomx);
							}
						$nom1=$nom1."</br>";
						$x++;
						}
					$nom1= $nom1.$phrase[$x]." ";
					$x++;
					}

				}

                        ?>
                        <div id='div-int-m'>
                        <?php
                            echo "Je t'aime $nom1";
                        ?>
                            </div>
                        <?php
                    }
                    else {
                        ?>
                        <div id='div-int-www'>
                        Vous souhaitez lui dire je t'aime ? <br />
                        Mettez alors ici son prénom !<br />
                        Une fois fait, il ne vous restera plus <br />
                        Qu'à copier l'adresse du site ! <br />
                        Et à l'envoyer à votre moitié.
                        <form action="action.php" method="post">
                        <p><input type="text" name="nom" />
                        <input type="submit" value=" OK"></p>
                        </form>
                        </div>
                        <?php

                    }
                ?>
            </div>
        </div>
    </div>
    <div id='div-footer'>
        <?php
        if (($nom != "www") or (!$nom)) { ?>
        Copier le lien suivant : <a href="http://<?php echo "$nom2.jetaim.eu"; ?>">http://<?php echo "$nom2.jetaim.eu"; ?></a> <br/> 
	Et donnez le à la bonne personne !<br/>
        Dites lui je t'aime à votre tour:<br/>
        <a href='http://www.jetaim.eu'> www.jetaim.eu</a>
        <?php
        }
        ?>
<br/>

<a href="http://<?php echo "www.signification-prenom.net/signification_des_prenoms/prenom_$nom2.html"; ?>">  Signification du prénom </a> <br/> 



    </div>

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





