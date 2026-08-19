<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<style>
    .student-card { max-width:700px; margin:24px auto; padding:20px; border:1px solid 
#e0e0e0; border-radius:8px; font-family:Segoe UI, Roboto, Arial, sans-serif; background:
#ffffff; box-shadow:0 2px 6px rgba(0,0,0,0.03); }
    .student-card h1 { margin:0 0 12px 0; font-size:1.6rem; }
    .student-card dl { display:grid; grid-template-columns:160px 1fr; gap:8px 16px; }
    .student-card dt { font-weight:600; color:#333; }
    .student-card dd { margin:0; color:#555; }
    @media (max-width:520px) { .student-card { padding:16px; } .student-card dl { grid-template-columns:1fr; } }
    .nav-links { margin:20px auto; max-width:700px; padding-bottom:10px; border-bottom:1px solid #ddd; }
</style>

<div class="student-card">
    <h1>Student Information</h1>
    <dl>
        <dt>Student ID</dt>
        <dd> <?= htmlspecialchars($student_id) ?></dd>

        <dt>Name</dt>
        <dd> <?= htmlspecialchars($name) ?></dd>

        <dt>Course</dt>
        <dd> <?= htmlspecialchars($course) ?></dd>

        <dt>Year Level</dt>
        <dd> <?= htmlspecialchars($year) ?></dd>

        <dt>Section</dt>
        <dd> <?= htmlspecialchars($section) ?></dd>

        <dt>Email</dt>
        <dd> <?= htmlspecialchars($email) ?></dd>
    </dl>
</div>