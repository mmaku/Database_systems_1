<html lang="pl">
<head>
<title>Laczenie z baza</title>
<meta charset="utf-8" />
</head>
<body bgcolor="#AADD00">
<?php
$uchwyt = pg_connect("host='localhost' port=5432 user=michal password=baza dbname=DB");
if (!$uchwyt) { echo "<p><b>Wystąpił bład podczas łaczenia z bazą!!!</b></p>"; exit(); }
$wynik = pg_query($uchwyt, " INSERT INTO nations(name, short) VALUES('".$_GET['n']."','".$_GET['v']."');");
if (!$wynik) { echo "<p><b>" . pg_last_error($uchwyt) . "</b></p>"; }
pg_close($uchwyt);
?>
<a target="baza" href="baza.html"><font size=5 font color=blue>Powrót do strony głównej portalu</font></a>
</body>
</html>
