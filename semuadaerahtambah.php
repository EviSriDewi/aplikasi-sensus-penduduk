<?php
include "../../config/koneksi.php";
$date="INF";
$query = "SELECT max(id_) AS last FROM regions WHERE id LIKE '$date%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
// baca nomor urut transaksi dari id transaksi terakhir
$lastNoUrut = substr($lastNoTransaksi, 3, 3);
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
// membuat format nomor transaksi berikutnya
$nourut = $date.sprintf('%03s', $nextNoUrut);
?>
 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2> </h2>   
                        <h5>Selamat Mengelola Data daerah </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Kelola Informasi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form role="form" action="user/datadaerah/datadaerahsimpan.php" method="POST">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input name="id" type="text" readonly="readonly" class="form-control" value="<?php echo $nourut; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama Daerah</label>
                                            <input name="name" type="text" class="form-control" value="<? echo $row['name']?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jumlah Penduduk</label>
                                            <input name="" type="text" class="form-control" />
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Total pendapatan</label>
                                            <input name="" type="text" class="form-control" />
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Rata-Rata pendapatan</label>
                                            <input name="" type="text" class="form-control" />
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Status</label>
                                            <input name="" type="text" class="form-control" />
                                        </div>
                                        
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
</body>
</html>
