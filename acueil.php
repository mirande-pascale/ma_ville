<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" />

  </head>
  <body>
    <header>
      <div id="menu" class="dropdown">
        <button  class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          menu
        </button>
        <ul class="dropdown-menu">
          <li><a href="/php/acueil.php" target="_blank" class="dropdown-item" type="button">acueil</a></li>
          <li><a href="/php/acueil.php" target="_blank" class="dropdown-item" type="button">spot emblematique</a></li>
          <li><a href="/php/acueil.php" target="_blank" class="dropdown-item" type="button">hub commercial</a></li>
          <li><a href="/php/acueil.php" target="_blank" class="dropdown-item" type="button">contact</a></li>
          <a  href="https://www.gotokyo.org/fr/calendar/index.html" target="_blank">calendrier</a>

        </ul>
      </div>  
       <div class="container-mark ">
        
          <div class="container-logo">

             <div class="vieuw">
              <h2>【T】【O】【K】【Y】【O】</h2>

            </div> 
            
              
            <div>
               <img src="/images/mode-sombre.png"> 
              <button   id="togglemode">mode</button>
            </div>
            
          </div>
          
         <div class="container-link">
          <div>
          <a  href="/php/acueil.php" target="_blank">acueil</a>
          
          </div>
          <div>
            <a  href="/php/lieux.php" target="_blank">spot emblematique</a>
            
            </div>
          <div>
          <a  href="/php/commerce.php" target="_blank">hub commercial</a>
          </div>
          <div>
          <a  href="/php/contact.php" target="_blank">contact </a>
          </div>
          <div>
          <a  href="https://www.gotokyo.org/fr/calendar/index.html" target="_blank">calendrier</a>
          </div>
        <!-- <a class="third" href="https://www.example.com" target="_blank">contact</a> -->
        </div>
      </div>
  </header>
   <div class="container-back">
    <div class="video-background">
      <video autoplay muted loop id="background-video">
        <source src="/videos/what.mp4" type="video/mp4">
      </video>
  </div> 
  <div class="container-presentation">
    <div class="presentation">
    <h1>Bienvenue à Tokyo : La Métropole aux Mille Visages</h1>
    <p class="text">


      
      Tokyo, la capitale du Japon, est une ville fascinante où tradition et modernité se rencontrent harmonieusement.
       Entre gratte-ciels futuristes, temples historiques et quartiers animés, cette mégalopole ne cesse d’émerveiller ses visiteurs. 
       Que vous soyez passionné par la culture japonaise, la gastronomie, la technologie ou simplement en quête de découvertes uniques, Tokyo a quelque chose à offrir à chacun.
      
      Plongez dans l’effervescence de Shibuya, explorez l’élégance d’Asakusa, savourez des sushis authentiques à Tsukiji ou détendez-vous sous les cerisiers en fleurs de Ueno. 
      Tokyo est une ville en perpétuel mouvement, mais où chaque instant réserve une surprise.
      
      Préparez-vous à explorer l'une des villes les plus dynamiques et captivantes du monde !
      
      
    
    </p>
    </div>
  </div>
  <!--  -->
  <div class="container-images">
    <div class="image1">
      <img class="monument" src="/images/asakusa.jpg" alt="description">
      <div class="H2">
      <h3>🏯 Senso-ji, l’âme historique de Tokyo !</h3>
      <span class="texte"> 
        Bienvenue à Senso-ji, le plus ancien temple de Tokyo ! Situé à Asakusa, ce joyau bouddhiste, 
        reconnaissable à sa gigantesque lanterne rouge, vous plonge dans l’ambiance du Japon traditionnel. 
        Enfilez un kimono, traversez la mythique porte Kaminarimon et laissez-vous envoûter par les senteurs d’encens et
         l’effervescence des petites échoppes de la Nakamise-dori. Dépaysement garanti !
        </span>
      </div>
    </div>
    <div class="image1">
      <img class="monument" src="/images/cuis.jpg" alt="description">
      <div class="H2">
      <h3>🍜 Tokyo, un festin pour les papilles !</h3>
      <span class="texte"> 
        Prêt pour un voyage gustatif ? Tokyo est LE paradis des gourmets ! Savourez un bol de ramen fumant, 
        croquez dans un sushi ultra-frais ou laissez-vous tenter par des yakitori grillés en plein cœur d’un marché nocturne. 
        Des ruelles de Tsukiji aux izakayas branchés de Shinjuku, chaque bouchée est une explosion de saveurs. Un seul mot d’ordre : osez tout goûter !
        </span>
      </div>
    </div>
    <div class="image1">
      <img class="monument" src="/images/marche.jpg" alt="description">
      <div class="H2">
      <h3>🛍 "Harajuku : Laisse ton style exploser !" </h3>
      <span class="texte">Bienvenue à Harajuku, le QG des fashionistas et des amoureux de la pop culture ! 
        Takeshita Street, c’est un festival de couleurs, de boutiques déjantées et de gourmandises insolites (crêpes arc-en-ciel, 
        ça vous tente ?). Ici, la mode n’a aucune limite : du style kawaii aux looks futuristes, chacun exprime sa créativité. Un conseil ? 
        Gardez de la place dans votre valise, vous allez craquer !
      </span>
    </div>
    </div>
  </div>
  <!--  -->
 <div class="row">
    <div id="exemple" class="col-md-12">
      <div id="carouselExample" class="carousel slide">
        <div id="inner" class="carousel-inner">
          <div class="intoduction">
            <h2 class="jour">🌆 Tokyo, la ville aux mille reflets vus du ciel 🌤️</h2>
            <p class="tokyo-jour">
              Depuis les hauteurs, Tokyo dévoile un spectacle à couper le souffle. La ville s’étend à perte de vue, mêlant gratte-ciels étincelants, 
              temples cachés et artères animées. Sous la lumière du jour, chaque bâtiment reflète la vitalité d'une métropole en perpétuel mouvement.
              Entre modernité éclatante et harmonie urbaine, Tokyo fascine autant qu’elle inspire. 
              Un tableau vivant, où l’ordre et l’énergie s’unissent sous un ciel limpide.</p>
          </div> 
          
          <div id="carousel" class="carousel-item active">
            <img  src="../images/YET.jpg" id="item" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="../images/AND.jpg" id="item" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../images/hero.jpg" id="item" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../images/again.webp" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img src="../images/second.jpeg" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img  src="../images/photo.jpg" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img src="../images/LIEN.jpg" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img src="../images/autre.avif" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img  src="../images/route.jpg" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img  src="../images/fond.jpg" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="carousel-item">
            <img  src="../images/land.webp" id="item" class="d-block w-100" alt="description">
          </div>
          <div class="intoduction">
            <h2 class="jour">  🌃 Tokyo, un diamant qui scintille dans la nuit ✨</h2>
            <p class="tokyo-jour">
              À la nuit tombée, Tokyo s’illumine comme une galaxie terrestre. Les néons colorés, les buildings éclairés 
              et les rues animées créent un ballet lumineux hypnotisant. Vue du ciel, la ville ressemble à un joyau vibrant, 
              mêlant technologie et tradition avec élégance. Chaque lumière raconte une histoire, chaque quartier brille de son propre éclat. 
              Tokyo de nuit, c’est la magie urbaine dans toute sa splendeur.</p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

 </div>

  <!-- 
      <div class="content">
        <!-- Votre contenu sur la vidéo -->
       
      <!--  -->
    <div class="map">
      <div class="container-spot">
        <a class="spot" href="">Spot</a>
        <span>
        </span>
      </div>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662975.7316256776!2d138.4499875540535!3d35.50429118966356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2sTokyo%2C%20Japon!5e0!3m2!1sfr!2sfr!4v1743689921855!5m2!1sfr!2sfr" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </div>
      <!--  -->
      <div class="container-historique">
        <h2>l evolution historique de tokyo</h2>

        <div class="historique">
        <p class="texte">
          
          Tokyo, l'une des plus grandes métropoles du monde, trouve ses origines dans un petit village de pêcheurs nommé Edo.
           Ce village prend de l’importance en 1603, lorsque Tokugawa Ieyasu y établit son gouvernement shogunal, faisant d’Edo le centre politique du Japon durant plus de deux siècles. 
           En 1868, à l’occasion de la restauration de Meiji, Edo est rebaptisée Tokyo, signifiant "capitale de l’Est", et devient officiellement la capitale du pays. 
           Cette période marque le début d’une modernisation rapide, avec l’introduction des technologies et des idées venues de l’Occident, qui transforment profondément la ville.
        </p>
        <p class="texte">  
          Le XXe siècle apporte son lot de tragédies, notamment le grand séisme du Kantō en 1923 et les bombardements de la Seconde Guerre mondiale, qui détruisent une grande partie de la ville. 
          Malgré cela, Tokyo renaît de ses cendres et connaît un développement fulgurant, devenant un symbole du miracle économique japonais. Les Jeux olympiques de 1964 marquent son retour sur la scène internationale. 
          Aujourd’hui, Tokyo est une capitale dynamique où tradition et modernité cohabitent, unie par une histoire marquée par la résilience, le progrès et une capacité unique à se réinventer.
        </p>
       </div>
      </div>
      <!--  -->
    <div class="container-recherche">

      <h2>autres recherches??</h2>
      <div class="recherche">
      <div class="element">
        <a href="https://www.tripadvisor.fr/Restaurants-g298184-Tokyo-Tokyo-Prefecture-kanto.html"
        >gastronomie</a>
      </div>
      <div class="element">
        <a href="https://www.gotokyo.org/fr/travel-directory/result/index/genre_detail/2"
        >sport</a>
      </div>
      <div class="element">
        <a href="https://www.gotokyo.org/fr/travel-directory/result/index/genre_detail/4"
        >anime</a>
      </div>
      <div class="element">
        <a href="https://www.gotokyo.org/fr/travel-directory/result/index/genre_detail/7"
        >vie nocturne</a>
      </div>
    </div>
   <!--  -->
    <!-- <div class="container-recherche">
      <div>
        <h2>autres recherches!!!</h2>
      </div>
      <div class="recherches">
      <a href="">gastronomie</a>
      <a href="">sport</a>
      <a href="">anime</a>
      <a href=""></a>
     </div>
    </div> -->
   <!--  -->
    <div  class="container-guide">
      <h2>planifiez votre voyage:</h2>
      <div class="guide">
      <a href="">comment se rendre a tokyo</a>
      <a href="">se deplacer a tokyo</a>
      <a href="https://www.gotokyo.org/fr/plan/index.html">plus</a>
      </div>
    </div>
    <div id="meteo">
      <img  class="meteo" src="/images/pluie.gif" alt="yo">
      <a href="">meteo</a>
    </div>
  <!--  -->
  <footer>
    <div class="copyright">  
      <span class="copyright">Copyright@2025-2026-Tous droits reserves</span> 
    </div>  
    <div class="app"> 
     <img class="facebook" src="\images\facebook.png"alt="description de l image"/> 
     <img class="youtube" src="\images\youtube.png" alt="description de l image"/>  
     <img class="insta" src="\images\insta.png" alt="description de l image"/> 
    </div> 
    <span> | </span>
    <span> FAQ</span>
    <span> contact </span>
    <span> mention legale </span> 
</footer>

    <script src="/java/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
  </body>
</html>
