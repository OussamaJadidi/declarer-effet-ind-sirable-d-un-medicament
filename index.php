<!-- debur de header  -->
<?php
    include "header/header.php";
?>
<!-- fin de header -->


            <!-- debut de heigh body : "slide images" -->
            
            <div class="globalHeighBody">
        
            <div class="sousGlobalHeighBody">
                <div class="heighBody" >
                <div class="heighBody-content">
                    <p>
                        Déclarer et rechercher les effets indésirable des produites de santé
                    </p>
                </div>
            </div>
            
            <div class="heighBody1" >
                <div class="heighBody1-content">
                    <p>
                        Il est important de declarer un effet indesirable, 
                        meme s il est mentionne dans la notice du medicament. 
                        Cela permet d ameliorer la securite des medicaments
                    </p>
                </div>
            </div>
            <div class="heighBody2" >
                <div class="heighBody2-content">
                    <p>
                        le signalement d un effet indesirable d un medicament peut aboutir à des actions benefiques à tous : 
                        ertaines prescriptions à des medecins specialistes ou encore retirer du marche un medicament juge dangereux
                    </p>
                </div>
            </div>
            <div class="empty"></div>
            </div>
        </div>

        <!-- fin de slide images -->


        <!-- debut des cards d'articles -->
        <div class="lowBody">
            <div class="lowBody-cards">
                <div class="lowBody-cards-icon">
                    <span style="font-size: 25px"><b>?</b></span>
                </div>
                <h2 onMouseDown="go_to_recherche_input()">>C'est quoi un effet indésirable</h2>
                L'effet indésirable est défini comme étant : " une réaction nocive et non voulue, se produisant
                aux posologies normalement utilisées chez l'homme pour la prophylaxie, le diagnostic ou le
                traitement d'une maladie ou la modification d'une fonction physiologique ou résultant d'un
                mésusage du médicament, constituant un syndrome de sevrage lors de l'arrêt du produit ou
                d'un syndrome de dépendance ainsi que toute réaction découlant d'un usage abusif ou d'une
                erreur médicamenteuse. H comprend également toute réaction nuisible pouvant découler
                d'une mauvaise qualité du médicament ".
            </div>
            <div class="lowBody-cards">
                <div class="lowBody-cards-icon">
                    &nbsp&nbsp<i class="fa -regular fa-bullhorn"></i>
                </div>
                <h2>Déclarer un effet indésirable</h2>
                Un effet indésirable peut être déclaré par le patient lui-même. Il peut aussi contacter une association de patients agréée qui se chargera de déclarer l’effet indésirable.
                Tous les professionnels de santé peuvent également faire un signalement. C’est même obligatoire pour les médecins, chirurgiens-dentistes, sages-femmes et pharmaciens.
                L’entreprise pharmaceutique qui produit le médicament doit signaler tout effet indésirable dont elle a connaissance, vous pouvez déclarer vous aussi par cliquez le lien suivant:
                <span onMouseDown="open_reclamation_page()"><a href="">Déclarer un effet indésirable</a></span>
            </div>
            <div class="lowBody-cards">
                <div class="lowBody-cards-icon">
                    <i class="fa -regular fa-magnifying-glass"></i>
                </div>
                <h2>Rechercher un effet indésirable</h2>
                Vous pouvez chercher les effets indésirable d'un produit de sante par tapez son nom dans la bar de recherche dans la bar de menu, ou vous pouvez cliquez le lien suivant:
                <span><a href="#recherche">Rechercher un effet indésirable</a></span>
            </div>
        </div>
        <!-- fin des cards d'articles -->


<!-- debut de footer  -->
<?php
    include_once "footer/footer.php";
?>
<!-- fin de footer  -->