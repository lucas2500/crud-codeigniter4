<?php namespace App\Controllers;

use App\Models\ClientesModel;
helper('form');

class Home extends BaseController{
	public function index(){

		$ClienteModel = new ClientesModel();
		$users['users'] = $ClienteModel->findAll();
		echo view('libs');
		echo view('home', $users);

	}


	public function insert(){

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


	public function CheckUser($id = null){

		if ($id != null){

			$ClienteModel = new ClientesModel();
			$user['user'] = $ClienteModel->find($id);
			echo view('libs');
			echo view('users', $user);

		} else {

			echo "Nenhum ID de usuário informado!!";
		}

	}


	public function DeleteUser($id = null){

		if ($id != null){

			$ClienteModel = new ClientesModel();
			$DelUser = $ClienteModel->delete($id);

			if ($DelUser){

				echo "Usuário excluído com sucesso!!";

			} else {

				echo "Houve um erro ao tentar excluir o usuário!!";
			}

		} else {

			echo "Nenhum ID de usuário informado!!";
		}

	}
}
