<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('public/admin/')?>css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?= base_url('public/admin/')?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url('public/admin/')?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('public/admin/')?>css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('public/admin/')?>css/admin.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?= base_url('public/admin/')?>icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= base_url('public/admin/')?>icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>FlixTV – Movies & TV Shows, Online cinema HTML Template</title>
<style>
    a {
        text-decoration: none;
    }
</style>
</head>
<body>
<!-- header -->
<header class="header">
    <div class="header__content">
        <!-- header logo -->
        <a href="<?= base_url()?>" class="header__logo">
            <img src="<?= base_url('public/admin/')?>img/" alt="">
        </a>
        <!-- end header logo -->

        <!-- header menu btn -->
        <button class="header__btn" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- end header menu btn -->
    </div>
</header>
<!-- end header -->

<!-- sidebar -->
<div class="sidebar">
    <!-- sidebar logo -->
    <a href="<?= base_url()?>" class="sidebar__logo">
        <img src="<?= base_url('public/')?>img/logo.svg" alt="">
    </a>
    <!-- end sidebar logo -->

    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src="<?= base_url('public/admin/')?>img/user.svg" alt="">
        </div>

        <div class="sidebar__user-title">
            <span>Admin</span>
            <p>John Doe</p>
        </div>

        <button class="sidebar__user-btn" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg>
        </button>
    </div>
    <!-- end sidebar user -->

    <!-- sidebar nav -->
    <ul class="sidebar__nav">
        <li class="sidebar__nav-item">
            <a href="<?= base_url('manage')?>" class="sidebar__nav-link sidebar__nav-link--active">
                <i class="far fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>

        <li class="sidebar__nav-item">
            <a href="<?= base_url('manage/movies')?>" class="sidebar__nav-link">
                <i class="far fa-video"></i> <span>Movies</span></a>
        </li>

        <li class="sidebar__nav-item">
            <a href="<?= base_url('manage/movies')?>" class="sidebar__nav-link">
                <i class="far fa-compact-disc"></i>
                <span>TV Shows</span></a>
        </li>

        <!-- collapse -->
        <li class="sidebar__nav-item">
            <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg> <span>Pages</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

            <ul class="collapse sidebar__menu" id="collapseMenu">
                <li><a href="<?= base_url('manage/add-movie')?>">Add Movie</a></li>
                <li><a href="<?= base_url('public/admin/')?>edit-user.html">Edit user</a></li>
                <li><a href="<?= base_url('public/admin/')?>signin.html">Sign in</a></li>
                <li><a href="<?= base_url('public/admin/')?>signup.html">Sign up</a></li>
                <li><a href="<?= base_url('public/admin/')?>forgot.html">Forgot password</a></li>
                <li><a href="<?= base_url('public/admin/')?>404.html">404 page</a></li>
            </ul>
        </li>
        <!-- end collapse -->

        <li class="sidebar__nav-item">
            <a href="<?= base_url('public/admin/')?>users.html" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg> <span>Users</span></a>
        </li>

        <li class="sidebar__nav-item">
            <a href="<?= base_url('public/admin/')?>comments.html" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"/></svg> <span>Comments</span></a>
        </li>

        <li class="sidebar__nav-item">
            <a href="<?= base_url('public/admin/')?>reviews.html" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> <span>Reviews</span></a>
        </li>
        <li class="sidebar__nav-item">
            <a href="<?= base_url()?>" class="sidebar__nav-link"><i class="fad fa-home"></i> <span>Home</span></a>
        </li>
    </ul>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
<!--    <div class="sidebar__copyright">© FlixTV.template, 2021. <br>Create by <a href="--><?php //= base_url('public/admin/')?><!--https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>-->
    <!-- end sidebar copyright -->
</div>
<!-- end sidebar -->

    <!-- Begin Page Content -->
    <?= $this->renderSection('content') ?>
    <!-- End Page Content -->

<!-- JS -->
<script src="<?= base_url('public/admin/')?>js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url('public/admin/')?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('public/admin/')?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('public/admin/')?>js/smooth-scrollbar.js"></script>
<script src="<?= base_url('public/admin/')?>js/select2.min.js"></script>
<script src="<?= base_url('public/admin/')?>js/admin.js"></script>
<script src="<?= base_url('public/fa.js')?>"></script>
<script>
    $(document).ready(function () {
        $('.nav-item').each(function() {
            if (window.location.href === $(this).find('.nav-link').attr('href')) {
                // do something if the URL matches
                $(this).addClass('active')
            }
        })

    })
</script>
</body>
</html>


