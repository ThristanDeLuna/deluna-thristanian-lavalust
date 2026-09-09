<?php
class AuthController extends Controller
{
    public function register() {
        $this->call->library('auth');
        if ($this->io->method() == 'post') {
            $this->auth->register(
                $this->io->post('username'),
                $this->io->post('password')
            );
            redirect('auth/login');
        }
        $this->call->view('auth/register');
    }

    public function login() {
        $this->call->library('auth');
        if ($this->io->method() == 'post') {
            if ($this->auth->login(
                $this->io->post('username'),
                $this->io->post('password')
            )) {
                redirect('products');
            } else {
                echo 'Login failed!';
            }
        }
        $this->call->view('auth/login');
    }

    public function logout() {
        $this->call->library('auth');
        $this->auth->logout();
        redirect('auth/login');
    }
}