
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>User</title>
    </head>
    <body>
      
         <header> 
            <nav>
        
         
       
                <label for="fst biblio">Admin</label>
               
                 <div class="content">
                  <ul class="links">
                    <li><a href="forumA.php">Accueil</a></li>
                    <li>
                      <a href="ouvrages.php" class="desktop-link">ouvrages</a>
                      <input type="checkbox" id="show-features">
                      <label for="show-features">ouvrages</label>
                      <ul>
                        <li><a href="#">Drop Menu 1</a></li>
                        <li><a href="#">Drop Menu 2</a></li>
                        <li><a href="#">Drop Menu 3</a></li>
                        <li><a href="#">Drop Menu 4</a></li>
                      </ul>
                    </li>
                     <li>
                      <a href="reservation.php" class="desktop-link">reservation</a>
                      <input type="checkbox" id="show-features">
                      <label for="show-features">reservation</label>
                      <ul>
                        <li><a href="#">Drop Menu 1</a></li>
                        <li><a href="#">Drop Menu 2</a></li>
                        <li><a href="#">Drop Menu 3</a></li>
                        <li><a href="#">Drop Menu 4</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="umprint.php" class="desktop-link">umprint</a>
                      <input type="checkbox" id="show-services">
                      <label for="show-services"></label>
                      <ul>
                        <li><a href="#">Drop Menu 1</a></li>
                        <li><a href="#">Drop Menu 2</a></li>
                        <li><a href="#">Drop Menu 3</a></li>
                        <li>
                          <a href="#" class="desktop-link">More Items</a>
                          <input type="checkbox" id="show-items">
                          <label for="show-items">More Items</label>
                          <ul>
                            <li><a href="#">Sub Menu 1</a></li>
                            <li><a href="#">Sub Menu 2</a></li>
                            <li><a href="#">Sub Menu 3</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="users.php">utilistaeurs</a></li>
                  </ul>
                </div>
               <button class="btn3">Deconnexion</button>
              </nav>
         
        
        </header>
        <div class="wrapper">
            <div class="hforum">
                <h1>FORUM</h1>
                <h3> Repondre au questiones ici!</h3>
            </div>
        <section class="chat-box">

        <?php
  /* changer le format     
  function changedate($dt)

{
$tab = explode("-",$dt);
$nd = $tab[2]."-".$tab[1]."-".$tab[0];
return $nd;
}

  de la date en français*/
  include("connexion.php");

$res=mysqli_query($cn,"select * from adherent,message where adherent.id_user=message.id_user order by id DESC"); 
while($data=mysqli_fetch_assoc($res))
{
  echo '<div id="div1">
  <img src="images/'.$data['id_user'].'.jpg" class="photo" width="30px" height="30px">';
  echo $data['nom'];
  echo '<br>'.$data['prenom'].'</div>';
   echo '<div id="div2">Posté le : '.$data['date_msg'];
  echo ' à '.$data['heure_msg'];
  echo '<br>'.$data['text'].'</div>';
 
}

?>
            
            <div id="div1">
                <img src="BANA.png" class="photo" width="30px" height="30px">
                nom<br>prenom
            </div>
            <div id="div2">Posté le : date_message
                 à  heure_message
                <br>texte_message
            </div>
            
         </section>
         <div class="forum">
            <form action="" method="post">
                <textarea name="message"  placeholder="Votre question?" id="zmessage"></textarea>
                <input type="submit" name="envoyer" value="Envoyer" class="btn2">
            </form> 
         </div>
            <?php
if(isset($_POST['envoyer']))
{

  $id=$_SESSION['id_user'];
  $msg=$_POST['message'];
  $date=date('Y-m-d');
  $heure=date('H:i');
  $req1=mysqli_query($cn,"insert into message values (NULL,'$msg','$date','$heure','$id')"); 
header("location:userA.php");
}
?>
        
   </div>
    
    
        <footer>
            <p>CONTACTER nous</p>
        </footer>
        
    </body>
    </html>