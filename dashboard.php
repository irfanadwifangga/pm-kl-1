<?php
// 1. Panggil Header (Template Atas)
require 'layout_header.php';

// --- DATA DUMMY (Ganti dengan kueri dari database) ---
$statistik = [
    'total_pemesanan' => 120,
    'gedung_tersedia' => 15,
    'pengguna_terdaftar' => 85,
    'pemesanan_pending' => 8
];

$bookings = [
    ['id' => 'P001', 'peminjam' => 'Jurusan TIK', 'gedung' => 'GSG', 'tanggal' => '12 Nov 2025', 'status' => 'Disetujui'],
    ['id' => 'P002', 'peminjam' => 'BEM Polinela', 'gedung' => 'Gedung Serba Guna', 'tanggal' => '14 Nov 2025', 'status' => 'Pending'],
    ['id' => 'P003', 'peminjam' => 'HMJ Ekonomi', 'gedung' => 'Aula Gedung A', 'tanggal' => '15 Nov 2025', 'status' => 'Ditolak'],
    ['id' => 'P004', 'peminjam' => 'UKM Robotika', 'gedung' => 'Ruang Rapat Utama', 'tanggal' => '18 Nov 2025', 'status' => 'Disetujui'],
];

// Fungsi untuk menentukan warna badge status
function getStatusBadgeClass($status)
{
    switch ($status) {
        case 'Disetujui':
            return 'text-bg-success';
        case 'Pending':
            return 'text-bg-warning';
        case 'Ditolak':
            return 'text-bg-danger';
        default:
            return 'text-bg-secondary';
    }
}
?>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body p-4 d-flex align-items-center">
                <div class="p-3 rounded-3 me-4 bg-primary text-white">
                    <i class="bi bi-calendar-check display-6"></i>
                </div>
                <div>
                    <h3 class="fs-2 fw-bold"><?= $statistik['total_pemesanan']; ?></h3>
                    <p class="text-muted mb-0">Total Pemesanan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body p-4 d-flex align-items-center">
                <div class="p-3 rounded-3 me-4 bg-success text-white">
                    <i class="bi bi-building display-6"></i>
                </div>
                <div>
                    <h3 class="fs-2 fw-bold"><?= $statistik['gedung_tersedia']; ?></h3>
                    <p class="text-muted mb-0">Gedung Tersedia</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body p-4 d-flex align-items-center">
                <div class="p-3 rounded-3 me-4 bg-info text-white">
                    <i class="bi bi-person-check-fill display-6"></i>
                </div>
                <div>
                    <h3 class="fs-2 fw-bold"><?= $statistik['pengguna_terdaftar']; ?></h3>
                    <p class="text-muted mb-0">Pengguna Terdaftar</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body p-4 d-flex align-items-center">
                <div class="p-3 rounded-3 me-4 bg-warning text-dark">
                    <i class="bi bi-clock-history display-6"></i>
                </div>
                <div>
                    <h3 class="fs-2 fw-bold"><?= $statistik['pemesanan_pending']; ?></h3>
                    <p class="text-muted mb-0">Pemesanan Pending</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm border-0 rounded-3">
    <div class="card-header bg-white py-3">
        <h4 class="m-0 fw-semibold">Pemesanan Terbaru</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Gedung</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $booking): ?>
                        <tr>
                            <td class="fw-medium"><?= htmlspecialchars($booking['id']); ?></td>
                            <td><?= htmlspecialchars($booking['peminjam']); ?></td>
                            <td><?= htmlspecialchars($booking['gedung']); ?></td>
                            <td><?= htmlspecialchars($booking['tanggal']); ?></td>
                            <td>
                                <span class="badge fs-6 <?= getStatusBadgeClass($booking['status']); ?>">
                                    <?= htmlspecialchars($booking['status']); ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
require 'layout_footer.php';
?>