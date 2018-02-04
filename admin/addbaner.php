<? require_once 'header.php'; ?>

<p class="breadcrumb" style="text-align: center;"> <?php echo DODADI_BANER; ?> </p>
<div style="text-align: left;">
    <p class="btn btn-danger btn-xs"><strong>Слики за банери: </strong> </p> <p class="btn btn-success btn-xs"><strong>[ ВАЖНО! </strong> Сликите мора да биде со димензии: width: 200px; height: 200px; <strong> ] </strong>  </p>
</div> 




<form id="vpb_file_attachment_baner1" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo IZBERI_BANER_1; ?> </label>
    
    <input type="file" name="browsed_file_banner" id="browsed_file1" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize_baner1();" class="btn btn-info" required>
        <?php echo UPLOAD; ?></a> 
</form>


<br />

<form id="vpb_file_attachment_baner2" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo IZBERI_BANER_2; ?> </label>
    <input type="file" name="browsed_file_banner2" id="browsed_file2" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize_baner2();" class="btn btn-info" required>
        <?php echo UPLOAD; ?></a> 
</form>

<form action="processbaner.php" method="post" id="stylebrand" >
    <div id="vpb_upload_status1"></div>
    <br />
    <div id="vpb_upload_status2"></div>
    <br />
    <div class="form-group">
        <label for="chooseBrand"><?php echo IZBERI_BREND; ?></label>
        <?php
        $result = mysqli_query($con, "SELECT * FROM brand");
        echo '   <select name="brand" id="chooseBrand" class="form-control"> ';
        while ($row = mysqli_fetch_array($result)) {
            echo '
    <option value="' . $row['id'] . '">' . $row['brand_name'] . '</option>
';
        }
        echo ' </select> ';
        ;
        ?>
    </div>
    <br />
    <input type="hidden"  name="editid" value="'.$row['id'].'" />
    <button type="submit" class="btn btn-default">Submit</button>
</form>     
</p>

<p class="breadcrumb"  style="text-align: center;"> <?php echo BANNERS; ?> </p>

<table class="table">

    <?php echo '<th>' . BRAND_NAME . '</th><th>' . BANER1_IMG . '</th><th>' . BANER2_IMG . '</th><th>' . DELETE . '</th><th>' . EDIT . '</th>'; ?>
    <?php


// Check connection
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = mysqli_query($con, "SELECT * FROM brand");
    echo '
<div class="row">       
';
    while ($row = mysqli_fetch_array($sql)) {
        echo '            
<tr>
<td>' . $row['brand_name'] . '</td>
<td><img src="' . $row['baner1'] . '" class="img-responsive"></img></td>
    <td><img src="' . $row['baner2'] . '" class="img-responsive"></img></td>
<td>
<form action="procdeletebanners.php" method="post">   
<input type="hidden"  name="editid" value="' . $row['id'] . '" />
<button type="submit" class="btn btn-danger btn-xs" >' . IZBRISHI_BANER . '</button>
</form>
</td>
<td>
<form action="updatebanner.php" method="post">
<input type="hidden" name="editid" value="' . $row['id'] . '" />
<button type="submit" class="btn btn-warning btn-xs">' . UPDATE . '</button>
</form>    
</td>
</tr>

';
    }
    ?>
</table>






<script>
//This is the Upload Function
    function vpb_upload_and_resize_baner1()
    {
        //alert('COOL');
        $("#vpb_file_attachment_baner1").vPB({
            url: 'vpb_uploader_baner.php',
            beforeSubmit: function()
            {
                $("#vpb_upload_status1").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Please wait <img src="images/loadings.gif" align="absmiddle" title="Upload...."/></div><br clear="all">');
            },
            success: function(response)
            {
                $("#vpb_upload_status1").hide().fadeIn('slow').html(response);
            }
        }).submit();
    }
</script>

<script>
//This is the Upload Function
    function vpb_upload_and_resize_baner2()
    {
        //alert('COOL');
        $("#vpb_file_attachment_baner2").vPB({
            url: 'vpb_uploader_baner2.php',
            beforeSubmit: function()
            {
                $("#vpb_upload_status2").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Please wait <img src="images/loadings.gif" align="absmiddle" title="Upload...."/></div><br clear="all">');
            },
            success: function(response)
            {
                $("#vpb_upload_status2").hide().fadeIn('slow').html(response);
            }
        }).submit();
    }
</script>

<? require_once 'footer.php'; ?>