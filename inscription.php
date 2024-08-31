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

                <li>  <button><a href="index.php">Connexion</a></button></li>
            </ul>
        </nav>
    
    </header>
   
    <div>


  
    <div class="infos">
      
            <h1>BIENVENIR u bibleotheque de la fste </h1>
            <p>10000 ouvrages pour les etudiant de la faculte du science et techniques</p>

       
       
    </div>
    <div class="wrapper">
        <section class="form signup">
           
            <form method="post" id="inscription" enctype="multipart/form-data">
                <div class="error-text">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">nom</label>
                        <input  type="text" name="nom" placeholder="nom" class="ch" required="required">
                    </div>
                    <div class="field input">
                        <label for="">prenom</label>
                        <input type="text" name="prenom" placeholder="prenom" class="ch" required="required">
                    </div>
                </div>
                <div class="field input">
                    <label for="">CNE/CNI</label>
                    <input type="text" name="code" placeholder="CNE/CNI" class="ch" required="required">
                    
                </div>
                <div class="field input">
                    <label for="">Téléphone</label>
                    <input type="text" name="phone" placeholder="Téléphone" class="ch" required="required">
                    
                </div>
                 <div class="field input">
                    <label for="">Email Address</label>
                    <input type="email" name="email" placeholder="email" class="ch" required="required">
                    
                </div>
                
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="mp1" placeholder="mot de passe" class="ch" required="required">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input">
                    <label for=""> Conferm Password</label>
                    <input type="password" name="mp2" placeholder="confirmer mot de passe" class="ch" required="required">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field image">
                    <label for="">Select image</label>
                    <input type="file" name="photo" class="ch" >
                </div>
                <div class="field button">
                    <input type="submit" name="valider" value="Valider" class="ch" >
                </div>  
                
                <div class="link"><p>Already Signed Up <a href="index.php"> Login Now</a></p></div>
                
            </form>

            <?php
include("connexion.php");

if(isset($_POST['valider']))
{
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $code=$_POST['code'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $mp1=$_POST['mp1'];
  $mp2=$_POST['mp2'];

if($mp1==$mp2)
{
  $mp=sha1($mp1);
  $res=mysqli_query($cn,"insert into adherent values (NULL,'$nom','$prenom','$code','$phone','$email','$mp')");  

$id=mysqli_insert_id($cn);
$photo="$id.jpg";

move_uploaded_file($_FILES['photo']['tmp_name'], "images/$photo");
echo 'Inscription réussie !!!';
}
else
  echo 'les mots de passe ne sont pas identiques ';

}
?>
           
            
        </section>
        
    </div>
</div>
    <footer>
        <p>CONTACTER nous</p>
    </footer>

</body>
</html>