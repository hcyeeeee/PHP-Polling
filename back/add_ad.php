<h2 class="text-center font-weight-bold">上傳圖片</h2>
<?php
$ad=insert('ad',$_GET['name']);


?>
<div class="col-md-3 m-auto">
    <img src="../img/<?=$ad['name'];?>" style='width:250px;border:3px solid black'>
<form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">
<br>
    <div class='custom-file mx-auto d-block mb-2'>
        <label for="upload" class='custom-file-label'><?=$ad['name'];?></label>
        <input class="custom-file-input" type="file" name="name" id="upload">
    </div>
    <div class="mx-auto text-center mt-2 input-group mb-2">
        <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
        <input class='form-control' type="text" name="intro" id="intro" value="<?=$ad['intro'];?>">
    </div>
    <div class="mx-auto mb-2">
        <input type="hidden" name="id" value="<?=$ad['id'];?>">
        <input type="submit" value="上傳" class="btn btn-primary">
    </div>
</form>
</div>