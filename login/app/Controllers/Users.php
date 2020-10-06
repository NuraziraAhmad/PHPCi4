<?php namespace App\Controllers;

use App\Models\AnswersModel;
use App\Models\UserModel;

class Users extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);

		#$this->request is a ci object
		if ($this->request->getMethod() == 'post') {
			# validation here
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email', #check from db in tablename.column
				'password' => 'required|min_length[8]|max_length[255]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

			#if the form is not valid
			if (! $this->validate($rules, $errors)){
				$data['validation'] = $this->validator;
			}else{

				$model = new UserModel();

				$user = $model->where('email', $this->request->getVar('email'))
							  ->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('dashboard');
				
			}
		}
		echo view('templates/header', $data);
		echo view('login');
		echo view('templates/footer');
		
	}

	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
	

	public function register()
	{
		$data = [];
		helper(['form']);
		
		#$this->request is a ci object
		if ($this->request->getMethod() == 'post') {
			# validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]', #check from db in tablename.column
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			#if the form is not valid
			if (! $this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{

				#store the user in db
				$model = new UserModel();
				#send data to model
				$newData = [
					'firstname' => $this->request->getVar('firstname'),
					'lastname' => $this->request->getVar('lastname'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
				];

				#save it
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/'); #return user to login page
			
			}
		}

		echo view('templates/header', $data);
		echo view('register');
		echo view('templates/footer');	
	}

	public function dashboard()
	{
		$data = [];
		helper(['form']);

		#$this->request is a ci object
		if ($this->request->getMethod() == 'post') {

				#store the user in db
				$model = new AnswersModel();
				#send data to model
				$newData = [
					'firstquestion' => $this->request->getVar('firstquestion'),
					'secondquestion' => $this->request->getVar('secondquestion'),
					'thirdquestion' => $this->request->getVar('thirdquestion'),
					'fourtquestion' => $this->request->getVar('fourtquestion'),
				];

				#save it
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful save answers');
				return redirect()->to('/dashboard'); #return user to dashboard page

		}

		echo view('templates/header', $data);
		echo view('dashboard');
		echo view('templates/footer');
	}

	public function profile()
	{
		$data = [];
		helper(['form']);

		#$this->request is a ci object
		if ($this->request->getMethod() == 'post') {
			# validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				
			];

			

			#if the form is not valid
			if (! $this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{

				#store the user in db
				$model = new UserModel();
				#send data to model
				$newData = [
					'firstname' => $this->request->getVar('firstname'),
					'lastname' => $this->request->getVar('lastname'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
				];

				#save it
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/'); #return user to login page
			
			}
		}

		echo view('templates/header', $data);
		echo view('profile');
		echo view('templates/footer');
	}
	//--------------------------------------------------------------------

}
