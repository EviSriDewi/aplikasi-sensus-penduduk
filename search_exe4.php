<?php
 include "connect.php"
 ?>
 <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Ruang Admin</h2>   
                        <h5>Silahkan Mengelola Data</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr>
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
<div class="panel-heading">
                             Kelola Pengumuman Siswa
                        </div>
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table height="111" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <tbody>
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter">
<div id="right-column">
<div style="margin-bottom:15px;" align="right">
</div></div></div></div>
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                  <thead>
                
                <thead>
                <tbody>
               <tr>
                  <th>No</th>
                  <th>No Pendaftaran</th>
                  <th>Nama Siswa</th>
                  <th>Keterangan</th>
                  
                </tr>
                </thead>
                <tbody>
<?php if (isset($_POST['search'])); {  
$no = 1; //buat urutan nomer
$search = $_POST['search'];
$sql = mysql_query("select * from pengumuman where nama_siswa like '%$search%'")or die(mysql_error());
while ($r = mysql_fetch_array($sql)){
?>
<tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $r['1']?></td>
                  <td><?php echo $r['2']?></td>
                  <td><?php echo $r['3']?></td>
                  
<?php
$no++; // pengulangan nomer saat di tampilin
}}
?> 

 </tr>
                 </tbody>
                 </table>
                