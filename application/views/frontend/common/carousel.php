 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php foreach ($carousel as $i => $cl): ?>
        <li data-target="#myCarousel" data-slide-to="<?=$i?>"<?=($i == 0) ? ' class="active"' : ''?>></li>
         <?php endforeach?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php foreach ($carousel as $i => $cl): ?>

        <div class="item<?=($i == 0) ? ' active' : ''?>">
          <img class="first-slide" src="<?=$cl->picture?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?=$cl->title?>.</h1>
              <p><?=$cl->description?>.</p>
              <p><a class="btn btn-lg btn-primary" href="<?=$cl->url?>" role="button">按此連結</a></p>
            </div>
          </div>
        </div>
        <?php endforeach?>
      <!--  <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div> -->
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->