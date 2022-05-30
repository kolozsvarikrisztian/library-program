<?
    include_once('../php/Books.php');
    $books = new Books();
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
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/admin_script.js"></script>
</head>
<body>
    <header>
        <h1>Könyvtár Program</h1>
        <span class="f-right"><a href="../index.html"><img src="../img/logout.png" alt="kilépés" title="kilépés"></a></span>
    </header>
    <main>
        <div class="col-12">
            <div class="col-6">
                <h2>Szerzők listája</h2>
                <button type="button" onclick="location.href='szerzo_form.html'">Új szerző</button>
                <table>
                    <tr>
                        <th>Név</th>
                        <th>Funkciók</th>
                    </tr>
                    <tr>
                        <td>J.R.R. Tolkien</td>
                        <td class="functions">
                            <a href="#"><img src="../img/edit.png" alt="módosítás" title="módosítás"></a>
                            <a href="#"><img src="../img/delete.png" alt="törlés" title="törlés"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Rhonda Brain</td>
                        <td class="functions">
                            <a href="#"><img src="../img/edit.png" alt="módosítás" title="módosítás"></a>
                            <a href="#"><img src="../img/delete.png" alt="törlés" title="törlés"></a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-6">
                <h2>Kategóriák listája</h2>
                <button type="button" onclick="location.href='kategoria_form.html'">Új kategória</button>
                <table>
                    <tr>
                        <th>Név</th>
                        <th>Funkciók</th>
                    </tr>
                    <tr>
                        <td>Fantasy</td>
                        <td class="functions">
                            <a href="#"><img src="../img/edit.png" alt="módosítás" title="módosítás"></a>
                            <a href="#"><img src="../img/delete.png" alt="törlés" title="törlés"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Motivációs</td>
                        <td class="functions">
                            <a href="#"><img src="../img/edit.png" alt="módosítás" title="módosítás"></a>
                            <a href="#"><img src="../img/delete.png" alt="törlés" title="törlés"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Regény</td>
                        <td class="functions">
                            <a href="#"><img src="../img/edit.png" alt="módosítás" title="módosítás"></a>
                            <a href="#"><img src="../img/delete.png" alt="törlés" title="törlés"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-12">
            <h2>Könyvek listája</h2>
            <button type="button" onclick="location.href='konyvek_form.html'">Új könyv</button>
            <table>
                <tr>
                    <th>Cím</th>
                    <th>Oldalszám</th>
                    <th>Nyelv</th>
                    <th>Szerző</th>
                    <th>Kategória</th>
                    <th>Funkciók</th>
                </tr>
                
                    <? foreach ($books -> getBooks() as $key => $book) { ?>
                    <tr>
                    <td><?=$book['title'] ?></td>
                    <td><?=$book['page_size'] ?></td>
                    <td><?=$book['lang'] ?></td>
                    <td><?=$book['author'] ?></td>
                    <td><?=$book['category'] ?></td>
                    <td class="functions">
                        <a href="konyvek_form.php?book=<?=$book['id'] ?>"><img src="../img/edit.png" alt="módosítás" title="módosítás"></a>
                        <a href="#" class="delete_rec" table="books" rec_id="<?=$book['id'] ?>"><img src="../img/delete.png" alt="törlés" title="törlés"></a>
                    </td>
                    </tr>
                    <? } ?>
            </table>
        </div>
    </main>
</body>
</html>