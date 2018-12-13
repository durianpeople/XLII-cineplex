<?php

use App\Film;
use App\DetilPemutaran;
foreach(DetilPemutaran::all() as $d) {
	echo "Memutar ".Film::find($d->id_film)->nama_film."<br>";
}

foreach(Film::all() as $d) {
	echo "Film: ".$d->nama_film."<br>";
	echo "ID film: ".$d->getAttribute('id_film')."<br>";
	echo "Status: ".(DetilPemutaran::where('id_film',$d->id_film)->get());
}

foreach(Film::with('detilpemutaran')->get() as $d) {
	var_dump($d);
}
?>