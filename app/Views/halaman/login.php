<<<<<<< HEAD
<?= $this->extend('dasar_tampilan'); ?>
<?= $this->section('isiweb') ?>
<form method="POST" action="<?= base_url('/login') ?>">
    <div class="container col-md-3">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title">Login</h3>
            </div>
            <div class="card-body">
                <div class="form-floating">
                    <input id="txtEmail" class="form-control" placeholder="Email" type="text" name="email" />
                    <label for="txtEmail">Email</label>
                </div>
                <div class="form-floating">
                    <input id="txtPass" class="form-control" placeholder="Password" type="password" name="sandi" />
                    <label for="txtPass">Kata Sandi</label>
                </div>
                <button class="btn btn-primary mt-2">Login</button>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection() ?> 
=======
<html>
    <head>
        <title>Perpustakan Login</title>
    </head>
    <body>
        
        <h1>Selamat datang di sistem informasi perpustakaan</h1>
        <p>
            Ini adalah layanan perpustakaan digital masa kini
            <a href="<?=base_url('/daftar-member')?>">klik daftar</a> untuk mendaftar menjadi member
        </p>
    </body>
</html>
>>>>>>> 97206ddccc6e29640d17a78ad224bf43703c79e8
