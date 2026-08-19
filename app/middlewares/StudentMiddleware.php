<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle($next)
    {
        if (!isset($_SESSION['deluna_access'])) {
            $_SESSION['deluna_access'] = true;
        }

        if ($_SESSION['deluna_access'] == true) {
            return $next();
        } else {
            redirect('student');
            exit;
        }
    }
}

// StudentMiddleware.php
// Simple middleware para sa protection ng /student/profile route

class StudentMiddleware extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // simple access condition ko lang, session variable
        // pag wala pa, i-set ko muna as true (para makapasok pa rin
        // pero may check pa rin na ginagawa yung middleware)
        if (!isset($_SESSION['deluna_access'])) {
            $_SESSION['deluna_access'] = true;
        }

        if ($_SESSION['deluna_access'] == true) {
            // allowed, pupunta sa profile page
            return true;
        } else {
            // hindi pwede, ibalik sa home page na lang
            redirect('student');
            exit;
        }
    }
}
