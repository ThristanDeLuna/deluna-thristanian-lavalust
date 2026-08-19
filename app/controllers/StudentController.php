<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

// StudentController.php
// Web Systems and Technologies - Laboratory Activity 3
// Name: Thristan Ian O. De Luna
// Section: BSIT 3-F1

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // home page lang, walang special data dito
    public function index()
    {
        $data['title'] = 'Student Info Page - De Luna';

        $this->call->view('student_home', $data);
    }

    // profile page, protected by middleware
    public function profile()
    {
        // sample data ko na rin actually, sarili kong info
        $student = array(
            'student_id' => 'MCC2024-00005',
            'name'       => 'Thristan Ian O. De Luna',
            'course'     => 'BSIT',
            'year'       => '3rd Year',
            'section'    => 'F1',
            'email'      => 'delunathristanian@gmail.com'
        );

        $data['student'] = $student;
        $data['title'] = 'My Profile';

        $this->call->view('student_profile', $data);
    }
}
