<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月24日 下午5:27:00
 * @link      git@github.com:yuanmingtao/l1.git
 */

require 'autoload.php';
session_start();
try {
    //Get email address from request body
    $email = filter_input(INPUT_POST, 'email');
    
    //Get password from request body
    $password = filter_input(INPUT_POST, 'password');
    
    //Find account with email address (THIS IS PSUEDO-CODE)
    $user = User::findByEmail($email);
    
    //Verify password with account password hash
    if (password_verify($password, $user->password_hash) === false) {
        throw  new Exception('Invalid password');
    }
    
    //Re-hash password if necessary (see note below)
    $currentHashAlogrithm = PASSWORD_DEFAULT;
    $currentHashOptions = array('cost' => 15);
    $passwordNeedsRehash = password_needs_rehash(
        $user->password_hash,
        $currentHashAlogrithm,
        $currentHashOptions
    );
    if ($passwordNeedsRehash === true) {
        //Save new password hash (THIS IS PSUEDO-CODE)
        $user->password_hash = password_hash(
            $password, 
            $currentHashAlogrithm,
            $currentHashOptions
        );
        $user->save();
    }
    
    //Save login status to session
    $_SESSION['user_logged_in'] = 'yes';
    $_SESSION['user_email'] = $email;

    //Redirect to profile page
    header('HTTP/1.1 302 Redirect');
    header('Location:user-profile.php');
} catch (Exception $e) {
    header('HTTP/1.1 401 unauthorized');
    echo $e->getMessage();
}
