<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah kategori</title>
</head>
<body>
    <?php echo form_open('Kategori/index_tambah'); ?>
    <form method="POST" action="<?php echo base_url('kategori/post'); ?>" class="border">
       <table class="bordered">
        <tr>
            <td>Nama kategori</td>
            <td><div>
                <input type="text" name="Kategori">
            </div></td>
        </tr>
        
        <tr>
           <td> <button type="submit" name="submit" value="submit">tambah</button></td>
        </tr>
       </table>
    </form>
</body>
</html>