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
                <h4 class="page-title">Postingan </h4>
                <div class="clearfix"></div>
            </div>
              <!--End Page Title-->          
           
                 <!--Start row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h2 class="header-title">Tambah Postingan</h2>
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/berita/tambah')?>">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Judul Berita</label>
                                <div class="col-md-10">
                                    <input name="judul_berita" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kategori Berita</label>
                                <div class="col-sm-10">
                                    <select name="kategori" class="form-control">
                                        <?php foreach($kategori as $kat){?>
                                            <option value="<?php echo $kat['kd_kategori']?>" ><?php echo $kat['nama_kategori']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status Postingan</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                        <option value="1">Publikasikan</option>
                                        <option value="2">Simpan sebagai draft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Upload gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Isi </label>
                                    <div class="col-sm-10">
                                    <textarea class="textarea form-control wysihtml5-textarea" placeholder="Enter text ..." name="isi"  style="height:200px; width:100%;"></textarea>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
