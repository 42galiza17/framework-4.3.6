<?php

namespace App\Controllers;

use App\Model\UserModel;

class Home extends BaseController
{
    public function index()
    {
        if($this->request->is('post')){
            $model = model(UserModel::class);
            $user = $this->request->getPost();

            if ($user['id'] == null){
                $model->save($user);
            }else{
                $model->update($user['id'],$user);
            }
        }


        $model = model(UserModel::class);
        $allUsers = $model->findAll();


        $data = [
            'rows'=>$allUsers,
        ]; 

        return view('homeView' ,$data);


    }

    public function editUser($id)
    {
    

        $model = model(UserModel::class);
        $user = $model->find($id);
        $allUsers = $model->findAll();


        $data = [
            'id'=>$user['id'],
            'firstName'=>$user['firstName'],
            'lastName'=>$user['lastName'],
            'rows'=>$allUsers,
        ]; 
        
        return view('homeView' ,$data);
    
    }


    public function updateUser($id)
    {
    

        $model = model(UserModel::class);
        $user = $model->find($id);
        $allUsers = $model->findAll();


        $data = [
            'id'=>$user['id'],
            'firstName'=>$user['firstName'],
            'lastName'=>$user['lastName'],
            'rows'=>$allUsers,
        ]; 
        
        return view('homeView' ,$data);
    
    }


    public function deleteUser($id)
    {
    

        $model = model(UserModel::class);
       $model->delete($id);
        $allUsers = $model->findAll();


        $data = [

            'rows'=>$allUsers,
        ]; 
        
        return view('homeView' ,$data);
    
    }
}
