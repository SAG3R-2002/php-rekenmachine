
<?php //<-- dit staat er gewoon bij voor de txt syntax

//DE REKENMACHINE
//Bij de oefening heb ik gebruik gemaakt van PHP om een rekenmachine te maken door deze rekenmachine
//leer je meer over php en de functie's daarin
//de switch en return statement
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rekenmachine php test</title>
</head>
<body>

<h1>De rekenmachine</h1>
<p>Hier is een voorbeeld van een standaard rekenmachine.<br> Met behulp van php</p>



<?php
//Hier hebben we een standaard layout gemaakt
//we maken een form waarin we alles uithalen bij de onze functions.php file
//Wij gebruiken daarom ook een GET methode om de bestanden daarin op te halen



//            \/\/\/\/\/\/\/\/\/\/\/\/
?>
    
    <form action="functions.php" method="GET">
        <input type="text" name="num01" placeholder="Nummer 1"></input>
        <select name="oper">  
            <label>Kies voor!</label>
            <option value="plus">plus</option>
            <option value="min">min</option>
            <option value="deel">delen</option>
            <option value="keer">keer</option>
        </select>
        <input type="text" name ="num02" placeholder="Nummer 2">
        <button type="submit">Reken het uit</button>
    </form>
    
</body>
</html>