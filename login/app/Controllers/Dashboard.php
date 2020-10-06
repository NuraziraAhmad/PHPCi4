<?php namespace App\Controllers;

use App\Models\AnswersModel;

class Dashboard extends BaseController
{
	public function index()
	{
        $data = [];
		helper(['form']);

		#$this->request is a ci object
		if ($this->request->getMethod() == 'post') {

			#store the user in db
			$model = new AnswersModel();
			#send data to model
			$newAns = [
				'firstquestion' => $this->request->getVar('firstquestion'),
				'secondquestion' => $this->request->getVar('secondquestion'),
				'thirdquestion' => $this->request->getVar('thirdquestion'),
				'fourtquestion' => $this->request->getVar('fourtquestion'),
			];

			#save it
			$model->save($newAns);
			$session = session();
			$session->setFlashdata('success', 'Successful save answers');
			return redirect()->to('/'); #return user to dashboard page
		
		}
		

        echo view('templates/header', $data);
		echo view('dashboard');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
