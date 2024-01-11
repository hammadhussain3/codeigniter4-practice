<?php

namespace App\Controllers;
use App\Models\User;
class Home extends BaseController
{
    public function index(): string
    {
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
        $data = [
                'user_name' => $this->request->getVar('username'),
                'user_email' => $this->request->getVar('email'),
                'user_password' => $this->request->getVar('password'),
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
            'user_password' => $this->request->getVar('password'),
    ]; 
        $id = $this->request->getVar('id');
        $model = new User();
        $model->update($id,$data);
        return redirect()->to(base_url('show'));

    }
}
