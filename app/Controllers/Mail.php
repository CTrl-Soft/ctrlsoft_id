<?php
 
namespace App\Controllers;
 
use App\Models\MailModel;
 
class Mail extends BaseController
{
    function __construct()
    {
        $this->cek_login();
    }
 
    public function cek_login()
	{		
        // if (session()->get('level') != "Admin" && session()->get('status') != "Active") {
		// 	session()->setFlashdata('errors', ['' => 'Silahkan login terlebih dahulu untuk mengakses data.']);
		// 	return redirect()->to('/auth/login');
		// }
	}

    public function index()
    {
        $model = new MailModel();
        $data['title'] = "CTrl Software - EMails";
        $data['menu_mail'] = true;
        $data['mails'] = $model->getMail(false);
        echo view('mail/index', $data);
    }
}