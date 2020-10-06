<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title></title>
    </head>
    <body>
        <!-- use url library to give access to the method -->
        <?php 
            $uri = service('uri');
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Ci4 Login</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if (session()->get('isLoggedIn')): ?>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null ) ?>">
                        <!-- if dashboard, active class.. if not, do nothing (null) -->

                            <!-- https://localhost/dashboard/user  -->
                            <!-- dashboard is segment 1, user is segment 2 -->
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null ) ?>">
                            <a class="nav-link" href="/profile">Profile</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li> 
                    </ul>
                <?php else: ?>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null ) ?>">
                            <a class="nav-link" href="/">Login</a>
                        </li>
                        <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null ) ?>">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
