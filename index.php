<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<pre>
		<?php
		require_once 'Pessoa.php';
		require_once 'Livro.php';
		$p = new Pessoa("Elio Paulo", 17, "Masculino");
		$l = new Livro("Codigo Limpo", "Martin Hailler", 450, $p);
		$l->avancarPag();
		$l->avancarPag();
		$l->avancarPag();
		$l->avancarPag();
		$l->avancarPag();
		$l->avancarPag();
		$l->avancarPag();
		$l->getLeitor()->fazerAniversario();
		$l->getLeitor()->fazerAniversario();
		$l->detalhes();
		?>
	</pre>



</body>
</html>