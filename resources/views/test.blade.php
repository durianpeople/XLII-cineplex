<?php

use App\Film;
use App\DetilPemutaran;
foreach(DetilPemutaran::all() as $d) {
	echo "Memutar ".Film::find($d->id_film)->nama_film."<br>";
}

foreach(Film::all() as $d) {
	echo "Film: ".$d->nama_film."<br>";
	echo "ID film: ".$d->getAttribute('id_film')."<br>";
	$result=DetilPemutaran::where('id_film',$d->id_film)->get();
	if (!$result->isEmpty()) echo "tayang";
	else echo "ga tayang";
	echo "<br>";
}

?>