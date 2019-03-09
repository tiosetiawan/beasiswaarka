<?php 
include 'header.php' 
?>

<!-- Begin Page Content -->
        <div class="container-fluid">

        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Regions</h6>
            </div>
            
            <div class="card-body">

             
                <a class="btn btn-primary btn-md" href="tambahregion.php">Tambah Data Regions</a>
                    <br>
                    <br>
                    
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
        <?php 
		include '../config/koneksi.php';
		$data = mysqli_query($koneksi,"select * from regions");
		while($tampil = mysqli_fetch_array($data)){
			?>
                  <tbody>
                    <tr>
                      <td><?php echo $tampil['id']; ?></td>
                      <td><?php echo $tampil['name']; ?></td>
                      <td>   
                        <a class="btn btn-danger btn-md" href="hapusregion.php?id=<?php echo $tampil['id']; ?>">Hapus</a>
                        <a class="btn btn-success btn-md" href="editregion.php?id=<?php echo $tampil['id']; ?>">Edit</a>
                    
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