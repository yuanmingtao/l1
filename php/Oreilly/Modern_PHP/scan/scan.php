<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月19日 上午10:58:02
 * @link      git@github.com:yuanmingtao/l1.git
 */
// 1. Use Composer autoloader
require '../../../../vendor/autoload.php';

// 2. Instantiate Guzze HTTP Client
$client = new \GuzzleHttp\Client();

// 3. Open and iterate CSV;
// $csv = new \League\Csv\Reader($argv[1]);
$csv = \League\Csv\Reader::createFromPath($argv[1]);

foreach ($csv as $csvRow) {
    try {
        // 4. Send HTTP OPTIONS request
        $httpResponse = $client->options($csvRow[0]);
        
        // 5. Inspect HTTP Response status code
        if ($httpResponse->getStatusCode >= 200) {
            throw new \Exception();
        }
    } catch (\Exception $e) {
        // 6. Send bad URLs to standard out
        echo $csvRow[0] . PHP_EOL;
    }
}