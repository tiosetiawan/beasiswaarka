<?php 
include 'header.php' 
?>


    <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penduduk</h6>
            </div>
            <div class="card-body">

      
                    <div class="form-group">
        <form method="POST" class="form-inline" action="">
	    	<select name="qcari" class="form-control" required="required">
            <option value="">Pilih Daerah</option>
                  
            <?php 
            	include '../config/koneksi.php';
		        $data = mysqli_query($koneksi,"select p.region_id, r.name from person p, regions r where r.id=p.region_id group by region_id");
                while($tampil = mysqli_fetch_array($data)){ 
                echo '<option value="' . $tampil['region_id'] . '">'.$tampil['name'].'</option>';    
             }      
              ?>    
            </select>
            
            &nbsp&nbsp<button class="btn btn-primary" name="filter"><span class="fa fa-search"></span> Cari Data</button>
            
      		&nbsp<a class="btn btn-success" href="datapenduduk.php">Semua Data</a>

    </form></div>
                    

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <th>Nama Penduduk</th>
                      <th>Daerah</th>
                    <th>gaji</th>
                    </tr>
                  </thead>

                   <?php
               	include '../config/koneksi.php';
	        	$data = mysqli_query($koneksi,"select p.id as personid, p.name, p.address, p.income, r.id, r.name as region from person p, regions r where p.region_id = r.id");


              if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
	        	$data = mysqli_query($koneksi,"select p.id as personid, p.name, p.address, p.income, r.id, r.name as region from person p, regions r where p.region_id = r.id  and region_id like '%$qcari%' ");
              }
              while($tampil = mysqli_fetch_object($data)){
                  ?>
                  <tbody>
                      <tr>
                <td><?php       echo $tampil -> personid;?></td>
                <td><?php       echo $tampil -> name;?></td>
                <td><?php       echo $tampil -> region;?></td>
                <td><?php       echo $tampil -> income;?></td>
    
            </tr>
                  </tbody>
                    <?php
        }
                  ?>

                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

 <?php
  include 'footer.php'
  ?>