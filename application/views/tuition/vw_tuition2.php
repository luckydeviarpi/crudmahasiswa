<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="<?php echo base_url('Tuition/create'); ?>">Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php if (!empty($Tuition)) { ?>
            <?php foreach ($Tuition as $key => $m) { ?>
                <tr>
                    <td> <?= $i; ?></td>
                    <td><?php echo $m['nama']; ?></td>
                    <td><?php echo $m['nim']; ?></td>
                    <td>
                        <a href="<?php echo base_url('Tuition/edit/' . $key); ?>">Edit</a>
                        <a href="<?php echo base_url('Tuition/delete/' . $key); ?>">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php } ?>
        <?php  } else { ?>
            <tr>
                <td colspan="4">Tidak ada data Mahasiswa.</td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>