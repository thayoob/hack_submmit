@extends('layouts.app')
@section('title', 'Personalized Learning')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
                <img src="./assets/images/logo1.jpg" width="112" height="40" alt="SkillLearn">
            </a>
            <nav class="navbar" data-navbar>
                <div class="wrapper">
                    <a href="#" class="logo">
                        <img src="./assets/images/logo1.jpg" width="112" height="40" alt="SkillLearn">
                    </a>
                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#about" class="navbar-link" data-nav-link>About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#courses" class="navbar-link" data-nav-link>Courses</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>Contact</a>
                    </li>

                </ul>

            </nav>

            <div class="header-actions">

                <button class="header-action-btn" aria-label="toggle search" title="Search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>


                <a href="#" class="btn has-before">
                    <span class="span">Find your way</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>


    <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 section-title">
                    The Best Program to <span class="span">Enroll</span> for Exchange
                </h1>

                <p class="hero-text">
                    Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.
                </p>

                <a href="{{ url('/data') }}" class="btn has-before">
                    <span class="span">Find courses</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

            </div>

            <figure class="hero-banner ">

                <div class="img-holder one" style="--width: 270; --height: 300;">
                    <img src="./assets/images/video-banner.jpg" width="270" height="300" alt="hero banner"
                        class="img-cover">
                </div>

                <div class="img-holder two" style="--width: 240; --height: 370;">
                    <img src="./assets/images/hero-banner-2.jpg" width="240" height="370" alt="hero banner"
                        class="img-cover">
                </div>

                <img src="./assets/images/hero-shape-1.svg" width="380" height="190" alt=""
                    class="shape hero-shape-1">

                <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt=""
                    class="shape hero-shape-2">

            </figure>

        </div>
    </section>
@endsection
