<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ESTS - Library</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo URLROOT.DS.'public/bootstrap/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URLROOT.DS.'public/bootstrap/sb-admin-2.css'; ?>" rel="stylesheet">

    <!-- Custom styles for this page 
    <link href="bootstrap4.min.css" rel="stylesheet">-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">
                    EST
                </div>
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i> 
                </div>
                <div class="sidebar-brand-text mx-3">
                    SAFI
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mt-4">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.DS.'home'.DS.'index' ?>">
                    <i class="fas fa-home"></i>
                    <span>Accueil</span></a>
            </li>

            <!-- Divider-->
            <hr class="sidebar-divider my-0">
 
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-table"></i>
                    <span>Les lists</span></a>
            </li>

            <!-- Divider-->
            <hr class="sidebar-divider my-0">
 
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.DS.'books'.DS.'index' ?>">
                    <i class="fas fa-upload"></i>
                    <span>Ajouter Livre</span></a>
            </li>

            <!-- Divider-->
            <hr class="sidebar-divider my-0">
 
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-chart-pie"></i>
                    <span>Statistiques</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">


          

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-5">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->