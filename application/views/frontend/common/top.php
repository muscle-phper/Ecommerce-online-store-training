<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">首頁</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
               </ul> -->
              <ul class="nav navbar-nav navbar-right">

                <?php if ($this->session->name): ?>
                  <li><a href="/account/logout"><span class="glyphicon glyphicon-user"></span>會員登出</a></li>
                  <?php else: ?>
                  <li><a href="/account/login"><span class="glyphicon glyphicon-user"></span> 會員登入</a></li>
                <?php endif?>


                <?php if ($this->session->name): ?>
                  <li><a href="/"><span class="glyphicon glyphicon-user"></span>我的帳戶</a></li>
                <?php endif?>
                <li><a href="/cart"><span class="glyphicon glyphicon-shopping-cart"></span> 購物車 <span class="badge"><?=$cartProductAmount?></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
