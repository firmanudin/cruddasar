<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="<?= base_url('halregister')?>">Register</a>
        <form action="<?= base_url('auth/proses_login')?> " METHOD="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="text" name="password">
            </div>
            <div class="mb-3">
                <button class="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>