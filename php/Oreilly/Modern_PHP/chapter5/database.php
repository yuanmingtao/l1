<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月25日 下午3:26:13
 * @link      git@github.com:yuanmingtao/l1.git
 */
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=books;port=3306;charset=utf8',
        'root',
        'Li42uf03'
    );
} catch (PDOException $e) {
    //Database connection failed
    echo "Database connection failed";
    echo $e->getMessage();
    exit;
}