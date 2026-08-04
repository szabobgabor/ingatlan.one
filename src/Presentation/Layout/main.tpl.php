<?php
/* @var string $contents */
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingatlan.one</title>
    <link rel="stylesheet" href="/css/i1.css" />
    <link rel="stylesheet" href="/css/photoswipe.css" />
</head>
<body>

<header>
    <a href="/" class="logo-link">
        <svg class="logo" viewBox="0 0 170 190">
            <line x1="20" y1="170" x2="20" y2="70"></line>
            <!-- line x1="10" y1="65" x2="10" y2="65" class="dot"></line -->

            <line x1="45" y1="45" x2="85" y2="15" class="one"></line>
            <line x1="85" y1="15" x2="85" y2="170" class="one"></line>

            <line x1="120" y1="40" x2="150" y2="70"></line>
            <line x1="150" y1="70" x2="150" y2="170"></line>
        </svg>
    </a>
    <div class="slogan">
        Minden jó döntés <wbr />
        egy jó kérdéssel kezdődik.
    </div>
</header>

<main>
    <?= $contents ?>
</main>

<footer>
    <p>&copy; 2026 Minden jog fenntartva.</p>
</footer>

<script src="/js/lucide.min.js"></script>
<script>
    lucide.createIcons();
</script>
</body>
</html>
