<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Berhasil - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0f0f1a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(ellipse 60% 50% at 50% 30%, rgba(99,102,241,0.2) 0%, transparent 60%);
            pointer-events: none;
        }
        .card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 1.5rem;
            padding: 3rem 2rem;
            width: 100%;
            max-width: 420px;
            text-align: center;
            animation: pop 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            z-index: 1;
        }
        @keyframes pop {
            from { opacity: 0; transform: scale(0.85); }
            to   { opacity: 1; transform: scale(1); }
        }
        .icon {
            width: 72px; height: 72px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1.5rem;
            box-shadow: 0 0 30px rgba(34,197,94,0.3);
        }
        h1 {
            font-size: 1.6rem;
            font-weight: 700;
            color: #f1f5f9;
            margin-bottom: 0.5rem;
        }
        p {
            color: #94a3b8;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0.4rem;
        }
        .username {
            color: #a5b4fc;
            font-weight: 600;
        }
        .btn {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.8rem 2rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 0.75rem;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: opacity 0.2s, transform 0.15s;
            box-shadow: 0 4px 15px rgba(99,102,241,0.35);
        }
        .btn:hover { opacity: 0.9; transform: translateY(-1px); }
    </style>
</head>
<body>
<div class="card">
    <div class="icon">✓</div>
    <h1>Selamat Datang!</h1>
    <p>Hei, <span class="username">{{ Auth::user()->name }}</span>!</p>
    <p>Akun Anda berhasil dibuat. Anda sudah masuk ke sistem.</p>
    <a href="/" class="btn">Ke Halaman Utama</a>
</div>
</body>
</html>
