 <script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script>
<?php
    include "../../config/koneksi.php";
	$id=$_GET['id'];
	$qry=mysql_query("SELECT * FROM regions WHERE id_='$id'");
	$r = mysql_fetch_array($qry);
	
?>



 <div id="page-wrapper">
      <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Tabel Kelola data daerah</h3>
     <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
       <div class="panel-heading">
        <h2>Edit Data Daerah</h2>
         <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
       </div>
       <div class="panel-body no-padding" style="display: block;">
        	<form action="user/datadaerah/datadaerahupdate.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                 <div class="form-group">
                    <label for="Modal Name">ID</label><br>
                    <input name="id" type="text" class="teks" id="id" value="<?php echo $r['0']; ?>" readonly >
                </div>
                 <div class="form-group">
                    <label for="Modal Name">Nama Daerah</label><br>
                    <input name="name" type="text" class="teks" id="name" value="<?php echo $r['1']; ?>" >
                </div>
               <div class="form-group">
                    <label for="Modal Name">Jumlah Penduduk</label><br>
                    <input name="" type="text" class="teks" id="nama_siswa" value="<?php echo $r['2']; ?>" >
                </div>
                <div class="form-group">
                    <label for="Modal Name">Total Pendapatan</label><br>
                    <input name="" type="text" class="teks" id="" value="<?php echo $r['3']; ?>" >
                
                </div>
              <div class="modal-footer">
                  <button class="btn btn-warning" type="submit">
                      Simpan
                  </button>

                  <button type="reset" onClick="history.go(-1)" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Batal
                  </button>
              </div>

            	</form>
            	
</div>
</div>