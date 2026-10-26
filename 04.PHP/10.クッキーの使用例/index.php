<?php
    // クッキー値読み取り
    $count = $_COOKIE['count'] ?? 0;
    $count++;

    // クッキー値書き込み
    setcookie('count', "{$count}");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        :root {
            --background: #0F172A;
            --text: #F8FAFC;
            --card-background: #20293a83;
        }

        * {
            font-size: 30px;
        }

        html {
            background-color: var(--background);
            color: var(--text);
        }

        .card {
            background-color: var(--background);
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>
        <?php echo $count;?>
    </h1>
</body>
</html>