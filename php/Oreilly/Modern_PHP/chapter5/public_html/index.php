<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月25日 下午4:40:03
 * @link      git@github.com:yuanmingtao/l1.git
 */
$settings = include('../settings.php');
try {
    $pdo = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=%s',
          $settings['host'],
          $settings['dname'],
          $settings['port'],
          $settings['charset']
        ),
        $settings['username'],
        $settings['password']
     );
    
//     $sql = "select id FROM users WHERE email =:email";
    $sql = "select email FROM user WHERE id =:id";
    //PDOStatement
    $statement = $pdo->prepare($sql);
//     $email = filter_input(INPUT_GET, 'email');
//     $statement->bindValue(':email', $email);
    $userId = filter_input(INPUT_GET, 'id');
    $statement->bindValue(':id', $userId, PDO::PARAM_INT);
    $statement->execute();
    
    while($result  = $statement->fetchColumn(0))
        var_dump($result);
    exit;

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($results as $result)
        echo $result['email'] . PHP_EOL;
    exit;

    while (($result = $statement->fetch(PDO::FETCH_OBJ)) !== false) {
        var_dump($result->email);
    }
} catch (PDOException $e) {
    //Database connection failed
    echo "Database connection failed";
    echo $e->getMessage();
    exit;
}