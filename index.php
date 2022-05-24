<?
    // include_once('php/Application.php');
    include_once('php/Books.php');
    // new Application();

    $books = new Books();

    // debug('Itt vagyok!!')
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvtár program</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <span><img id="panel-nyito" src="img/menu.png" alt="menü" title="menü"></span>
        <h1>Könyvtár Program</h1>
    </header>
    <main>
        <div class="col-3" id="kategoria">
            <header class="m-b-10">
                <h2>Kategóriák</h2>
                <span class="f-right"><img id="panel-zaro" src="img/arrow_left.png" alt="összecsuk" title="összecsuk"></span>
            </header>
            <div id="kategoriak">
                <input type="checkbox" name="fantasy" id="fantasy" data-szoveg="Fantasy"><label for="fantasy" id="fantasy_lbl">Fantasy</label><br>
                <input type="checkbox" name="regeny" id="regeny" data-szoveg="Regény"><label for="regeny" id="regeny_lbl">Regény</label><br>
                <input type="checkbox" name="motivacios" id="motivacios" data-szoveg="Motivációs"><label for="motivacios" id="motivacios_lbl">Motivációs</label><br>
                <hr>
                <a href="admin/login.html"><span><img src="img/login.png" alt="belépés" title="belépés"></span>Belépés</a>

            </div>
        </div>

        <div  class="col-9" id="tartalom">
            <header class="m-b-20">
                <h3>Könyvek listája</h3>
            </header>
            <div>
                <input type="search" name="search"  class="m-b-20">
                <button id="kereso">Keresés</button>
                <button id="megse">Mégse</button>
                <? debug($books->getBooks()) ?>        
                <table>
                    <tr>
                        <th>Cím</th>
                        <th>Szerző</th>
                        <th>Kategória</th>
                    </tr>
                    <tr>
                        <td>A Gyűrűk Ura</td>
                        <td>J.R.R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                    <tr>
                        <td>A Gyűrűk Ura</td>
                        <td>J.R.R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                    <tr>
                        <td>A Gyűrűk Ura</td>
                        <td>J.R.R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                    <tr>
                        <td>A Gyűrűk Ura</td>
                        <td>J.R.R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>