<?php 
// Sertakan file header
include 'layout_header.php'; 

// --- DATA DUMMY ---
// TODO: Ganti bagian ini dengan query data dari database
$data_pemesanan = [
    [
        'id' => 'P001',
        'peminjam' => 'Jurusan TIK',
        'gedung' => 'GSG',
        'tanggal' => '12 Nov 2025',
        'status' => 'Disetujui'
    ],
    [
        'id' => 'P002',
        'peminjam' => 'BEM Polinela',
        'gedung' => 'Gedung Serba Guna',
        'tanggal' => '14 Nov 2025',
        'status' => 'Pending'
    ],
    [
        'id' => 'P003',
        'peminjam' => 'HMJ Ekonomi',
        'gedung' => 'Aula Gedung A',
        'tanggal' => '15 Nov 2025',
        'status' => 'Ditolak'
    ],
    [
        'id' => 'P004',
        'peminjam' => 'UKM Robotika',
        'gedung' => 'Ruang Rapat Utama',
        'tanggal' => '18 Nov 2025',
        'status' => 'Disetujui'
    ]
];
// --- END DATA DUMMY ---

?>

<h1>Data Pemesanan</h1>

<div class="user-info">
    Selamat datang, Admin!
</div>

</div> <div class="content-card">
    
    <a href="tambah_pemesanan.php" class="btn-tambah">Tambah Pemesanan</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Peminjam</th>
                <th>Gedung</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_pemesanan as $pesanan) : ?>
                <tr>
                    <td><?php echo $pesanan['id']; ?></td>
                    <td><?php echo $pesanan['peminjam']; ?></td>
                    <td><?php echo $pesanan['gedung']; ?></td>
                    <td><?php echo $pesanan['tanggal']; ?></td>
                    <td>
                        <?php 
                        // Logika untuk warna label status
                        $status_class = '';
                        if ($pesanan['status'] == 'Disetujui') {
                            $status_class = 'status-disetujui';
                        } elseif ($pesanan['status'] == 'Pending') {
                            $status_class = 'status-pending';
                        } elseif ($pesanan['status'] == 'Ditolak') {
                            $status_class = 'status-ditolak';
                        }
                        ?>
                        <span class="status <?php echo $status_class; ?>">
                            <?php echo $pesanan['status']; ?>
                        </span>
                    </td>
                    <td>
                        <?php if ($pesanan['status'] == 'Pending') : ?>
                            <a href="proses_setuju.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-setuju">Setujui</a>
                            <a href="proses_tolak.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-hapus">Tolak</a>
                        <?php endif; ?>
                        <a href="detail_pemesanan.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-edit">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php 
// Sertakan file footer
include 'layout_footer.php'; 
?>