<p class="logo"><a href="/"><img src="#" alt="Лого Компјутери" class="img-responsive img-rounded"/></a></p>
<div class="navbar " role="navigation">
  <ul class="nava">
    <li><a href="/">Почетна</a></li>
    <li><a href="brendovi">Брендови</a></li>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM pages
        ");
    while ($row = mysqli_fetch_array($sql)) {
        echo '<li> <a href="pages?page=' . $row['pageid'] . '" class="menulink">' . $row['pagetitle'] . '</a></li>';
    }
    ?>
    <li><a href="kontakt">Контакт</a></li>
</ul>
</div><!--/.nav-collapse -->

