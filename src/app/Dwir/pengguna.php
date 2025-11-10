<?php 
include 'layout_header.php'; 

echo "
    ['id' => 'U001', 'nama' => 'Admin Utama', 'email' => 'admin@polinela.ac.id', 'role' => 'Admin'],
    ['id' => 'U002', 'nama' => 'BEM Polinela', 'email' => 'bem@polinela.ac.id', 'role' => 'Pengguna'],
    ['id' => 'U003', 'nama' => 'Jurusan TIK', 'email' => 'tik@polinela.ac.id', 'role' => 'Pengguna'],
    ['id' => 'U004', 'nama' => 'HMJ Ekonomi', 'email' => 'hmje@polinela.ac.id', 'role' => 'Pengguna'],
];"

?>

<h1>Data Pengguna</h1>

<div class="user-info">
    Selamat datang, Admin!
</div>

</div> <div class="content-card">
    
    <a href="tambah_pengguna.php" class="btn-tambah">Tambah Pengguna</a>

    <table>
        <thead>
            <tr>
                <th>ID Pengguna</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_pengguna as $pengguna) : ?>
                <tr>
                    <td><?php echo $pengguna['id']; ?></td>
                    <td><?php echo $pengguna['nama']; ?></td>
                    <td><?php echo $pengguna['email']; ?></td>
                    <td><?php echo $pengguna['role']; ?></td>
                    <td>
                        <a href="edit_pengguna.php?id=<?php echo $pengguna['id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="hapus_pengguna.php?id=<?php echo $pengguna['id']; ?>" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php 
include 'layout_footer.php'; 
?>