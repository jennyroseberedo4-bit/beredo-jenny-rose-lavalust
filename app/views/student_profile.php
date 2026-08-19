<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jenny's Corner ✦ Student Passport</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Baloo+2:wght@600;700;800&display=swap" rel="stylesheet">
<style>
    :root {
        --rose-900:#4a1030;
        --rose-800:#6b1743;
        --rose-700:#9c2c63;
        --rose-600:#c8447f;
        --rose-500:#ec6ea6;
        --rose-400:#f496bf;
        --rose-300:#fbc4dc;
        --rose-100:#fff0f6;
        --blush-bg:#fff5fa;
        --gold:#ffd166;
        --ink:#5a1f3d;
        --shadow:rgba(200,68,127,0.25);
    }

    * { box-sizing:border-box; }

    body {
        margin:0;
        font-family:'Quicksand', 'Segoe UI', Roboto, Arial, sans-serif;
        background:
            radial-gradient(circle at 10% 10%, var(--rose-300) 0%, transparent 40%),
            radial-gradient(circle at 90% 20%, var(--gold) 0%, transparent 25%),
            linear-gradient(160deg, var(--blush-bg) 0%, #fde3ef 100%);
        min-height:100vh;
        color:var(--ink);
        padding-bottom:40px;
    }

    /* ---------- NAV ---------- */
    nav.top-nav {
        display:flex;
        gap:6px;
        align-items:center;
        max-width:760px;
        margin:18px auto 0 auto;
        padding:10px 18px;
        background:rgba(255,255,255,0.6);
        backdrop-filter:blur(6px);
        border-radius:999px;
        border:1px solid var(--rose-300);
        font-weight:600;
        font-size:0.9rem;
    }
    nav.top-nav a {
        color:var(--rose-700);
        text-decoration:none;
        padding:6px 14px;
        border-radius:999px;
        transition:background .2s ease, color .2s ease;
    }
    nav.top-nav a:hover { background:var(--rose-600); color:#fff; }
    nav.top-nav .sep { color:var(--rose-300); }

    /* ---------- HERO / TITLE ---------- */
    .hero {
        max-width:760px;
        margin:26px auto 8px auto;
        text-align:center;
        padding:0 16px;
    }
    .hero .eyebrow {
        display:inline-block;
        font-size:0.75rem;
        letter-spacing:2px;
        text-transform:uppercase;
        background:var(--rose-600);
        color:#fff;
        padding:5px 14px;
        border-radius:999px;
        margin-bottom:10px;
    }
    .hero h1 {
        font-family:'Baloo 2', 'Quicksand', sans-serif;
        font-size:2.1rem;
        margin:0;
        color:var(--rose-800);
        line-height:1.25;
    }
    .hero h1 span { color:var(--rose-500); }
    .hero p.tagline {
        margin:8px 0 0 0;
        color:var(--rose-700);
        opacity:0.8;
        font-size:0.95rem;
    }

    /* ---------- PASSPORT CARD ---------- */
    .passport {
        position:relative;
        max-width:760px;
        margin:26px auto;
        background:#fff;
        border-radius:28px;
        box-shadow:0 18px 40px var(--shadow);
        overflow:hidden;
        border:1px solid var(--rose-300);
    }

    .passport-header {
        position:relative;
        background:linear-gradient(120deg, var(--rose-700) 0%, var(--rose-500) 55%, var(--rose-400) 100%);
        padding:38px 28px 64px 28px;
        color:#fff;
        overflow:hidden;
    }
    .passport-header::before,
    .passport-header::after {
        content:"";
        position:absolute;
        border-radius:50%;
        background:rgba(255,255,255,0.14);
    }
    .passport-header::before { width:180px; height:180px; top:-70px; right:-60px; }
    .passport-header::after { width:110px; height:110px; bottom:-50px; left:-30px; background:rgba(255,209,102,0.25); }

    .avatar-ring {
        width:104px;
        height:104px;
        border-radius:50%;
        background:linear-gradient(145deg, var(--gold), #fff3d6);
        display:flex;
        align-items:center;
        justify-content:center;
        font-family:'Baloo 2', sans-serif;
        font-weight:800;
        font-size:2.2rem;
        color:var(--rose-700);
        border:4px solid rgba(255,255,255,0.85);
        box-shadow:0 8px 18px rgba(0,0,0,0.2);
        position:relative;
        z-index:2;
    }

    .header-name {
        position:relative;
        z-index:2;
        margin-top:14px;
    }
    .header-name h2 {
        font-family:'Baloo 2', sans-serif;
        margin:0;
        font-size:1.5rem;
    }
    .header-name .student-id-pill {
        display:inline-block;
        margin-top:6px;
        font-size:0.8rem;
        letter-spacing:0.5px;
        background:rgba(255,255,255,0.24);
        padding:4px 12px;
        border-radius:999px;
        font-weight:600;
    }

    .passport-body {
        margin-top:-38px;
        background:#fff;
        border-radius:24px 24px 0 0;
        padding:30px 28px 10px 28px;
        position:relative;
        z-index:3;
    }

    .quote-bubble {
        background:var(--rose-100);
        border:1.5px dashed var(--rose-400);
        color:var(--rose-800);
        border-radius:16px;
        padding:12px 16px;
        font-style:italic;
        font-size:0.95rem;
        margin-bottom:26px;
        position:relative;
    }
    .quote-bubble::before { content:"“"; font-size:1.4rem; color:var(--rose-500); margin-right:4px; }
    .quote-bubble::after  { content:"”"; font-size:1.4rem; color:var(--rose-500); margin-left:2px; }

    .info-grid {
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:16px;
        margin-bottom:22px;
    }
    .info-tile {
        background:var(--blush-bg);
        border:1px solid var(--rose-300);
        border-radius:16px;
        padding:14px 16px;
        transition:transform .15s ease, box-shadow .15s ease;
    }
    .info-tile:hover { transform:translateY(-2px); box-shadow:0 8px 18px var(--shadow); }
    .info-tile .label {
        display:flex;
        align-items:center;
        gap:6px;
        font-size:0.72rem;
        text-transform:uppercase;
        letter-spacing:1px;
        color:var(--rose-600);
        font-weight:700;
        margin-bottom:4px;
    }
    .info-tile .value {
        font-size:0.98rem;
        color:var(--ink);
        font-weight:600;
        word-break:break-word;
    }
    .info-tile.full { grid-column:1 / -1; }

    .chip-section { margin-bottom:22px; }
    .chip-section h3 {
        font-family:'Baloo 2', sans-serif;
        font-size:1rem;
        color:var(--rose-700);
        margin:0 0 10px 0;
    }
    .chip-row { display:flex; flex-wrap:wrap; gap:8px; }
    .chip {
        background:linear-gradient(120deg, var(--rose-600), var(--rose-500));
        color:#fff;
        font-size:0.82rem;
        font-weight:600;
        padding:6px 14px;
        border-radius:999px;
        box-shadow:0 3px 8px var(--shadow);
    }
    .chip.hobby { background:linear-gradient(120deg, var(--gold), #ffb84d); color:var(--rose-900); }

    .social-row {
        display:flex;
        gap:12px;
        flex-wrap:wrap;
        padding:22px 0 28px 0;
        border-top:1px dashed var(--rose-300);
        margin-top:6px;
    }
    .social-btn {
        flex:1;
        min-width:150px;
        display:flex;
        align-items:center;
        justify-content:center;
        gap:8px;
        text-decoration:none;
        font-weight:700;
        font-size:0.9rem;
        padding:12px 16px;
        border-radius:14px;
        color:#fff;
        transition:transform .15s ease, filter .15s ease;
    }
    .social-btn:hover { transform:translateY(-2px); filter:brightness(1.05); }
    .social-btn.ig { background:linear-gradient(135deg,#8a3ab9,#bc2a8d,#e95950,#fccc63); }
    .social-btn.tt { background:linear-gradient(135deg,#25f4ee, #010101 55%, #fe2c55); }

    footer.mini {
        max-width:760px;
        margin:8px auto 0 auto;
        text-align:center;
        font-size:0.78rem;
        color:var(--rose-700);
        opacity:0.65;
    }

    @media (max-width:560px) {
        .info-grid { grid-template-columns:1fr; }
        .hero h1 { font-size:1.6rem; }
        .passport-header { padding:30px 20px 56px 20px; }
        .passport-body { padding:26px 18px 10px 18px; }
    }
</style>
</head>
<body>

<nav class="top-nav" aria-label="Main navigation">
    <a href="<?= site_url('student'); ?>">🏠 Home</a>
    <span class="sep">•</span>
    <a href="<?= site_url('student/profile'); ?>">🪪 Profile</a>
</nav>

<div class="hero">
    <span class="eyebrow">BSIT Student Passport</span>
    <h1>Hey, it's <span>Jenny's</span> little corner ✦</h1>
    <p class="tagline">a cozy, pink-tinted look into who I am on campus</p>
</div>

<div class="passport">
    <div class="passport-header">
        <div class="avatar-ring">JR</div>
        <div class="header-name">
            <h2><?= htmlspecialchars($name ?? 'Jenny Rose Beredo') ?></h2>
            <span class="student-id-pill">🎓 <?= htmlspecialchars($student_id ?? 'MCC2024-00024') ?></span>
        </div>
    </div>

    <div class="passport-body">

        <div class="quote-bubble">
            <?= htmlspecialchars($description ?? 'hehe') ?>
        </div>

        <div class="info-grid">
            <div class="info-tile">
                <div class="label">📘 Course &amp; Section</div>
                <div class="value"><?= htmlspecialchars($course_section ?? 'BSIT') ?></div>
            </div>
            <div class="info-tile">
                <div class="label">📞 Contact</div>
                <div class="value"><?= htmlspecialchars($contact_number ?? '09815607065') ?></div>
            </div>
            <div class="info-tile full">
                <div class="label">📍 Address</div>
                <div class="value"><?= htmlspecialchars($address ?? 'Sitio Ilaya Managpi Calapan City Oriental Mindoro') ?></div>
            </div>
        </div>

        <div class="chip-section">
            <h3>✨ Skills</h3>
            <div class="chip-row">
                <span class="chip">Collaboration</span>
                <span class="chip">Teamwork</span>
            </div>
        </div>

        <div class="chip-section">
            <h3>🎮 Hobbies</h3>
            <div class="chip-row">
                <span class="chip hobby">Online games</span>
                <span class="chip hobby">Playing</span>
            </div>
        </div>

        <div class="social-row">
            <a class="social-btn ig" href="https://www.instagram.com/jenniye_yeee?igsi=MW0wZjk4cmFoeGMwbg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer">
                📸 Instagram
            </a>
            <a class="social-btn tt" href="https://www.tiktok.com/@jenn_jenny0?_r=1&_t=ZS-990VgQNMsa5" target="_blank" rel="noopener noreferrer">
                🎵 TikTok
            </a>
        </div>

    </div>
</div>

<footer class="mini">made with 💗 for the student portal</footer>

</body>
</html>