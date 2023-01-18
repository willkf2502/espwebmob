<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPWEBMOB - Turma 2023</title>

    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">

    <!-- FONT: UBUNTU -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&amp;display=swap" rel="stylesheet">

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- ICONS: FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    
<!-- MENU -->

<header id="menu">    
    <?php require_once "menu.php"; ?>
</header>
<!-- -->

<!-- CORPO DA PAGINA -->
<section id="content" class="container">
    <br />
    <?php require_once isset($_GET['p']) ? $_GET['p'].'.php' : 'inicio.php'; ?>    
    <br />
</section>
<!-- -->


</body>
</html>