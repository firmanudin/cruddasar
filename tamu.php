<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Kunjung</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_data as $tamu): ?>
            <tr>
                <td><?= $tamu->nama_tamu?></td>
                <td><?= $tamu->tgl_berkunjung?></td>
                <td><?= $tamu->alamat?></td>
                <td>
                    <a href="<?= base_url('edit') . '/' . $tamu->id ?>">Edit</a>
                    <a href="<?= base_url('delete') . '/' . $tamu->id ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
</body>
</html>