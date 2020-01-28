<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>The Grid System</title>
  <?= css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')?>
  <?= js('https://code.jquery.com/jquery-3.3.1.slim.min.js')?>
  <?= js('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')?>
  <?= js('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous"/>
  <?= css('assets/css/templates/home.css') ?>
</head>
<body>
  <img id="logo" src="content/home/titel.png" alt="">
  <div class="lines">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>

  <div class="wrapper">
    <div class="div2" data-toggle="modal" data-target="#exampleModal1">
        <p>Wat zijn Grids?</p>
      </button>
    </div>
    <div class="div3" data-toggle="modal" data-target="#exampleModal2">
      <p>Do's and Dont's?</p>
    </div>
    <div class="div4" data-toggle="modal" data-target="#exampleModal3">
      <p>Waarom Grids?</p>
    </div>
    <div class="div5" data-toggle="modal" data-target="#exampleModal4">
      <p>Tools</p>
    </div>
    <div class="div6" data-toggle="modal" data-target="#exampleModal5">
      <p>Terminologie</p>
    </div>
    <div class="div7" data-toggle="modal" data-target="#exampleModal6">
      <p>History</p>
    </div>
    <div class="div8" data-toggle="modal" data-target="#exampleModal7">
      <p>Starting Points</p>
    </div>
    <div class="div9" data-toggle="modal" data-target="#exampleModal8">
      <p>More Information</p>
    </div>
  </div>

  <?php snippet('modal') ?>
</body>
</html>
