<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月30日 下午1:28:54
 * @link      git@github.com:yuanmingtao/l1.git
 */
$dateStart = new \DateTime();
$dateInterval = \DateInterval::createFromDateString('-1 day');
$datePeriod = new \DatePeriod($dateStart, $dateInterval, 30);

$connection = ssh2_connect('192.168.1.110', 22);
ssh2_auth_password($connection, 'root', '1');

$sftp = ssh2_sftp($connection);

// $stream = fopen('ssh2.sftp://' . intval($sftp) . '/path/to/file', 'r');

foreach ($datePeriod as $date) {
    $file = 'ssh2.sftp://' . intval($sftp) . '/' . $date->format('y-m-d') . '.log.bz2';
    fwrite(STDOUT, 'tset');
    if (@file_exists($file)) {
        $handle = @fopen($file, 'rb');
        stream_filter_append($handle, 'bzip2.decompress');
        while (feof($handle) !== true) {
            $line = fgets($handle);
            if (strpos($line, "www.longtone.com") !== false) {
                fwrite(STDOUT, $line);
            }
        }
    }
}