<?php 


require_once 'Publicacao.php';
require_once 'Pessoa.php';
/**
 * 
 */
class Livro implements Publicacao
{
	private $titulo;
	private $autor;
	private $pagAtual;
	private $totPaginas;
	private $aberto;
	private $leitor;



	public function __construct($tit, $aut, $tot, $l)
	{
		$this->titulo = $tit;
		$this->autor = $aut;
		$this->pagAtual = 0;
		$this->totPaginas = $tot;
		$this->aberto = false;
		$this->leitor = $l;
	}

	public function getTitulo() {
	    return $this->titulo;
	}
	 
	public function setTitulo($titulo) {
	    $this->titulo = $titulo;
	}

	public function getAutor() {
	    return $this->autor;
	}
	 
	public function setAutor($autor) {
	    $this->autor = $autor;
	}

	public function getPagAtual() {
	    return $this->pagAtual;
	}
	 
	public function setPagAtual($pagAtual) {
	    $this->pagAtual = $pagAtual;
	}

	public function getTotPaginas() {
	    return $this->totPaginas;
	}
	 
	public function setTotPaginas($totPaginas) {
	    $this->totPaginas = $totPaginas;
	}

	public function getAberto() {
	    return $this->aberto;
	}
	 
	public function setAberto($aberto) {
	    $this->aberto = $aberto;
	}

	public function getLeitor() {
	    return $this->leitor;
	}
	 
	public function setLeitor($leitor) {
	    $this->leitor = $leitor;
	}

	public function abrir() {
		$this->setAberto(true);
	}

	public function fechar() {
		$this->setAberto(false);
	}

	public function folhear() {
		$this->setPagAtual($this->getPagAtual() + 1);

		if ($this->getPagAtual() == $this->getTotPaginas()) {
			echo "Fim do livro";
		}
	}

	public function avancarPag() {
		if ($this->getPagAtual() == $this->getTotPaginas()) {
			echo "Fim do livro";
		}else {
			$this->setPagAtual($this->getPagAtual() + 1);	
		}
	}

	public function voltarPag() {
		if ($this->getPagAtual() == 0) {
			echo "Inicio do Livro";
		}else{
			$this->setPagAtual($this->getPagAtual() - 1);
		}
	}

    7public function detalhes() {
		echo "<br>Livro: ".$this->getTitulo()."<br>";
		echo "Autor: ".$this->getAutor()."<br>";
		echo "Leitor: ".$this->getLeitor()->getNome()."<br>";
		echo "Leitor: ".$this->getLeitor()->getIdade()."<br>";
		echo "Pagina Actual: ".$this->getPagAtual()."<br>";
	}

}









