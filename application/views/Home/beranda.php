<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
  
</head>


<body>
<h1>POINT OF SALES</h1>
	<ul>
		<li><?php echo anchor('Kategori/index','Kategori'); ?></li>
        <li><?php echo anchor('Barang/index_page_barang','Data barang'); ?></li>
        <li><?php echo anchor('Operator/index_page_operator','Operator'); ?></li>
        <li><?php echo anchor('Transaksi/index_page_transaksi','Form transaksi'); ?></li>
        <li><?php echo anchor('','Laporan Transaksi'); ?></li>
	</ul>
</body>
</html>