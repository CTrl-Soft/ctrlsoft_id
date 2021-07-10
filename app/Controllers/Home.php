<?php namespace App\Controllers;

use CodeIgniter\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Models\MailModel;

class Home extends BaseController
{
    protected $helper = [];

	public function __construct()
	{
		helper(['form']);
	}

	public function index()
	{
		return view('home_view');
	}

	public function send()
    {
        $mail = new PHPMailer(true);

        try {
            $validation =  \Config\Services::Validation();

            $my_date = date("Y-m-d H:i:s");
            $data = array(
                'email'             => $this->request->getPost('email'),
                'from'              => $this->request->getPost('from'),
                'subject'           => $this->request->getPost('subject'),
                'phone'            	=> $this->request->getPost('phone'),
                'message'           => $this->request->getPost('message'),
                'created_at'        => $my_date
            );
            if($validation->run($data, 'mailAdd') == FALSE){
                session()->setFlashdata('errors', $validation->getErrors());
                session()->setFlashdata('inputs', $this->request->getPost());
                return redirect()->to(base_url('home'));
            } else {
                $model = new MailModel();
                // $json = json_encode($datalagi);
                // echo "<script>alert('Model Simpan : $json');</script>";
                $simpan = $model->insertMail($data);
                if ($simpan) {
                    $email              = $this->request->getPost('email');
                    $from               = $this->request->getPost('from');
                    $subject            = $this->request->getPost('subject');
                    $phone            	= $this->request->getPost('phone');
                    $message            = $this->request->getPost('message');
                    
                    //Server settings
                    //$mail->SMTPDebug = 2;
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'mail.ctrlsoft.id';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'info@ctrlsoft.id';                  	//SMTP username
                    $mail->Password   = 'HbP3ZWK4WR?V';                         //SMTP password
                    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port       = 465;                                   	//TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom('info@ctrlsoft.id', 'CTrlSoft Auto Mailer');
                    $mail->addAddress('marketiing@ctrlsoft.id', 'Marketing Planner'); 	//Add a recipient
                    $mail->addAddress('ucup3rs@gmail.com', 'Yusuf Ahmadi');				//Name is optional
                    $mail->addReplyTo($email, $from);
                    $mail->addCC('mrthx.89@gmail.com');
                    //$mail->addBCC('hariyono.yanto@hotmail.com');

                    //Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         	//Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    	//Optional name

                    //Content
                    $mail->isHTML(true);                                  		//Set email format to HTML
                    $mail->Subject = "EMail dari $from, phone $phone";
                    $mail->Body    = $message;
                    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
                    $mail->Subject = $subject;
                    $mail->send();
                    session()->setFlashdata('success', 'Send Email successfully');
                } else {
                    session()->setFlashdata('error', "Gagal menyimpan data");
                }
                return redirect()->to(base_url('home'));
            }
        } catch (Exception $e) {
            echo "<script>alert('Error : $e');</script>";
            session()->setFlashdata('error', "Send Email failed. Error: ".$mail->ErrorInfo);
            return redirect()->to(base_url('home'));
        }
    }
}
