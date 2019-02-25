<!DOCTYPE HTML>
<html lang="pl">

<head>
<meta charset="utf-8"/>
<title> Rejestracja </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<body>
	<nav>
		<div id="logo">
			<img id="mainimg" src="mainimg.png">
		</div>
		<ul class="menu">
			<li><a class = "option" href="Index.blade.php">Strona główna</a></li>
			<li><a class = "option" href="InfoHotele.blade.php" >Informacje o hotelach</a></li>
			<li><a class = "option" href="RezerwacjeNiezalogowany.blade.php" >Moje rezerwacje</a></li>
			<li><a class = "option" href="Logowanie.blade.php">Zaloguj się/Zarejestruj</a></li>
		</ul>
		
	</nav>



	<div id="ContentReg">
	<div id ="InfoReg">	Dane użytkownika</div>
		<form action="rejestracja.php" method="POST">
		<div id="form">	
	Imię:  
	<input type="text" class="input" name="Imie"><br><br>
	Nazwisko:  
	<input type="text" class="input" name="Nazwisko"><br><br>
	E-mail:  
	<input type="text" class="input" name="Email"><br><br>
	Hasło:  
	<input type="text" class="input" name="Haslo"><br><br>
	Miasto:  
	<input type="text" class="input" name="Miasto"><br><br>
	Kod pocztowy:  
	<input type="text" class="input" name="KodPocztowy"><br><br>
	Adres:  
	<input type="text" class="input" name="Adres"><br><br>
	Telefon kontaktowy:  
	<input type="telefon" class="input" name="Telefon"><br><br>
	<input type="submit" name="insert" value="Zarejestruj" class="zapisz">
       </form>
</div>
		<div>

		</div>
		<div id="footer">
	© A.Dabrowska, A.Zasikowska
	</div>
	</div>

</div>
</body>