<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/layout/head')?>
<body class="sticky-header">
 <!--Start login Section-->
  <section class="login-section">
       <div class="container">
           <div class="row">
               <div class="login-wrapper">
                   <div class="login-inner">
                       
                       <div class="logo">
                         <img src="<?php echo base_url().'assets/images/margana.png'?>"  alt="logo"/>
                       </div>
                   		
                   		<h2 class="header-title text-center">Login</h2>
                      <?php if ($this->session->flashdata('msg')==TRUE){?>
                        <div class="alert alert-danger"> <?php echo $this->session->flashdata('msg');?></div>
                      <?php }?>
                       <form method="post" role="form" action="<?php echo base_url('login/auth');?>">
                           <div class="form-group">
                               <input type="text" class="form-control"  placeholder="Username" name="username" >
                           </div>
                           
                           <div class="form-group">
                               <input type="password" class="form-control"  placeholder="Password" name="password">
                           </div>                          
                           <div class="form-group">
                               <input type="submit" value="Login" class="btn btn-primary btn-block" >
                           </div>                           
                       </form>
                       
                        <div class="copy-text"> 
                         <p class="m-0">2019 &copy; Kemakom</p>
                        </div>
                    
                   </div>
               </div>
               
           </div>
       </div>
  </section>
<?php $this->load->view('admin/layout/core');?>
</body>

</html>
