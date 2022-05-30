<?
    // include_once('php/Application.php');
    include_once('php/Books.php');
    include_once('php/Categories.php');

    // new Application();
    $books = new Books();
    $categories = new Categories(); 
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
    <main>
    <div  class="col-9" id="tartalom">
            <header class="m-b-20">
                <h3>Könyvek kategorizált listája</h3>
            </header>
    
        <div>      
    
        <table>
            <tr>
                <th>Cím</th>
                <th>Szerző</th>
                <th>Kategória</th>
            </tr>
            <? 
                foreach ($books->getBooksByCategory(intval($_GET['cat'])) as $key => $book){ ?>
                    <tr>
                        <td> <?= $book['title']   ?></td>
                        <td> <?= $book['author']   ?></td>
                        <td> <?= $book['category']   ?></td>
                    </tr>
            <?    }
            
            ?>
            
        </table>
        </div>
        <br>
        <button type="button" onclick="location.href='index.php'">Vissza</button>
    </div>
    
    </main>    
</body>
</html>