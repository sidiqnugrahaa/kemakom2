<script src="<?php echo base_url().'assets/fr/js/jquery-3.4.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/fr/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/fr/js/kemakom.js'?>"></script>

<script>
    $(document).scroll(function() {
        var navbar = $(".navbar");
        var stats = $("#stats");
                   // navbar.toggleClass("navbar-active", $(this).scrollTop() > navbar.height());
        ($(this).scrollTop() > navbar.height()) ? navbar.css("background", "#01004d") : navbar.css("background", "transparent");
    });
</script>