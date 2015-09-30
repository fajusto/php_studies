<?php

echo "Hello world! <br>";

echo "Fabrício Justo <br>";

echo "Raphael Paulino";

function percorre ($quilometros)
{
	static $total;
	$total += $quilometros;
	echo "percorreu mais $quilometros do total de $total\n<br>";
}
percorre(50);
percorre(100);
percorre(200);
percorre(50);