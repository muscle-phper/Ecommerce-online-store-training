      <div class="row">
        <?php foreach ($homeProducts as $hp): ?>
        <div class="col-lg-4">
          <img class="img-circle" src="<?=$hp->picture?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?=$hp->name?></h2>
          <!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>-->
          <p>$<?=$hp->price?></p>
          <p><?=$hp->description?></p>
          <p><a class="btn btn-default" href="/cart/add/<?=$hp->id?>" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>加入購物車</a></p>
        </div>
      <?php endforeach?>
      </div><!-- /.row -->