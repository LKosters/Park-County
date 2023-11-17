<?php
$user = auth()->user();
$firstLetter = $user ? substr($user->name, 0, 1) : 'D';
?>
<!doctype html>
<html data-theme="politie_thema">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
<div class="preloader-wrapper">
    <div class="preloader">
        <span class="loading loading-spinner text-secondary"></span>
    </div>
</div>
<div class="navbar bg-base-100 border-accent border-b-4 sticky top-0 z-10">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/#overons" class="text-primary font-bold">Over ons</a></li>
                <li><a href="/nieuwsberichten" class="text-primary font-bold">Nieuwsberichten</a></li>
                <li><a href="/mugshots" class="text-primary font-bold">Mugshots</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-xl text-primary font-bold">Park County</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/#overons" class="text-primary font-bold">Over ons</a></li>
            <li><a href="/nieuwsberichten" class="text-primary font-bold">Nieuwsberichten</a></li>
            <li><a href="/mugshots" class="text-primary font-bold">Mugshots</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <a href="/contact" class="btn btn-secondary font-bold">Contact</a>
        <a href="/dashboard" class="avatar placeholder ml-4">
            <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                <span class="text-xl">{{ $firstLetter }}</span>
            </div>
        </a>
    </div>
</div>

@yield('content')

<footer class="footer p-10 bg-base-300 text-base-content border-accent border-t-4">
    <nav>
        <header class="footer-title">Informatie</header>
        <a href="#overons" class="link link-hover">Over ons</a>
        <a href="/nieuwsberichten" class="link link-hover">Nieuwsberichten</a>
        <a href="/mugshots" class="link link-hover">Mugshots</a>
        <a href="/contact" class="link link-hover">Contact</a>
    </nav>
    <nav>
        <header class="footer-title">Dashboard</header>
        <a href="/dashboard/news" class="link link-hover">Nieuwsberichten</a>
        <a href="/dashboard/vehicles" class="link link-hover">Voertuigen</a>
        <a href="/dashboard/cells" class="link link-hover">Cellen</a>
        <a href="/dashboard/prisoners" class="link link-hover">Gevangenen</a>
    </nav>
    <nav>
        <header class="footer-title">Dashboard</header>
        <a href="/dashboard/mugshots" class="link link-hover">Mughshots</a>
        <a href="/dashboard/images" class="link link-hover">Foto's</a>
        <a href="/login" class="link link-hover">Log in</a>
        <a href="/register" class="link link-hover">Registers</a>
    </nav>
</footer>
<footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300">
    <aside class="items-center grid-flow-col">
        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
        <p>LHB B.V. <br/>Vangt al criminelen sinds 1945</p>
    </aside>
</footer>
<script>
    $(document).ready(function($) {
        var Body = $('body');
        Body.addClass('preloader-site');
    });

    $(window).on('load', function(){
        $('.preloader-wrapper').fadeOut();
        $('body').removeClass('preloader-site');
    });
</script>
</body>
</html>
