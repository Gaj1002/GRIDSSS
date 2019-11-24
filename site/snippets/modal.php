<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_1()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <p><?= $page->text_header_1()?></p>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_2()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <h6>Waarom worden grids gebruikt?</h6>
        <p>Het hele doel van designers is het oplossen van problemen. Webdesigners worden geconfronteerd met het zoeken van problemen om bepaalde elementen goed te visualiseren en te organiseren. Om een van deze problemen aan te gaan kunnen we daarom dus gebruik maken van Grids. Dit is zeker niet de enige oplossing om het hele probleem te verhelpen, maar het heeft natuurlijk wel een paar interessante voordelen:</p>
        <p class="kop">Efficientie:</p>
        <p>met grids kunnen ontwerpers snel elementen aan een lay-out toevoegen, omdat veel lay-out beslissingen worden aangepakt tijdens het bouwen van het grid systeem.</p>
        <p class="kop">Duidelijkheid:</p>
        <p>grids brengen orde in een layout waardoor bezoekers makkelijker informatie kunnen vinden en navigeren.</p>
        <p class="kop">Samenwerking:</p>
        <p>grids maken het gemakkelijker voor andere ontwerpers om aan het ontwerp te werken en samen te werken, omdat ze een plan bieden voor waar ze elementen kunnen plaatsen.</p>
        <p class="kop">Consistentie:</p>
        <p>grids leiden tot consistentie in de lay-out van pagina’s op een enkele site of zelfs meerdere sites waardoor een structurele harmonie in het ontwerp staat.</p>
        <p class="kop">Sneller:</p>
        <p>Grids kunnen de ontwerptijd aanzienlijk versnellen en verbeteren, omdat ze kunnen dienen als een gids die aangeeft waar elementen het beste kunnen worden geplaatst en geschaald. </p>
        <p class="kop">Flexibiliteit:</p>
        <p>Alle grids zijn zeer functioneel, waardoor flexibele dingen zich kunnen aanpassen aan je veranderende ontwerp. Bij het maken van een grid krijg je de optie om verschillende type grids toe te passen. Zo kun je bijvoorbeeld van een design die een 1 kolom grid gebruikt misschien wel een 2 of 3 kolom grid gebruiken.</p>

    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_3()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <p><?= $page->introduction_topic_3()?></p>
        <h6><?= $page->header_topic_3_1()?></h6>
        <p><?= $page->Text_topic_3_1()?></p>
        <h6><?= $page->header_topic_3_2()?></h6>
        <p><?= $page->Text_topic_3_2()?></p>
        <h6><?= $page->header_topic_3_3()?></h6>
        <p><?= $page->Text_topic_3_3()?></p>
        <?php if($image = $page->image('columns_graphic.png')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h6><?= $page->header_topic_3_4()?></h6>
        <p><?= $page->Text_topic_3_4()?></p>
        <h6><?= $page->header_topic_3_5()?></h6>
        <p><?= $page->Text_topic_3_5()?></p>
        <?php if($image = $page->image('baselinegrid_graphic.png')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h6><?= $page->header_topic_3_6()?></h6>
        <p><?= $page->Text_topic_3_6()?></p>
        <?php if($image = $page->image('margins_paddings_graphic.png')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h6><?= $page->header_topic_3_7()?></h6>
        <p><?= $page->Text_topic_3_7()?></p>
        <h6><?= $page->header_topic_3_8()?></h6>
        <p><?= $page->Text_topic_3_8()?></p>
        <?php if($image = $page->image('rows_graphic.png')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h6><?= $page->header_topic_3_9()?></h6>
        <p><?= $page->Text_topic_3_9()?></p>
        <?php if($image = $page->image('modules_graphic.png')): ?>
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>

    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_4()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
      <p><?= $page->introduction_topic_4()?></p>
      <h6><?= $page->header_topic_4_1()?></h6>
      <p><?= $page->text_topic_4_1()?></p>
      <?php if($image = $page->image('golden_ratio_graphic.png')): ?>
        <img src="<?= $image->url() ?>" alt="">
      <?php endif ?>
      <p><?= $page->text_topic_4_2()?></p>
      <h6><?= $page->header_topic_4_3()?></h6>
      <p><?= $page->text_topic_4_3()?></p>
      <?php if($image = $page->image('rule_of_thirds_graphic.png')): ?>
        <img src="<?= $image->url() ?>" alt="">
      <?php endif ?>
      <p><?= $page->text_topic_4_3()?></p>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_5()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <p><?= $page->text_header_1()?></p>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_6()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <p><?= $page->text_header_1()?></p>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_7()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <p><?= $page->text_header_1()?></p>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $page->topic_8()?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
      </div>
        <p><?= $page->text_header_1()?></p>
    </div>
  </div>
</div>
