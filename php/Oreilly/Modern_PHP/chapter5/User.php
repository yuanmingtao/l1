<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月25日 上午11:10:15
 * @link      git@github.com:yuanmingtao/l1.git
 */
class User
{
    public $email;
    public $password_hash;
    public function __construct($email, $hash)
    {
        $this->email = $email;
        $this->password_hash = $hash;
    }
    public function save()
    {
        echo "email:" . $this->email . PHP_EOL;
        echo "hash_password:" . $this->password_hash . PHP_EOL;
    }

    public static function findByEmail($email)
    {
        $default_hash = '$2y$12$RC9S/LY1jpC9lW8jePeFjO6iRwTIwldBC192VPEHrPIxvPqL.wvlu';
        return new self($email, $default_hash);
    }
}