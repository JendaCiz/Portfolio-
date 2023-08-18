<?php require 'partials/doctype.php'; ?>
    <div class="parallax-background">
        <img src="img/paralax10.jpg" alt="Parallax Pozadí">
    </div>
<div class="main-container">
<div class="parent">
<body>
    <div class="parallax-background">
        <img src="img/paralax10.jpg" alt="Parallax Pozadí">
    </div> 

    <div class="gallery" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
        <?php 
        for ($i = 1; $i <= 6; $i++) {
            echo "<div class='gallery-item'>
                    <a href='maty_img/$i.jpg' data-lightbox='matyGallery'>
                        <img src='maty_img/$i.jpg' alt='Foto mého psa'>
                    </a>
                </div>";
        }
        ?>
    </div>

<?php require 'partials/scripts.php'; ?>
<?php require 'partials/footer.php'; ?>

</body>
</html>