<div class="container w-25 mt-5">

  <div class="shadow bg-white rounded">

        <div class="text-center rounded-top h4 bg-light p-3">Авторизация</div>

        <form action="" method="POST" class="px-3 pt-3">
            Ваш Email
            <input type="text" name="email" class="form-control mb-3" autocomplete="on">
            Пароль
            <input type="password" name="password" class="form-control" autocomplete="on">
            <input type="submit" name="button" class="btn btn-primary btn-block mt-3" value="Войти">
        </form>
        <div class="p-3"><a href="password<?php echo $phpExt;?>">Восстановить пароль</a></div>
  </div>

</div>


</body>
</html>