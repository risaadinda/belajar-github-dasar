<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Data Mahasiswa</h1>
        <button type="button" class="btn btn-outline-primary"><a href="tambah_mhs.php">Tambah Data</a></button>
        <form>
            <table class="table table-striped table-hover mt-2">
                <thead class="table-dark">
                    <th>id_mhs</th>
                    <th>NPM</th>
                    <th>nama mahasiswa</th>
                    <th>Aksi</th>
                </thead>
                <?php
                include "koneksi.php";

                $sql = "select * from mahasiswa";
                $query = mysqli_query($koneksi, $sql);

                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tbody>
                        <td>
                            <?php echo $row['id_mhs']; ?>
                        </td>
                        <td>
                            <?php echo $row['NPM']; ?>
                        </td>
                        <td>
                            <?php echo $row['nama_mhs']; ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><a href="">Edit</a>
                                <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id_mhs'] ?>" onclick="return confirm('Anda Yakin Hapus Data Ini?')">Hapus</a>
                        </td>
                    </tbody>
                <?php
                }
                mysqli_close($koneksi);
                ?>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>