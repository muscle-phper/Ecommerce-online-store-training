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
          <h2 class="sub-header"><?=isset($carousel) ? '修改' : '新增'?>輪播</h2>
          <form class="form-horizontal" method="post" action="<?=isset($carousel) ? base_url('/backend/carousel/update/' . $carousel->id) : base_url('/backend/carousel/store')?>">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">標題</label>
              <div class="col-sm-4">
                <input type="text" name="title" class="form-control" value="<?=isset($carousel) ? $carousel->title : ''?>" placeholder="請輸入帳號">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">簡介</label>
              <div class="col-sm-4">
                <input type="text" name="description" class="form-control" value="<?=isset($carousel) ? $carousel->description : ''?>" placeholder="請輸入密碼">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">網址</label>
              <div class="col-sm-4">
                <input type="text" name="url" class="form-control" value="<?=isset($carousel) ? $carousel->url : ''?>" placeholder="請輸入姓名">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">圖片
              </label>
              <div class="col-sm-4">
                <input type="text" name="picture" class="form-control" value="<?=isset($carousel) ? $carousel->picture : ''?>" placeholder="請輸入地址">
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