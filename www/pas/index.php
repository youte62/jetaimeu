<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="/pas/css/youte.css" />
 
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Je t'aime" />
<meta name="author" content="Jérémy Lheureux" />
<meta name="keywords" content="amour, sentiment, je t'aime, prénom" />
<meta name="language" content="french francais" />

<title>Je voulais te dire que je ne t'aime pas</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22842465-3', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

    <div id='div-header'></div>
    <div id='div-body'>
        <div id='div-inb'>
            <div id='div-int'>
                <?php
                $nom = idn_to_utf8(substr($_SERVER['HTTP_HOST'],0,-10));
             if (($nom != "www")) {
				
				if ($nom == "hitler") $nom="connard";
                $nom2 = $nom;
                $nom = str_replace('_', ' ', $nom); 
                $lgt= strlen($nom);
				$nom = str_replace(".","'", $nom);
				$lgptmax=strlen($nom);
				$phrase = explode(" ", $nom);
				$xmax=count($phrase);
				$x=0;
				$nom1 = $phrase[$x]." ";
				$lgpt= strlen($nom1);
				if ($xmax != 1){
					while ($x < ($xmax)){
						if (($lgpt < 20) && ($lgptmax<20)){
							while ($lgpt < 20) {
								$x++;
								$nom1= $nom1.$phrase[$x]." ";
							//	$nomx= $nom1.$phrase[$x+1];
								$lgpt = strlen($nom1);
								if ($x == ($xmax-1))  $lgpt=20;
							}

						} elseif (($lgpt < 20) && ($lgptmax>19)){
							while ($lgpt < 20) {
        	                                                $x++;
                	                                        $nom1= $nom1.$phrase[$x]." ";
                        	                                $nomx= $nom1.$phrase[$x];
                                	                        $lgpt = strlen($nomx);
												}
							$nom1=$nom1."</br>";
							$x++;
						}
						if ((($x+1) != $xmax) || ($lgptmax > 19)) $nom1= $nom1.$phrase[$x]." ";
						$x++;

					}

				}
				else
				{
				$nom1= ucfirst($nom1);
				}


                ?>
                <div id='div-int-m'>
                <?php
                    echo "Je t'aime pas $nom1";
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
                        <p><input type="text" name="nom" /></p>
                        <p><input type="submit" value="Je t'aime" name="valid"><input type="submit" value="ou pas" name="valid"></p>
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
        if (($nom != "www")) {
		if (strlen($nom)>0) {
			
			 ?>
			Copier le lien suivant : <a href="http://<?php echo "$nom2.jetaim.eu/pas"; ?>">http://<?php echo "$nom2.jetaim.eu/pas"; ?></a> <br/> 
			Et donnez le à la bonne personne !<br/>
			<?php
		}
		else
		{
			 ?>
			Copier le lien suivant : <a href="http://<?php echo "jetaim.eu/pas"; ?>">http://<?php echo "jetaim.eu"; ?></a> <br/> 
			Et donnez le à la bonne personne !<br/>
			<?php		
		
		}
		?>
        Dites lui je t'aime à votre tour:<br/>
        <a href='http://www.jetaim.eu'> www.jetaim.eu</a>
        <?php
        }
        ?>
<br/>

<a href="http://<?php echo "www.signification-prenom.net/signification_des_prenoms/prenom_$nom2.html"; ?>">  Signification du prénom </a> <br/> 
<a href="http://flore.jetaim.eu">flore.jetaim.eu</a> .-. <a href="http://jules.jetaim.eu">jules.jetaim.eu </a> .-. <a href="http://anakin.jetaim.eu">anakin.jetaim.eu </a> .-. 
<a href="http://rose.jetaim.eu">rose.jetaim.eu </a> .-. <a href="http://alexandre.jetaim.eu">alexandre.jetaim.eu </a> .-. <a href="http://xavier.jetaim.eu">xavier.jetaim.eu </a>


    </div>

</body>
</html>







