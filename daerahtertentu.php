<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.php?page=semuadaerah">Data penduduk</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <form action="./?page=search_exe4" method="post">
    <input type="text" size="15"  name="search" id="search" placeholder="Input nama daerah">
    <input type="submit" name="submit" value="cari">
    </form>
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
      <h1 align="center">Data Penduduk</h1>
      <div class="scrollable">
        <table>
          <thead>
           
            <tr>
              <th width="568"><div align="center">Id</div></th>
              <th width="568"><div align="center">Nama Penduduk</div></th>
              <th width="568"><div align="center">Gaji</div></th>
              <th width="568"><div align="center">Daerah</div></th>
            </tr>
            </thead>
            <tbody>
          <?php
		  $no = 1;
		  $sql = mysql_query("SELECT * FROM person ");
		  while ($row = mysql_fetch_array($sql)){
		  ?>
            <tr>
              <td style='text-align: center'><?php echo $row['id'] ?></td>
               <td style='text-align: center'><?php echo $row['name'] ?></td>
              <td style='text-align: center'><?php echo $row['income'] ?></td>
              <td style='text-align: center'><?php echo $row['region_id'] ?></td>
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