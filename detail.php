<?
    include_once('php/Books.php');
    $books = new Books();
    $book = $books -> getBookById(intval($_GET['book']));
    // debug($book);
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
</head>
<body>
    <header class="m-b-10">
        <h2>Részletes nézet</h2>        
    </header>
    <main>
        <h1><?= $book['title'] ?></h1>
        <div>
            <div class="col-4" id="konyvkep">
                <img src="" alt="<?= $book['title'] ?>" title="<?= $book['title'] ?>">
            </div>
            <div class="col-8" id="reszletes">
                <table class>
                    <tr>
                        <th>Szerző</th>
                        <td><?= $book['author'] ?></td>
                    </tr>
                    <tr>
                        <th>Oldalszám</th>
                        <td><?= $book['page_size'] ?></td>
                    </tr>
                    <tr>
                        <th>Nyelv</th>
                        <td><?= $book['lang'] ?></td>
                    </tr>
                    <tr>
                        <th>Kategóriák</th>
                        <td><?= $book['category'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-12">
            <h3 class="col-1">Leírás</h3>
            <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere id repellendus error accusantium numquam modi provident repellat! Quis, atque soluta ullam laudantium necessitatibus fugiat eligendi tenetur veritatis sint pariatur facilis. </p>
        </div>
    </main>

</body>
</html>