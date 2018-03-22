<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <h2>Handling your data</h2>
    <?php
        if(isset($_POST['html1'])){
            echo $html1 = $_POST['html1'];
        }
        elseif(isset($_POST['html2'])){
            echo $html2 = $_POST['html2'];
        }
    ?>
</body>
</html>
</html>