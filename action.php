<?php
session_start();
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Pattern;
use App\classes\FileUpload;
use App\classes\Student;
use App\classes\Auth;
use App\classes\User;


if(isset($_GET['pages'])){
    if($_GET['pages']=='home'){
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'product'){
        $product = new Product();
        $products = $product->getAllProduct();

        include 'pages/product.php';
    }
    elseif ($_GET['pages']=='detail'){
        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/detail.php';
    }
    elseif ($_GET['pages']=='pattern'){

        include 'pages/pattern.php';
    }
    elseif ($_GET['pages']=='file-upload'){
        if(isset($_SESSION['id'])){
            include 'pages/fileUpload.php';
        }
        else{
            include 'pages/login.php';
        }


    }
    elseif($_GET['pages']=='login')
    {
        if(isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }
        else{
            include 'pages/login.php';
        }

    }
    elseif($_GET['pages'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
    elseif ($_GET['pages'] == 'all-data')
    {

        if(isset($_SESSION['id'])){
            $register =new Product();
            $result = $register->getAllProduct();
            include 'pages/product.php';
        }
        else{
            include 'pages/login.php';
        }

    }

    elseif ($_GET['pages'] == 'user-info')
    {

        if(isset($_SESSION['id'])){
            $register =new User();
            $result = $register->getAllUser();
            include 'pages/after_header.php';
        }
        else{
            include 'pages/login.php';
        }

    }
    else
    {
        //browser er url e hibijibi lekhle
        if(isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }
        else
        {
            $auth = new Auth();
            $auth->login();
        }
    }
}


elseif (isset($_POST['pattern_btn']))
{
    $pattern = new Pattern($_POST);
    $result=$pattern->index();
    include 'pages/pattern.php';
}
elseif (isset($_POST['img_btn']))
{
    $fileUpload = new FileUpload($_POST);
    $fileUpload->index();
}
elseif (isset($_GET['status']))
{

    if($_GET['status'] =='search')
    {


        $student = new Student();
        $students = $student->getAllStudent();
        include 'pages/search.php';
    }
}
elseif(isset($_POST['search_btn']))
{
    $student = new Student($_POST);
    $result=$student->getStudentBySearchText();
    include 'pages/search_result.php';

}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $message =$auth->verify();
    include 'pages/login.php';

}
else
{
    $home = new Home();
    $home ->index();

}

