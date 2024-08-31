
<php lang="en">
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
        <div class="books-list">
           
            <h1> My list of books.</h1>
            <table>
                <tr>
                    <th>book name</th>
                    <th>date of umprint</th>
                    <th>date of return</th>
    
    
                </tr>
                <tr>
                    <td> book 1</td>
                    <td> 10/05/2022</td>
                    <td> 20/05/2022</td>
                    <td></td>
                </tr>
                <tr>
                    <td> book 2</td>
                    <td> 10/05/2022</td>
                    <td> 20/05/2022</td>
                    <td><button>infos</button></td>
                </tr>
                <tr>
                    <td> book 3</td>
                    <td> 10/05/2022</td>
                    <td> 20/05/2022</td>
                    <td><button>infos</button></td>
                </tr>
                <tr>
                    <td> book 4</td>
                    <td> 10/05/2022</td>
                    <td> 20/05/2022</td>
                    <td><button>infos</button></td>
                </tr>
                <tr>
                    <td> book 5</td>
                    <td> 10/05/2022</td>
                    <td> 20/05/2022</td>
                    <td><button>infos</button></td>
                </tr>
                <tr>
                    <td> book 6</td>
                    <td> 10/05/2022</td>
                    <td> 20/05/2022</td>
                    <td><button>infos</button></td>
                </tr>
    
            </table>
        </div>
        <footer>
            <p>CONTACTER nous</p>
        </footer>

     <nav>
       
                   <label for="fst biblio">BIB FSTE</label>
                   <ul class="menu">
                    <li><a href="userA.php">Accueil</a></li>
                    <li><a href="ouvrage.php">Ouvrages</a></li>
                    <li><a href="moncompte.php">My acount</a></li>
                   
                   </ul>

                   <div>
                       <img src="BANA.png" alt="user">
                    <ul>
                       
                        <li><p>name</p></li>
                        <li><button class="btn">Deconnexion</button></li>
                    </ul>
       
                   </div>
               </nav>
           
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

            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>livre</th>
                            <th>titre</th>
                            <th>date d Umprint</th>
                            <th>Auteur</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src= /></td>
                            <td>1</td>                         
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
    </php>