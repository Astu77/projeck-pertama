<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah operator</title>
</head>
<body>
    <?php echo form_open('Operator/index_tambah');  ?>
<h3>Silahkan tambah data operator</h3>
<?php if($this->session->flashdata('error')): ?>
    <p class="error"><?= $this->session->flashdata('error'); ?></p>
<?php endif; ?>

<form method="POST" action="<?php  echo base_url('Operator/index_tambah') ?>">
    <table class="table table-bordered">
        <tr>
            <td>Nama lengkap</td>
            <td>
            <div class="col-sm-5">
                <input name="Nama_lengkap" type="text" placeholder="Nama" required>
            </div>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
            <div class="col-sm-5">
                <input name="Username" type="text" placeholder="username" required>
            </div>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
            <div class="col-sm-5">
                <input name="Password" type="text" placeholder="password" required>
            </div>
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-danger" name="submit" value="submit">simpan</button>
            </td>
    </tr>
    </table>
   
</form>

</body>
</html>