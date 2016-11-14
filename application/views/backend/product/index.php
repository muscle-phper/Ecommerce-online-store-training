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
          <h2 class="sub-header">商品管理</h2>
          <a href="<?=base_url('/backend/product/create/')?>" class="btn btn-primary">
          <span class="glyphicon glyphicon-plus" aria-hidden="true">新增商品</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
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
                    <a href="<?=base_url('/backend/product/edit/' . $row->id)?>" class="btn btn-primary btn-xs" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true">編輯
                    </a>
                   <a href="javascript:void(0)" onclick="destroyRow('<?=base_url("/backend/product/destroy/" . $row->id)?>')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 刪除</a>
                    </td>
                    <td><?=$row->id?></td>
                    <td><?=$row->name?></td>
                    <td><?=$row->brand?></td>
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

    <script>
    function destroyRow(link){
      if(confirm('確定是否刪除')){
        location.replace(link);
      }
    }
    </script>


</body></html>