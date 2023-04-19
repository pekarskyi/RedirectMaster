<h4>Настройки системы</h4>

<form action="" method="POST" class="my-4">

  При переходе по <a href="/" target="_blank">адресу домена</a>, куда перенаправлять?
  <input type="url" name="domain_redirect" class="form-control mb-3" placeholder="URL" value="<?php echo $domain_redirect; ?>">

  Цвет верхней и нижней панели:
  <input type="color" name="head_footer_color" class="form-control mb-3" style="width: 100px;" value="<?php echo $head_footer_color; ?>">

  Цвет сайдбара:
  <input type="color" name="sidebar_color" class="form-control" style="width: 100px;" value="<?php echo $sidebar_color; ?>">

  <div class="row mt-3">
    <div class="col"><input type="button" id="update-sett" name="update" class="btn btn-primary btn-block" value="Сохранить изменения"></div>
    <div class="col"><input type="button" id="default-sett" name="default" class="btn btn-primary btn-block" value="Восстановить стили по умолчанию"></div>
  </div>
</form>

<?php include 'footer' . $phpExt; ?>

