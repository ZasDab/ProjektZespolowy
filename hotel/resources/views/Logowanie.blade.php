<!DOCTYPE HTML>
<html lang="pl">

<head>
<meta charset="utf-8"/>
<title> Logowanie </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<link href="/ProjektZespolowy/hotel/public/css/style.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<body>
	{{ Form::open(array('url' => 'Logowanie')) }}
	<nav>
		<div id="logo">
			<img id="mainimg" src="/ProjektZespolowy/hotel/public/mainimg.png">
		</div>
		<ul class="menu">
			<li><a class = "option" href="Index.blade.php">Strona główna</a></li>
			<li><a class = "option" href="InfoHotele.blade.php" >Informacje o hotelach</a></li>
			<li><a class = "option" href="RezerwacjeNiezalogowany.blade.php" >Moje rezerwacje</a></li>
			<li><a class = "options" href="Logowanie.blade.php" style="color:#ffffff" >Zaloguj się/Zarejestruj</a></li>
		</ul>
		
	</nav>



	<div id="ContentReg">
		<div id ="InfoReg">	Dane użytkownika:</div>
		<form action="rejestracja.blade.php" method="POST">
		<div id="form">	
			E-mail:  
			<input type="text" class="input" name="Email"><br><br>
			Hasło:  
			<input type="text" class="input" name="Password"><br><br>

			</form>
			<?php 
			<p> {{ $errors->first('email') }}
   			 {{ $errors->first('haslo') }} 
			</p>?>
			<input type="submit" name="insert" value="Zaloguj" class="zapisz"><br><br>
			<center>lub</center><br>
			<a href="Rejestracja.blade.php"><input type="submit" name="insert" value="Załóż konto" class="zapisz"></a>
			
       </div>
   </div>
</div>

		<div id="footer">
	© A.Dabrowska, A.Zasikowska
	</div>
	

</div>
</body>