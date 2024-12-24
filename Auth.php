<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('login');
    }

    public function halregister(){
        return view('halregister'); 
    }

    public function register()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $this->userModel->insert($data);

        return redirect()->to('/');
    }

    public function proses_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user->password))
            [
                'username' => $user->username,
                'role' => $user->role,
                'logged_in' => true
            ];
        return redirect()->to('tamu')->with('success', 'berhasil masuk');
    }
}