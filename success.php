<?php
header('Content-Type: text/html; charset=UTF-8');
?>

<style>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
p {
	font-family: 'Roboto', sans-serif;
}

h {
	font-family: 'Roboto', sans-serif;
}

h1 {
	font-family: 'Roboto', sans-serif;
}
b {
	font-family: 'Roboto', sans-serif;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    table-layout: fixed;
    width: 80%;
}
td, th {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
    font-size:	12px;    
}
</style>
<?php 
if (isset($_POST['send'])) {
    //insert database info here
    $database='';
    $dbuser='';
    $dbpassword='';
    $dbdb='';
    $dbc = mysqli_connect($database,$dbuser,$dbpassword,$dbdb)
    or die('Fehler bei Verbindung zu SQL Server.');
    
    $vorname=$_POST['vorname'];
    $nachname=$_POST['nachname'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $telefon=$_POST['telefon'];
    $email=$_POST['email'];
    $arbeitsplatz=$_POST['arbeitsplatz'];
    $raumnummer=$_POST['raumnummer'];
    $beginn=$_POST['beginn'];
    $ende=$_POST['ende'];
    if (isset($_POST['zutritt'])){$zutritt=1;}else{$zutritt=0;}

    $insert_query="INSERT INTO $dbdb (vorname,nachname,geburtsdatum,telefon, email, arbeitsplatz,".
    "raumnummer, beginn, ende, zutritt, versendet,bestatigt) VALUES ('$vorname', '$nachname', '$geburtsdatum', ".
    "'$telefon', '$email', '$arbeitsplatz', '$raumnummer', '$beginn', '$ende', '$zutritt', 0,0)"
    or die('ERROR INSERTING I');
    
    $insert_result = mysqli_query($dbc,$insert_query)
    or die('ERROR INSERTING II'); 
}
?>
<h1>Erfolgreich versendet!</h1>
<b>
Wir werden deinen Antrag als bald als möglich bearbeiten, wir melden uns!
</b>
</main>
</body>
</html>	