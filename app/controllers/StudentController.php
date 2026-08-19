<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
	public function index() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION['student_access'] = true;

        $this->call->view('student_page');
    }

    public function profile() {
        // Create student associative array
        $student = [
            'student_id'    => 'MCC2024-00024',
            'name'          => 'Beredo, Jenny Rose E.',
            'course'        => 'BS Information Technology',
            'year'          => '3rd Year',
            'section'       => 'F1',
            'email'         => 'jenny.beredo@example.com',
            'contact'       => '0981 560 7065',
            'address'       => 'Brgy. Managpi, Calapan City, Oriental Mindoro',
            'status'        => 'Access Granted',
            'avatar_initials' => 'JR'
        ];
        // ilalabas nya dito yung page, along side ang data na nakalagay sa $student
        $this->call->view('student_profile', $student);
    }
}
?>