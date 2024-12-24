<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="<?= base_url('register') ?>" METHOD="POST">
            <div class="mb-3">
                <label class="form-label">username</label>
                <input class="form-control" type="text" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="mb-3">
                <button class="submit" class="btn btn-primary">Simpan</button>
            </div>
            
        </form>
    </div>

</body>

</html>