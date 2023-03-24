<?php
    // include("function.php");
    $id = $_SESSION['id']; /*  it from index */
?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard |Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

        
        <!-- App favicon -->
        <link rel="icon" href="./img/citynewslogo.png" >

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Kantumruy:wght@300;400;700&family=Lato:wght@100;300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">

    </head>
    <style>
        *{
            font-family: Roboto,Hanuman;
        }
    </style>
    <body data-topbar="dark" class="bg-gray">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index.php" class="logo logo-light">
                                    <span class="logo-lg">
                                        <img src="./img/citynewslogo.png" alt="logo-light" height="30">
                                    </span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                                <i class="ri-menu-2-line align-middle"></i>
                            </button>
                        </div>
                        
                        <div class="d-flex">
                            <?php
                                $sql_select = "SELECT * FROM tbl_admin WHERE id=$id";
                                $result=$con->query($sql_select);
                                $row=mysqli_fetch_assoc($result);
                                echo '
                                    <div class="dropdown d-inline-block user-dropdown">
                                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="rounded-circle header-profile-user" src="./img/'.$row['profile'].'"
                                                alt="">
                                            <span class="d-none d-xl-inline-block ms-1">'.$row['name'].'</span>
                                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                        </button>
                                        
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a class="dropdown-item text-danger" href="./logout.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i></i>Logout</a>
                                        </div>
                                    </div>
                                ';
                            ?>
                        </div>
                    </div>
                </header>
            </header>

