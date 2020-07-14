<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class login extends BaseController{
    
    public function index()
    {
        return view('user_form');
    }

    public function login_action()
    {
        $userm = new UserModel();
        
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');

        $cek = $userm->getData($email, $password);

        if(($cek['user_email']==$email)&&($cek['user_pass']==$password))
        {
            session()->set('user_email',$cek['user_email']);
            session()->set('user_nama',$cek['user_nama']);
            session()->set('user_id',$cek['user_id']);
            return redirect()-> to(base_url('user'));
        }else{
            session()->setFlashdata('gagal', 'Username/password salah');
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
    {
        session()-> destroy();
        return redirect()->to(base_url('login'));
    }
}