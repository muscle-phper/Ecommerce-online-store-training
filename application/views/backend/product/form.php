<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en">
  <?php $this->load->view('/backend/common/header')?>
  <body>
  <?php $this->load->view('/backend/common/top')?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('/backend/common/menu')?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header"><?=isset($product) ? '修改' : '新增'?>會員</h2>
          <form class="form-horizontal" method="post" action="<?=isset($product) ? base_url('/backend/product/update/' . $product->id) : base_url('/backend/product/store')?>">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">產品名稱</label>
              <div class="col-sm-4">
                <input type="text" name="name" class="form-control" value="<?=isset($product) ? $product->name : ''?>" placeholder="請輸入名稱">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">產品價格</label>
              <div class="col-sm-4">
                <input type="text" name="price" class="form-control" value="<?=isset($product) ? $product->price : ''?>" placeholder="請輸入價格">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">製造廠商</label>
              <div class="col-sm-4">
                <input type="text" name="make" class="form-control" value="<?=isset($product) ? $product->make : ''?>" placeholder="請輸入廠商">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">送出</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/public/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('/public/js/bootstrap.min.js')?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url('/public/js/holder.min.js')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('/public/js/ie10-viewport-bug-workaround.js')?>"></script>


</body></html>