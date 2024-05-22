<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Catatan Pengeluaran</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        input[type="date"]:focus,
        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-bottom: 1px solid #000;
        }

        input[type="date"],
        input[type="text"],
        input[type="number"] {
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 5px;
            width: 100%;
        }

        input[type="date"]:focus,
        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-bottom: 1px solid #000;
        }

        input[type=number] {
            -moz-appearance: textfield;     
        }

        input[type=date] {
            -moz-appearance: textfield;
        }

        input[type="date"] {
            -moz-appearance: textfield;
        }


        body {
            margin-top: 30px;
            padding: 10px;
        }

        h2 {
            justify-content: center;
        }

        input {
            outline: none;
        }

        input[type="date"]::-moz-placeholder {
            color: transparent;
        }
    </style>

    <h1 class="display-6">Catatan Pengeluaran</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div>
        <form action="" method="post">
            <input type="hidden" name="pengeluaran" value="1">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Pengeluaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><input name="Tanggal" type="date" required></td>
                        <td><input name="Deskripsi" type="text" required> </td>
                        <td><input name="Pengeluaran" type="number" required></td>
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-outline-primary">Tambah Pengeluaran</button>
        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        document.getElementById('dateInput').placeholder = '';
    </script>
</body>

</html>

<?php
    include "koneksi.php";

    if (isset($_POST['pengeluaran'])) {
        $tanggal = $_POST['Tanggal'];
        $deskripsi = $_POST['Deskripsi'];
        $pengeluaran = $_POST['Pengeluaran'];

        $insert = $koneksi->query("INSERT INTO pengeluaran (Tanggal, Deskripsi, Pengeluaran) VALUES ('$tanggal', '$deskripsi', '$pengeluaran')");

        if($insert){
            header ("Location: DataPengeluaran.php");
        }
    }
?>