<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<br/>
    <h2>tu dien tieng anh-viet</h2>
    <form method="post">
        <input type="text" name="search" placeholder="nhap tu can tim"/>
        <input type="submit" id="submit" value="tim"/>
    </form>
    <?php
    $dictionary = array(
        "hello" => "xin chao",
        "how" => "the nao",
        "book" => "quyen vo",
        "computer" => "may tinh");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if ($word === $searchword) {
                echo "tu : " . $word . ".<br/>nghia cua tu: " . $description;
                echo "<br/>";
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo 'khong tim thay tu can dich';
        }
    }
    ?>
</body>
</html>
