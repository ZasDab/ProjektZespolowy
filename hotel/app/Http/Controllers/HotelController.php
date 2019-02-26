<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
	public function InfoHotele(){
		return view('InfoHotele');
	}

	public function InfoPokoje(){
		return view('InfoPokoje');
	}

	public function Logowanie(){
		return view('Logowanie');
	}
	public function doLogowanie()
	{
	// process the form
	}
	// GET zwrócenie widoku
	public function Rejestracja(){
		return view('Rejestracja');
	}
	// POST do bazy
	public function RejestrujKlienta(){
		// magja tó
	}

	public function RezerwacjeNiezalogowany(){
		return view('Rezerwacjeniezalogowany');
	}

	public function RezerwacjeZalogowany(){
		return view('Rezerwacjezalogowany');
	}

	public function ZmianaHasla(){
		return view('ZmianaHasla');
	}

	public function index(){
		return view('index');
	}
    //



}