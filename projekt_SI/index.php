<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div type="text-effect"><h2>Strona o piłce nożnej</h2></div>       
    <div id="lewa"><img src="strona.png" ></div>
    <div id="prawa"><p><?php
function liga(){
	$db = mysqli_connect("localhost", "root", "", "liga_database");
    $x = "SELECT * FROM liga";
?></p></div>
    <div id="stopka"><a href="https://www.facebook.com/profile.php?id=100028407642525"> <img src="ja.png"></a>Tymofii Ferenets 2pT grupa: hiszpańska</div>
</body>
</html>