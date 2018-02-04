<?php require_once 'header.php'; ?>

<?php require_once 'levo.php'; ?>

<div class="col-md-6">
<h3>Регистрација</h3>
<form action="processuser.php" method="post">

        <br />
        <div class="input-group">
            <span class="input-group-addon">Име / Фирма *</span>
            <input type="text" class="form-control" name="firma">
        </div>
        <br />
        <div class="input-group">
            <span class="input-group-addon">Емаил *</span>
            <input type="text" class="form-control" name="email">
        </div>
        <br />
        <div class="input-group">
            <span class="input-group-addon">Телефон</span>
            <input type="text" class="form-control" name="telefon">
        </div>
        <br />
        
         <div class="input-group">
            <span class="input-group-addon">Лозинка</span>
            <input type="password" class="form-control" name="password">
        </div>
        <br />
       
        
        <button type="submit" class="btn btn-default">Регистрирај се</button>
</form>



</div>
<div class="col-md-4 pull-right">
<?php require_once 'search.php'; ?>
    <table class="table">
        <tr>
            <td> Адреса  </td><td>&nbsp;</td>
        </tr>
        <tr>
            <td>  <img src="images/address.png" alt="Адреса" /> </td><td>Рема компјутери</td>
        </tr>
        <tr>
            <td>  <img src="images/address.png" alt="Адреса" /> </td><td>ул. Владимир Каваев 2б </td>
        </tr>
        <tr>
            <td>  <img src="images/address.png" alt="Адреса" /> </td><td>1000 Скопје - Македонија</td>
        </tr>
        <tr>
            <td><img src="images/mail.png" alt="Email" /></td><td> <a mailto="info@rema.com.mk">info@rema.com.mk</a></td>
        </tr>
        <tr>
        <tr>
            <td> Телефони </td><td>&nbsp; </td>
        </tr>
        <td><img src="images/phone.png" alt="Телефон" /></td><td> +389 2 55 11 305 </td>
        </tr>
        <tr>
            <td><img src="images/phone.png" alt="Телефон" /></td><td> +389 2 55 11 306  </td>
        </tr>
        <tr>
            <td><img src="images/fax.png" alt="Факс" /></td><td> +389 2 3 118 159 Локал 110</td>
        </tr>
    </table>
    <div class="clear"><br /></div>

</div>
<?php require_once 'footer.php'; ?>
