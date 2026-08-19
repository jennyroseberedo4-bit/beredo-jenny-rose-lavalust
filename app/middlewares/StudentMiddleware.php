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
            echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Oops, Locked Passport ✦</title>
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&family=Baloo+2:wght@700;800&display=swap" rel="stylesheet">
            <style>
                body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;
                    font-family:\'Quicksand\',Segoe UI,Roboto,Arial,sans-serif;
                    background:radial-gradient(circle at 15% 20%, #fbc4dc 0%, transparent 45%),
                               radial-gradient(circle at 85% 15%, #ffd166 0%, transparent 30%),
                               linear-gradient(160deg, #fff5fa 0%, #fde3ef 100%);
                    color:#5a1f3d; padding:20px;}
                .lock-card{max-width:420px;width:100%;background:#fff;border:1px solid #fbc4dc;
                    border-radius:24px;box-shadow:0 18px 40px rgba(200,68,127,0.25);
                    padding:36px 30px;text-align:center;}
                .lock-badge{width:72px;height:72px;border-radius:50%;margin:0 auto 18px auto;
                    background:linear-gradient(145deg,#c8447f,#ec6ea6);display:flex;align-items:center;
                    justify-content:center;font-size:2rem;color:#fff;box-shadow:0 8px 18px rgba(200,68,127,0.35);}
                .lock-card h1{font-family:\'Baloo 2\',sans-serif;font-size:1.4rem;margin:0 0 10px 0;color:#6b1743;}
                .lock-card p{margin:0 0 22px 0;font-size:0.95rem;color:#9c2c63;opacity:0.85;line-height:1.5;}
                .lock-card a{display:inline-block;text-decoration:none;font-weight:700;font-size:0.9rem;
                    color:#fff;background:linear-gradient(120deg,#c8447f,#ec6ea6);padding:12px 26px;
                    border-radius:999px;box-shadow:0 8px 18px rgba(200,68,127,0.3);transition:transform .15s ease;}
                .lock-card a:hover{transform:translateY(-2px);}
            </style></head><body>
            <div class="lock-card">
                <div class="lock-badge">🔒</div>
                <h1>This passport page is playing hide &amp; seek</h1>
                <p>Looks like you wandered into a private corner of the student portal. You\'ll need proper access to peek inside this profile.</p>
                <a href="' . site_url('student') . '">← Back to the Student Page</a>
            </div>
            </body></html>';
            exit;
        }

        return $next();
    }
}