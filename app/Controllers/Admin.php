<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
    function __construct() {
        $this->db = \Config\Database::connect();
        $this->Adminmodel = new AdminModel();
    }

    public function login()
    {   
        return view('Admin/signin');
    }

    public function dashboard()
    {
        return view('Admin/dashboard');
    }

    public function attemptLogin()
    {


        $session = session();

        // Get the input values
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $this->Adminmodel->getrecords();;

        if ($user) {
            if ($password == $user['password_hash']) {
                $session->set([
                    'isLoggedIn' => true,
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'is_logged_in' => true,
                ]);

                return redirect()->to(site_url('admin/dashboard')); 

            } else {

                return redirect()->back()->with('error', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }


    public function logout()
    {
     
        session()->remove('user_id');
        session()->remove(['user_id', 'email']);
        session()->destroy();

        return redirect()->to('admin/login');
    }

    public function sample_forms()
    {
        return view('Admin/add_forms');
    }   

    public function form_view()
    {
        $adminModel = new Adminmodel();
        // Retrieve data from the model
        $data['stored_data'] = $adminModel->get_users_data();
        // Pass the data to the view
        return view('Admin/form_view', $data);

    }  

    public function save()
    {

        

        $adminModel = new Adminmodel();
        // Handle file upload
        $file = $this->request->getFile('file');

        // print_r($file);
        // exit;

        $fileName = '';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName(); // Generate a random name for the file
            $file->move('public/images', $fileName); // Move the file to the 'public/images' directory
        }

        // Insert data into the database
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'file' => $fileName,
            'option' => $this->request->getPost('option'),
            'comments' => $this->request->getPost('comments'),
            'gender' => $this->request->getPost('gender'),
        ] ;

        $stored_data = $this->Adminmodel->users_data($data);
        $this->form_view();

        // print_r($user);
        // exit;

        // return redirect()->to('admin/form_view');
    }

    public function session_check()
    {
        // Check if the user is logged in
        if (session()->get('isLoggedIn')) {
            // return redirect()->to('/login')->with('error', 'You must be logged in to access this page');
            echo "still session running ";
        }

        if (!session()->get('isLoggedIn')) {
            // return redirect()->to('/login')->with('error', 'You must be logged in to access this page');
            return redirect()->to('admin/login');
            echo "session expired ";
        }
    }
}
