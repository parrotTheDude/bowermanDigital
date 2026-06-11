<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Updating | Bowerman Digital</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        @font-face {
            font-family: 'Space Grotesk';
            src: url('/fonts/SpaceGrotesk-VariableFont_wght.woff2') format('woff2'),
                 url('/fonts/SpaceGrotesk-VariableFont_wght.ttf') format('truetype');
            font-weight: 300 700;
            font-display: swap;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Space Grotesk', system-ui, sans-serif;
            background: #f8f1e2;
            color: #3b2a1d;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
        }

        .container {
            max-width: 480px;
        }

        .spinner {
            width: 48px;
            height: 48px;
            border: 3px solid rgba(217, 109, 49, 0.25);
            border-top-color: #bd4f1a;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 2rem;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            letter-spacing: -0.02em;
        }

        p {
            color: rgba(59, 42, 29, 0.7);
            font-size: 1rem;
            line-height: 1.6;
        }

        .countdown {
            display: inline-block;
            color: #bd4f1a;
            font-variant-numeric: tabular-nums;
            min-width: 2ch;
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner {
                animation: none;
                border-top-color: #bd4f1a;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="spinner"></div>
        <h1>We're updating the website</h1>
        <p>Back in <span class="countdown" id="countdown">30</span> seconds</p>
    </div>

    <script>
        (function () {
            var seconds = 30;
            var el = document.getElementById('countdown');
            var interval = setInterval(function () {
                seconds--;
                if (seconds <= 0) {
                    clearInterval(interval);
                    window.location.reload();
                }
                el.textContent = seconds;
            }, 1000);
        })();
    </script>
</body>
</html>
