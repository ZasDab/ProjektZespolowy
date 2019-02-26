<!DOCTYPE html>
<html = lang ="pl">
<head>

<meta charset="UTF-8"/>

<head>
<title>Formularz Rejestracji!</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<link href="/ProjektZespolowy/hotel/public/css/style.css" rel="stylesheet"/>

</head>

<body>

<h1>FORMULARZ REJESTRACJI</h1><br /> <br /><?php 
            $blokada = false;
            if(isset($_SESSION["rezerwacja"]) && $_SESSION["rezerwacja"] == true){
                            echo "Nie można dokonać więcej niż jednej rezerwacji";
                            $blokada = true;
                        }
                        ?>
                        <?php 
                        if(!$blokada){
                            echo '
<form action="rezerwacja.php" method="POST">

                Wybierz Hotel, w którym chcesz dokonać rezerwacji:
                <select name="Hotele">
                    <option value="" disabled selected>Wybierz</option>
                    <option value="1" >Athineon Hotel</option>
                    <option value="2" >Ibiscus Hotel</option>
                    <option value="3" >Oceanis Hotel</option>
                </select><br><br>
				
Podaj imie:<br>
<input type="text" name="Imie"><br>
Podaj nazwisko:<br>
<input type="text" name="Nazwisko"><br>
Podaj telefon kontaktowy:<br>
<input type="telefon" name="Telefon"><br><br>

Rezerwacja pokoju:  <br>
od:<input type="date" name="DataOd"><br>
do:<input type="date" name="DataDo"><br><br>

<label>Wybierz rodzaj pokoju:</label>
                    
                        <select name="Pokój">
                            <option value="2" selected>2os - 140zł</option>
                            <option value="3">3os - 160zł</option>
                        </select></br>

<label><input type="checkbox" name="Checkbox">Dodatkowe łóżko</br></br></br></label>

<input type="submit" name="insert" value="Zarezerwuj!" class="zapisz">
</form>';
						}
?>

 <script type="text/javascript" src="rezerwacja.js">        
    </script>
</body>
</html>