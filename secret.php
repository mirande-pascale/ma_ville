<?php include  'get-db.php';

?>
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
    <link rel="stylesheet" href="/css/secret.css" />

    <title>Document</title>
  </head>
  <body>
    <header><div id="menu" class="dropdown">
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
      <div class="container-mark">
        <div class="container-logo">
          <div class="vieuw">
            <h1>【T】【O】【K】【Y】【O】</h1>

          </div> 
          <div class="click">
           
            <div>
              <img src="/images/mode-sombre.png" />
              <button id="togglemode">mode</button>
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
    <div class="table-text">
      <h1>table de donnees</h1>
    </div>
    <div id="table" class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>adress mail</th>
            <th>Demande</th>
            <th>commentaire</th>
          </tr>
        </thead>
        <?php foreach ($result as $row): ?>

        <tbody>
          <tr>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['prenom'] ?></td>
            <td><?= $row['Email'] ?></td>
            <td><?= $row['Demande'] ?></td>
            <td><?= $row['commentaire'] ?></td>
            <button type= "click">supprimer</button>
          </tr>
          <?php endforeach; ?>

          <!-- <tr class="align-bottom">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr> -->
        </tbody>
      </table>
    </div>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
