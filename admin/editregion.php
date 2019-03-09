<?php 
include 'header.php' 
?>

         <div class="container-fluid">
          <!-- DataTales Example -->
        <div class="card shadow mb-4">
             <div class="card-body">
        	<?php
	include '../config/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from regions where id='$id'");
	while($tampil = mysqli_fetch_array($data)){
		?>
             <form method="post" action="updateregion.php">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <label>Name Region:</label>
            <input type="text" name="name" value="<?php echo $tampil['name']; ?>" class="form-control">
            </div>
               
            <input class="btn btn-primary btn-md"  type="submit" value="Simpan">
            <a class="btn btn-warning btn-md" href="regions.php">Kembali</a>
        </form>

        <?php
    }
        ?>

</div>
</div>
</div>


 <?php
  include 'footer.php'
  ?>