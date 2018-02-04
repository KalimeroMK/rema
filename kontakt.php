<?php require_once 'header.php'; ?>
<div class="container">
<div class="row">
<div class="col-md-2">
<?php require_once 'levo.php'; ?>
</div>
<div class="col-md-6">
    <h3>Контакт форма</h3>
    <form action="process.php" method="post">

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
            <span class="input-group-addon">Контактирајте</span>
            <select class="form-control" name="do">
                <option value="1">Сервис</option>
                <option value="2" selected>Продажба</option>
            </select>
        </div>
        <br />
        <div class="input-group">
            <span class="input-group-addon">Порака</span>
            <textarea class="form-control" rows="5" name="poraka"></textarea>
        </div>
        <br />
        <button type="submit" class="btn btn-default">Испрати</button>
        <br /><br />
    </form>



</div>
<div class="col-md-4 pull-right">
<?php require_once 'search.php'; ?>
    <table class="table">
        <tr>
            <td> Адреса  </td><td>&nbsp;</td>
        </tr>
        <tr>
            <td>  <img src="images/address.png" alt="Адреса" /> </td><td>Kомпјутери</td>
        </tr>
        <tr>
            <td>  <img src="images/address.png" alt="Адреса" /> </td><td>Македонија</td>
        </tr>
        <tr>
            <td>  <img src="images/address.png" alt="Адреса" /> </td><td>1000 Скопје - Македонија</td>
        </tr>
        <tr>
            <td><img src="images/mail.png" alt="Email" /></td><td> <a mailto="info@domen.com.mk">info@domen.com.mk</a></td>
        </tr>
        <tr>
        <tr>
            <td> Телефони </td><td>&nbsp; </td>
        </tr>
        <td><img src="images/phone.png" alt="Телефон" /></td><td> +389 1 11 11 111 </td>
        </tr>
        <tr>
            <td><img src="images/phone.png" alt="Телефон" /></td><td> +389 1 11 11 111  </td>
        </tr>
        <tr>
            <td><img src="images/fax.png" alt="Факс" /></td><td> +389 1 11 11 111 Локал 111</td>
        </tr>
    </table>
    <div class="clear"><br /></div>

</div>
    

    <div class="col-md-10">
    <p>google mapa</p>
    </div>

<?php require_once 'footer.php'; ?>
</div>
</div>