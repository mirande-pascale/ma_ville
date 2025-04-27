<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="/css/contact.css" />

    <title>contact</title>
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
              <h1>【T】【O】【K】【Y】【O】</h1>

            </div> 
            <div class="click">
                 
            <div>
               <img src="/images/mode-sombre.png"> 
              <button   id="togglemode">mode</button>
            </div>
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
    <form method="post" action="/php/db.php">
      <div class="container-head">
        <h1>Formulaire</h1>
      </div>
      <div class="container-name">
        <label for="name">nom</label>
        <input
          type="text"
          id="name"
          name="nom"
          placeholder="entrer votre nom"
        />
      </div>
      <div class="container-prename">
        <label for="prename" class="">prenom</label>
        <input
          type="text"
          name="prenom"
          id="prename"
          placeholder="entrer votre prenom"
        />
      </div>
      <div class="container-mail">
        <label for="email">address mail</label>
        <input
          type="email"
          id="email"
          name="Email"
          placeholder="entrer votre address mail"
        />
      </div>
      <div class="container-select">
        <label for="demande">type de demande</label>

        <select aria-label="Default select example" name="Demande">
          <option selected></option>
          <option value="1">Demande de renseignements</option>
          <option value="2">Demande de rendez-vous</option>
          <option value="3">Autres</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">commentaire</label>
        <textarea
          class="form-control"
          id="exampleFormControlTextarea1"
          rows="3"
          name="commentaire"
        ></textarea>
      </div>
      <div class="container-button">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
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

  </body>
</html>
