<?php
function exibir() {
	// ESCOPO LOCAL
	global $nome;
	echo $nome;
}

function dancar() {
	// ESCOPO LOCAL
	global $nome;
	echo $nome;
	return true;
}
