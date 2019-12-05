<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/head');?>
<body>
    <div class="scroll"></div>
    <?php $this->load->view('layout/nav2');?>
    <section id="leader">
        <div class="container">
        	<div class="division-headline">
               BERITA KEMAKOM
            </div>
            <div class="row">
            	<?php foreach($berita as $b) { ?>	
            	<div class="col-sm-12 col-md-6">
					<div class="thumbnail">
						<img  style="max-height: 50%" class="img-thumbnail" src="<?php echo base_url().'assets/upload/'.$b['gambar']?>" >
						<div class="caption">
							<h3><?php echo $b['judul_berita'] ?></h3>
							<p style="min-height: 200px;max-height: 200px"><?php echo character_limiter($b['isi_berita'],200) ?><a href="<?php echo base_url('berita/read/'.$b['slug_berita']) ?>"  >Lihat Selengkapnya</a></p>
						</div>
					</div>
				</div>
				<?php }?>
				<br/>
				<div class="clearfix"></div>
           	</div>
        </div>
    </section>
<?php $this->load->view('layout/footer');?>
</body>

<script src="<?php echo base_url().'assets/fr/js/jquery-3.4.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/fr/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/fr/js/kemakom.js'?>"></script>

</html>