<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_1()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <p><?= $page->Text_topic_1_1()?></p>
      </div>
      <div class="scroller" style="height:90vh;"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_2()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <h3><?= $page->header_topic_2_1()?></h3>
        <p><?= $page->Text_topic_2_1()?></p>
        <h3><?= $page->header_topic_2_2()?></h3>
        <p><?= $page->Text_topic_2_2()?></p>
        <h3><?= $page->header_topic_2_3()?></h3>
        <p><?= $page->Text_topic_2_3()?></p>
        <?php if($image = $page->image('outline_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h3><?= $page->header_topic_2_4()?></h3>
        <p><?= $page->Text_topic_2_4()?></p>
        <h3><?= $page->header_topic_2_5()?></h3>
        <p><?= $page->Text_topic_2_5()?></p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_3()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <h2 style="margin-top:0px;"><?= $page->header_topic_3_1()?></h2>
        <hr />
        <p><?= $page->Text_topic_3_1()?></p>
<!-- Bootstrap columns -->
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h3><?= $page->Kop_topic_3_2()?></h3>
              <p><?= $page->Text_topic_3_2()?></p>
            </div>
            <div class="col-sm">
              <h3><?= $page->Kop_topic_3_3()?></h3>
              <p><?= $page->Text_topic_3_3()?></p>
            </div>
            <div class="col-sm">
              <h3><?= $page->Kop_topic_3_4()?></h3>
              <p><?= $page->Text_topic_3_4()?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <h3><?= $page->Kop_topic_3_5()?></h3>
              <p><?= $page->Text_topic_3_5()?></p>
            </div>
            <div class="col-sm">
              <h3><?= $page->Kop_topic_3_6()?></h3>
              <p><?= $page->Text_topic_3_6()?></p>
            </div>
            <div class="col-sm">
              <h3><?= $page->Kop_topic_3_7()?></h3>
              <p><?= $page->Text_topic_3_7()?></p>
            </div>
          </div>
        </div>
<!-- END Bootstrap columns -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_4()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <p><?= $page->introduction_topic_4()?></p>
        <h2><?= $page->header_topic_4_1()?></h2>
        <hr />
        <!-- Bootstrap columns -->
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <h3><?= $page->Kop_topic_4_1()?></h3>
                      <p><?= $page->Text_topic_4_1()?></p>
                    </div>
                    <div class="col-sm">
                      <h3><?= $page->Kop_topic_4_2()?></h3>
                      <p><?= $page->Text_topic_4_2()?></p>
                    </div>
                    <div class="col-sm">
                      <h3><?= $page->Kop_topic_4_3()?></h3>
                      <p><?= $page->Text_topic_4_3()?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <h3><?= $page->Kop_topic_4_4()?></h3>
                      <p><?= $page->Text_topic_4_4()?></p>
                    </div>
                    <div class="col-sm">
                      <h3><?= $page->Kop_topic_4_5()?></h3>
                      <p><?= $page->Text_topic_4_5()?></p>
                    </div>
                    <div class="col-sm">
                      <h3><?= $page->Kop_topic_4_6()?></h3>
                      <p><?= $page->Text_topic_4_6()?></p>
                    </div>
                  </div>
                </div>
        <!-- END Bootstrap columns -->
        <h2><?= $page->header_topic_4_7()?></h2>
        <hr />
        <p><?= $page->Text_topic_4_7()?></p>
        <?php if($image = $page->image('design_tools_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_5()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <p><?= $page->introduction_topic_5()?></p>
        <h3><?= $page->header_topic_5_1()?></h3>
        <p><?= $page->Text_topic_5_1()?></p>
        <h3><?= $page->header_topic_5_2()?></h3>
        <p><?= $page->Text_topic_5_2()?></p>
        <?php if($image = $page->image('columns_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h3><?= $page->header_topic_5_3()?></h3>
        <p><?= $page->Text_topic_5_3()?></p>
        <?php if($image = $page->image('gutters_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h3><?= $page->header_topic_5_4()?></h3>
        <p><?= $page->Text_topic_5_4()?></p>
        <?php if($image = $page->image('baselinegrid_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h3><?= $page->header_topic_5_5()?></h3>
        <p><?= $page->Text_topic_5_5()?></p>
        <?php if($image = $page->image('rows_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h3><?= $page->header_topic_5_6()?></h3>
        <p><?= $page->Text_topic_5_6()?></p>
        <?php if($image = $page->image('modules_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h3><?= $page->header_topic_5_7()?></h3>
        <p><?= $page->Text_topic_5_7()?></p>
        <h3><?= $page->header_topic_5_8()?></h3>
        <p><?= $page->Text_topic_5_8()?></p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_6()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <p><?= $page->introduction_topic_6_1()?></p>
        <p><?= $page->introduction_topic_6_2()?></p>
        <h2><?= $page->header_topic_6_1()?></h2>
        <hr />
        <p><?= $page->Text_topic_6_1_1()?></p>
        <p><?= $page->Text_topic_6_1_2()?></p>
        <?php if($image = $page->image('history_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <p><?= $page->Text_topic_6_1_3()?></p>
        <p><?= $page->Text_topic_6_1_4()?></p>
        <h2><?= $page->header_topic_6_2()?></h2>
        <hr />
        <p><?= $page->Text_topic_6_2_1()?></p>
        <p><?= $page->Text_topic_6_2_2()?></p>
        <p><?= $page->Text_topic_6_2_3()?></p>
        <h2><?= $page->header_topic_6_3()?></h2>
        <hr />
        <p><?= $page->Text_topic_6_3()?></p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_7()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <p><?= $page->introduction_topic_7()?></p>
        <h2><?= $page->header_topic_7_1()?></h2>
        <hr />
        <p><?= $page->Text_topic_7_1()?></p>
        <?php if($image = $page->image('goldenratio_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h2><?= $page->header_topic_7_2()?></h2>
        <hr />
        <p><?= $page->Text_topic_7_2()?></p>
        <?php if($image = $page->image('rule_of_thirds_graphic.svg')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><?= $page->topic_8()?></h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-content-copy">
        <p><?= $page->Text_topic_8_1()?></p>
        <p><?= $page->Text_topic_8_2()?></p>
        <p><?= $page->Text_topic_8_3()?></p>
        <p><?= $page->Text_topic_8_4()?></p>
      </div>
      <div class="scroller" style="height:60vh;"></div>
    </div>
  </div>
</div>
