<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use Devise\Addition;
    use Devise\Affiche;
    use Devise\Convertion;


    $fruits = array(1, 2, 3, 4, 5, 6);

    $article1 = [
        0 => 254,
        1 => "EURO",
    ];
    $panier = array(
        array('prix' => 2500, 1 => "EURO", 2 => 'Ordinateur'),
        array('prix' => 45, 1 => "USD", 2 => 'Clavier'),
        array('prix' => 40, 1 => "GBP", 2 => 'Souris'),
        array('prix' => 550, 1 => "EURO", 2 => 'Ecran'),
    );


?>


<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>POO - Alexandre Smagghe</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">


</head>

<body>

<form method="POST">
    <input name="prix" type="text" value="0">
    <div class="flex">
        <select name="deviseBase">
            <option value="USD">USD</option>
            <option value="EURO" selected>EURO</option>
            <option value="GBP">GBP</option>
        </select>
        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTExLjYyNiA1MTEuNjI3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuNjI2IDUxMS42Mjc7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNTA2LjIwMywyNDIuOTY2bC03My4wODctNzMuMDg5Yy0zLjYyMS0zLjYxNy03LjkwMi01LjQyNC0xMi44NDctNS40MjRjLTQuOTQ5LDAtOS4yMzMsMS44MDctMTIuODU0LDUuNDI0ICAgYy0zLjYxMywzLjYxNi01LjQyLDcuODk4LTUuNDIsMTIuODQ3djM2LjU0N0gxMDkuNjM2di0zNi41NDdjMC00Ljk0OS0xLjgwOS05LjIzMS01LjQyNi0xMi44NDcgICBjLTMuNjE5LTMuNjE3LTcuOTAyLTUuNDI0LTEyLjg1LTUuNDI0Yy00Ljk0NywwLTkuMjMsMS44MDctMTIuODQ3LDUuNDI0TDUuNDI0LDI0Mi45NjZDMS44MDksMjQ2LjU4LDAsMjUwLjg2NSwwLDI1NS44MTMgICBjMCw0Ljk0NywxLjgwOSw5LjIzMiw1LjQyNCwxMi44NDVsNzMuMDg5LDczLjA5MWMzLjYxNywzLjYxMyw3Ljg5Nyw1LjQyNCwxMi44NDcsNS40MjRjNC45NTIsMCw5LjIzNC0xLjgxMSwxMi44NS01LjQyNCAgIGMzLjYxNy0zLjYxNCw1LjQyNi03Ljg5OCw1LjQyNi0xMi44NDd2LTM2LjU0OWgyOTIuMzU5djM2LjU0OWMwLDQuOTQ4LDEuODA3LDkuMjMyLDUuNDIsMTIuODQ3ICAgYzMuNjIxLDMuNjEzLDcuOTA1LDUuNDI0LDEyLjg1NCw1LjQyNGM0Ljk0NCwwLDkuMjI2LTEuODExLDEyLjg0Ny01LjQyNGw3My4wODctNzMuMDkxYzMuNjE3LTMuNjEzLDUuNDI0LTcuODk4LDUuNDI0LTEyLjg0NSAgIEM1MTEuNjI2LDI1MC44NjUsNTA5LjgyLDI0Ni41OCw1MDYuMjAzLDI0Mi45NjZ6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="/>
        <select name="deviseFinale">
            <option value="USD" selected>USD</option>
            <option value="EURO">EURO</option>
            <option value="GBP">GBP</option>
        </select>
    </div>
    <button class="btn-info btn" type="submit">Convertir</button>


</form>

<div id="convert-result">

    <?php
    if (!empty($_POST['prix']) and !empty($_POST['deviseBase']) and !empty($_POST['deviseFinale'])) {
        $convert = new Convertion;
        $result = $convert->InputConvertion($_POST['prix'], $_POST['deviseBase'], $_POST['deviseFinale']);

        $affiche = new Affiche;
        echo '<div class="resultat-convertion"><b>Resultat : </b> ';
        $affiche->affiche($result);
        echo ' ' . $_POST['deviseFinale'];
        echo '</div>';


    }
    ?>
</div>


<div id="cont-table">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ARTICLE</th>
            <th scope="col">PRIX</th>
            <th scope="col">DEVISE</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($panier as $key => $value) {

            echo '<tr><td>' . $value[2] . '</td><td>' . $value['prix'] . '</td><td>' . $value[1] . '</td></tr>';


        }
        ?>

        </tbody>
    </table>
</div>

<?php

        $resultpanier = new Convertion;
        echo '<div class="resultat-convertion border"> <b>Total : </b>';
        $resultpanier->tabconvertion($panier, "GBP");
        echo '</div>'

?>


</body>
</html>

