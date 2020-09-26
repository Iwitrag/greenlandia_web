<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/php/utils.php') ?>
<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
    <meta name="description" content="Greenlandia je Minecraft server pro hráče, kteří si chtějí zahrát kvalitní survival bez zbytečností.">
    <meta name="keywords" content="greenlandia, minecraft, survival, server, rezidence, kity, tpa, iwitrag">

    <meta name="theme-color" content="#206e32" />
    <meta name="msapplication-navbutton-color" content="#206e32">
    <meta name="apple-mobile-web-app-status-bar-style" content="#206e32">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/my.css">

    <script src="/js/my.js"></script>

    <title>Greenlandia.cz – Minecraft survival server jak má být</title>
</head>

<body class="text-light" data-spy="scroll" data-target="#navbarToggleTarget" data-offset="300">
    <header class="bg-main container-fluid d-flex flex-column">
        <nav class="row navbar fixed-top navbar-dark bg-navbar navbar-expand-xl px-4">
            <div class="order-0">
                <a class="navbar-brand h1 brand" href="/" >Greenlandia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleTarget"
                        aria-controls="#navbarToggleTarget" aria-expanded="false" aria-label="Rozbalit nabídku" id="navbarToggleButton">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="order-2 collapse navbar-collapse" id="navbarToggleTarget">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-close-after-click" href="#about">O serveru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-close-after-click" href="#howtoconnect">Jak se připojit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-close-after-click" href="#contact">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-close-after-click" href="#adminteam">Admin tým</a>
                    </li>
                </ul>
            </div>

            <div class="nav-right order-lg-1 order-xl-3 d-flex justify-content-center align-items-center">
                <span class="blinking-dot pr-1"></span>
                <a tabindex="0" class="player-graph-link navbar-text pr-2 pr-sm-3 text-nowrap" id="player-graph-link" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Graf hráčů"><?php include('php/get_players.php'); ?></a>
                <span class="pb-1">|</span>
                <a href="https://czech-craft.eu/server/greenlandia/vote/" class="text-info" data-toggle="tooltip" data-placement="bottom" title="Hlasuj a získej $100.00 a zároveň $25.00 pro všechny!">
                    <span class="nav-vote">Hlasování</span>
                </a>
            </div>

            <div id="player-graph-js-target" class="d-none">
                <div class="player-graph-popup">
                    <img src="https://graphs.fakaheda.eu/new/players/309145.png?pmkbnsdoywkmagfegxgo" alt="Graf hráčů">
                    <div class="w-100">
                        <span class="float-left pb-1">nyní</span><span class="float-right pb-1">před 24h</span>
                    </div>
                </div>
            </div>
        </nav>

        <section class="intro row flex-grow-1" id="intro">
            <div class="m-auto anim-zoom">
                <h1 class="display-4 text-light text-shadow" id="introText">Survival server jak má být</h1>
                <div class="mt-4 text-center">
                    <a href="#howtoconnect" role="button" class="btn btn-lg btn-outline-light ml-auto">Chci si zahrát</a>
                </div>
            </div>
        </section>
    </header>

    <main>
        <a class="anchor" id="about"></a>
        <section class="about jumbotron jumbotron-fluid bg-dark text-light mb-0 ml-auto">
            <div class="container">
                <div class="about-item-first text-left">
                    <h2>Jednoduchý server, bez zbytečností</h2>
                    <p class="lead">
                        Cílem serveru Greenlandia je nabídnout hráčům místo, kde si budou moci vychutnat Survival server bez zbytečností.
                    </p>
                </div>
                <div class="about-item text-right">
                    <h2>Vše, co hráči potřebují</h2>
                    <p class="lead">
                        Na serveru jsou k dispozici všechny důležité pluginy, náhodný teleport, ochrana pozemků, základní kity a příkazy jako /tpa.
                    </p>
                </div>
                <div class="about-item text-left">
                    <h2>Plynulý gameplay</h2>
                    <p class="lead">
                        Díky tomu, že si spoustu věcí vytváříme sami, dosahujeme plynulejšího chodu než ostatní servery podobné velikosti.
                    </p>
                </div>
                <div class="about-item-last text-right">
                    <h2>Nic netajíme</h2>
                    <p class="lead">
                        Hráči na Greenlandia mají k dispozici úplný seznam pluginů i příkazů. Na dotazy a hlášení chyb máme příkaz /bug.
                    </p>
                </div>
            </div>
        </section>

        <a class="anchor" id="howtoconnect"></a>
        <section class="howtoconnect">
            <div class="container">
                <div class="row align-items-stretch justify-content-end">
                    <div class="howtoconnect-steve order-1 order-md-0 col-12 col-md-5 col-lg-5"></div>
                    <div class="howtoconnect-content order-0 order-md-1 pt-3 pt-md-4 pb-md-3 pt-lg-5 pb-lg-4 col-12 col-md-7 col-lg-7 text-center text-md-left">
                        <h2 class="display-4 text-shadow">Jak se připojit?</h2>
                        <div class="px-0 px-sm-3 px-md-0">
                            <ol class="ml-3">
                                <li>Stáhni si <a href="https://launcher.mojang.com/download/MinecraftInstaller.msi">originální</a> nebo
                                    <a href="https://teamshiginima.com/update/ShiginimaSE_v4200.zip">warez</a> launcher</li>
                                <li>Nastav si verzi 1.15.2 a spusť hru</li>
                                <li>Ve hře více hráčů přidej server s IP adresou mc.greenlandia.cz</li>
                                <li>Připoj se a zaregistruj se příkazem /register</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a class="anchor" id="contact"></a>
        <section class="contact jumbotron jumbotron-fluid bg-dark text-light mb-0">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="contact-content">
                        <h2 class="pb-2">Kontakt</h2>
                        <div class="container">
                            <div class="row pb-2 align-items-center">
                                <span class="col-md-8 col-lg-7 col-xl-6">Server, stížnosti, nápady, spolupráce</span>
                                <span class="col-md-3">admin&#64;greenlandia.cz</span>
                            </div>
                            <div class="row border-between align-items-center">
                                <span class="col-md-8 col-lg-7 col-xl-6">Reklamace, problémy s platbami, dotazy k SMS</span>
                                <span class="col-md-3">platby&#64;greenlandia.cz</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a class="anchor" id="adminteam"></a>
        <section class="adminteam py-5 bg-creeper">
            <div class="container text-center">
                <h2 class="display-4 mb-5">Náš tým</h2>
                <figure class="figure">
                    <img src='https://crafatar.com/avatars/e0783b216db6453f8673a330e5cab2e1?size=60' class="figure-img img-fluid rounded" alt="Majitel Iwitrag"/>
                    <figcaption class="figure-caption text-center mt-3">Majitel Iwitrag</figcaption>
                </figure>
                <figure class="figure">
                    <img src='https://crafatar.com/avatars/b205208165e0442db7304c3cb4c90bd2?size=60' class="figure-img img-fluid rounded" alt="Admin zONtrolka"/>
                    <figcaption class="figure-caption text-center mt-3">Admin zONtrolka</figcaption>
                </figure>
                <figure class="figure">
                    <img src='https://crafatar.com/avatars/477fabd5fb364bf2a9ffaa5611987666?size=60' class="figure-img img-fluid rounded" alt="Admin Triller_75"/>
                    <figcaption class="figure-caption text-center mt-3">Admin Triller_75</figcaption>
                </figure>
                <figure class="figure">
                    <img src='https://crafatar.com/avatars/8ee21403e33a45358d86936d553b599e?size=60' class="figure-img img-fluid rounded" alt="Admin Sejba"/>
                    <figcaption class="figure-caption text-center mt-3">Admin Sejba</figcaption>
                </figure>
            </div>
        </section>

    </main>

    <footer>
        <section class="social text-light text-center py-5" id="social">
            <p class="lead">Spoj se s námi na Discordu!</p>
            <p class="social-buttons">
                <a href="https://discordapp.com/invite/kXP5JgW"><ion-icon class="discord" src="/img/discord_logo.svg" data-toggle="tooltip" data-placement="top" title="Discord"></ion-icon></a>
            </p>
        </section>
        <section class="final text-muted text-center py-3" id="final">
            <span class="pr-2">&copy; 2020 Greenlandia - Všechna práva vyhrazena</span> |
            <!-- <a class="text-info pl-2 pr-2" href="cookies">Ochrana osobních údajů a soubory Cookies</a> | -->
            <span class="pl-2">Made with <span class="half-transparent">&#x2764;&#xFE0F;</span> by Iwitrag</span>
        </section>
    </footer>

    <!-- jQuery JS with local fallback -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery-3.4.1.min.js">\x3C/script>');</script>
    <!-- popper JS with local fallback -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>window.Popper || document.write('<script src="/js/popper.min.js">\x3C/script>');</script>
    <!-- Bootstrap JS with local fallback -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>$.fn.modal || document.write('<script src="/js/bootstrap.min.js">\x3C/script>');</script>
    <!-- Bootstrap CSS local fallback -->
    <div id="bootstrapCssTest" class="collapse"></div>
    <script>$(function() { if ($('#bootstrapCssTest').is(":visible")) { $("head").prepend('<link rel="stylesheet" href="/css/bootstrap.min.css">'); } });</script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Bootstrap Notify JS -->
    <script src="/js/bootstrap-notify.min.js"></script>
    <!-- Ionicons JS -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>

    <!-- Player graph link popup -->
    <script>
        $('.player-graph-link').popover({
            html: true,
            trigger: 'focus',
            content: function() {
                return $('#player-graph-js-target').html();
            }
        });
    </script>

    <script>
        $(document).ready(function(){
            const f = function(){
                $.ajax({
                    url: '/php/get_players.php',
                    type: 'post',
                    dataType: 'html',
                    cache: false,
                    success: function(response) {
                        $('#player-graph-link').html(response);
                    }
                });
            };
            setTimeout(f, 10);
            setInterval(f, 5000);
        });
    </script>

    <!-- Navbar transparency change when scrolling or expanding/collapsing -->
    <script>
        $(document).ready(function(){
            setInterval(function(){
                const navbar = $('.navbar')[0];
                const dropdowns = $('.dropdown-menu');
                const isopaque = navbar.classList.contains('navbar-opaque');
                const scrolled = $(document).scrollTop()+navbar.clientHeight > $('header')[0].clientHeight/2;
                const expanded = $('#navbarToggleButton').is(':visible') && $('#navbarToggleTarget').is(':visible');
                if (!isopaque && (scrolled || expanded)) {
                    navbar.classList.add('navbar-opaque');
                    $.each(dropdowns, function(key, val) { val.classList.add('navbar-opaque'); } );
                }
                if (isopaque && !scrolled && !expanded) {
                    navbar.classList.remove('navbar-opaque');
                    $.each(dropdowns, function(key, val) { val.classList.remove('navbar-opaque'); } );
                }
            }, 25);
        });
    </script>

    <!-- Collapse navbar on link click, useful to show content without manually collapsing -->
    <script>
        $('.nav-close-after-click').click(function(){
            $('.navbar-collapse').collapse('hide');
        });
    </script>

    <!-- Enable tooltips -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>
