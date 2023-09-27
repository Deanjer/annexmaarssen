<link rel="stylesheet" href="./css/header.css">
<header>
    <?php 
    include 'api.php';
    ?>
    <div id="logo"><img src="./img/logos.png"></div>
    <div class="headerMenuContent hamburger">
        <div class="filmagenda"><a href="./agenda.php">FILM AGENDA</a></div>
        <div class="vesteginen">ALLE VESTEGINEN</div>
        <div class="contact">CONTACT</div>
    </div><br>
    <div id="tickets">
        <div class="blank tikcetblank"></div>
        <h2>KOOP JE TICKETS</h2>
        <div class="blank space"></div>
        <div class="dropdown">
            <button class="dropbtn"><div class="btnText">KIES JE FILM</div></button>
            <div class="dropdown-content">
                <a href="#">Oppenheimer</a>
                <a href="#">Barbie</a>
                <a href="#">The Nun II</a>
            </div>
        </div>
        <div class="blank space"></div>
        <div id="bestelbutton"><button><div class="bestelText">BESTEL TICKETS</div></button></div>
    </div>
</header>