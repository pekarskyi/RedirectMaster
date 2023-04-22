<div class="row mb-3">
  <div class="col">
    <a href="link-edit.php?link_id=<?php echo $link_id; ?>" class="btn btn-block btn-sm btn-light">Настройки редиректа</a>
  </div>
  <div class="col">
    <a href="link-chart.php?link_id=<?php echo $link_id; ?>" class="btn btn-block btn-sm btn-light">Статистика переходов</a>
  </div>
</div>

<div class="h5 mb-3"><i class="fas fa-cog"></i> Настройки редиректа <a href="<?php echo $domain_url; ?>/<?php echo $link['link_id']; ?>" target="_blank"><?php echo $domain_url; ?>/<?php echo $link['link_id']; ?></a></div>

<form action="" method="POST" class="mb-4">
  <input type="hidden" name="link_id" value="<?php echo $link['link_id']; ?>">
  <div class="form-row mb-3">
    <div class="col">
      Куда перенаправлять?
      <input type="text" name="link_url" class="form-control" required placeholder="Url-адрес" value="<?php echo $link['link_url']; ?>">
    </div>
    <div class="col">
      Категория
    <select name="project_id" class="form-control">
        <option <?php if($prct['project_id'] === '0'){echo 'selected';} ?> value="0">Без категории</option>
		<?php foreach($project_info as $prct) : ?>

			<option <?php if($prct['project_id'] === $link['project_id']){echo 'selected';} ?> value="<?php echo $prct['project_id']; ?>"><?php echo $prct['project_name']; ?></option>

		<?php endforeach; ?>
    </select>
    </div>
  </div>
  Название редиректа
  <input type="text" name="comments" class="form-control" placeholder="Название редиректа" value="<?php echo $link['comments']; ?>">

  <input type="submit" name="update" class="btn btn-primary btn-block mt-3" value="Сохранить изменения">

</form>


<button class="btn btn-warning btn-sm" id="reset_link">Сбросить статистику</button>


<?php include 'footer' . $phpExt; ?>