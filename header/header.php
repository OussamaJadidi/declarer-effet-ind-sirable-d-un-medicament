<!DOCTYPE html>
<html>
    <head>
        <title>CHU Effet Indésirable </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../CHU-projet/header/css/style.css" type="text/css">
        <link rel="stylesheet" href="../../CHU-projet/header/css/header.css" type="text/css">
        <link rel="stylesheet" href="../../CHU-projet/header/css/login.css" type="text/css">
        <link rel="stylesheet" href="../../CHU-projet/index/css/heighBody.css" type="text/css">
        <link rel="stylesheet" href="../../CHU-projet/index/css/lowBody.css" type="text/css">
        <link rel="stylesheet" href="../../CHU-projet/footer/css/footer.css" type="text/css">
        <link rel="stylesheet" href="../../CHU-projet/contact/css/contact.css" type="text/css">


        
        <script src="//localhost/CHU-projet/header/JavaScript/SeConnecter.js"></script>
        <script src="//localhost/CHU-projet/index/JavaScript/index.js"></script>
        <script src="https://kit.fontawesome.com/c6da55cc0b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
                <div>
                    <a href="index.php" class="logo">
                        <img src="../../CHU-projet/header/images/logo_chu_phar.jpeg" alt="chu logo"  width="79%" >
                    </a>
                </div>
                <nav>
                    <ul>
                        <li><div class="search">
                            <form action="" method="post">
                                <span class="search-input"><input type="text" placeholder="search" id="recherche"></span>
                                <button><img src="" alt=""><i class="fa fa-search"></i></button>
                            </form>
                        </div></li>
                        <li><a href="//localhost/CHU-projet/#" >Accueil</a></li>
                        <li><a href="//localhost/CHU-projet/apropos/apropos.php" >Apropos</a></li>
                        <li><a href="//localhost/CHU-projet/contact/contact.php" >Contact</a></li>
                        <li class="services">
                            <button class="services-link menu-links">Services <i class="fa -light fa-angle-down"></i></button>
                            <div class="services-menu">
                                <table>
                                    <tr>
                                        
                                        <td class="td2" onMouseDown="open_reclamation_page()"><button type="button"> <i class="fa -regular fa-bullhorn"></i>&nbsp&nbsp&nbsp&nbsp <span>Réclamer</span></button></td>
                                    </tr>
                                    <tr>
                                            
                                            <td class="td2" onMouseDown="go_to_recherche_input()"><button type="button"> <i class="fa -regular fa-magnifying-glass"></i>&nbsp&nbsp&nbsp&nbsp <span>Rechercher</span></button></td>
                                    </tr>
                                    <tr>
                                            
                                            <td class="td2"><button type="button"> <i class="fa -solid fa-chart-line"></i>&nbsp&nbsp&nbsp&nbsp <span>Statistiques</span></button></td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </li>
                        <li><button class="se-connecter-button" onClick="SeConnecter()">Se connecter</button></li>
                    </ul> 
                        
                </nav>       
                
        </header>
        
        
        <div class="login-page">
            <div class="login-formulaire">
            <button class="close" onClick="cllose()">+</button>
               <div class="conteneur-formulaire">
                    <form action="" method="post" >
                        <div class="description-d-espace">
                            
                            <h1>Se connecter</h1>
                            <h4>Cet espace est resérveé aux professionnels du secteur de la santé!</h4>
                        </div>
                        <div class="inscription">
                            <input type="text" placeholder=" Email / Nom d'utilisateur" class="inputform" name="emailID">
                            <input type="password" onmouseout="form5()" placeholder=" Mot de passe" class="inputform" name="motPasseID">
                            <button>Se connecter</button>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </body>
    
</html>