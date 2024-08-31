<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="chatstyle.css">

    <title>BIB</title>
</head>
<body background="bib.jpg">
  
    <header> 
        <nav>
            <label for="fst biblio">BIB FSTE</label>
            <ul class="menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="apropos.php">A PROPOSE</a></li>
                <li><a href="contactern.php">CONTACTER NOUS</a></li>
            </ul>
            <ul class="btn">
                <li> <button><a href="inscription.php">Inscription</a></button></li>
               
            </ul>
        </nav>
    
    </header>
   
    <div>


  
    <div class="infos">
      
            <h1>BIENVENIR u bibleotheque de la fste </h1>
            <p>10000 ouvrages pour les etudiant de la faculte du science et techniques</p>
       
    </div>
    <div class="wrapper" >
        
        <section class="form signup">
            
            <form action="userA.php" method="post" id="flogin">
               
                 <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" name="email" placeholder="Votre Email" class="ch">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input  type="password" name="mp" placeholder="mot de passe" class="ch">
                    <i class="fas fa-eye"></i>

                </div>
               
                <div class="field button">
                    <input type="submit" name="valider" value="Valider" class="ch">
                </div>  
                
                <div class="link"><p>Not Yet Signed Up <a href="inscription.php"> Signing Up Now</a></p></div>
                
            </form>
<?php
include("connexion.php");

if(isset($_POST['valider']))
{
	$email=$_POST['email'];
    $mp=sha1($_POST['mp']);
$res=mysqli_query($cn,"select * from adherent where email='$email' and mp='$mp'");	
$nbr=mysqli_num_rows($res);
if(count($nbr==0)
echo '<br><br>login ou mot de passe incorrects ';
else
{
	$data=mysqli_fetch_assoc($res);
	$_SESSION['id_user']=$data['id_user'];
	$_SESSION['nom']=$data['nom'];
	$_SESSION['prenom']=$data['prenom'];
    $_SESSION['cne']=$data['cne'];
    $_SESSION['tele']=$data['tele'];
	$_SESSION['email']=$data['email'];
	$_SESSION['mp']=$data['mp'];

	header("location:userA.php");
} }
?>
           
            
        </section>
        
    </div>
</div>
    <footer>
        <p>CONTACTER nous</p>
    </footer>

</body>
</html>