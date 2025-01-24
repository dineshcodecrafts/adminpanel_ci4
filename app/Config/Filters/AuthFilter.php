<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    // This method is executed before the controller method is called
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is logged in by verifying session data
        if (!session()->get('isLoggedIn')) {
            // If the user is not logged in, redirect to the login page
            return redirect()->to('/admin/login');
        }
    }

    // This method is executed after the controller method is called (optional)
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No additional processing needed after the request is handled
    }
}
