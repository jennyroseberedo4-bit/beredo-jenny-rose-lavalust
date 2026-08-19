<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            http_response_code(403);
            echo '<h1>403 Forbidden</h1>';
            echo '<p>You are not allowed to access the student profile.</p>';
            echo '<p><a href="' . site_url('student') . '">Go back to Student Page</a></p>';
            exit;
        }

        return $next();
    }
}