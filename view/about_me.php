<link rel="stylesheet" href="public/css/about_me.css">

<!-- Rubrique 1 -->
<div class="about_me" id="rubrique_about">
  <h2 class="title_about_me"><img src="public/images/title2.WebP" loading="lazy" alt="rubrique à propos de Mélina"></h2>
  <div class="carousel-container">
    <button type="button"  class="arrow left" onclick="previousSlide()">&#10094;</button>
    
    
    <div class="carousel-content">
      <div class="slide" id="rubrique1">
        <div class="rubrique1_content">
          <img class="personnage" src="public/images/melina_perso.WebP" loading="lazy" alt="image personnage femme">
          <div class="text">
            <p class="presentation_about_me">Étudiante en développement web à la Web@cadémie by Epitech.<br><br></p>
            <p>Au fil de mes expériences, 
              j’ai appris à maîtriser divers langages de programmation et Framework modernes.
              <br>J’ai travaillé sur plusieurs projets, aussi bien académiques que personnels, touchant au développement web et à la conception d’applications. 
              <br> Chaque projet est pour moi une opportunité d’allier technique et créativité pour concevoir des solutions performantes.
              <br><br>Curieuse et toujours en quête de nouvelles connaissances, j’aime explorer de nouvelles technologies et affiner mes compétences.
              <br><br>N’hésitez pas à découvrir mes réalisations et à me contacter pour échanger ou collaborer !
            </p>
            <div class="button_about_me">
              <button   class="button_cv">
                <div>
                  <span><p class="title1_button">CV</p></span>
                </div>
                <div>
                  <span><a href="/document/melina-mouri-cv.pdf" download class="title2_button">Télécharger le CV</a></span>
                </div>
              </button>
            </div>

            <div class="info_contact">
             <a href="http://www.linkedin.com/in/melina-mouri"><img src="public/images/linkedin.WebP" loading="lazy" alt="logo linkedin"></a>
              <a href="#"><img src="public/images/github_logo.WebP" loading="lazy" alt="logo  github"></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Rubrique 2 -->
      <div class="slide" id="rubrique2">
        <div class="menus-container">
          <!-- Premier menu -->
          <div class="menu_1">
            <nav class="menu">
              <input type="checkbox" class="menu-open" name="menu-open" id="menu-open-1" />
              <label class="menu-open-button" for="menu-open-1">
                <img src="public/images/files.WebP" loading="lazy" alt="logo files" class="files_logo">
              </label>
              <a href="#" class="menu-item js">
                <img title="JavaScript" src="public/images/js.WebP" loading="lazy" alt="logo JavaScript">
              </a>
              <a href="#" class="menu-item html">
                <img title="HTML" src="public/images/html.WebP" loading="lazy" alt="logo html">
              </a>
              <a href="#" class="menu-item css">
                <img title="CSS" src="public/images/css.WebP" loading="lazy" alt="logo css">
              </a>
              <a href="#" class="menu-item sql">
                <img title="SQL" src="public/images/sql.WebP" loading="lazy" alt="logo sql">
              </a>
              <a href="#" class="menu-item swift">
                <img title="Swift" src="public/images/swift.WebP" loading="lazy" alt="logo swift">
              </a>
              <a href="#" class="menu-item php">
                <img title="PHP" src="public/images/php.WebP"loading="lazy" alt="logo php">
              </a>
              <h2>Languages de programmation</h2>
            </nav>
          </div>
          <!-- Deuxième menu -->
            <div class="menu_2">
              <nav class="menu">
                <input type="checkbox" class="menu-open" name="menu-open" id="menu-open-2" />
                <label class="menu-open-button" for="menu-open-2">
                  <img src="public/images/files.WebP" loading="lazy" alt="logo files" class="files_logo">
                </label>
                <a href="#" class="menu-item js">
                  <img title="Git" src="public/images/git.WebP" loading="lazy" alt="logo git">
                </a>
                <a href="#" class="menu-item html">
                  <img title="WampServer" src="public/images/wamp.WebP" loading="lazy" alt="logo wampserver">
                </a>
                <a href="#" class="menu-item css">
                  <img title="SwiftUi" src="public/images/swiftui.WebP" loading="lazy" alt="logo swiftui">
                </a>
                <a href="#" class="menu-item sql">
                  <img title="PhMyAdmin" src="public/images/phpmyadmin.WebP" loading="lazy" alt="logo phpmyadmin">
                </a>
                <a href="#" class="menu-item swift">
                  <img title="GitHub" src="public/images/github.WebP"loading="lazy"  alt="logo githubt">
                </a>
                <a href="#" class="menu-item php">
                  <img title="Vs Code" src="public/images/vscode.WebP" loading="lazy" alt="logo vscode">
                </a>
                <h2>Outils de Développement et Serveurs</h2>
              </nav>
            </div>
            <!-- Troisième menu -->
            <div class="menu_3">
              <nav class="menu">
                <input type="checkbox" class="menu-open" name="menu-open" id="menu-open-3" />
                <label class="menu-open-button" for="menu-open-3">
                  <img src="public/images/files.WebP" loading="lazy" alt="logo files" class="files_logo">
                </label>
                <a href="#" class="menu-item js">
                  <img title="Figma" src="public/images/figma.WebP"loading="lazy" alt="logo figma">
                </a>
                <a href="#" class="menu-item html">
                  <img title="Canva" src="public/images/canva.WebP" loading="lazy" alt="logo canva">
                </a>
                <a href="#" class="menu-item css">
                  <img title="Trello" src="public/images/trello.WebP"  loading="lazy" alt="logo trello">
                </a>
                <a href="#" class="menu-item sql">
                  <img title="Loop" src="public/images/loop.WebP" loading="lazy" alt="logo loop">
                </a>
                <h2>Design et Gestion de Projet</h2>
              </nav>
            </div>
        </div>
      </div>
    </div>
    <button type="button"  class="arrow right" onclick="nextSlide()">&#10095;</button>
  </div>
</div>
<script src="public/js/carousel.js"></script>