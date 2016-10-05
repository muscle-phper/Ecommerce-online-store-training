<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en">
  <?php $this->load->view('common/header')?>
  <body>
  <?php $this->load->view('common/top')?>
    <div class="container-fluid">
      <div class="row">
        <?php $this->load->view('common/menu')?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">會員管理</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th><a href="<?=base_url('/product/insert/')?>">新增</a></th>
                  <th>ID</th>
                  <th>產品名稱</th>
                  <th>製造商</th>
                  <th>價格</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($product_list as $row): ?>
                  <tr>
                    <td>
                    <a href="<?=base_url('/product/edit/' . $row->id)?>">編輯</a>
                    |<a href="<?=base_url('/product/destroy/' . $row->id)?>">刪除</a>
                    </td>
                    <td><?=$row->id?></td>
                    <td><?=$row->name?></td>
                    <td><?=$row->make?></td>
                    <td><?=$row->price?></td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/public/js/jquery.min.js')?>"> </script>
    <script src="<?=base_url('/public/js/bootstrap.min.js')?>"> </script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url('/public/js/holder.min.js')?>"> </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('/public/js/ie10-viewport-bug-workaround.js')?>"> </script>


</body></html>