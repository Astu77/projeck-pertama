<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h3>Ini halaman operator</h3>
   <br>
   <?php echo anchor('Operator/index_tambah','tambah',array('class'=>'btn btn-primary')); ?>
   
   <form action="">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Useername</th>
            <th>Last login</th>
            <th>Operasi</th>
        </tr>

        <?php
        $no = 1;
            foreach ($record as $od) {

                echo "
                <tr>
                    <td>$no</td>
                    <td>$od->Nama_lengkap</td>
                    <td>$od->Username</td>
                    <td>$od->Last_login</td>
                    <td>".anchor('Operator/edit/'.$od->Operator_id,'edit', array('class'=>'btn btn-secondary'))." "
                         .anchor('Operator/delete/'.$od->Operator_id,'hapus', array('class'=>'btn btn-danger'))."</td>
                </tr>";
                $no++;
            }

        ?>
    </table>
   </form>
</body>
</html>