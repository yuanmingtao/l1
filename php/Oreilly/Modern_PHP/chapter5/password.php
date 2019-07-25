<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月24日 下午1:06:25
 * @link      git@github.com:yuanmingtao/l1.git
 */

#bcrypt 散列算法
#work factor 循环hash

#User registration
// POST /register. php HTTP/1. 1
// Content-Length:  43
// Content-Type:  application/x-www-form-urlencoded
// email=john@example. com&password=sekritshhh!
require 'autoload.php';
try {
    //Validate email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) {
        throw new Exception('Invalid email');
    }
    //Validate password
    $password = filter_input(INPUT_POST, 'password');
    if (!$password || mb_strlen($password) < 8) {
        throw new Exception('Password must contain 8+ characters');
    }
    
    //Create password hash
    $passwordHash = password_hash(
        $password, 
        PASSWORD_DEFAULT,
        ['cost' => 12]
    );
    
    if ($passwordHash == false) {
        throw new Exception('Password hash failed');
    }
    
    //Create user account
    $user = new User();
    $user->email = $email;
    $user->password_hash = $passwordHash;
    $user->save();
    
    //Redirect to login page
//     header('HTTP/1.1 302 Redirect');
//     header('Location: login.php');
} catch (Exception $e) {
    //Report Error
    header('http/1.1 400 Bad Request');
    echo $e->getMessage();
}