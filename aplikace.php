<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aplikace.css">
    <title>Pivni aplikace</title>
</head>
<body>
<?php
        $cenaPiva = $spropitne = $vklad = null;
        $errors = [];
        $tabulka = null;

        if(isset($_GET["pocitej"])) {
            $cenaPiva = intval($_GET["cenaPiva"]);
            $spropitne = intval($_GET["spropitne"]);
            $vklad = intval($_GET["vklad"]);

            if($cenaPiva <= 0) {
                $errors[] = "Cena piva musí být větší než 0.";
            }
            if($spropitne < 0) {
                $errors[] = "Spropitné musí být alespoň 0 %.";
            }
            if($vklad <= 0) {
                $errors[] = "Bez peněz do hospody nelez.";
            }

            if(empty($errors)) {
                $pocet = 1;
                $celkem = 0;
                $barva = null;

                $tabulka = "<table><tr><th>Počet piv</th><th>Cena piv</th><th>Spropitné</th><th>Celkem v Kč</th></tr>";
                while($celkem <= $vklad) {
                    $cena = $pocet * $cenaPiva;
                    $tuzer = $cena * $spropitne / 100;
                    $celkem = $cena + $tuzer;
                    if($celkem <= $vklad) {
                        $barva = "zelena";
                    } else {
                        $barva = "cervena";
                    }
                    $tabulka .= "<tr class=$barva><td>$pocet</td><td>$cena</td><td>$tuzer</td><td>$celkem</td></tr>";
                    $pocet++; 
                }
                $tabulka .= "</table>";
            }
        }
        ?>

        <div class="aplikace-table">
            <form method="get">
                <p class="aplikace-p">Cena piva</p> <input type="number" name="cenaPiva" value="<?php echo $cenaPiva ?>" placeholder="cena za kus" step="any">
                <p class="aplikace-p">Spropitné v %</p> <input type="number" name="spropitne" value="<?php echo $spropitne ?>" placeholder="Tip pro obsluhu" step="any">
                <p class="aplikace-p">Tvé peníze </p> <input type="number" name="vklad" value="<?php echo $vklad ?>" placeholder="Kolik mám" step="any" ><br>
                <button name="pocitej">Vypočítat</button>
            </form>

        <?php if(isset($_GET["pocitej"])): ?>
            <?php if(!empty($errors)): ?>
                <?php foreach($errors as $error): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <?php echo $tabulka; ?>
            <?php endif; ?>
        <?php endif; ?>
</div>
</body>
</html>