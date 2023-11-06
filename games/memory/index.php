<?php require '../../utils/common.php'; ?>
<?php require SITE_ROOT.'utils/database.php'; ?>
<?php $pdo = connectToDbAndGetPdo();?>
<!DOCTYPE html>
<html lang="en">
    
    <?php require SITE_ROOT.'partials/head.php'; ?>
    <body>
    <div class="fond">
        <?php require SITE_ROOT.'partials/header.php'; ?>
<center>
<button id="startButton">Start</button>
<button id="resetButton">Reset</button>
<h1 id="chono">00:00:00</h1>

<script>
var h1 = document.getElementById('chono');
var start = document.getElementById('startButton');
var reset = document.getElementById('resetButton');
var sec = 0;
var min = 0;
var hrs = 0;
var t;

function tick() {
  sec++;
  if (sec >= 60) {
    sec = 0;
    min++;
    if (min >= 60) {
      min = 0;
      hrs++;
    }
  }
}

function add() {
  tick();
  h1.textContent = (hrs > 9 ? hrs : '0' + hrs) + ':' +
    (min > 9 ? min : '0' + min) + ':' + (sec > 9 ? sec : '0' + sec);
  timer();
}

function timer() {
  t = setTimeout(add, 1000);
}

start.onclick = function() {
  timer();
}

reset.onclick = function() {
  clearTimeout(t);
  h1.textContent = '00:00:00';
  sec = 0;
  min = 0;
  hrs = 0;
}
</script>





    </script>

        <div class="plato_easy">
            <table>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>  
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="plato_easy">
            <table>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>  
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
                <tr>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                    <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="plato_easy">
        <table>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>    
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
            <tr>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td>
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
                <td><img src="<?= PROJECT_FOLDER ?>Assets/image.png"></td> 
            </tr>
        </table>
        </div>
</center>
    </div>
    <input type="checkbox" class="show-container" id="show-container">
    <div class="tchat2"><!-- ici c'est notre container -->
        <!-- dessiner carré blanc -->
        <div class="header_tchat">
            <!--dessiner le haut du tchat (photo utilisateur + nom utilisateur)-->
            <img class="img_chat" src="<?= PROJECT_FOLDER ?>Assets/image.png">
            <div class="cercle_connection" ></div>
            <p class="header_chat_nom">toto</p>

        </div>
        <div class="main_chat">
            <!--afficher les messages reçu, en bleu ceux envoyé et en gris ceux reçu-->
            <?php 
                    $pdoStatement = $pdo->prepare('SELECT * FROM message WHERE date_send >= NOW() - INTERVAL 1 DAY ORDER BY date_send ASC LIMIT 10');
                    $pdoStatement->execute();
                    $messages = $pdoStatement->fetchAll();
                    foreach ($messages as $score): ?>
                        <?php if ($score->id_user == 1):?>
                        
                            <p class="message_util"><?php echo $score->text_send; ?></p>
                            <br> 
                        
                        <?php else: ?>
                        
                            <p class="message_autre"><?php echo  $score->text_send; ?></p> 
                            <br>
                        <?php endif; ?>
                    <?php endforeach; ?>
                        
                     
        </div>
        <div class="footer_chat"> 
            <!--afficher le formulaire et le bouton d'envoie-->
            <!-- footer chat -->
            <form action="envoie_message.php"></form>
            <textarea class="messagerie" name="zone_text"></textarea>
            <button type="button" class="bouton_envoie">send</button>
        </div>

    </div>

    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
    </body>
 </html>

 <!--overflow-y: scroll-->
