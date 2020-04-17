<?php namespace App\Controllers;


use App\Models\ClientesModel;

class Home extends BaseController
{
	public function index()
	{
		helper('form');
		return view('home');
	}

	public function insert()
	{

		$ClienteModel = new ClientesModel();
		$data = $this->request->getPost();

		$request = $ClienteModel->save($data);

		if ($request)
		{
			echo "Cliente cadastrado com sucesso!!";
		} else {
			echo "Erro ao efetuar o cadastro!!";
		}

		/*
		$data['nome'] = $this->request->getPost('nome');
		$data['email'] = $this->request->getPost('email');
		$data['endereco'] = $this->request->getPost('endereco');
		*/

	}
}
