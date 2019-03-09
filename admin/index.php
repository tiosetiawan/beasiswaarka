<?php 
include 'header.php' 
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          
          </div>

          <!-- Content Row -->
          <div class="row">

       <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Summary Data Daerah</h6>
            </div>
            <div class="card-body">

             
                    

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <th>Nama Daerah</th>
                      <th>Jumlah Penduduk</th>
                      <th>Total Pendapatan</th>
                      <th>Rata-Rata Pendapatan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
        <?php 
    include '../config/koneksi.php';
    $data = mysqli_query($koneksi,"select r.id, r.name, p.region_id, count(p.id) as jumpenduduk, sum(p.income) as pendapatan, avg(p.income) as rata from regions r, person p where r.id=p.region_id group by name ");
    
		while($tampil = mysqli_fetch_array($data)){
			?>
                  <tbody>
                    <tr>
                      <td><?php echo $tampil['region_id'] ?></td>
                      <td><?php echo $tampil['name']; ?></td>
                      <td><?php echo $tampil['jumpenduduk']; ?></td>
                      <td><?php echo $tampil['pendapatan']; ?></td>
                      <td><?php echo $tampil['rata']; ?></td>
                      
                      <td>
                        <?php     
                                if( $tampil['rata'] < '1700000') {
                                  echo '  <input class="btn btn-danger btn-md" value="merah">';
                               
                                }
                                elseif ( $tampil['rata'] > '1700000' and $tampil['rata'] < '2200000' ) {
                                  echo ' <input class="btn btn-warning btn-md" value="kuning">';
                                }
                                elseif ( $tampil['rata'] > '2200000') {
                                  
                                echo '  <input class="btn btn-success btn-md" value="hijau">';
                                }
                                
                                
                                ?>
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
      </div>
        <!-- /.container-fluid -->

        <!-- /.container-fluid -->
</div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php
  include 'footer.php'
  ?>