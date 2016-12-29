<?php
    session_start();
    // Permet de sauvegarder session
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Smoothies</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Abonnement de smoothies</h2>
        
        <p>
            Creez un compte pour commencer<br/>   
        </p>

        <form method="post" action="login.php">
                <p>
                    <input type="text" name="login"/><br/>
                    <input type="text" name="bar2"/><br/>
                    <input type="submit" name="Connection"/><br/>
                </p>
        </form>

		<a href="bonjour.php?nom=Dupont&amp;prenom=Jean&amp;repet=a">Dis-moi bonjour !</a>
		<?php 

            if(isset($_POST["bar1"]) AND isset($_POST["bar2"])){
                $_SESSION["bar1"] = $_POST["bar1"];
                $_SESSION["bar2"] = $_POST["bar2"];
            }
			include("menu.php"); // Inclus la page menu a cet encroit
            echo ' <a href="index3.php?nom=Pierre&amp;prenom=Jean">transmission durl</a></li> ';

			$var = 2; // Crer une variable
            // On s'amuse avec les guillement
            $variable = "Mon \"nom\" est Mateo21";
            $variable = 'Je m\'appelle Mateo21';
            $variable = 'Mon "nom" est Mateo21';
		?>
		
		<p>
			Salut les amis de <?php echo $var; ?> ans
		</p>

        <?php 
            if($var == 2)
            {
                echo 'var is ' . $var; // Concatenation grace au point
                echo "<br> var is $var <br>"; //Avec guillement gouble ou peut faire ca 
            }
            elseif ($var== 3) {
                echo 'var is ' . $var;
            }

            $varBol = false;

            if($varBol){
                echo "avarBol is $varBol";
            }elseif (! $varBol) {

        ?>        
                <p> varBol is <?php echo $varBol; ?>
        <?php // Permet de ne pas avoir a utiliser php pour afficher du text
            }

            //Utiliser AND et OR pour les conditions multiples

            include("boucles.php");

            function printff($hey){
                echo 'Salut ' . $hey;
            }

            printff("connard");
            printf("Test");
        ?>
		
        <?php
            include("fonction.php");
            echo '<br>' . $carre = carre(5);
            echo '<br>' . $carre;

            include("tab.php");
        ?>
    </body>
</html>