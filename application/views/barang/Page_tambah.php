<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>


    <h3>silahkan tambah barang</h3>
    <?php echo form_open('Barang/index_tambah'); ?>
    <form method="POST" action="<?php echo site_url('Barang/index_tambah'); ?>">
        <table class="table table-bordered">
            <tr>
                <td>Nama barang</td>
                <td>
                    <div class="col-sm-5">
                        <input name="Nama_barang" type="text" for=""></input>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nama kategori</td>
                <td>
                    <div class="col-sm-5">
                        <select class="form-control" name="Kategori" id="">
                        <?php foreach ($Kategori as $k): ?>
                        <option value="<?php echo $k->Kategori_id; ?>">
                        <?php echo $k->Nama_kategori; ?> </option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <div class="col-sm-5">
                        <input name="Harga" type="text">
                    </div>
                </td>
            </tr>
        </table>

        <button class="btn btn-danger" name="submit" type="submit" value="submit">simpan</button>
    </form>
</body>
</html>