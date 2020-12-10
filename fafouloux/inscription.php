<?php
            $servername = 'localhost';
            $username = 'baudon';
            $password = 'Alan1994';

            $id = $_POST['id'];
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $mail = $_POST['mail'];
            $telephone = $_POST['telephone'];
            $accompagnant = $_POST['accompagnant'];

            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=fafouloux", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
<!DOCTYPE html>
  <head>
    
    <title>inscription</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles2.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
        <div class="divR">Inscription à  </div>
        <div class="divB">La tête dans les étoiles </div>
    </header>
    <ul>
    <li class="booking-card"
            style="background-image: url(https://media.discordapp.net/attachments/785484217676726302/786166060100616192/694705.png?width=999&height=666)">
            <p class="datevent">12 Janvier 2021 16h00</p>
            <p class="commentevent">6H de folie</p>
            <p class="placedisp">Il reste 22 places disponibles</p>
            <div class="book-container">
                <div class="content">
                    
                </div>
            </div>
            <div class="informations-container">
                <p class="price">
                    c'est gratos !!
                </p>
                <div class="more-information">
                    <div class="info-and-date-container">
                        <div class="box info">
                            <p class="advice">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi eveniet
                                perferendis culpa.</p>
                            </div>
                            <p class="adres">Salle Poirelle</p>
                            <p class="adres">22 rue des soupirs</p>
                            <p class="adres">88000  Epinal</p>
                            <p class="advice2">Merci de vous présenter à l'entrée 3 une demi-heure avant le début du spectacle </p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="enform">
    <form action="/" method="post">
        <div>
            <input class="ident" placeholder="Nom et prénom">
        </div>
        <div>
            <input class="ident" placeholder="Mon mail">
        </div>
        <div>
            <input class="ident" placeholder="Mon téléphone">
        </div>
        <div class="selection">
            <div class="textinscription">
                Je viens
            </div>
            <select class="menu" name="menu">
                <option selected> seul
                <option> 1
                <option> 2
                <option> 3
                <option> 4
            </select>
        </div>
        <p class="descinf">Vous pourrez payer en ligne votre ou vos inscriptions sur la page suivante</p>
    </form>
     <input type="submit" value="Allez go, en avant !!">
     <style>
        input[type=submit]{
            background-color:#ff4d4d;
            border: none;
            color: azure;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            margin-left:300px;
            margin-top:150px;
            width:400px;
            font-size: 30px;
        }
    </style>
</div>
  </body>
</html>