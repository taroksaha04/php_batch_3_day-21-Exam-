<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
<!--            <li><a href="action.php?pages=password-reset" class="nav-link">Password Reset</a> </li>-->

<!--            <li><a href="action.php?pages=blog" class="nav-link">All Blog</a> </li>-->
            <li><a href="action.php?pages=product" class="nav-link">All product</a> </li>
            <li><a href="action.php?status=search" class="nav-link">Search</a> </li>
            <li><a href="action.php?pages=login" class="nav-link">Log in</a> </li>
            <?php if(isset($_SESSION['id'])){ ?>

                <li><a href="action.php?pages=file-upload" class="nav-link">File Upload</a> </li>
                <li><a href="action.php?pages=user-info" class="nav-link">Users info</a> </li>

            <li class="dropdown">
                <a href="action.php?pages=register" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?pages=logout" class="dropdown-item">Logout</a> </li>
                </ul>
            </li>
            <?php } ?>

            <!--            <li><a href="action.php?pages=pattern" class="nav-link">Pattern</a> </li>-->
        </ul>
    </div>
</nav>
