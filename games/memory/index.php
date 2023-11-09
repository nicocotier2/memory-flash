<?php require '../../utils/common.php'; ?>
<?php require SITE_ROOT.'utils/database.php'; ?>
<?php $pdo = connectToDbAndGetPdo();?>
<!DOCTYPE html>
<html lang="en">
<style>
    .playForm{
        width: 25%;
        height: 40px;
        font-size: 20px;
        display: flex;
        flex-direction: row;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    .start{
        font-size: 20px;
        width: 25%;
        height: 40px;
    }
</style>
    <head>
    <link rel="stylesheet" href="main.css">
</head>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <?php require SITE_ROOT.'partials/head.php'; ?>
    <body>
    <div class="fond">
      <?php require SITE_ROOT.'partials/header.php'; ?>
<center>

<div class="flex">
    <select class="playForm" name = "theme" id = "theme">
        <option disabled selected value="Choix">Choisis un thème !</option>
            <option value="theme 1">Thème 1</option>
            <option value="theme 2">Thème 2</option>
            <option value="theme 3">Thème 3</option>
    </select>
    <select class="playForm" name = "diff" id = "diff">
        <option disabled selected value="diff">Choisis une difficulté !</option>
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select>
</div>
<div><button class="start" type="submit">Lancer la partie</button></div>


<button id="startButton">Start</button>
<button id="resetButton">Reset</button>
<h1 id="chrono">00:00:00</h1>

<script>
var h1 = document.getElementById('chrono');
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
  elapsedTime++;
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

var isTimerRunning

start.onclick = function() {
    if (!isTimerRunning) {
        isTimerRunning = true;
        timer();
    }
}

reset.onclick = function() {
  clearTimeout(t);
  h1.textContent = '00:00:00';
  sec = 0;
  min = 0;
  hrs = 0;
  isTimerRunning = false;
}
</script>

</center>



<section class="memory-game">
    <div class="memory-card" data-framework="lac">
        <img class="front-face" src= "../../Assets/lac.jpg" alt="lac">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="lac">
        <img class="front-face" src= "../../Assets/lac.jpg" alt="lac">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="pink">
        <img class="front-face" src= "../../Assets/pink.jpg" alt="pink">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="pink">
        <img class="front-face" src= "../../Assets/pink.jpg" alt="pink">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="green">
        <img class="front-face" src= "../../Assets/green.jpg" alt="green">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="green">
        <img class="front-face" src= "../../Assets/green.jpg" alt="green">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="oror">
        <img class="front-face" src= "../../Assets/oror.jpg" alt="oror">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="oror">
        <img class="front-face" src= "../../Assets/oror.jpg" alt="oror">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="purple">
        <img class="front-face" src= "../../Assets/purple.jpg" alt="purple">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="purple">
        <img class="front-face" src= "../../Assets/purple.jpg" alt="purple">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <div class="memory-card" data-framework="champs">
        <img class="front-face" src= "../../Assets/champs.jpg" alt="champs">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>
    <div class="memory-card" data-framework="champs">
        <img class="front-face" src= "../../Assets/champs.jpg" alt="champs">
        <img class="back-face" src="../../Assets/image.png" alt="Memory Card">
    </div>

    <style>
        .memory-card {
            width: calc(25% - 10px);
            height: calc(33.333% - 10px);
            margin: 5px;
            position: relative;
            box-shadow: 1px 1px 1px rgba(0,0,0,.3);
            transform: scale(1);
            transform-style: preserve-3d;
            transition: transform .5s;
        }

        .memory-game {
            width: 600px;
            height: 600px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            perspective: 1000px;
        }

        .front-face, .back-face {
        width: 100%;
        height: 100%;
        position: absolute;
        border-radius: 5px;
        background: #1C7CCC;
        backface-visibility: hidden;
        }

        .memory-card:active {
            transform: scale(0.97);
            transition: transform .2s;
        }

        .memory-card.flip {
            transform: rotateY(180deg);
        }

        .front-face {
        transform: rotateY(180deg);
        }
    </style>


</section>

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
    <script>
    const cards = document.querySelectorAll('.memory-card');
    var pairsFound = 0;
    var elapsedTime = 0;
    let hasFlippedCard = false;
    let lockBoard = false;
    let firstCard, secondCard;

    function flipCard() {
        if (lockBoard || this.classList.contains('flip')) return;

        this.classList.add('flip');

        if (!hasFlippedCard) {
        hasFlippedCard = true;
        firstCard = this;
        startTimer();
        return;
        }

        secondCard = this;

        checkForMatch();
        }

        function startTimer() {
        if (!isTimerRunning) {
            timer();
            isTimerRunning = true;
        }
        }

        function checkForMatch() {
            let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
            if (isMatch) {
                disableCards();
                pairsFound++;
                if (pairsFound === cards.length / 2) {
                    stopTimer();
                    sendScore(elapsedTime);
                }
            } else {
                unflipCards();
            }
        }

        function sendScore(score) {
            var level = 1;
            $.ajax({
                type: "POST",
                url: "insertScoreAjax.php",
                data: { 'score': score, 'difficulty': level }, // Utilisez la variable level au lieu du nombre fixe
                success: function (response) {
                    console.log(response);
                    if (pairsFound === cards.length / 2) {
                        stopTimer();
                        alert("Partie terminée ! Votre score a été enregistré." +score);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function stopTimer() {
            if (isTimerRunning) {
                clearTimeout(t);
                isTimerRunning = false;
                sec = 0;
                min = 0;
                hrs = 0;
                h1.textContent = '00:00:00';
            }
        }


        function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);
        resetBoard();
        }

        function unflipCards() {
            lockBoard = true;

        setTimeout(() => {
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');
            resetBoard();
        }, 1500);
        }
        function resetBoard() {
        [hasFlippedCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null];
        }

        (function shuffle() {
        cards.forEach(card => {
            let ramdomPos = Math.floor(Math.random() * 12);
            card.style.order = ramdomPos;
        });
        })();

    cards.forEach(card => card.addEventListener('click', flipCard));
    </script>
    </body>
 </html>