<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PODSUMOWANIE</title>
</head>

<?php


		$hostname= 'localhost';
		$username = 'root';
		$password ='';
		$databaseName='rezerwacje';
		
		$connect = mysqli_connect($hostname, $username, $password, $databaseName);
		
		
		
		$zarezerwowano=false;
		$Imie = $_POST['Imie'];
		$Nazwisko = $_POST['Nazwisko'];
		$Telefon = $_POST['Telefon'];
		$DataOd = $_POST['DataOd'];
		$DataDo = $_POST['DataDo'];
		$IleOsob = $_POST['Pokój'];
		$Hotel = $_POST['Hotele'];
		$walidacja =$DataDo > $DataOd;
		
		if($walidacja){
			 $sql_select = "SELECT * FROM rezerwacje where IdHotelu = '$Hotel' and IleOsob = '$IleOsob' AND (('$DataOd' BETWEEN DataOd AND DataDo) or ('$DataDo' BETWEEN DataOd AND DataDo))";
		   $result = $connect->query($sql_select);

            if (($IleOsob == 2 && $result->num_rows < 3) || ($IleOsob == 3 && $result->num_rows < 2)) {
				
				$zapisklienta = "INSERT INTO klienci VALUES ('','$Imie','$Nazwisko','$Telefon')";
			mysqli_query($connect,$zapisklienta);
				
				
				$IdKlienta = "SELECT LAST_INSERT_ID()";
			$wynik = mysqli_query($connect,$IdKlienta);
			$id = mysqli_fetch_assoc($wynik);
			$id = $id['LAST_INSERT_ID()'];

			
				if(isset($_POST['Checkbox'])) $Checkbox=1;
				else $Checkbox=0;
			$zapisrezerwacji = "INSERT INTO dokonanerezerwacje VALUES ('','$id','$Hotel','$IleOsob','$DataOd','$DataDo', '$Checkbox')";
			
			mysqli_query($connect,$zapisrezerwacji);
				
				
               

                if ($connect->query($zapisrezerwacji AND $zapisklienta) === true) {
                    $zarezerwowano = true;
                    $_SESSION["rezerwacja"] = true;
                    echo '<h1>Numer Twojej rezerwacji to '.$connect->insert_id.'.</h1>';
                }
            } else {
                 echo '<p>Brak '.($rodzaj == 2 ? 'dwu' : 'trzy').'osobowych pokoi w wybranym okresie.</p>';
            }
        }

		
	
							
							
							
							
								$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	
			

			
			
			$IdKlienta = "SELECT LAST_INSERT_ID()";
			$wynik = mysqli_query($connect,$IdKlienta);
			$id = mysqli_fetch_assoc($wynik);
			$id = $id['LAST_INSERT_ID()'];

			
				if(isset($_POST['Checkbox'])) $Checkbox=1;
				else $Checkbox=0;
			$zapisrezerwacji = "INSERT INTO dokonanerezerwacje VALUES ('','$id','$Hotel','$IleOsob','$DataOd','$DataDo', '$Checkbox')";
			mysqli_query($connect,$zapisrezerwacji);
							
		if ($connect->query($zapisrezerwacji) === true) {
                    $zarezerwowano = true;
                    $_SESSION["rezerwacja"] = true;
                    echo '<h1>Twój numer rezerwacji to '.$connect->insert_id.'.</h1>';
                }
            else {
                 echo '<p>Brak '.($IleOsob == 2 ? 'dwu' : 'trzy').'osobowych pokoi w wybranym okresie.</p>';
            }
		
		
?>

<!DOCTYPE html>
<html = lang ="pl">


<meta charset="UTF-8"/>


<title>Formularz rejstracji!</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<link rel="stylesheet" href="style4.css" type="text/css"/>


<body>
 <script type="text/javascript" src="rezerwacja.js">        
    </script>
</body>
</html>