<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/layout/head');?>
<body class="sticky-header">
    <!--Start left side Menu-->
    <?php $this->load->view('admin/layout/sidebar');?>
    <!--End left side menu-->
    
    <!-- main content start-->
    <div class="main-content" >
        <!-- header section start-->
        <?php $this->load->view('admin/layout/header');?>
        <!-- header section end-->
        <!--body wrapper start-->
        <div class="wrapper">
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Data Posting </h4>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
                <div class="row">
                   <div class="col-md-12">
                       <div class="white-box">
                           <h2 class="header-title">Postingan</h2>
                            <div class="table-responsive">
                             <table id="example" class="display table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Kategori</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Action</th>  
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i=1; foreach($berita as $b){?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $b['judul_berita'] ?></td>
                                            <td><?php echo $b['nama_kategori'] ?></td>
                                            <td><?php echo $b['tanggal_berita'] ?></td>
                                            <td><?php if($b['status_berita'] == 1){echo "Dipublikasi";}else{ echo "Draft";} ?></td>
                                            <td><?php include('delete.php') ?></td>
                                        </tr> 
                                    <?php $i++; } ?>
                                    </tbody>
                                   </table>  
                            </div>
                       </div>
                   </div>
               </div>
			   
			</div>
        <!-- End Wrapper-->
        <!--Start  Footer -->
        <footer class="footer-main">  2019 &copy; Kemakom	</footer>	
         <!--End footer -->
       </div>
      <!--End main content -->
    <!--Begin core plugin -->
    <?php $this->load->view('admin/layout/core');?>
    <!-- End core plugin -->
</body>
</html>
