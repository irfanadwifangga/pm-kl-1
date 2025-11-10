<?php
// Ambil nama file saat ini, misal "dashboard.php"
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Polinela</title>
    <style>
        /* CSS Sederhana berdasarkan screenshot */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            min-height: 100vh;
            color: white;
        }
        .sidebar h2 {
            text-align: center;
            padding: 20px 0;
            margin: 0;
            background-color: #34495e;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            border-left: 3px solid transparent;
        }
        .sidebar ul li a:hover {
            background-color: #34495e;
        }
        /* Ini untuk menandai menu yang sedang aktif */
        .sidebar ul li.active a {
            background-color: #1abc9c;
            border-left: 3px solid #16a085;
        }
        .main-content {
            flex-grow: 1;
            padding: 25px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header .user-info {
            font-weight: bold;
        }
        .content-card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f9f9f9;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 12px;
        }
        .btn-tambah {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 15px;
        }
        .btn-edit { background-color: #f39c12; }
        .btn-hapus { background-color: #e74c3c; }
        .btn-setuju { background-color: #2ecc71; }
        
        /* Status Label */
        .status { padding: 3px 8px; border-radius: 12px; color: white; font-size: 12px; font-weight: bold; }
        .status-disetujui { background-color: #2ecc71; }
        .status-pending { background-color: #f39c12; }
        .status-ditolak { background-color: #e74c3c; }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <h2>Admin Polinela</h2>
        <ul>
            <li class<?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="<?php echo ($current_page == 'pemesanan.php') ? 'active' : ''; ?>">
                <a href="pemesanan.php">Pemesanan</a>
            </li>
            <li class="<?php echo ($current_page == 'data_gedung.php') ? 'active' : ''; ?>">
                <a href="data_gedung.php">Data Gedung</a>
            </li>
            <li class="<?php echo ($current_page == 'pengguna.php') ? 'active' : ''; ?>">
                <a href="pengguna.php">Pengguna</a>
            </li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <div class="header">
            ```

        </div> </div> </div> </body>
</html>