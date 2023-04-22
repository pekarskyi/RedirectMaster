<div class="h4 mb-3">Настройки пользователя: <?php echo $user['user_login']; ?></div>

<form action="" method="POST" class="mb-4">
  <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
  <div class="form-row">
    <div class="col">
      Логин *
      <input type="text" name="user_login" class="form-control" required value="<?php echo $user['user_login']; ?>">
    </div>
    <div class="col">
      Имя *
      <input type="text" name="first_name" class="form-control" required value="<?php echo $user['first_name']; ?>">
    </div>
    <div class="col">
      Фамилия
      <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>">
    </div>
  </div>
  <div class="form-row my-3">
  	<div class="col">
      Email *
  	  <input type="text" name="user_email" class="form-control" required value="<?php echo $user['user_email']; ?>">
  	</div>
    <div class="col">
      Новый пароль (если необходимо)
      <input type="text" name="user_password" class="form-control">
    </div>
  </div>
  <input type="submit" name="update" class="btn btn-primary btn-block" value="Сохранить изменения">
</form>

<?php include 'footer' . $phpExt; ?>