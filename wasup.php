<?php
function exibir() {
	// ESCOPO LOCAL
	global $nome;
	echo $nome;
}


function cantar() {
	// ESCOPO LOCAL
	global $nome;
	echo $nome;
	return false;
}





