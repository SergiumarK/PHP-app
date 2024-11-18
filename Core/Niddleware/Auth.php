<?php 

namespace Core\Niddleware;

class Auth
{
    public function handle()
    {
        if (!$_SESSION['user'] ?? false) {
            header('Location: /Cara/');
            exit();
        }
    }
}