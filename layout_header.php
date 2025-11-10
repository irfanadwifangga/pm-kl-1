<?php
// Di sini Anda bisa menambahkan logika session_start() untuk login
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Polinela</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="d-flex" id="wrapper">

    <div class="bg-dark text-white vh-100" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 fs-5 fw-bold border-bottom border-secondary">
            <i class="bi bi-house-gear-fill me-2"></i>Admin Polinela
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="/dashboard.php" class="list-group-item list-group-item-action bg-dark text-white active">
                <i class="bi bi-grid-fill me-2"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <i class="bi bi-calendar-check me-2"></i>Pemesanan
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <i class="bi bi-building me-2"></i>Data Gedung
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <i class="bi bi-people-fill me-2"></i>Pengguna
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-danger mt-auto">
                <i class="bi bi-box-arrow-left me-2"></i>Logout
            </a>
        </div>
    </div>
    <div id="page-content-wrapper" class="flex-grow-1">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 px-4">
            <div class="d-flex align-items-center">
                <h2 class="fs-4 fw-semibold m-0">Dashboard Peminjaman Gedung</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item me-3">
                        <span class="navbar-text">Selamat datang, Admin!</span>
                    </li>
                    <li class="nav-item">
                        <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            A
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container-fluid p-4 bg-light">