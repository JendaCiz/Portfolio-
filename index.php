<?php require 'partials/doctype.php'; ?>

<div class="center-button">
    <img src="img/button.png" id="showContentBtn" alt="">
</div>

<div class="hidden-content">
    <body class="custom-cursor">
        <header>
            <div id="bug" class="bug">
                <img src="img/bug.png" alt="Bug">
            </div>
            <audio id="clickSound" src="media/click.wav"></audio>
            <p class="score_bug">Score: <span id="score">0</span></p>
            <p class="score_bug" id="message"></p>
        </header>

        <main>
            <div class="main-container">
                <div class="parent">
                    <?php
                        $hour = date("H");

                        if ($hour >= 5 && $hour < 9) {
                            echo "<h1 class='pozdrav'>Dobré ráno!</h1>";
                        } elseif ($hour >= 9 && $hour < 12) {
                            echo "<h1 class='pozdrav'>Dobré dopoledne!</h1>";
                        } elseif ($hour >= 12 && $hour < 18) {
                            echo "<h1 class='pozdrav'>Dobré odpoledne!</h1>";
                        } elseif ($hour >= 18 && $hour < 22) {
                            echo "<h1 class='pozdrav'>Dobrý večer!</h1>";
                        } else {
                            echo "<h1 class='pozdrav'>Už je pozdě, měli byste jít spát :)</h1>";
                        }
                    ?>
                    
                    <div class="div2">
                        <img id="portrait" src="img/portret1.png" alt="Portrét Jana Číže">
                        <h2>O mně<br></h2>
                        <nav>
                            <ul>
                                <li>
                                    <br>
                                    <p class='pozdrav' id="typeEffect"></p>
                                    <br><br>
                                </li>
                                <li>Jméno => Jan Číž</li>
                                <li>Datum narození => 17.05.94</li>
                                <li>Bydliště => Příbram</li>
                                <li><a href="tel:+420773080980" class="black">Tel => +420 773 080 980</a></li>
                                <li><a href="mailto:jendacizu@email.cz" class="black">E-mail => jendacizu@<br>email.cz</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="div3">
                        <h2>Vzdělání<br></h2>
                        <nav>
                            <ul>
                                <li><a href="vzdelani.php">Zabezpečovací systémy - slaboproud</a></li>
                            </ul>
                            <h2>Kurzy<br></h2>
                            <ul>
                                <li>Práce s Git / GitHub</li>
                                <li>Počítačové sítě</li>
                                <li>WireShark</li>
                                <li>Konfigurace Cisco</li>
                                <li>Linux</li>
                                <li>Programátor www aplikací</li>
                                <li>Webrebel 1: HTML, CSS & Javascript</li>
                                <li>Webrebel 2: PHP a MySQL</li>
                                <li>Základy programování a OOP</li>
                            </ul>
                        </nav>
                        <h2>Pracovní zkušenosti<br></h2>
                        <nav>
                            <ul>
                                <li><a href="automatizace.php">Průmyslová automatizace</a></li>
                                <li><a href="it_specialista.php">IT specialista</a></li>
                                <li><a href="tester.php">Tester proudových motorů</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="div4">
                        <h2>Moje práce<br></h2>
                        <nav>
                            <ul>
                                <li><a href="other.php">Hry a apliakce</a></li>
                                <li><a href="https://github.com/JendaCiz" class="black" target="_blank" rel="noopener noreferrer">Kódy - GitHub</a></li>
                                <br>
                            </ul>
                        </nav>
                        <br>
                    </div>
                </div>
            </div>
        </main>

        <?php require 'partials/scripts.php'; ?>
        <?php require 'partials/footer.php'; ?>
    </div>
</body>
</html>
