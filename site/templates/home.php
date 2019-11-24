<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?= css('assets/css/templates/home.css')?>
  <?= css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')?>
  <?= js('https://code.jquery.com/jquery-3.3.1.slim.min.js')?>
  <?= js('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')?>
  <?= js('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')?>
  
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col">
        <?php foreach($page->images() as $image): ?>
          <figure>
            <img id="logo" src="<?= $image->url() ?>" alt="">
          </figure>
        <?php endforeach ?>
        <hr>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4"></button>
      </div>
    </div>
  </div>
  <div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
      <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?= $page->title_header_1()?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <p><?= $page->text_header_1()?></p>
      </div>
  </div>
</body>
</html>

  
