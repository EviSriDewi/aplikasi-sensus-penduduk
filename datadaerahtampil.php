 <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kelola Data Daerah</h1>
                        <h1 class="page-subhead-line"></p>
  </h1>
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Kelola Informasi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table height="111" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <tbody>
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter">
<div id="right-column">
<div style="margin-bottom:15px;" align="right">
<form action="./?page=search_exe4" method="post">
    <input type="text" size="15"  name="search" id="search" placeholder="Input Nama daerah">
    <input type="submit" name="submit" value="cari">
    </form>
</div></div></div></div>
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                  <thead>
              </thead>
              <tbody>
                <tr>
                  <th>Id</th>
                  <th>Nama Daerah</th>
                  <th>Jumlah Penduduk</th>
                  <th>Total Pendapatan</th>
                  <th>Rata-rata Pendapatan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
				$query = mysql_query("SELECT * FROM regions");
				$no = 1;
				while($r=mysql_fetch_array($query))
				{
					?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?=$r['1']?></td>
                  <td><?=$r['2']?></td>
                  <td><?=$r['3']?></td>
                  <td><?=$r['4']?></td>
                  <td><?=$r['5']?></td>
                 
                  
                 <td>
                  <form action="./?page=datadaerahtambah&id=<?php echo $r['0'];?>"method="post">
                  <input type="submit" name="button" id="button" value="Tambah" />
                  </form>
                  
                  <form action="./?page=datadaerahedit&id=<?php echo $r['0'];?>" method="post">
                  <input type="submit" name="button" id="button" value="Edit" />
                  </form>
                  
                  <form action="./?page=datadaerahhapus&id=<?php echo $r['0'];?>" method="post">
                  <input type="submit" name="button" id="button" value="Hapus" />
                  </form>
                  </td>
                  </tr>
                 
                
                
                <?php ;
				$no++;
						}
				?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                                 
         
     
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
