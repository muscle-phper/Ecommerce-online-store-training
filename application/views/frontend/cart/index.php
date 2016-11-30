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

  <body>
    <?php $this->load->view('/frontend/common/top');?>

    <?=form_open('/cart/checkout/', ['method' => 'post'])?>
    <div class="container marketing">
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-offset-2 col-md-8">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>商品名稱</th>
                <th>價格</th>
                <th>數量</th>
              </tr>
            </thead>
            <tbody>
              <?php $total_price = 0;?>
              <?php foreach ($cartProducts as $index => $cp): ?>
              <tr>
                <th scope="row"><?=$index + 1?></th>
                <td><?=$cp->name?></td>
                <td><?=$cp->price?></td>
                <td>1</td>
                <?php $total_price = $total_price + $cp->price;?>
                <?=form_hidden('product_id[]', $cp->id);?>
                <td><a href="javascript:void(0)" onclick="destroyRow('<?=base_url("/cart/destroy/" . $cp->id)?>')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 刪除</a></td>
              </tr>
              <?php endforeach?>
              <tr>
                <td></td><td>total</td><td><?=$total_price?></td>
                <?=form_hidden('total_price[]', $total_price);?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row featurette" style="margin-top: 30px">
        <div class="row">
          <?php if ($this->session->name): ?>
            <button type="submit" class="col-md-offset-2 btn btn-lg btn-primary col-md-8">結帳</button>
          <?php endif?>
          </form>
        </div>
      </div>
      <?=form_close()?>

      <hr class="featurette-divider">

      <?php $this->load->view('/frontend/common/footer')?>

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

    <script>
    function destroyRow(link){
      if(confirm('確定是否刪除')){
        location.replace(link);
      }
    }
    </script>

  </body>
</html>
