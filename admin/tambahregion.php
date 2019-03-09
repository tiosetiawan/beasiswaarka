<?php 
include 'header.php' 
?>

         <div class="container-fluid">
          <!-- DataTales Example -->
        <div class="card shadow mb-4">
             <div class="card-body">
        
             <form method="post" action="simpanregion.php">
            <div class="form-group">
            <label>Name Region:</label>
            <input type="text" name="name" class="form-control">
            </div>
               
            <input class="btn btn-primary btn-md"  type="submit" value="Simpan">
            <a class="btn btn-warning btn-md" href="regions.php">Kembali</a>
        </form>
</div>
</div>
</div>


 <?php
  include 'footer.php'
  ?>