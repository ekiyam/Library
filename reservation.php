
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
        <div class="table">
            <div class="table_header">
                <p>table des reservation</p>
                <div> <input placeholder="livre" /> <button class="add_new">+ Add New</button> </div>
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
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src= /></td>
                            <td>Date note</td>
                            <td>yagami.lite@gmail.com</td>
                            <td>Rakhi Gupta</td>
                            <td> <button>modifier</button> <button>supprimer</button> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src= /></td>
                            <td>Laptop</td>
                            <td>vejata@gmail.com</td>
                            <td>Vejata</td>
                            <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src= /></td>
                            <td>Pencil</td>
                            <td>shweta@gmail.com</td>
                            <td>Shweta</td>
                            <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src= /></td>
                            <td>Jeans</td>
                            <td>anjaligupta@gmail.com</td>
                            <td>Anjali Gupta</td>
                            <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src= /></td>
                            <td>Iphone</td>
                            <td>adarsh@gmail.com</td>
                            <td>Adarsh</td>
                            <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src= /></td>
                            <td>Pocket Golden Watch</td>
                            <td>monti@gmail.com</td>
                            <td>Monti</td>
                            <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src= /></td>
                            <td>Pocket Watch</td>
                            <td>naveen@gmail.com</td>
                            <td>Naveen</td>
                            <td> <button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
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