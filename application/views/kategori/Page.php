<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
    
    <h3>Ini halaman katgeori</h3>
    <br>
    <?php echo anchor('Kategori/index_tambah','tambah', array('class'=>'btn btn-primary')); ?>
    <form action="">
   <table class="table tablebordered">
    <tr>
        <th>No</th>
        <th>Nama kategori</th>
        <th>Operasi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($record->result() as $d) {
        echo "<tr>
                <td>$no</td>
                <td>$d->Nama_kategori</td>
                <td>".anchor('kategori/edit/'.$d->Kategori_id,'edit',array('class'=>'btn btn-secondary'))." "
                     .anchor('kategori/delete/'.$d->Kategori_id,'hapus',array('class'=>'btn btn-danger'))."</td>
            </tr>";
            $no++;
    }
    
    ?>
   </table>
    </form>
    
</body>
</html>