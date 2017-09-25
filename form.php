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

<form method="POST" action="success.php">
<h1>Schlüsselantrag ÖH Salzburg</h1>
<table>
	<tr><th>Vorname</th>
    	<th>Nachname</th>
    	<th>Geburtsdatum</th>
    	<th>Telefon</th>
    	<th>E-Mail</th>
	</tr>
	<tr>
    	<td><input type="text" name="vorname" class="vorname_input"/></td>
    	<td><input type="text" name="nachname" value="" class="nachname_input" /></td>
    	<td><input type="datetime-local" name="geburtsdatum" value="" id="geburtsdatum_input" class="geburtsdatum_input"/></td>
    	<td><input type="text" name="telefon" value="" id="telefon_input"/></td>
    	<td><input type="text" name="email" value="" id="email_input"/></td>
	</tr>
	<tr>
    	<th>Arbeitsplatz (Gebäude)</th>
    	<th>Raumnummer</th>
    	<th>Arbeitsverhältnis beginnt mit</th>
    	<th>Endet vorraussichtlich mit</th>
    	<th>Gebäudezutritt außerhalb der Öffnungszeiten ist erforderlich</th>
    </tr>
	<tr>
    	<td><input type="text" name="arbeitsplatz" class="arbeitsplatz_input"/></td>
    	<td><input type="text" name="raumnummer" value="" class="raumnummer_input" /></td>
    	<td><input type="datetime-local" name="beginn" value="" id="beginn_input" class="beginn_input"/></td>
    	<td><input type="datetime-local" name="ende" value="" id="ende_input"/></td>
    	<td><input type="checkbox" name="zutritt" value="" id="zutritt_input"/></td>
	</tr>
</table>
</br>

<input class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="new" type="submit" value="Versenden" name="send" />
</form>
</main>
</body>

<script>
</script>
</html>	