<? require_once 'header.php'; ?>
<p class="breadcrumb" style="text-align: center;"> <?php echo UPDATE_BANNER; ?> </p>
<div style="text-align: left;">
    <p class="btn btn-danger btn-xs"><strong>Слики за банери: </strong> </p> <p class="btn btn-success btn-xs"><strong>[ ВАЖНО! </strong> Сликите мора да биде со димензии: width: 200px; height: 200px; <strong> ] </strong>  </p>
</div> 
 
<form id="vpb_file_attachment_baner1" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo IZBERI_BANER_1; ?> </label><input type="file" name="browsed_file1" id="browsed_file1" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize_baner1();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>
<br />
    
<form id="vpb_file_attachment_baner2" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo IZBERI_BANER_2; ?> </label><input type="file" name="browsed_file2" id="browsed_file2" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize_baner2();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<?php
$editid = $_POST['editid'];

  echo ' <form action="process/procupdatebanner.php" method="post">';

    $sql = mysqli_query($con, "SELECT * FROM brand WHERE id = '$editid'");

    while ($row = mysqli_fetch_array($sql)) {

        echo ' 
    <br />
   
    <div id="vpb_upload_status1"></div>
    <br />
    <div id="vpb_upload_status2"></div>
    <br />

  <div class="form-group">
        <label for="inputNaslov">'. BRAND_NAME.'</label>     
        <input type="text" class="form-control" id="inputNaslov" value="' . $row['brand_name'] . '" name="brand_name">
    </div>
    <br />
    <input type="hidden"  name="editid" value="'.$row['id'].'" />
    <button type="submit" class="btn btn-success">'.SUBMIT.'</button>
';
}


echo '</form>';

 require_once 'footer.php'; ?>



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