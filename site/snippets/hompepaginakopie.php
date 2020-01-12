<div class="container">
  <div class="row eerste-row">
    <div class="col">
      <?php if($image = $page->image('logo.png')): ?>
        <img id="logo" src="<?= $image->url() ?>" alt="">
      <?php endif ?>
    </div>
  </div>
  <div class="row grid-row">
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
        <?= $page->image('search.svg') ?>
        <div class="topic-title">
            <?= $page->topic_1() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
        <?= $page->image('question.svg') ?>
        <div class="topic-title">
            <?= $page->topic_2() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
        <?= $page->image('terminology.svg') ?>
        <div class="topic-title">
            <?= $page->topic_3() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
        <?= $page->image('flag-checkered.svg') ?>
        <div class="topic-title">
            <?= $page->topic_4() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">
        <?= $page->image('check.svg') ?>
        <div class="topic-title">
            <?= $page->topic_5() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6">
        <?= $page->image('tools.svg') ?>
        <div class="topic-title">
            <?= $page->topic_6() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">
        <?= $page->image('history.svg') ?>
        <div class="topic-title">
            <?= $page->topic_7() ?>
        </div>
      </button>
    </div>
    <div class="col-xs-6 col-md-3">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal8">
        <?= $page->image('introductie.svg') ?>
        <div class="topic-title">
            <?= $page->topic_8() ?>
        </div>
      </button>
    </div>
  </div>
</div>
