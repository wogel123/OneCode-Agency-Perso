<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oncode Agency - Conception et développement de site web sur mesure</title>

    <link rel="stylesheet" href="/webroot/lib/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/webroot/lib/fontawesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/webroot/assets/css/main.css">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-nav" data-bs-theme="dark">
        <div class="container-md">
            <div class="navbar-content">
                <div class="d-flex" style="margin: 15px 0px;">
                    <img class="navbar-brand-img" src="/webroot/assets/img/logo.svg" alt="">
                    <div class="d-flex flex-column ms-2">
                        <a href="/" class="navbar-brand"><b>OnCode <br>Agency</b></a>
                        <small class="navbar-small">Conception et développement de site web</small>
                    </div>
                </div>

                <div class="navbar-responsive">
                    <a class="navbar-r-toggler d-flex"><i class="fa-solid fa-bars"></i></a>
                </div>
                <ul class="navbar-nav ms-auto" style="margin-top: -34px; margin-right: -67px;">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Créations</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

<ul class="navbar-responsive-content">
    <div class="d-flex brand-r">
        <img src="/webroot/assets/img/logo.svg" alt="">
        <a href="/" class="navbar-brand"><b>OnCode<br>Agency</b></a>
    </div>
    <li>
        <a href="/">Accueil</a>
    </li>
    <li>
        <a href="/services">Services</a>
    </li>
    <li>
        <a href="/">Créations</a>
    </li>
    <li>
        <a href="/contact">Contact</a>
    </li>
    <div class="p-3 contact-r d-flex flex-column">
        <p class="mt-4 d-flex mx-auto"><i class="fa-solid fa-envelope my-auto me-2"></i> contact@oncode-agency.fr</p>
        <p class="d-flex mx-auto"><i class="fa-solid fa-phone my-auto me-2"></i> 06 66 11 60 12</p>
    </div>
</ul>

<div class="overlay"></div>
<script src="/webroot/lib/particles/2.0.0/js/particles.min.js"></script>
<script>
    particlesJS.load('particles', '/webroot/lib/particles/2.0.0/particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
</script>