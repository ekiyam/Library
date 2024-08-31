
<?php
session_start();
  include("connexion.php");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>User</title>
    </head>
  
 <!--

        <div class="side">
    
    
            <form action="">
                <input type="serch">
                <button type="submit">Search</button>
            </form>
    
            <ul>
                <li><a href="">interet 1</a></li>
                <li><a href="">interet 2</a></li>
                <li><a href="">interet 3</a></li>
                <li><a href="">interet 4</a></li>
                <li><a href="">interet 5</a></li>
                <li><a href="">interet 6</a></li>
                <li><a href="">interet 7</a></li>
                <li><a href="">interet 8</a></li>
                <li><a href="">interet 9</a></li>
                <li><a href="">interet 10</a></li>
                
            </ul>
            
       
        </div>

 -->

<body >
  
    <header> 
        <nav>
             <label for="fst biblio">BIB FSTE</label>
           
             <div class="content">
              <ul class="links">
                <li><a href="userA.php">Accueil</a></li>
                <li>
                  <a href="ouvrage.php" class="desktop-link">ouvrages</a>
                  <input type="checkbox" id="show-services">
                  <label for="show-services">Services</label>
                  <ul>
                    <li><a href="<? afficherlivres('mathématiques');?>">math</a></li>
                    <li><a href="#">info</a></li>
                    <li><a href="#">physic</a></li>
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
                <li>
                    <a href="moncompte.php">My acount</a>
                    <input type="checkbox" id="show-features">
                    <label for="show-features">Features</label>
                    <ul>
                      <li><a href="#">mes information</a></li>
                      <li><a href="#">mes livres</a></li>
                    </ul>
                </li>
              </ul>
            </div>
             <div class="userbar">
                <img src="BANA.png" alt="user">
                <ul class="inf">
                    <li><p>name</p></li>
                    <li><button class="btn">Deconnexion</button></li>
                </ul>
             
            </div>
       </nav>
   
   </header>
         
   <div class="table">
    <div class="table_header">
        <p>Livre Details</p>
        <div> <form action="ouvrage.php" method="post"><input name="livre" placeholder="livre" /> <button class="add_new" name="valider">chercher</button></form></div>
    </div>
    <div class="table_section">
        <table>
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>livre</th>
                    <th>titre</th>
                    <th>date de</th>
                    <th>Auteur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
             function afficherlivres($livre){
              
                $res=mysqli_query($cn,"select * from books where Categorie='$livre'"); 
                while($data=mysqli_fetch_assoc($res))
                {
                    echo '<tr>';
                    echo '<td>'.$data['id_ouvrage'].'</td>';
                    echo '<td>'.$data['Titre'].'</td>';
                    echo '<td>'.$data['Anne_edition'].'</td>';
                    echo '<td>'.$data['auteur'].'</td>';
                    echo '<td>'.$data['auteur'].'</td>';
                    echo ' <td> <button>'.'infos</button> </td>';
                    echo '<tr>';
                }
                          }
            /*
            if(isset($_POST['valider']))
            {
                $livre=$_POST['livre'];
                $res=mysqli_query($cn,"select * from books where Titre='$livre'"); 
                while($data=mysqli_fetch_assoc($res))
                {
    echo '<tr>';
    echo '<td>'.$data['id_ouvrage'].'</td>';
    echo '<td>'.$data['Titre'].'</td>';
    echo '<td>'.$data['Anne_edition'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo ' <td> <button>'.'infos</button> </td>';
    echo '<tr>';
}       
 }
elseif($livre='mathématiques')
{
    $res=mysqli_query($cn,"select * from books where Categorie='$livre'"); 
    while($data=mysqli_fetch_assoc($res))
    {
echo '<tr>';
echo '<td>'.$data['id_ouvrage'].'</td>';
echo '<td>'.$data['Titre'].'</td>';
echo '<td>'.$data['Anne_edition'].'</td>';
echo '<td>'.$data['auteur'].'</td>';
echo '<td>'.$data['auteur'].'</td>';
echo ' <td> <button>'.'infos</button> </td>';
echo '<tr>';
} }
    else{
                $res=mysqli_query($cn,"select * from books "); 
while($data=mysqli_fetch_assoc($res))
{
    echo '<tr>';
    echo '<td>'.$data['id_ouvrage'].'</td>';
    echo '<td>'.$data['Titre'].'</td>';
    echo '<td>'.$data['Anne_edition'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo ' <td> <button>'.'infos</button> </td>';
    echo '<tr>';
}
            }

          function afficherlivres(){
              
$res=mysqli_query($cn,"select * from books "); 
while($data=mysqli_fetch_assoc($res))
{
    echo '<tr>';
    echo '<td>'.$data['id_ouvrage'].'</td>';
    echo '<td>'.$data['Titre'].'</td>';
    echo '<td>'.$data['Anne_edition'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo ' <td> <button>'.'infos</button> </td>';
    echo '<tr>';
}
          }*/
          $res=mysqli_query($cn,"select * from books "); 
while($data=mysqli_fetch_assoc($res))
{
    echo '<tr>';
    echo '<td>'.$data['id_ouvrage'].'</td>';
    echo '<td>'.$data['Titre'].'</td>';
    echo '<td>'.$data['Anne_edition'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo '<td>'.$data['auteur'].'</td>';
    echo ' <td> <button>'.'infos</button> </td>';
    echo '<tr>';
}
?>
            <tbody>
                <tr>
                
                    <td>1</td>
                    <td><img src= /></td>
                    <td>Date note</td>
                    <td>yagami.lite@gmail.com</td>
                    <td>Rakhi Gupta</td>
                    <td> <button>infos</button> </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="pagination">
        <div><i class="fa-solid fa-angles-left"></i></div>
        <div><i class="fa-solid fa-chevron-left"></i></div>
        <div>1</div>
        <div>2</div>
        <div><i class="fa-solid fa-chevron-right"></i></div>
        <div><i class="fa-solid fa-angles-right"></i></div>
    </div>
</div>

           <footer>
               <p>CONTACTER nous</p>
           </footer>
           
        
        
    </body>
    </html>