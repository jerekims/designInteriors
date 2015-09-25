<html>
<head>
  <title>
      Mirad Jewellerry
  </title>
   <!-- LINK FONTS
    _______________________________________________________________________ -->
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/styles.css'?>">
    
    <!-- GOOLE FONTS
    _______________________________________________________________________ -->
  
</head>
<body>
    <header id="header-area">
        <?php
           $this->load->view($top_navbar);
        ?>
    </header>
     <div id="main-container-home">
         <?php 
              $this->load->view($content_page); 
         ?>
      </div>

      <footer id="footer-area">
         <?php
             $this->load->view($main_footer);
         ?>
      </footer>
            
   <!-- Scripts_________________ -->
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url().'assets/js/scripts.js'?>"></script>  

</body>
</html>