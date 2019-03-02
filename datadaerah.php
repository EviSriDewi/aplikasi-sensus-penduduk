<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.php?page=datadaerah">Data Daerah</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ############################################################################################### -->
      <h1 align="center">Data Daerah</h1>
      <div class="scrollable">
        <table>
          <thead>
           
            <tr>
              <th width="568"><div align="center">Id</div></th>
              <th width="568"><div align="center">Nama Daerah</div></th>
              <th width="568"><div align="center">Jumlah Peduduk</div></th>
              <th width="568"><div align="center">Total Pendapatan</div></th>
              <th width="568"><div align="center">Rata-rata Pendapatan</div></th>
              <th width="568"><div align="center">Status</div></th>
            </tr>
            </thead>
            <tbody>
          <td><?php
		  $no = 1;
		  $sql = mysql_query("SELECT * FROM regions ");
		  while ($row = mysql_fetch_array($sql)){
		  ?></td>
            <tr>
              <td style='text-align: center'><?php echo $no++ ?></td>
               <td style='text-align: center'><?php echo $row['name'] ?></td>
              <td style='text-align: center'><?php echo $row[''] ?></td>
              <td style='text-align: center'><?php echo $row[''] ?></td>
              <td style='text-align: center'><?php echo $row[''] ?></td>
              <td style='text-align: center'><?php echo $row[''] ?></td>
            </tr>
 
            <?php } ?>
          </tbody>
        </table>
        
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->