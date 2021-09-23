<?php


namespace whereof\cloudPrint\Kernel\Support;


/**
 * Class Timer
 * @package whereof\cloudPrint\Kernel\Support
 */
class Timer
{
    /**
     * @return int
     */
    public static function timeStamp()
    {
        return time();
    }
}