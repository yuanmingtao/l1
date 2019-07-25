<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月25日 上午11:34:40
 * @link      git@github.com:yuanmingtao/l1.git
 */
class MySqlLib
{
    private $mysqli;
    private function connect()
    {
        $this->mysqli = mysqli_connect('127.0.0.1', 'root', 'Li42uf03', 'learm');
    }
    
    public function fetch()
    {
        
    }
    
    public static function insert($email, $password)
    {
        $this->connect();
        $sql = "insert into user(email,password)values('$email', '$password')";
        $result = mysqli_prepare($this->mysqli, $sql);
        mysqli_execute($result);
        $this->close();
    }
    
    public function update()
    {
        
    }
    
    public function select($email)
    {
        $this->connect();
        $sql = "select from user where email = '$email'";
        $result = mysqli_query($this->mysqli, $sql);
        $record = mysqli_fetch_array($result);
        $this->mysqli->close();
    }
    
    private function close()
    {
        $this->mysqli->close();
    }
}