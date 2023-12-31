<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum PBO</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            margin-top: 200px;
            background-color: lightcoral;
        }
        table{
            background-color: wheat;
        }
    </style>
</head>

<body>
    <main>

    <table border="1" cellpadding="10px" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Nim</th>
                <th>Edit</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once "koneksi.php";
                $sql = $connection->query("SELECT * FROM pertemuan7");
                if (mysqli_num_rows($sql)) {
                    $no = 1;
                    foreach ($sql as $data) { ?>
                        <tr style="text-align: center">
                            <td><?=$no?></td>
                            <td><?php echo $data['nama']?></td>
                            <td><?=$data['kelas']?></td>
                            <td>
                                <a href="">Hapus</a> || <a href="">Edit</a>
                            </td>
                            <td></td>
                        </tr>
            <?php
                    $no++; } }
            ?>
        </tbody>
    </table>
    </main>

</body>

</html>