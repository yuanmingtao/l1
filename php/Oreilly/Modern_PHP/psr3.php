<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月17日 下午5:16:10
 * @link      git@github.com:yuanmingtao/l1.git
 */
/*PSR-3:记录器接口    记录不同重要程度的信息至输出
 monolog/monolog

 Write a PSR-3 Logger
 --------------------------------
 */
namespace Psr\Log;

interface LoggerInterface
{
    public function emergency($message, array $context = array());
    public function alert($message, array $context = array());
    public function critical($message, array $context = array());
    public function error($message, array $context = array());
    public function warning($message, array $context = array());
    public function notice($message, array $context = array());
    public function info($message, array $context = array());
    public function debug($message, array $context = array());
    public function log($level, $message, array $context = array());
}