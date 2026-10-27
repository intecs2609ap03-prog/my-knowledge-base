<?php

/*[accountテーブルの構成]
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| id     | int(11)      | NO   | PRI | NULL    | auto_increment |
| name   | varchar(255) | NO   |     | NULL    |                |
| age    | int(11)      | NO   |     | NULL    |                |
| gender | varchar(255) | NO   |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+

CREATE TABLE account(
    id INT AUTO_INCREMENT, 
    name VARCHAR(255) NOT NULL, 
    age INT NOT NULL, 
    gender VARCHAR(255) NOT NULL, 

    PRIMARY KEY(id)
);
*/

$connectionString = "mysql:host=localhost;dbname=bulletin_board;charset=utf8";
$userName = "root";
$password = "";

$pdo = new PDO($connectionString, $userName, $password);

$stmt = $pdo->prepare("INSERT INTO account (name, age, gender) VALUES (:name, :age, :gender)");

echo "名前を入力してください。\n";
$name = fgets(STDIN);
$stmt->bindValue(':name', $name);

echo "年齢を入力してください。\n";
$age = fgets(STDIN);
$stmt->bindValue(':age', $age);

echo "性別を入力してください\n";
$gender = fgets(STDIN);
$stmt->bindValue(':gender', $gender);

$result = $stmt->execute();
echo $result ? "更新成功" : "更新失敗";

$stmt = $pdo->query("SELECT * FROM account"); 
while($row = $stmt->fetch()) {
    echo "名前:" . $row['name'] . " 年齢:" . $row['age'] . "性別:" . $row['gender'] . "\n";
}

/*
    安全なselectはquery, フォームからのselectはprepare
    安全なinsert/delete/updateはexec, フォームからのinsert/delete/updateはprepare
*/