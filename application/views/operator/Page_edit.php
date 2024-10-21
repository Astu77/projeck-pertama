<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h3>INI HALAMAN EDIT</h3>
   <?php echo form_open('Operator/edit'); ?>
    <table class="table table-bordered">

    <form method="POST" action="<?php echo base_url('Operator/edit/'.$record['Operator_id']); ?>">
    <tr>
            <td>Nama lengkap</td>
            <td>
            <div class="col-sm-5">
                <input name="Nama_lengkap" type="text" placeholder="Nama" value="<?php echo $record['Nama_lengkap']; ?>" required>
            </div>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
            <div class="col-sm-5">
                <input name="Username" type="text" placeholder="username" value="<?php echo $record['Username'];?>" required>
            </div>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
            <div class="col-sm-5">
                <input name="Password" type="text" placeholder="password" value="<?php echo $record['Password'];?>" required>
            </div>
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-danger" name="submit" value="submit">simpan</button>
            </td>
    </tr>
    </form>
    </table>
    <input type="hidden" name="id" value="<?php echo $record['Operator_id']; ?>" >
</body>
</html>