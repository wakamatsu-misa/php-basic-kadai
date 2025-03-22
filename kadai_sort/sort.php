<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        $nums = [15, 4, 18, 23, 10 ];
         
        function sort_2way($array,$oder){
            if($oder){
                echo '昇順でソートします<br>';
                sort($array);
            }else{
                echo '降順でソートします<br>';
                rsort($array);
            }
        foreach($array as $text){
            echo $text.'<br>';
        }

        }
        sort_2way($nums,TRUE);

        sort_2way($nums,FALSE);

        ?>
    </p>
 
</body>

</html>
