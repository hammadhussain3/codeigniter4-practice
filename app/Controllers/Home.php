<?php

namespace App\Controllers;
use App\Models\User;
class Home extends BaseController
{
    public function __construct(){
        helper('addition');
    }
    public function login(){
        return view('login');
    }
    public function verify_login(){
        $session = session();
        $userModel = new User();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('user_name', $username)->first();
        if($data){
            $pass = $data['user_password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['user_id'],
                    'email' => $data['user_email'],
                    'user_name' => $data['user_name'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/show');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
        }
    }
    public function index(): string
    {
        // $result = addition(5, 10);
        // echo 'The sum is: ' . $result;
        return view('welcome_message');
    }
    public function show(){
        $modal = new User();
        $data['users'] = $modal->findAll();
        return view('show',$data);
    }
    public function delete($id=null){
        $model = new User();
        $model->where('user_id',$id)->delete();
        return redirect()->to(base_url('show'));
    }
    public function insert(){
        $hashedPassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        if($this->request->getFile('user_image') && $this->request->getFile('user_image')->isValid()){
            $image = $this->request->getFile('user_image');
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
        } else{
            $newName = null;
        }
        $data = [
                'user_name' => $this->request->getVar('username'),
                'user_email' => $this->request->getVar('email'),
                'user_password' => $hashedPassword,
                'user_image' => $newName,
        ];        
        $obj = new User();
        $obj->insert($data);
        return redirect()->to(base_url('show'));
    }
    public function edit($id=null){
        $model = new User();
        $data['user'] = $model->where('user_id',$id)->first();
        return view('edit',$data);
    }
    public function update(){
        $data = [
            'user_name' => $this->request->getVar('username'),
            'user_email' => $this->request->getVar('email'),
    ]; 
    if($this->request->getVar('password')){
            $hashedPassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            $data['user_password'] = $hashedPassword;
}
    if($this->request->getFile('user_image') && $this->request->getFile('user_image')->isValid()){
        $image = $this->request->getFile('user_image');
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
        $data['user_image'] = $newName;
    }
        $id = $this->request->getVar('id');
        $model = new User();
        $model->update($id,$data);
        return redirect()->to(base_url('show'));

    }
}
