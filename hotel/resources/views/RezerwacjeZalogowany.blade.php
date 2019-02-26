<!DOCTYPE HTML>
<html lang="pl">

<head>
<meta charset="utf-8"/>
<title> Moje rezerwacje </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<link href="/ProjektZespolowy/hotel/public/css/style.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<body>
	<nav>
		<div id="logo">
			<img id="mainimg" src="/ProjektZespolowy/hotel/public/mainimg.png">
		</div>
		<ul class="menu">
			<li><a class = "option" href="Index.blade.php">Strona główna</a></li>
			<li><a class = "option" href="InfoHotele.blade.php" >Informacje o hotelach</a></li>
			<li><a class = "option" href="RezerwacjeZalogowany.blade.php" >Moje rezerwacje</a></li>
			<li><a class = "options" href="ZmianaHasla.blade.php" style="color:#ffffff" >Mój profil</a></li>
		</ul>
		
	</nav>


	<div id="ContentRegLeft">
		<div id="Rezerwacja"> Rezerwacja </div>
	<section>
		<div class="hotele">
		<div class = "hotel1">
			<figure class="room">
				<figcaption>Pokój Ryszard</figcaption>
				<div class="imageH">
					<a href="#"><img src="hotel2.jpg" width="500px" height="300px" alt="Pokój Ryszard"></a>
				</div>
				<div class="space">    <br>
				</div>
                <div class="descH3" >
					Lorem ipsum dolor sit amet, consectetur ipsum consectetur ipsum sit amet<br>
					Lorem ipsum dolor sit amet, consectetur ipsum consectetur ipsum sit amet<br>
					Lorem ipsum dolor sit amet, consectetur ipsum consectetur ipsum sit amet<br>
					Lorem ipsum dolor sit amet, consectetur ipsum consectetur ipsum sit amet<br>
					<table width="500px">
					 <tr>
						<td class="firstcolumn"> 
							Pokój
						</td>
						<td class="secondcolumn"> 
							2-osobowy
						</td>
					</tr>
					<tr>
						<td class="firstcolumn"> 
							Cena
						</td>
						<td class="secondcolumn"> 
							340
						</td>
					</tr>
					<tr>
						<td class="firstcolumn"> 
							Dostępność
						</td>
						<td class="secondcolumn"> 
							Dostępny
						</td>
					</tr>
				</table>
				</div>
			</figure>
		</div>
		</div>	

</section>
</div>


	<div id="ContentRegRight">
	<div id ="InfoReg">	Twoje dane:</div>
		<form action="rezerwacja.php" method="POST">
		<div id="form">	
	Imię:  
	<input type="text" class="input" name="Imie"><br><br>
	Nazwisko:  
	<input type="text" class="input" name="Nazwisko"><br><br>
	Telefon:  
	<input type="text" class="input" name="Telefon"><br><br>
	Rezerwacja od:  <input type="date" class="input" name="DataOd"><br><br>
	Rezerwacja do:  <input type="date" class="input" name="DataDo"><br><br>
	<input type="submit" name="insert" value="Zarezerwuj" class="zapisz">
       </form>
       </div>
	</div>
		<div>

		
		<div id="footer">
	© A.Dabrowska, A.Zasikowska
	</div>
	</div>

</div>
</body>