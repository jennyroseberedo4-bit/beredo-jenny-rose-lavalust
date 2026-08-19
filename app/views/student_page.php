<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome ✦ Student Portal</title>
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
            min-height:100vh;
            font-family:'Quicksand', 'Segoe UI', Roboto, Arial, sans-serif;
            background:
                radial-gradient(circle at 10% 10%, var(--rose-300) 0%, transparent 40%),
                radial-gradient(circle at 90% 20%, var(--gold) 0%, transparent 25%),
                linear-gradient(160deg, var(--blush-bg) 0%, #fde3ef 100%);
            color:var(--ink);
            display:flex;
            flex-direction:column;
            align-items:center;
        }

        nav.top-nav {
            display:flex;
            gap:6px;
            align-items:center;
            max-width:520px;
            width:calc(100% - 32px);
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

        .welcome-card {
            position:relative;
            max-width:520px;
            width:calc(100% - 32px);
            margin:60px auto;
            background:#fff;
            border-radius:28px;
            box-shadow:0 18px 40px var(--shadow);
            border:1px solid var(--rose-300);
            overflow:hidden;
            text-align:center;
        }

        .welcome-banner {
            position:relative;
            background:linear-gradient(120deg, var(--rose-700) 0%, var(--rose-500) 55%, var(--rose-400) 100%);
            padding:44px 28px 60px 28px;
            color:#fff;
            overflow:hidden;
        }
        .welcome-banner::before,
        .welcome-banner::after {
            content:"";
            position:absolute;
            border-radius:50%;
            background:rgba(255,255,255,0.14);
        }
        .welcome-banner::before { width:170px; height:170px; top:-70px; right:-55px; }
        .welcome-banner::after  { width:110px; height:110px; bottom:-50px; left:-30px; background:rgba(255,209,102,0.25); }

        .welcome-badge {
            width:88px;
            height:88px;
            margin:0 auto;
            border-radius:50%;
            background:linear-gradient(145deg, var(--gold), #fff3d6);
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:2.2rem;
            border:4px solid rgba(255,255,255,0.85);
            box-shadow:0 8px 18px rgba(0,0,0,0.2);
            position:relative;
            z-index:2;
        }

        .welcome-banner .eyebrow {
            position:relative;
            z-index:2;
            display:inline-block;
            margin-top:16px;
            font-size:0.7rem;
            letter-spacing:2px;
            text-transform:uppercase;
            background:rgba(255,255,255,0.22);
            padding:4px 12px;
            border-radius:999px;
            font-weight:700;
        }

        .welcome-body {
            margin-top:-32px;
            background:#fff;
            border-radius:24px 24px 0 0;
            position:relative;
            z-index:3;
            padding:32px 30px 36px 30px;
        }

        .welcome-body h1 {
            font-family:'Baloo 2', 'Quicksand', sans-serif;
            font-size:1.7rem;
            margin:0 0 12px 0;
            color:var(--rose-800);
            line-height:1.3;
        }
        .welcome-body h1 span { color:var(--rose-500); }

        .welcome-body p {
            margin:0 0 26px 0;
            font-size:0.98rem;
            color:var(--rose-700);
            opacity:0.85;
            line-height:1.6;
        }

        .cta-row {
            display:flex;
            gap:12px;
            flex-wrap:wrap;
            justify-content:center;
        }
        .cta-btn {
            flex:1;
            min-width:150px;
            text-decoration:none;
            font-weight:700;
            font-size:0.92rem;
            padding:13px 20px;
            border-radius:14px;
            transition:transform .15s ease, filter .15s ease;
        }
        .cta-btn.primary {
            color:#fff;
            background:linear-gradient(120deg, var(--rose-600), var(--rose-500));
            box-shadow:0 8px 18px var(--shadow);
        }
        .cta-btn.primary:hover { transform:translateY(-2px); filter:brightness(1.05); }
        .cta-btn.ghost {
            color:var(--rose-700);
            background:var(--rose-100);
            border:1.5px dashed var(--rose-400);
        }
        .cta-btn.ghost:hover { transform:translateY(-2px); background:var(--rose-300); }

        footer.mini {
            max-width:520px;
            margin:0 auto 24px auto;
            text-align:center;
            font-size:0.78rem;
            color:var(--rose-700);
            opacity:0.65;
        }

        @media (max-width:480px) {
            .welcome-body h1 { font-size:1.4rem; }
        }
    </style>
</head>
<body>

    <nav class="top-nav" aria-label="Main navigation">
        <a href="<?= site_url('student'); ?>">🏠 Home</a>
        <span class="sep">•</span>
        <a href="<?= site_url('student/profile'); ?>">🪪 Profile</a>
    </nav>

    <div class="welcome-card">
        <div class="welcome-banner">
            <div class="welcome-badge">🎀</div>
            <span class="eyebrow">Student Portal</span>
        </div>
        <div class="welcome-body">
            <h1>Welcome to your <span>student space</span> ✦</h1>
            <p>This is your cozy little corner of the portal — head over to your passport-style profile to see everything about you in one pretty page.</p>
            <div class="cta-row">
                <a class="cta-btn primary" href="<?= site_url('student/profile'); ?>">View My Profile</a>
                <a class="cta-btn ghost" href="<?= site_url('student'); ?>">Back Home</a>
            </div>
        </div>
    </div>

    <footer class="mini">made with 💗 for the student portal</footer>

</body>
</html>