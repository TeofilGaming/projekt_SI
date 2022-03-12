<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css"></head>
<body>
    <div id="nag" type="text-effect"><h2>Strona o piłce nożnej</h2></div>
    <div id="naw">
        <ul class="menu">
            <li><img id="logo" src="logo.png"></li>
            <li><a href="index.php">Strona Główna</a><a></a></li><a>
            </a><li><a></a><a href="aboutme.html">About me</a><a></a></li><a>
        </a></ul><a>
    </a></div><a> 
    </a><div id="pojemnik"><a>           
        </a><div id="lewa"><a>
            <div id="ramka">
                <img src="liga1.png">
                <div id="slajdy">
                    <img id="slide1" src="liga1.png" alt="przykladowa grafika">
                    <img id="slide2" src="liga2.png" alt="przykladowa grafika">
                    <img id="slide3" src="liga3.png" alt="przykladowa grafika">
                    <img id="slide4" src="liga4.png" alt="przykladowa grafika">
                </div>
            </div>
            </a><div id="nawigacja"><a href="#slide1">1</a>
                <a href="#slide2">2</a>
                <a href="#slide3">3</a>
                <a href="#slide4">4</a>
            </div>
        </div>
        <div id="prawa"><div id="prawa"><p><?PHP
            $db = mysqli_connect("localhost", "root", "", "liga_database");
            $x = "SELECT * FROM liga";
            $result = mysqli_query($db, $x);
            while ($row = mysqli_fetch_array($result)) {
            print("Nazwa:".$row['nazwa_ligi'] ." "."Kraj pochodzenia:". $row['kraj'] ." "."liczba graczy:". $row['liczba_druzyn']."<br>");}
            mysqli_close($db);
    
    
            ?></p></div>
        </div>
        <div id="stopka"><a href="https://www.facebook.com/profile.php?id=100028407642525"> <img src="ja.png"></a>Tymofii Ferenets 2pT grupa: hiszpańska</div>
    </body>
    </html>