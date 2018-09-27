<?php
namespace datastruct;

/**
 *
 * @author Joe.C
 * data struct
 *      
 */
trait base {
    
    /**
     * Return time complexity expression
     * @link http://www.yuanmingtao.com/datastruct/base.o.php
     * @param int $n <p>
     * Defaults to 1.
     * </p>
     * @return string a string show the time expression of alogrithm.
     */
    abstract function o(int $n = 1);
    
    /**
     * Return time of program execution
     * @link http://www.yuanmingtao.com/datastruct/base.t.php
     * @param int $n <p>
     * Defaults to 1.
     * </p>
     * @return int a seconds show the time of alogrithm execute.
     */
    abstract function t(string $f);
    
    /**
     * Return space complexity expression
     * @link http://www.yuanmingtao.com/datastruct/base.s.php
     * @param int $n <p>
     * Defaults to 1.
     * </p>
     * @return string a string show the space expression of alogrithm.
     */
    abstract function s(string $f);
    
    /**
     * Return real memory storage possessed by alogrithm
     * @link http://www.yuanmingtao.com/datastruct/base.sr.php
     * @param string $f <p>
     * </p>
     * @return string a string show the space expression of alogrithm.
     */
    abstract function real_memory(string $f);
}

