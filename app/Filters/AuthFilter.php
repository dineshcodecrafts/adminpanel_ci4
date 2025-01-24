<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    // This method runs before the page is shown
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is logged in (by checking the session)
        if (!session()->get('isLoggedIn')) {
            // If not logged in, redirect to the login page
            return redirect()->to('/admin/login');
        }
    }

    // This method runs after the page is shown (we don't need anything here)
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing to do after
    }
}
