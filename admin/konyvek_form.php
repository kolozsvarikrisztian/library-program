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
</head>
<body>
    <main class="col-6 form-panel">
        <header>
            <h1>Új könyv rögzítése / Könyv módosítása</h1>
            <span class="f-right"><a href="../index.html"><img src="../img/logout.png" alt="kilépés" title="kilépés"></a></span>
        </header>
        <form id="form-inside" action="/action-page" method="post" enctype="multipart/form-data">
            <label class="col-3" for="cim">Cím</label>
            <input class="col-6" type="text" name="cim">
            <label class="col-3" for="oldalszam">Oldalszám</label>
            <input class="col-6" type="number" name="oldalszam">
            <label class="col-3" for="nyelv">Nyelv</label>
            <input class="col-6" type="text" name="nyelv">

            <label class="col-3" for="szerzo">Szerző</label>
            <select class="col-8" name="szerzo" >
                <option>J.R.R. Tolkien</option>
                <option>Rhonda Brain</option>
            </select>

            <span class="col-3 p-t-s-10">Kategória</span>
            <div class="checkbox-group col-8">
                <input type="checkbox" name="fantasy" >
                <label for="fantasy">Fantasy</label>
                <input type="checkbox" name="motivacios" >
                <label for="motivacios">Motivációs</label>
                <input type="checkbox" name="regeny" >
                <label for="regeny">Regény</label>
            </div>
            <span class="col-3 p-t-s-10">Kép</span>
            <input class="col-8" type="file" name="kep">

            <span class="col-3 p-t-s-10">Leírás</span>
            <textarea class="col-8" name="leiras">Könyv leírása</textarea>
            <div class="col-12">
                <input type="submit" value="Ment">
                <button type="button" onclick="location.href='../index.html'">Bezárás</button>
            </div>
        </form>
    </main>
</body>
</html>