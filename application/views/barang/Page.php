<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    
    <br>
    
    <h3>Ini halaman barang</h3>
    <div> <?php echo anchor('Barang/index_tambah','tambah', array('class'=>'btn btn-primary')); ?></div>

    <table class="table table-bordered">
        <tr>
            <div>
                <th>No</th>
                <th>Nama barang</th>
                <th>kategori barang</th>
                <th>Harga</th>
                <th>Operasi</th>
            </div>
        </tr>
        <tr>
           <?php 
           $no=1;

           foreach($record as $d) {

            echo "<tr>
                    <td>$no</td>
                    <td>$d->Nama_barang</td>
                    <td>$d->Nama_kategori</td>
                    <td>$d->Harga</td>
                    <td>".anchor('Barang/edit/'.$d->Barang_id,'edit' ,array('class'=>'btn btn-secondary'))." "
                         .anchor('Barang/delete/'.$d->Barang_id,'hapus', array('class'=>'btn btn-danger'))."</td>
            </tr>";
            $no++;
           }

           ?>
        </tr>
    </table>
</body>
</html>