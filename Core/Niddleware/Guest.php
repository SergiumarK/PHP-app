<?php 

namespace Core\Niddleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['user'] ?? false) {
            header('Location: /Cara/');
            exit();
        }
    }
}