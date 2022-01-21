<?php
//    require_once('./views/includes/header.php');
    require_once('./autoload.php');
    require_once('./controllers/HomeController.php');

    $home = new HomeController();
    $pages = ['home', 'login', 'contact', 'patient_dashboard'];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
            $home->index($_GET['page']);
        }else{
            include('views/includes/404.php');
        }
    }else
        $home->index('home');

?>

<?php 
//    require_once('./views/includes/footer.php');

?>

