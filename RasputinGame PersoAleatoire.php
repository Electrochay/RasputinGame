<!DOCTYPE html>
<html>
    <head>
        <title>RasputinGame Perso Aléatoire</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="src/img/logo_rasputin.png">

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="src/css/RasputinGame%20PersoAleatoire.css">
        <!-- CSS -->

        <!-- Jquery / AJAX -->
        <script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
        <!-- Jquery / AJAX -->

        <!-- JS -->
        <!-- <link rel="stylesheet" href="src/js/main.js"> -->
        <!-- JS -->

        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <script src="src/js/main.js"></script>
        <!-- FONT -->

    </head>
    <body>

    <div id="bloc_page">
        <?php


function AjoutElemTab($tab, $Elem)
{ $tab->append($Elem); }

function lire( )
{   return trim(fgets(STDIN)); }


	setlocale(LC_CTYPE, "fra");		//Pour gestion des caractères accentués

	//Tableau des Personnages Inscrit
	$PersoInscrit = array(
            "Erza", "Wendy", "Luxus", "Cobra", "Grey", "Jellal", "Sting", "Rog", "Palpatine", "Le Fils", "Grogu", "Iden Versio",
        "Din Djarin", "Black Panther", "Tony Stark", "Thor", "Atom", "Firestorm", "Flash", "Green Arrow", "Killer Frost", "Meliodas", "Ban",
        "King", "Gowther", "Merlin", "Luffy", "Shoto", "Katchan", "Deku", "Stain", "Danael", "Gryf", "Kyojuro", "Tanjiro", "Naruto", "Gamakichi",
        "Sasuke", "Sakura", "Hinata", "Gaara", "Caminande", "Saitama", "Genos", "Satoru", "Donatien", "Naofumi", "Yasuo", "Iruma", "Rufus Saltir",
        "Clyde Morrigan");

	//Tableau des Personnages Jouable
	$PersoJouable = array(
            "Wendy, perso de rang A", "Luxus, perso de rang A", "Cobra, perso de rang B", "Grey, perso de rang B",
        "Jellal, perso de rang A", "Sting, perso de rang A", "Rog, perso de rang B", "Le Fils, perso de rang B", "Black Panther, perso de rang A",
        "Tony Stark, perso de rang A", "Thor, perso de rang A", "Atom, perso de rang C", "Firestorm, perso de rang C", "Green Arrow, perso de rang B",
        "Meliodas, perso de rang A", "Ban, perso de rang S", "King, perso de rang A", "Shoto, perso de rang B", "Katchan, perso de rang B",
        "Deku, perso de rang B", "Stain, perso de rang C", "Danael, perso de rang A", "Kyojuro, perso de rang B", "Tanjiro, perso de rang B",
        "Naruto, perso de rang A", "Gamakichi, perso de rang C", "Sasuke, perso de rang A", "Caminande, perso de rang D", "Saitama, perso de rang D",
        "Genos, perso de rang A", "Satoru, perso de rang S", "Donatien, perso de rang A", "Yasuo, perso de rang A", "Iruma, perso de rang A",
        "Rufus Saltir, perso de rang A");

	//Tableau des Compétences
	$Competences = array(
            "Pouvoir du Dragon Céleste", "Magie Céleste", "Chasseur de Dragon", "Force du Dragon", "Pouvoir du Dragon Foudroyant", "Pouvoir du Dragon Vénimeux",
        "Ouïe du Serpent", "Dragon Vénimeux", "Pouvoir du Démon", "Démon de Glace", "Chasseur de Démon", "Crime Sorcière", "Pouvoir du Dragon Blanc", "Dragon Jumeaux",
        "Pouvoir du Dragon de l'Ombre", "Utilisateur de la Force", "Foudre Rouge", "Résistance au Lasers", "Armure de Vibranium", "Absorption d'Énergie", "Homme de Fer",
        "Surcharge Électrique", "Lévitation", "Dieu du Tonnerre", "Asgardien", "Armure", "Résistance Nucléaire", "Mélange Nucléaire Instable", "Mentor", "Endurance",
        "Pro du Tir", "Force Démoniaque", "Maitre Épéiste", "Fontaine de Jouvence", "Chastiefol", "Glace et feu", "Régulation Thermique", "Explosion", "Chair Calcinée",
        "Analyse Experte", "Symbole de la Paix", "Coagulation", "Chaussure à Pique", "Épée d'Or", "Dynameis", "Danael", "Inferno", "Dieux Maléfique",
        "Résistance aux Éléments", "Immortel", "Sabre du Soleil", "Souffle de Concentration Intégra²le", "Uniforme de Pourfendeur", "Mille ans de Souffrance",
        "Résistance de Kurama", "Vitesse de Kurama", "Power of the Hermit", "Speed of the Hermit", "BOOM", "Lenteur", "Lamalchance", "One Punch Man", "Chauve", "Flemme",
        "Vitesse Extrême", "Hyper Sensors", "Corps Métallique", "Search Eye", "Isekai", "Régénération Infinie", "Immunité aux Variations de Chaleur",
        "Immunité à la Corruption", "Résistance aux Chocs Électriques", "Résistance à la Paralysie", "Résistance au Poison", "Résistance Magique",
        "Résistance", "Belzebuth", "Je Suis Béni", "Collabo", "Voie du Vagabond", "Soif de Sang", "Solitaire", "Esquive Instantané", "Cycle du Mal",
        "Détournement d'Attaque", "Chet", "Téléportation", "Foi", "Miroir des Mondes", "Uniforme d'Exorciste", "Invocateur", "Paladin's Blade",
        "Conscience Magique 66%", "Habitant des Enfers", "Fils de Pute", "Mato Mato No Mi", "Sube Sube No Mi", "Aura Sacrée", "Realis Phrase");

	//Tableau des Capacités
	$Capacites = array(
            "Deus Corona", "Deus Eques", "Guérison des Altérations", "Deus Zéro", "Soins", "Arms", "Burnia", "Armor", "Protection Anti-Altération",
    "Hurlement du Dragon Céleste", "Tornade Céleste Éclatante", "Voie Lactée", "Éruption Foudroyante","Armure de Foudre", "Explosion de Foudre", "Boulet du Tonnerre",
    "Hurlement du Dragon Foudroyant", "Fulminate de Mercure du Dieu Rouge de la Foudre", "Tempête Foudroyante", "Mâchoire du Dragon de la Foudre", "La Loi des Fées",
    "Palais de la Foudre", "Croc du Dragon Vénimeux", "Écaille du Dragon Vénimeux", "Mur Sonore", "Paume Sonore", "Hurlement du Dragon Vénimeux", "Spirale du Dragon Vénimeux",
    "Accroche du Dragon Vénimeux", "Soucoupe de Glace", "Clone de Glace", "Épée de Glace", "Bouclier de Glace", "Lance de Glace", "Fureur du Démon de Glace", "Impact de Glace",
    "Poing Destructeur du Démon de Glace Absolue", "Danse des 7 Sabres de Glace", "Muraille de Glace", "Cocon de Glace", "Cage des ténèbres", "Flamme du Crime",
    "Cercle Magique d'Autodestruction", "Météore", "Eau Miroir", "Pleiades", "Jugement des 7 Étoiles", "Jui Leixing", "Altaris", "Sema", "Griffe du Dragon Blanc",
    "Saint Jugement de Lumière", "Rayon Sacrée", "Hurlement du Dragon Blanc", "Crocs Éclair du Dragon Sacré de l'Ombre", "Propulsion Blanche",
    "Hurlement du Dragon Sacré de l'Ombre", "Souffle Sacré du Dragon Blanc", "Comètes Sacré", "Mode Dragon Blanc de l'Ombre", "Forme d'Ombre",
    "Frappe du Dragon de l'Ombre", "Croc du Dragon de l'Ombre","Hurlement du Dragon de l'Ombre", "Propulsion de l'Ombre", "Vortex du Dragon de l'Ombre",
    "Etranglement de Force", "Attaque de Foudre", "Tutaminis","Corruption du côté Obscur", "Transformation", "Transformation en Oiseau Volant Obscure",
    "Attaque de Foudre de Zone", "Autel de Mortis", "Coup de Griffe","Amour Fraternel", "Libération d'Énergie", "Dôme de Vibranium", "Combo Griffe", "Répulseurs",
    "Missile Incendiaire", "Armure Fuirtive", "Reservoir de NanoParticules", "Bombardement Aérien", "Uni Rayon", "Protocole Ardoise Effacée", "Coup de Hache", "Vol",
    "Dieu de Quoi ?", "4°/....", "5°/....","Lancer de Hache", "7°/....", "Bring Me Thanos", "Coup Basique", "Blaster", "Droit au But", "Géant", "Atom", "Fire Ball",
    "Lance Flamme","Big Fire Ball", "The Floor Is Lava", "Flèche", "Flèche Glacée", "Flèche Électrique", "Flèche Explosive", "Flèche de Regroupement","Flèche Empoisonnée",
    "Pro des Arts Martiaux", "Protection Démoniaque", "Mille Découpe Céleste", "Full Counter", "Contre Vengeance", "Ailes Noires", "Flamme Divine","Lostvayne",
    "Embrasement Ensorcelé", "Courechouse", "Écrase", "Tribaton", "Détournement Ultime", "Vampire", "Détournement", "Cadeau", "Désastre", "Lance", "Gardien","Fossilisation",
    "Jardin de Pollen", "Tournesol", "Multiplication", "Trésor Sacré Libération", "Hosha Ki", "Glace (Em)pilée", "Prison", "Barrier" ,"Choc Thermique", "Mur de Flammes",
    "Mur de Glace", "Poing Incandescent", "Explosion", "Vitesse Turbo Explosive", "Flashbang", "Grenade", "Envol Explosif", "Exo-Catapult","Compensation", "Tir Anti Blindage",
    "Bracelet Grenadier", "Delaware Smash", "Delaware Smash Air Force", "Revêtement Intégral", "Detroit Smash", "Delaware Detroit Smash","Lancer de Couteaux",
    "Coup de Poignard", "Parade", "Coup de Sabre", "Feinte", "Anneau Doré", "Golden Fléchette", "Étoile d'Or", "Rush", "Télékinésie", "La Marque du Destin",
    "Plus Tout à Fait", "Bouclier", "Tranche", "Fouet d'Énergie", "N'est Ce Pas", "Rayon Dévastateur", "Souffle du Diable", "Casteware", "Boule de Feu","Nobori En Ten",
    "Kien Bajo", "Sei En No Uneri", "Shiranui", "Enko", "Rengoku", "Coup de Boule", "Goutte de Rosée Troublant l'Eau Dormante", "Roue D'eau","Entaille de l'Eau Calme",
    "Marées Déferlente", "Averse Providencielle", "Danse des Courants", "Embruns des Flots Déchaînés", "Les Vicissitudes de la Vie","Danse du Dieu du Feu",
    "Technique de Permutation", "Rasengan", "Déplacement Instantané", "Mini Rasenshuriken", "Les Katas du Crapaud", "Odama Rasengan","Sexy Jutsu", "Multi Clonage",
    "Futon Rasenshuriken", "Invocation Batracienne", "Rasenrangan", "Rasenkyugan", "Futon Huile de Crapaud", "Futon Gama Teppo", "Ça Coupe","Suiton Canon à Eau",
    "Katon Boule de Feu", "Invocation Inversée","Crachat de Lama", "Lamarseillaise", "Tortue Verte","Miam Miam", "Courageux Face au Danger", "Rassasié",
    "Le Plus Fort des Lamas", "Punch", "Mauvais Maître", "Gel Adhésif","Flash Aveuglant", "Poing à Haute Tension", "Mitraillage de Coups", "Professeur Kidob",
    "Jet Drave Arrow", "Dropkick", "Autodestruction", "Incinération", "Arms For Chores", "Encore Puceaux à 37 ans", "Sacrifice", "Flamme Noires", "Aqualame",
    "Blindage Corporel", "Hurlement Ultrasonique", "Potion Hypoctée", "Ice Shotgun", "Zone Anti Magie","Megiddo", "Brasier Infernal", "Souffle Toxique", "Souffle Paralysant",
    "Tonnerre Noir", "Arcane du Rappel des Morts", "Donatello de Monbazillac","Je Vous Applaudis Tous les Soir à 20h", "Je Suis un Honnête Citoyen", "Vin Empoisonné", "VITE",
    "Sanglier Domestique", "C'est Un Très Bon Cru", "Coup de Vent","Lame d’Ionia", "Mur de Vent", "Tempête d'Acier", "Murmur d'Acier", "Rafira", "Sang Humain",
    "Bague Gloutonne", "Ribera", "Chellseal", "Invocation de Callego","Coup de Pate", "Coup de Foudre", "Cerberion", "Cerberobute", "Barrière Magique", "Couteaux Maudit",
    "Décapitation", "Invocation Démoniaque", "Benizakura", "Possession","Pouvoir Démoniaque");


	$Personnage = "";
	$Capacites_Finale = array();
	$Competences_Finale = array();
	$Recapitulatif = "";
	$competence = "";
	$capacite = "";
	$compteur = 0;


	$AjtPerso = "";

	$taillePersoInscrit = count($PersoInscrit);
	$taillePersoJouable = count($PersoJouable);
	$tailleCompetences = count($Competences);
	$tailleCapacites = count($Capacites);
	$tailleCompetences_finale = count($Competences_Finale);
	$tailleCapacites_Finale = count($Capacites_Finale);
    //echo ("Informations Générales : \n");
	//echo ("Il y a : ".$tailleCapacites." Capacitées, ".$tailleCompetences." Compétences, ".$taillePersoInscrit." Persos Inscrits, et ".$taillePersoJouable." Persos Jouables.\n\n");



    //Tirage aléatoire des Personnages
        function TiragePerso($Tableau)
        {
            shuffle($Tableau);
            for ($i = 0; $i < 1; $i++)
            {
                $Personnage = $Tableau[$i];
                echo "Tu joueras avec : ".$Personnage."\n\n";
            }
        }

    //Tirage aléatoire des Compétences
        function TirageCompetences($Tableau)
        {
            $NbrCompetences = $_POST['Comp'];
            shuffle($Tableau);
            if(isset($_POST['Compétence']))
            {
                ?>
                <span class="gras">
                <?php
                echo "Compétences Tirées : "?> </span></br>
                <?php
                for ($i = 0; $i < $NbrCompetences; $i++)
                {
                    $competence = $Tableau[$i];
                    echo $competence ?> </br>
                    <?php
                    $Competences_Finale[$compteur] = $competence;
                    $compteur++;
                }
            }

        }

        //Tirage aléatoire des Capacités
        function TirageCapacites($Tableau)
        {
            $NbrCompetences = $_POST['Capa'];
            shuffle($Tableau);
            if(isset($_POST['Capacités']))
            {
                ?>
                <span class="gras">
                <?php
                echo "Capacités Tirées : "?> </span></br>
                <?php
                for ($i = 0; $i < $NbrCompetences; $i++)
                {
                    $capacite = $Tableau[$i];
                    echo $capacite ?> </br>
                    <?php
                    $Capacites_Finale[$compteur] = $capacite;
                    $compteur++;
                }
            }

        }

        //Récapitulatif
        function Recapitulatf()
        {
            echo "Voici le récapitulatif : ";?> </br>
            <?php
            echo "Tu vas jouer avec : ";?> </br>
            <?php
            echo $Personnage;
        }

        //Tirage aléatoire d'un personnage complet
        function TiragePersoComplet($Tableau1, $Tableau2, $Tableau3)
        {
            //Personnages
            shuffle($Tableau1);
            for ($i = 0; $i < 1; $i++)
            {
                $Personnage = $Tableau1[$i];
                echo "Tu joueras avec : "?> </br>
                <?php echo $Personnage?> </br>
                <?php
            }

            //Compétences
            shuffle($Tableau2);
            echo "_________________________"?> </br>
            <span class="gras">
            <?php
            echo "Liste de tes Compétences : "?> </span> </br>
            <?php
            for ($i = 0; $i < 4; $i++)
            {
                $competence = $Tableau2[$i];
                echo $competence ?> </br>
                <?php
            }

            //Capacités
            shuffle($Tableau3);
            echo "_________________________"?> </br>
            <span class="gras">
            <?php
            echo "Liste de tes Capacités : "?> </span> </br>
            <?php
            for ($i = 0; $i < 7; $i++)
            {
                $capacite = $Tableau3[$i];
                echo $capacite ?> </br>
                <?php
            }
        }

        ?>
    </div>

        <div class="block">

            <!-- HEADER -->
            <header class="header">
                    <nav>
                        <ul>
                            <li>
                                <img class="header-img" src="src/img/logo_rasputin.png" alt="Logo RasputinGame" width="70" height="60">
                                <a href="https://youtu.be/dQw4w9WgXcQ" class="header-logo">Rasputin Game</a>
                                <a href="#" class="header-content">Perso Aléatoire</a>
                                <a href="main.php" class="header-content">Accueil</a>
                            </li>
                        </ul>
                    </nav>
            </header>

            <!-- Bouton Tirage Perso Jouables -->
            <div class="PersoJ">
                <form method="POST">
                    <input class="button" type="submit" name = "PersoJouable" value="Tirage Perso Jouables"/>
                    <span class="TextePerso">
                        <?php if(isset($_POST['PersoJouable']))
                        {
                            TiragePerso($PersoJouable);
                        } ?>
                    </span></br>
                </form>
            </div>

            <!-- Bouton Tirage Perso Inscrits -->
            <div class="PersoI">
                <form method="POST">
                    <input class="button" type="submit" name = "PersoInscrit" value="Tirage Perso Inscrits"/>
                    <span class="TextePerso">
                        <?php if(isset($_POST['PersoInscrit']))
                        {
                            TiragePerso($PersoInscrit);
                        } ?>
                    </span></br>
                </form>
            </div>

            <!-- Bouton Tirage Compétences -->
            <div class="Competence">
                <form method="post">

                    <span class="TexteComp">
                        <form method="post">
                            <label for="Competences">Combien veux - tu tirer de compétences ?</label>
                            <input type="number" class="Input-number" name="Comp"></br>
                            <input class="button" type="submit" name = "Compétence" value="Tirage des Compétences"/> </br>
                        </form>
                        <?php if(isset($_POST['Compétence']))
                        {
                            TirageCompetences($Competences);
                        } ?>
                    </span></br>
                </form>
            </div>

            <!-- Bouton Tirage Capacités -->
            <div class="Capacites">
                <form method="post">

                    <span class="TexteCapa">
                        <form method="post">
                            <label for="Capacites">Combien veux - tu tirer de capacités ?</label>
                            <input type="number" class="Input-number" id="Capacites" name="Capa"></br>
                            <input class="button" type="submit" name = "Capacités" value="Tirage des Capacités"/> </br>
                        </form>
                        <?php if(isset($_POST['Capacités']))
                        {
                            TirageCapacites($Capacites);
                        } ?>
                    </span></br>
                </form>
            </div>

            <!-- Bouton Récapitulatif
            <div class="Recapitulatif">
                <form method="post">
                    <span class="TexteRecap">
                            <input class="button" type="submit" name = "Récapitulatif" value="Récapitulatif"/> </br>
                        <?php //if(isset($_POST['Récapitulatif']))
                        //{
                        //    Recapitulatf();
                        //} ?>
                    </span></br>
                </form>
            </div>
            -->

            <!-- Bouton Tirage Perso Complet -->
            <div class="PersoComplet">
                <form method="post">
                    <span class="TextePersoComplet">
                            <input class="button" type="submit" name = "PersosComplet" value="Tirage Perso Complet"/> </br>
                        <?php if(isset($_POST['PersosComplet']))
                        {
                            TiragePersoComplet($PersoJouable, $Competences, $Capacites);
                        } ?>
                    </span></br>
                </form>
            </div>

        </div>

    </body>
</html>