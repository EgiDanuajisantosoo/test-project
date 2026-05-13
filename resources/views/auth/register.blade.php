<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Daftar akun baru untuk mengakses layanan kami.">
    <title>Daftar Akun - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #a5b4fc;
            --error: #ef4444;
            --success: #22c55e;
            --bg: #0f0f1a;
            --card-bg: rgba(255,255,255,0.05);
            --border: rgba(255,255,255,0.1);
            --text: #f1f5f9;
            --text-muted: #94a3b8;
            --input-bg: rgba(255,255,255,0.07);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 50% at 20% 20%, rgba(99,102,241,0.25) 0%, transparent 60%),
                radial-gradient(ellipse 50% 40% at 80% 80%, rgba(139,92,246,0.2) 0%, transparent 60%);
            pointer-events: none;
        }

        .card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 1.5rem;
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 460px;
            position: relative;
            z-index: 1;
            animation: fadeUp 0.5s ease;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 1.75rem;
        }

        .logo-icon {
            width: 40px; height: 40px;
            background: linear-gradient(135deg, var(--primary), #8b5cf6);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem;
        }

        .logo-text {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text);
            letter-spacing: -0.3px;
        }

        h1 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 0.4rem;
            letter-spacing: -0.5px;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }

        .alert-error {
            background: rgba(239,68,68,0.1);
            border: 1px solid rgba(239,68,68,0.3);
            border-radius: 0.75rem;
            padding: 0.9rem 1rem;
            margin-bottom: 1.5rem;
            color: #fca5a5;
            font-size: 0.875rem;
        }

        .alert-error ul { padding-left: 1.1rem; }
        .alert-error li { margin-top: 0.25rem; }

        .form-group {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
            letter-spacing: 0.2px;
        }

        .input-wrap {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 0.9rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 1rem;
            pointer-events: none;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            background: var(--input-bg);
            border: 1px solid var(--border);
            border-radius: 0.75rem;
            padding: 0.75rem 0.9rem 0.75rem 2.6rem;
            color: var(--text);
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }

        input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99,102,241,0.2);
        }

        input.is-invalid {
            border-color: var(--error);
            box-shadow: 0 0 0 3px rgba(239,68,68,0.15);
        }

        .field-error {
            color: #fca5a5;
            font-size: 0.8rem;
            margin-top: 0.4rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .toggle-password {
            position: absolute;
            right: 0.9rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            font-size: 1rem;
            padding: 0;
            line-height: 1;
            transition: color 0.2s;
        }

        .toggle-password:hover { color: var(--text); }

        .strength-bar {
            height: 4px;
            border-radius: 4px;
            background: rgba(255,255,255,0.1);
            margin-top: 0.5rem;
            overflow: hidden;
        }

        .strength-fill {
            height: 100%;
            border-radius: 4px;
            width: 0%;
            transition: width 0.3s, background 0.3s;
        }

        .strength-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-top: 0.3rem;
        }

        .btn-submit {
            width: 100%;
            padding: 0.85rem;
            background: linear-gradient(135deg, var(--primary), #8b5cf6);
            border: none;
            border-radius: 0.75rem;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: opacity 0.2s, transform 0.15s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(99,102,241,0.35);
            letter-spacing: 0.2px;
        }

        .btn-submit:hover {
            opacity: 0.92;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(99,102,241,0.5);
        }

        .btn-submit:active { transform: translateY(0); }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .divider {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
            margin: 1.5rem 0 0;
        }

        .divider a {
            color: var(--primary-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .divider a:hover { color: #fff; }

        .spinner {
            display: none;
            width: 18px; height: 18px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 480px) {
            .card { padding: 2rem 1.5rem; }
            h1 { font-size: 1.4rem; }
        }
    </style>
</head>
<body>

<div class="card">
    <div class="logo">
        <div class="logo-icon">✦</div>
        <span class="logo-text">{{ config('app.name') }}</span>
    </div>

    <h1>Buat Akun Baru</h1>
    <p class="subtitle">Isi data di bawah untuk mendaftar.</p>

    @if ($errors->any())
        <div class="alert-error" role="alert">
            <strong>Terdapat kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="registerForm" method="POST" action="{{ route('register.store') }}" novalidate>
        @csrf

        {{-- Nama Lengkap --}}
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <div class="input-wrap">
                <span class="input-icon">👤</span>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama lengkap"
                    autocomplete="name"
                    class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                    required
                >
            </div>
            @error('name')
                <p class="field-error">⚠ {{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group">
            <label for="email">Alamat Email</label>
            <div class="input-wrap">
                <span class="input-icon">✉</span>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="contoh@email.com"
                    autocomplete="email"
                    class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                    required
                >
            </div>
            @error('email')
                <p class="field-error">⚠ {{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-wrap">
                <span class="input-icon">🔒</span>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    autocomplete="new-password"
                    class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                    required
                >
                <button type="button" class="toggle-password" id="togglePassword" aria-label="Tampilkan password">👁</button>
            </div>
            <div class="strength-bar"><div class="strength-fill" id="strengthFill"></div></div>
            <p class="strength-label" id="strengthLabel"></p>
            @error('password')
                <p class="field-error">⚠ {{ $message }}</p>
            @enderror
        </div>

        {{-- Konfirmasi Password --}}
        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <div class="input-wrap">
                <span class="input-icon">🔑</span>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    autocomplete="new-password"
                    required
                >
                <button type="button" class="toggle-password" id="toggleConfirm" aria-label="Tampilkan konfirmasi">👁</button>
            </div>
        </div>

        <button type="submit" class="btn-submit" id="submitBtn">
            <span id="btnText">Daftar Sekarang</span>
            <div class="spinner" id="spinner"></div>
        </button>
    </form>

    <p class="divider">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
</div>

<script>
    // Toggle password visibility
    function setupToggle(btnId, inputId) {
        document.getElementById(btnId).addEventListener('click', function () {
            const input = document.getElementById(inputId);
            const isHidden = input.type === 'password';
            input.type = isHidden ? 'text' : 'password';
            this.textContent = isHidden ? '🙈' : '👁';
        });
    }
    setupToggle('togglePassword', 'password');
    setupToggle('toggleConfirm', 'password_confirmation');

    // Password strength meter
    const passwordInput = document.getElementById('password');
    const fill = document.getElementById('strengthFill');
    const label = document.getElementById('strengthLabel');

    passwordInput.addEventListener('input', function () {
        const val = this.value;
        let score = 0;
        if (val.length >= 8) score++;
        if (/[A-Z]/.test(val)) score++;
        if (/[0-9]/.test(val)) score++;
        if (/[^A-Za-z0-9]/.test(val)) score++;

        const levels = [
            { pct: '0%',   color: 'transparent', text: '' },
            { pct: '25%',  color: '#ef4444',      text: 'Lemah' },
            { pct: '50%',  color: '#f97316',      text: 'Cukup' },
            { pct: '75%',  color: '#eab308',      text: 'Kuat' },
            { pct: '100%', color: '#22c55e',       text: 'Sangat Kuat' },
        ];

        const lvl = val.length === 0 ? levels[0] : levels[score];
        fill.style.width = lvl.pct;
        fill.style.background = lvl.color;
        label.textContent = lvl.text;
    });

    // Submit loading state
    document.getElementById('registerForm').addEventListener('submit', function () {
        const btn = document.getElementById('submitBtn');
        document.getElementById('btnText').style.display = 'none';
        document.getElementById('spinner').style.display = 'block';
        btn.disabled = true;
    });
</script>

</body>
</html>
