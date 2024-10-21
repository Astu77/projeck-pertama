<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<h3>silahkan edit</h3>
    <?php if (!empty($Kategori)) : ?>
  
    <form method="POST" action="<?php echo base_url('kategori/edit/' . $Kategori['Kategori_id']); ?>">
       <table class="bordered">
        <tr>
            <td>Nama kategori</td>
            <td><div>
                <input type="text" name="Kategori" value="<?php echo $Kategori['Nama_kategori']; ?>" required>
                
            </div></td>
        </tr>
        
        <tr>
           <td> <button class="btn btn-danger" type="submit" name="submit" value="submit">tambah</button></td>
        </tr>
       </table>
       <input type="hidden" name="id" value="<?php echo $Kategori['Kategori_id']; ?>" >
    </form>
       <?php else : ?>
        <?php endif; ?>
</body>
</html>

