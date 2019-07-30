<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月30日 上午9:30:14
 * @link      git@github.com:yuanmingtao/l1.git
 */
$settings = require_once('../settings.php');

//PDO Connnection
try {
    $pdo = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $settings['host'],
            $settings['dname'],
            $settings['port'],
            $settings['charset']
            ),
        $settings['username'],
        $settings['password']
        );
} catch (PDOException $e) {
    //Database connect failed
    echo "Database connection failed";
    exit;
}

//Statements
$stmtSubtract = $pdo->prepare(
    'UPDATE accounts
     SET amount = amount - :amount
     WHERE name = :name
');

$stmtAdd = $pdo->prepare('
    UPDATE accounts
    SET amount = amount + :amount
    WHERE name = :name
');

//Start transaction
$pdo->beginTransaction();
//Withdraw funds from account 1
$fromAccount = "Checking";
$withdrawl = 50;
$stmtSubtract->bindParam(':name', $fromAccount);
$stmtSubtract->bindParam(':amount', $withdrawl, PDO::PARAM_INT);
$stmtSubtract->execute();

//Deposit funds into account 2
$toAccount = 'Savings';
$deposit = 50;
$stmtAdd->bindParam(':name', $toAccount);
$stmtAdd->bindParam(':amount', $deposit, PDO::PARAM_INT);
$stmtAdd->execute();

//Commit transaction
$pdo->commit();