
<div class="col-md-9 m-auto ml-3  ">
<h3 class="text-center">圖片列表</h3>
    <!-- <div class="col-3 mt-5">
        <form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">
        
        <div class='custom-file mx-auto d-block mb-2'>
            <label for="upload" class='custom-file-label'>選擇檔案：</label>
            <input class="custom-file-input" type="file" name="name" id="upload">
        </div>
        <div class="mx-auto text-center mt-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
            <input class='form-control' type="text" name="intro" id="intro">
        </div>
        <div class="mx-auto mb-2">
            <input type="submit" value="上傳" class="btn btn-primary">
        </div>
    </form>  -->
    
    <table class="table ml-5 m-auto  " style="width: 600px;">
        <div class="col-">
    <!-- <h3 class="text-center col-">圖片列表</h3> -->

       
     <tr>
        <td>圖片</td>
        <td>名稱</td>
        <td>說明</td>
        <td>管理</td>
        
     </tr>

    <tr>
   <?php 
   $rows=all('ad');
   foreach($rows as $row){
   echo "<tr>";
   echo "<td>";
   echo "<img src='../img/{$row['name']}' style='width:100px;height:100px'>";
   echo "</td>";
   echo "<td>{$row['name']}</td>";
   echo "<td>{$row['intro']}</td>";
   echo "<td>";
   
   echo "<a class='btn btn-danger ml-2' href='?do=edit_ad&id={$row['id']}'>修改</a>";
    // echo "<button>重新上傳</button>";
    echo "<a class='btn btn-danger ml-2' href='../api/del_ad.php?id={$row['id']}'>刪除</a>";
    "</td>";
   echo "</tr>";
   }
?>
</table>

</div>
</div>