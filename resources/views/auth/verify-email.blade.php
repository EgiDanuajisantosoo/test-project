<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0f0f1a;
            color: #f1f5f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background: rgba(255,255,255,0.05);
            padding: 3rem;
            border-radius: 1.5rem;
            text-align: center;
            max-width: 450px;
            border: 1px solid rgba(255,255,255,0.1);
        }
        h1 { margin-bottom: 1rem; }
        p { color: #94a3b8; margin-bottom: 2rem; line-height: 1.6; }
        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            text-decoration: none;
            border-radius: 0.75rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Verifikasi Email Anda</h1>
        <p>Silakan periksa kotak masuk email Anda untuk tautan verifikasi. Jika Anda tidak menerima email, hubungi dukungan kami.</p>
        <a href="{{ route('register.success') }}" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
