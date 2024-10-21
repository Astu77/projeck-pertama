<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>


    <h3>silahkan edit barang</h3>
  <?php echo form_open('Barang/edit'); ?>
  
    <form  method="POST" action="<?php echo base_url('Barang/edit/' . $record['Barang_id']); ?>">
       <table class="table table-bordered">
        <tr>
            <td>Nama barang</td>
            <td><div>
                <input type="text" name="Nama_barang" value="<?php echo $record['Nama_barang']; ?>" required>
                
            </div></td>
        </tr>
        <tr>
            <td>Nama kategori</td>
            <td>
                <div>
                    <select name="kategori" id="id">
                        <?php foreach ($kategori as $k): ?>
                        <option value="<?php echo $k->Kategori_id; ?>"
                                       <?php echo ($record['Kategori_id'] == $k->Kategori_id) ? 'selected':''; ?>>
                                       <?php echo $k->Nama_kategori; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                
            </div>
        </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><div>
                <input type="text" name="Harga" value="<?php echo $record['Harga']; ?>" required>
                
            </div></td>
        </tr>
        <tr>
           <td> <button class="btn btn-danger" type="submit" name="submit" value="submit">simpan</button></td>
        </tr>
       </table>
       <input type="hidden" name="id" value="<?php echo $record['Barang_id']; ?>" >
    </form>
    
</body>
</html>