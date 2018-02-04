<?php require_once 'search.php'; ?>
<div class="najava">
    <div class="brandtitle"> &nbsp; Најава</div>
    <form action="admin/process/processlogin.php" method="post">
        <div class="input-group">
            <span class="input-group">Корисник:</span>
            <input type="text" class="form-control" name="user_email" placeholder="Емаил адреса">
        </div>
        <div class="input-group">
            <span class="input-group">Лозинка:</span>
            <input type="password" class="form-control" name="user_pass" placeholder="Лозинка">
        </div>
        <br />
        <button type="submit" class="btn btn-default btn-sm">Влез</button>
        <br />
    </form>
</div>
<br />
<a href="partners.php"><img src="images/partners_mk.png" alt="Партнери" class="img-responsive img-rounded"/></a>
<br />
<a href="registration.php"><img src="images/registration.png" alt="Регистрација"  class="img-responsive"/></a>
