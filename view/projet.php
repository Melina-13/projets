<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes projets</title>
    <link rel="shortcut icon" href="/images/logo_site.WebP" />
    <link rel="stylesheet" href="/css/projet_style.css">
</head>
<body>
    <div class="container">
        <?php include('navbar_menu.php'); ?>
        <div class="title">
            <h1> <img src="/images/title3.WebP" loading="lazy" alt="titre de la rubrique Mes projets"></h1>
            <div class="intro-projets">
                <p>
                    
                Ici, je vous présente une sélection de projets qui reflètent ma passion pour le développement web,
                    les applications mobiles et même quelques jeux interactifs. Chaque réalisation est le fruit d'une réflexion minutieuse 
                    et d'une volonté constante d'innover. N'hésitez pas à parcourir mes projets pour découvrir 
                    comment je transforme des idées en expériences numériques concrètes.
                 </p>
            </div>
        </div>

        <div class="cards-container">
            <div class="card" id="card1">
                <div class="card__content">
                    <p class="card__title">Tweeter - Reseau social</p>
                    <h3 class="web">Site Web</h3>
                    <p class="card__description">Tweeter est un réseau social inspiré de X offrant les fonctionnalités essentielles comme la publication de messages courts, 
                    le suivi d'autres utilisateurs...</p>
                     <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">Skeleton</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Php</span>
                        <span class="tag">Sql</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal1">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>

            <div class="card" id="card2">
                <div class="card__content">
                    <p class="card__title">LovLy – Plateforme de Rencontres</p>
                    <h3 class="web">Site web</h3>
                    <p class="card__description">LovLy est un projet inspiré des sites de rencontres modernes comme Meetic.</p>
                    <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Php</span>
                        <span class="tag">Sql</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal2">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>


            <div class="card" id="card3">
                 <div class="card__content">
                    <p class="card__title">CinemaScoop – Gestion de Billetterie Simplifiée</p>
                    <h3 class="web">Site web</h3>
                    <p class="card__description">CinemaScoop est un projet conçu pour faciliter la gestion de billetterie en ligne</p>
                    <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Php</span>
                        <span class="tag">Sql</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal3">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>

            <div class="card" id="card4">
                <div class="card__content">
                    <p class="card__title">Puissance 4 – Jeu de stratégie</p>
                    <h3 class="game">Jeux</h3>
                    <p class="card__description">Ce projet est une version web du célèbre jeu Puissance 4, conçue pour être jouée directement depuis un navigateur.
                    L’objectif était ...</p>
                     <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal4">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>

            <div class="card" id="card5">
                <div class="card__content">
                    <p class="card__title">Morpion – Jeu de réflexion</p>
                    <h3 class="game">Jeux</h3>
                    <p class="card__description">Ce projet est une version web du jeu Morpion (Tic-Tac-Toe), accessible directement depuis un navigateur. 
                    L’objectif était de recréer ce jeu...</p>
                    <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal5">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>


            <div class="card" id="card6">
                 <div class="card__content">
                    <p class="card__title">Quiz Interactif – Testez vos connaissances</p>
                    <h3 class="game">Jeux</h3>
                    <p class="card__description">Ce projetest un jeu de quiz en ligne, 
                        conçu pour offrir une expérience ludique et dynamique.L’objectif était de créer une interface intuitive ...</p>
                    <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal6">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>

            <div class="card" id="card7">
                <div class="card__content">
                    <p class="card__title">To-Do List – Gestion simple de tâches</p>
                    <h3 class="web">Site web</h3>
                    <p class="card__description">Ce projet est une application web de gestion de tâches, 
                        conçue pour aider les utilisateurs à organiser leur quotidien...</p>
                     <div class="tags-container">
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Php</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal7">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>

            <div class="card" id="card8">
                <div class="card__content">
                    <p class="card__title">Éditeur de texte en ligne </p>
                    <h3 class="web">Site web</h3>
                    <p class="card__description">Ce projet est un éditeur de texte en ligne, 
                        conçu pour permettre aux utilisateurs de créer  modifier et sauvegarder des documents texte directement dans leur navigateur, sans besoin de logiciels externes. </p>
                    <div class="tags-container">
                        <span class="tag">Html</span>
                        <span class="tag">Css</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal8">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>


            <div class="card" id="card9">
                 <div class="card__content">
                    <p class="card__title">PMRide – Application de transport et activités</p>
                    <h3 class="application">Application mobile IOS</h3>
                    <p class="card__description"> PMRide est un prototype d'application mobile conçu 
                        pour aider les personnes en situation de handicap à trouver des activités...</p>
                    <div class="tags-container">
                        <span class="tag">Swift</span>
                    </div>
                    <button type="button"  class="learn-more" data-modal="modal9">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Lire plus</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Modal pour la Carte 1 -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Tweeter - Réseau social</h2>
                <img class="img_modal" src="/images/tweeter.WebP" loading="lazy"  alt="capture d'ecran du projet ">
                <p>Tweeter est un réseau social inspiré de X offrant les fonctionnalités essentielles comme la publication de messages courts, 
                le suivi d'autres utilisateurs et l'interaction avec les publications. 
                <br>Le projet intègre également CoqIA, un assistant intelligent similaire à ChatGPT, 
                pour enrichir l'expérience utilisateur.</p> 
                <div class="tags-container_modal">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">Php</span>
                    <span class="tag">Sql</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
            </div>
        </div>

        <!-- Modal pour la Carte 2 -->
        <div id="modal2" class="modal">
          <div class="modal-content">
                <span class="close">&times;</span>
                <h2>LovLy – Plateforme de Rencontres</h2>
                <img class="img_modal" src="/images/lovly.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>LovLy est un projet étudiant inspiré des sites de rencontres modernes comme Meetic. 
                    L'objectif était de concevoir une plateforme intuitive et 
                    sécurisée où les utilisateurs peuvent créer un profil, 
                    matcher avec des personnes compatibles et échanger facilement.</p>
                <div class="tags-container">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">Php</span>
                    <span class="tag">Sql</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
          </div>
        </div>

        <!-- Modal pour la Carte 3 -->
        <div id="modal3" class="modal">
          <div class="modal-content">
                <span class="close">&times;</span>
                <h2>CinemaScoop – Gestion de Billetterie Simplifiée</h2>
                <img class="img_modal" src="/images/cinemascoop.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>CinemaScoop est un projet conçu pour faciliter la gestion de billetterie en ligne pour les cinémas.
                    Cette plateforme permet aux utilisateurs de consulter les films à l'affiche, 
                    réserver leurs billets et choisir leurs sièges en quelques clics.</p> 
                <div class="tags-container">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">Php</span>
                    <span class="tag">Sql</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
          </div>
        </div>
         <!-- Modal pour la Carte 4 -->
         <div id="modal4" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Puissance 4 – Jeu de stratégie</h2>
                <img class="img_modal" src="/images/puissance4.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>Ce projet est une version web du célèbre jeu Puissance 4, 
                        conçue pour être jouée directement depuis un navigateur.
                        L’objectif était de proposer une expérience fidèle au jeu original tout en ajoutant une interface moderne et intuitive.</p>
                     </p> 
                <div class="tags-container">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
            </div>
        </div>

        <!-- Modal pour la Carte 5 -->
        <div id="modal5" class="modal">
          <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Morpion – Jeu de réflexion</h2>
                <img class="img_modal" src="/images/morpion.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>Ce projet est une version web du jeu Morpion (Tic-Tac-Toe), accessible directement depuis un navigateur. 
                        L’objectif était de recréer ce jeu intemporel avec une interface fluide, moderne et intuitive.</p>
                    <div class="tags-container">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy"  alt=""></a>
          </div>
        </div>

        <!-- Modal pour la Carte 6 -->
        <div id="modal6" class="modal">
          <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Quiz Interactif – Testez vos connaissances</h2>
                <img class="img_modal" src="/images/quizz.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>Ce projetest un jeu de quiz en ligne, 
                        conçu pour offrir une expérience ludique et dynamique. 
                        L’objectif était de créer une interface intuitive et réactive,
                         permettant aux utilisateurs de tester leurs connaissances sur différents sujets.</p>
                 <div class="tags-container">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
          </div>
        </div>
         <!-- Modal pour la Carte 7 -->
         <div id="modal7" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>To-Do List – Gestion simple de tâches</h2>
                <img class="img_modal" src="/images/to_do_list.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>Ce projet est une application web de gestion de tâches, 
                        conçue pour aider les utilisateurs à organiser leur quotidien de manière simple et efficace. 
                        L’objectif était de créer une interface intuitive et fluide, 
                        permettant d’ajouter, modifier et supprimer des tâches en quelques clics.
                    </p>
                <div class="tags-container">
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">Php</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
            </div>
        </div>

        <!-- Modal pour la Carte 8 -->
        <div id="modal8" class="modal">
          <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Éditeur de texte en ligne </h2>
                <img class="img_modal" src="/images/editeur.WebP" alt="capture d'ecran du projet ">
                <p>Ce projet est un éditeur de texte en ligne, conçu pour permettre aux utilisateurs
                         de créer, modifier et sauvegarder des documents texte directement dans leur navigateur, sans besoin de logiciels externes. 
                        L'objectif était de proposer une interface intuitive et riche 
                        en fonctionnalités, tout en assurant une expérience fluide.</p>
                <div class="tags-container">
                    <span class="tag">Html</span>
                    <span class="tag">Css</span>
                    <span class="tag">JavaScript</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
          </div>
        </div>

        <!-- Modal pour la Carte 9 -->
        <div id="modal9" class="modal">
          <div class="modal-content">
                <span class="close">&times;</span>
                <h2>PMRide – Application mobile pour les personnes en situation de handicap</h2>
                <img class="img_modal" src="/images/pmride.WebP" loading="lazy" alt="capture d'ecran du projet ">
                <p>PMRide est un prototype d'application mobile conçu 
                        pour aider les personnes en situation de handicap à trouver des activités et des moyens de transport adaptés près de chez elles. 
                        L’objectif est de simplifier la recherche d’options accessibles, afin de favoriser la mobilité et l'autonomie.</p>
                   
                <div class="tags-container">
                    <span class="tag">Swift</span>
                </div>
                <a href="http://"><img class="github_modal" src="/images/github_logo.WebP" loading="lazy" alt=""></a>
          </div>
        </div>
    </div> 
    <div class="space-below"></div>
    <script src="/js/projet_card.js"></script>
    <script src="/js/projet_modal.js"></script>
</body>
</html>