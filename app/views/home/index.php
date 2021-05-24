<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
  <main class="col-sm-9 card" style="min-height: 850px">
    <h1><?php echo $data['title']?></h1>
    <div>
      <video autoplay="true" id="webcam"></video>
    </div>
  </main>
  <side class="col-sm-3 card">
    <h1>side</h1>
  </side>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
