<!-- PROBA -->
      <div id="demo-one">
        <div class="quotes">
          <?php
          $sql = mysqli_query($con, "SELECT * FROM promocii ORDER BY id DESC");
          while ($row = mysqli_fetch_array($sql)) {
            echo '<p>' . $row['tekst'] . '</p>
            ';
          }
          ?>
        </div>
      </div>
      <!-- SLIDER -->
      <?php
      $query  = "SELECT * from sliderimages ORDER BY img_id DESC LIMIT 6";
      $res    = mysqli_query($con,$query);
      $count  =   mysqli_num_rows($res);
      $slides='';
      $Indicators='';
      $counter=0;
      while($row=mysqli_fetch_array($res))
      {
        $naslov = $row['img_title'];
        $id = $row['img_id'];
        $image = $row['image'];
        $tekst = $row['img_text'];
        if($counter == 0)
        {
          $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
          $slides .= '<div class="item active">
          <img src="admin/' . $row['image'] . '" alt="'.$naslov.'" />
          <div class="carousel-caption">
            <h3>'.$naslov.'</h3> 
            <p>'.$img_text.'</p>    
          </div>
        </div>';
      }
      else
      {
        $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
        $slides .= '<div class="item">
        <img src="admin/' . $row['image'] . '" alt="'.$title.'" />
        <div class="carousel-caption">
         <h3>'.$naslov.'</h3> 
         <p>'.$img_text.'</p>         
       </div>
     </div>';
   }
   $counter++;
 }
 ?>
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
   <?php echo $Indicators; ?>
 </ol>
 <!-- Wrapper for slides -->
 <div class="carousel-inner">
  <?php echo $slides; ?>  
</div>
<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>