<div class="form-group">

            <form action="process/partnerbycity.php" method="post" >

                <br />

                <?php
                $result = mysqli_query($con, "SELECT * FROM city");
                echo '<select name="city" id="choosecity" class="form-control"> ';
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                      <option value="' . $row['city_id'] . '">' . $row['city_name'] . '</option>
                          ';
                }
                echo ' </select> ';
                echo '  
           <button type="submit" class="btn btn-default">Submit</button>
       </div>
</form>   
          '

                ;
                ?>
        </div>