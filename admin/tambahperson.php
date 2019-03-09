<?php 
include 'header.php' 
?>


       <div class="container-fluid">
          <!-- DataTales Example -->
        <div class="card shadow mb-4">
             <div class="card-body">
        
             <form method="post" action="simpanperson.php">
            <div class="form-group">
            <label>Name :</label>
            <input type="text" name="name" class="form-control">
            </div>
            
            <div class="form-group form-float">
            <div class="form-line">
            <label>Region :</label>
            <select  name="region_id" class="form-control show-tick" onchange="changeValue(this.value)">
            <option >Pilih Region</option>
            
            <?php 
            	include '../config/koneksi.php';
		        $data = mysqli_query($koneksi,"select * from regions");
                while($tampil = mysqli_fetch_array($data)){ 
                echo '<option value="' . $tampil['id'] . '">'.$tampil['name'].'</option>';    
             }      
              ?>    
                                     </select>
                                 </div>
                             </div>
           
                             <div class="form-group">
            <label>Adress</label>
            <input type="text" name="address" class="form-control">
            </div>
         
            <div class="form-group">
            <label>Income</label>
            <input type="text" name="income" class="form-control">
            </div>
               
            <input class="btn btn-primary btn-md"  type="submit" value="Simpan">
            <a class="btn btn-warning btn-md" href="person.php">Kembali</a>
        </form>
</div>
</div>
</div>



 <?php
  include 'footer.php'
  ?>