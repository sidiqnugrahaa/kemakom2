<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/head');?>
<body>
    <div class="scroll"></div>
    <?php $this->load->view('layout/nav2');?>
    <section id="leader">
        <div class="container"> 
            <div class="col-md-12" style="padding: 0">
              <h2 style="margin-top: 0"><?php echo $berita->judul_berita?> </h2>
              <br/>
              <div class="thumbnail">
                <img src="<?php echo base_url().'assets/upload/thumbs/'.$berita->gambar?>">
              </div>
                <?php echo $berita->isi_berita ?>
              <br/> 
            </div>
        </div>
        <br/>
        <div class="clearfix"></div>
    </section>
<?php $this->load->view('layout/footer');?>
</body>

<script src="<?php echo base_url().'assets/fr/js/jquery-3.4.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/fr/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/fr/js/kemakom.js'?>"></script>

</html>