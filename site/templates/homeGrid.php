<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"/>
<?= css('content/homeGrid/homeGrid.css') ?>
</head>

<body>
<div class="container">
    <?= $page->title() ?>
    <hr />
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal5">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal6">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal7">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal8">
        <?= $page->image() ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
  </div>
</div>

<!-- Bootstrap Cards -->
<!-- <div class="container">
    <div class="card-columns">
        <div class="card card-body"></div>
        <div class="card card-body col-short"></div>
        <div class="card card-body col-short"></div>
        <div class="card card-body col-short"></div>
        <div class="card card-body"></div>
        <div class="card card-body col-short"></div>
    </div>
</div> -->

</body>
