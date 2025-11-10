<?php 
include 'layout_header.php'; 

// --- DATA DUMMY ---
// TODO: Ganti bagian ini dengan query data dari database
$data_gedung = [
    ['id' => 'G001', 'nama' => 'GSG (Gedung Serba Guna)', 'kapasitas' => 1000, 'status' => 'Tersedia'],
    ['id' => 'G002', 'nama' => 'Aula Gedung A', 'kapasitas' => 300, 'status' => 'Tersedia'],
    ['id' => 'G003', 'nama' => 'Ruang Rapat Utama', 'kapasitas' => 50, 'status' => 'Dipinjam'],
    ['id' => 'G004', 'nama' => 'Gedung TIK', 'kapasitas' => 200, 'status' => 'Tersedia'],
];
// --- END DATA DUMMY ---

?>

<h1>Data Gedung</h1>

<div class="user-info">
    Selamat datang, Admin!
</div>

</div> <div class="content-card">
    
    <a href="tambah_gedung.php" class="btn-tambah">Tambah Gedung</a>

    <table>
        <thead>
            <tr>
                <th>ID Gedung</th>
                <th>Nama Gedung</th>
                <th>Kapasitas (Orang)</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_gedung as $gedung) : ?>
                <tr>
                    <td><?php echo $gedung['id']; ?></td>
                    <td><?php echo $gedung['nama']; ?></td>
                    <td><?php echo $gedung['kapasitas']; ?></td>
                    <td><?php echo $gedung['status']; ?></td>
                    <td>
                        <a href="edit_gedung.php?id=<?php echo $gedung['id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="hapus_gedung.php?id=<?php echo $gedung['id']; ?>" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php 
include 'layout_footer.php'; 
?>