<!DOCTYPE HTML>
<html lang="pl">

<head>
<meta charset="utf-8"/>
<title> Zmiana hasła </title>
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
			<li><a class = "option" href="RezerwacjeZalogowany.blade.php" >Moje rezerwacje</a></li>
			<li><a class = "options" href="ZmianaHasla.blade.php" style="color:#ffffff" >Mój profil</a></li>
		</ul>
		
	</nav>



	<div id="ContentReg">
	<div id ="InfoReg">	Podaj nowe hasło:</div>
		<form action="ZmienHaslo.blade.php" method="POST">
		<div id="form">	
	Stare hasło:  
	<input type="text" class="input" name="OldPassword"><br><br>
	Nowe hasło:  
	<input type="text" class="input" name="Password"><br><br>
	Powtórz nowe hasło:  
	<input type="text" class="input" name="NewPassword"><br><br>
	<input type="submit" name="insert" value="Zmień hasło" class="zapisz">
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