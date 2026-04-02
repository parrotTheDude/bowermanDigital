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
            background: #000;
            color: #fff;
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
            border: 3px solid rgba(34, 211, 238, 0.2);
            border-top-color: rgba(34, 211, 238, 0.9);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 2rem;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 0.75rem;
            letter-spacing: -0.02em;
        }

        p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 1rem;
            line-height: 1.6;
        }

        .countdown {
            display: inline-block;
            color: rgba(34, 211, 238, 0.9);
            font-variant-numeric: tabular-nums;
            min-width: 2ch;
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner {
                animation: none;
                border-top-color: rgba(34, 211, 238, 0.9);
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
