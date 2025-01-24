<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
    function __construct() {
        $this->db = \Config\Database::connect();
        $this->Admindmodel = new AdminModel();

        if (!session()->get('isLoggedIn')) {
            // return redirect()->to('/login')->with('error', 'You must be logged in to access this page');
            return redirect()->to('admin/login');
            echo "session expired ";
        }
    }

    public function login()
    {   
        return view('Admin/signin');
        // return view('Admin/admin_header', ['content' => view('Admin/signin')]);
    }

    public function dashboard()
    {
        return view('Admin/dashboard');
        // return view('Admin/admin_header', ['content' => view('Admin/signin')]);
    }

    public function attemptLogin()
    {

        // print_r('welcome');
        // exit;

        $session = session();
        // $model = new UserModel();

        // Get the input values
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // $username = 'test admin';
        // $password = '1234';

        // Validate user
        // $user = $model->where('username', $username)->first();
        $user = $this->Admindmodel->getrecords();;

       

        if ($user) {
            // Check password
            // if (password_verify($password, $user['password_hash'])) {
            if ($password == $user['password_hash']) {
                $session->set([
                    'isLoggedIn' => true,
                    'user_id' => $user['user_id'],
                    'username' => $user['username'],
                    'is_logged_in' => true,
                ]);

                // $userID = session()->get('user_id');
                // echo 'User ID: ' . $userID;
                // exit;

                return redirect()->to(site_url('admin/dashboard')); 
                // return redirect()->to('/dashboard'); // Change this to your dashboard route
                // $this->dashboard();

            } else {

                return redirect()->back()->with('error', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    // public function(){
       
    // }

    public function logout()
    {
        // Remove a specific key
        session()->remove('user_id');
        // Remove multiple keys
        session()->remove(['user_id', 'email']);
        // Destroy the entire session
        session()->destroy();

        return redirect()->to('admin/login');
    }

    public function session_check()
    {

        // return redirect()->to(site_url('admin/dashboard')); 

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
