<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('/public/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?=base_url('/public/css/ie10-viewport-bug-workaround.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('/public/css/dashboard.css')?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js')?>"> </script><![endif]-->
    <script src="<?=base_url('/public/js/ie-emulation-modes-warning.js')?>"> </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')?>"> </script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')?>"> </script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/dashboard/#">後台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://getbootstrap.com/examples/dashboard/#">帳戶設定</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">登出</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="搜尋...">
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li>
              <a href="<?=base_url('/account/member_manage')?>">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 會員管理</a>
            </li>
            <li>
              <a href="http://getbootstrap.com/examples/dashboard/#">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 商品管理</a>
            </li>
            <li>
              <a href="http://getbootstrap.com/examples/dashboard/#">
              <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> 訂單管理</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">會員管理</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>功能列</th>
                  <th>sno</th>
                  <th>name</th>
                  <th>address</th>
                  <th>birthday</th>
                  <th>username</th>
                  <th>password</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($member_list as $row) :?>
                  <tr>
                    <td>
                    <a href="<?=base_url('/account/member_edit')?>">編輯</a>
                    |<a href="<?=base_url('/account/member_delete')?>">刪除</a>
                    </td>
                    <td><?=$row->sno?></td>
                    <td><?=$row->name?></td>
                    <td><?=$row->address?></td>
                    <td><?=$row->birthday?></td>
                    <td><?=$row->username?></td>
                    <td><?=$row->password?></td>
                  </tr>
                <?php endforeach; ?>
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