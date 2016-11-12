<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Carousel Template for Bootstrap</title>
    <link href="<?=base_url('/public/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('/public/css/ie10-viewport-bug-workaround.css')?>" rel="stylesheet">
    <script src="<?=base_url('/public/js/ie-emulation-modes-warning.js')?>"> </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <?php $this->load->view('/frontend/common/top');?>

    <!-- Carousel
    ================================================== -->
   <?php $this->load->view('/frontend/common/carousel');?>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->

      <?php $this->load->view('/frontend/common/market_row');?>

      <!-- START THE FEATURETTES -->

      <?php $this->load->view('/frontend/common/featurette');?>


      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->

      <?php $this->load->view('frontend/common/footer');?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/public/js/jquery.min.js')?>"> </script>
    <script src="<?=base_url('/public/js/bootstrap.min.js')?>"> </script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url('/public/js/holder.min.js')?>"> </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('/public/js/ie10-viewport-bug-workaround.js')?>"> </script>
  </body>
</html>
