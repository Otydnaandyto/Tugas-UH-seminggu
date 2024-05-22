<?php
include 'koneksi.php';
$data = $koneksi->query("SELECT * FROM pengeluaran")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengeluaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="display-6">Daftar Pengeluaran</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Pengeluaran</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $pengeluaran): ?>
                    <tr>
                        <td><?= $pengeluaran['ID'] ?></td>
                        <td><?= $pengeluaran['Tanggal'] ?></td>
                        <td><?= $pengeluaran['Deskripsi'] ?></td>
                        <td><?= $pengeluaran['Pengeluaran'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>     