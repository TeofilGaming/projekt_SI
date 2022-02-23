<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div type="text-effect"><h2>Strona o piłce nożnej</h2></div>       
    <div id="lewa">
        <div id="ramka">
            <img src="liga1.png" >
            <div id="slajdy">
                <img id="slide1" src="liga1.png" alt="przykladowa grafika" />
                <img id="slide2" src="liga2.png" alt="przykladowa grafika" />
                <img id="slide3" src="liga3.png" alt="przykladowa grafika" />
                <img id="slide4" src="liga4.png" alt="przykladowa grafika" />
            </div>
        </div>
        <div id="nawigacja">
            <a href="#slide1">1</a>
            <a href="#slide2">2</a>
            <a href="#slide3">3</a>
            <a href="#slide4">4</a>
        </div>
    </div>
    <div id="prawa"><p><?PHP
	$db = mysqli_connect("localhost", "root", "", "liga_database");
    $x = "SELECT * FROM liga";
	$result = mysqli_query($db, $x);
    while ($row = mysqli_fetch_array($result)) {
        print("Nazwa:".$row['nazwa_ligi'] ." "."Kraj pochodzenia:". $row['kraj'] ." "."liczba graczy:". $row['liczba_druzyn']."<br>");}
    mysqli_close($db);


    ?></p></div>
    <div id="stopka"><a href="https://www.facebook.com/profile.php?id=100028407642525"> <img src="ja.png"></a>Tymofii Ferenets 2pT grupa: hiszpańska</div>
</body>
</html>