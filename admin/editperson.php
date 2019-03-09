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
	$data = mysqli_query($koneksi,"select * from person where id='$id'");
	while($tampil = mysqli_fetch_array($data)){
		?>

             <form method="post" action="updateperson.php">
            <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <div class="form-group">
            <label>Name :</label>
            <input type="text" name="name" value="<?php echo $tampil['name']; ?>" class="form-control">
            </div>
            
         
                             <div class="form-group">
            <label>Adress</label>
            <input type="text" name="address"  value="<?php echo $tampil['address']; ?>" class="form-control">
            </div>
         
            <div class="form-group">
            <label>Income</label>
            <input type="text" name="income"  value="<?php echo $tampil['income']; ?>" class="form-control">
            </div>
                  <div class="form-group form-float">
            <div class="form-line">
            <label>Region :</label>
            <select  name="region_id" class="form-control show-tick" onchange="changeValue(this.value)">
           
            <option>Pilih Region</option>
            <?php 
            	include '../config/koneksi.php';
		        $data = mysqli_query($koneksi,"select p.region_id, r.name from person p, regions r where r.id=p.region_id group by region_id");
                while($tampil = mysqli_fetch_array($data)){ 
                echo '<option value="' . $tampil['region_id'] . '">'.$tampil['name'].'</option>';    
             }      
              ?>     
                                     </select>
                                 </div>
                             </div>
           
            <input class="btn btn-primary btn-md"  type="submit" value="Simpan">
            <a class="btn btn-warning btn-md" href="person.php">Kembali</a>
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