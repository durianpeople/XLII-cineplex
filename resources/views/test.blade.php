<?php

use App\Film;
foreach(Film::with('pemutaran')->get() as $d) {
	var_dump($d);
}
?>