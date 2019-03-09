<?php 
include 'header.php' 
?>


    <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Person</h6>
            </div>
            <div class="card-body">

               <a class="btn btn-primary btn-md" href="tambahperson.php">Tambah Data Person</a>
                    <br>
                    <br>
                    

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <td>ID</td>
                      <th>Name</th>
                      <th>Region</th>
                      <th>Address</th>
                      <th>Income</th>
                      <th>Action</th>
                    </tr>
                  </thead>
        <?php 
		include '../config/koneksi.php';
		$data = mysqli_query($koneksi,"select p.id as personid, p.name, p.address, p.income, r.id, r.name as region from person p, regions r where p.region_id = r.id");
		while($tampil = mysqli_fetch_array($data)){
			?>
                  <tbody>
                    <tr>
                    <td><?php echo $tampil['personid']; ?></td>
                      <td><?php echo $tampil['name']; ?></td>
                      <td><?php echo $tampil['region']; ?></td>
                      <td><?php echo $tampil['address']; ?></td>
                      <td><?php echo $tampil['income']; ?></td>
                        <td>   
                        <a class="btn btn-danger btn-md" href="hapusperson.php?id=<?php echo $tampil['personid']; ?>">Hapus</a>
                        <a class="btn btn-success btn-md" href="editperson.php?id=<?php echo $tampil['personid']; ?>">Edit</a>
                    
                    </td>
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