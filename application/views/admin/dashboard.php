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
                <h4 class="page-title">Dashboard </h4>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
                 <!--Start row-->
                 <div class="row">
                     <div class="container">
                         <div class="analytics-box">
                             
                         </div>
                     </div>
                 </div>
                 <!--End row-->
			   
			    </div>
        <!-- End Wrapper-->
        <!--Start  Footer -->
        <footer class="footer-main"> 2019 &copy; Kemakom </footer>	
         <!--End footer -->
       </div>
      <!--End main content -->
    <!--Begin core plugin -->
    <?php $this->load->view('admin/layout/core');?>
    <!-- End core plugin -->
</body>

</html>
