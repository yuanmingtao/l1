<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月25日 下午1:53:12
 * @link      git@github.com:yuanmingtao/l1.git
 */
//Dates, Times, and Time Zones
// date_default_timezone_set('Asia/Shanghai');
// $datetime = new DateTime();
//Create Datetime instance
// $datetime = new DateTime('2014-01-01 14:00:00');
// $datetime = DateTime::createFromFormat('M j, Y H:i:s', 'Jan 2, 2014 23:04:12');

//Create two weeks interval
// $interval = new DateInterval('P2W');

//Modify Datetime instance
// $datetime->add($interval);
// echo $datetime->format('Y-m-d H:i:s');

//inverted DateInterval class

$dateStart = new DateTime();
// $dateInterval = DateInterval::createFromDateString('-1 day');
$dateInterval = new DateInterval('P2W');
$datePeriod = new DatePeriod(
    $dateStart, 
    $dateInterval, 
    3,
    DatePeriod::EXCLUDE_START_DATE
);

foreach ($datePeriod as $date) {
    echo $date->format('Y-m-d H:i:s'), PHP_EOL;
}


// $timezone = new DateTimeZone('Asia/Shanghai');
// $datetime = new DateTime('2014-08-20', $timezone);
// $datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong'));
// var_dump($datetime);


