<?php
class AuthMiddleware
{
    public function handle(Closure $next) {
        if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            redirect('auth/login');
        }
        return $next();
    }
}