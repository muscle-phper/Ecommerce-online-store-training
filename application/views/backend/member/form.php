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
          <h2 class="sub-header"><?=isset($member) ? '修改' : '新增'?>會員</h2>
          <form class="form-horizontal" method="post" action="<?=isset($member) ? base_url('/backend/member/update/' . $member->id) : base_url('/backend/member/store')?>">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">帳號</label>
              <div class="col-sm-4">
                <input type="text" name="username" class="form-control" value="<?=isset($member) ? $member->username : ''?>" placeholder="請輸入帳號">
              </div>
            </div>
            <?php if (isset($member) == false): ?>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">密碼</label>
              <div class="col-sm-4">
                <input type="text" name="password" class="form-control" value="" placeholder="請輸入密碼">
              </div>
            </div>
            <?php endif?>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">姓名</label>
              <div class="col-sm-4">
                <input type="text" name="name" class="form-control" value="<?=isset($member) ? $member->name : ''?>" placeholder="請輸入姓名">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">地址</label>
              <div class="col-sm-4">
                <input type="text" name="address" class="form-control" value="<?=isset($member) ? $member->address : ''?>" placeholder="請輸入地址">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">生日</label>
              <div class="col-sm-4">
                <input type="text" name="birthday" class="form-control" value="<?=isset($member) ? $member->birthday : ''?>" placeholder="請輸入生日">
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