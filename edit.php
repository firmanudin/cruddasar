<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('proses_edit') ?>" METHOD="POST">
        <input class="form-control" type="hidden" name="id" value="<?= $cari_data->id?>">
        <div class="mb-3">
            <label class="form-label">Tanggal Berkunjung</label>
            <input class="form-control" type="text" name="tgl_berkunjung" value="<?= $cari_data->tgl_berkunjung ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama_tamu" value="<?= $cari_data->nama_tamu ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input class="form-control" type="text" name="alamat" value="<?= $cari_data->alamat ?>">
        </div>
        <div class="mb-3">
            <button class="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>