<?php

class HomeController extends Controller
{
	public function index()
	{

		$dados = array();
		$items = new Items();

		$limit = 10;

		$total = $items->getTotal();
		$dados['paginas'] = ceil($total/$limit);

		$dados['paginaAtual'] = 1;

		if(isset($_GET['p'])) {
			$dados['paginaAtual'] = intval($_GET['p']);
		}

		$offset = ($dados['paginaAtual'] * $limit) - $limit;

		$dados['lista'] = $items->getList($offset, $limit);
		$this->loadTemplate('home', $dados);
	}

}