<!-- // 要如何加一個問題就增加一個表？？？？？

// echo"666";
// 裡面要用單引號
// $vote=all('topics');
// $topic=array($vote as $key => $value);
// dd($vote);
// find('topic')
// $key=find('topics','1');
// $value=print_r($key);
// dd($key);

// $key = find('topics', '1');
// $value = print_r($key['topic']);

$div= -->

<!-- $k = find('topics', '1'); -->
<!-- $title = print_r($key['topic']); -->


<? 

$subject= all('topics');
echo"<ol>";
foreach($subject as $key => $value){
//     echo "<il>";
//     echo "<a href='index.php?do=vote&id={$value['id']}'>";
//     echo $value['topic'];
//     echo "</a>";
//     echo "</li>";  
// echo"<ol>";                             
?>

    <!-- 問題一   -->
    <div class="row ">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/IMG_9232.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?echo $value['topic'];?>
                </h5>
                <p class="card-text">77777</p>
                <a href="index.php?do=vote&id=<?echo $value['id'];?>"><input class="btn btn-info" type="button"
                        value="投票"></input></a>
                <a href="index.php?do=vote_result&id=<?echo $value['id'];?>"><input class="btn btn-info" type="button"
                        value="看結果"></input></a>
            </div>
        </div>
    </div>


</div>

<?php

}  
?>