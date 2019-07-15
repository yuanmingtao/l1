<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月11日 上午11:09:19
 * @link      git@github.com:yuanmingtao/l1.git
 */

interface  Documentable 
{
    public function getId();
    public function getContent();
}

class DocumentStore
{
    protected $data = [];
    
    public function addDocument(Documentable $document)
    {
        $key = $document->getId();
        $value = $document->getContent();
        $this->data[$key] = $value;
    }
    
    public function getDocuments()
    {
        return $this->data;
    }
}


class HtmlDocument implements Documentable
{
    protected $url;
    
    public function __construct($url)
    {
        $this->url = $url;
    }
    
    public function getId()
    {
       return $this->url;        
    }

    public function getContent()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $html = curl_exec($ch);
        curl_close($ch);
        
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, 'https://www.baidu.com');
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        // curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0');
        // curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0);
        // curl_setopt($curl, CURLOPT_AUTOREFERER, 0);
        // curl_setopt($curl, CURLOPT_HTTPGET, 0);
        // curl_setopt($curl, CURLOPT_COOKIEFILE, $this->_cookie); // 如果是需要登陆才能采集的话,需要加上你登陆后得到的cookie文件
        // curl_setopt($curl, CURLOPT_TIMEOUT, 0); // 设置超时限制防止死循环
        // curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0); // 在发起连接前等待的时间，如果设置为0，则无限等待。
        // curl_setopt($curl, CURLOPT_CONNECTTIMEOUT_MS, 0); // 尝试连接等待的时间，以毫秒为单位。如果设置为0，则无限等待。
        // curl_setopt($curl, CURLOPT_HEADER, 0);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // $tmpInfo = curl_exec($curl);
        // var_dump($tmpInfo); 
        // exit;

        // $html = file_get_contents($this->url);
        return  $html;
    }
}

class StreamDocument implements Documentable
{
    protected $resource;
    protected $buffer;
    
    public function __construct($resource, $buffer = 4096)
    {
        $this->resource = $resource;
        $this->buffer = $buffer;
    }
    
    public function getId()
    {
        return 'resource-' . (int)$this->resource;
    }

    public function getContent()
    {
        $streamContent = '';
        rewind($this->resource);
        while(feof($this->resource) === false)
        {
            $streamContent .= fread($this->resource, $this->buffer);
        }
        return $streamContent;
    }
}

class CommandOutputDocument implements Documentable
{
    protected  $command;
    
    public function __construct($command)
    {
        $this->command = $command;
    }
    
    public function getId()
    {
        return $this->command;
    }

    public function getContent()
    {
        return exec($this->command);
    }
}

$documentStore = new DocumentStore();

//ADD HTML document
$htmlDoc = new HtmlDocument("https://www.baidu.com");
$documentStore->addDocument($htmlDoc);

//ADD stream document
$streamDoc = new StreamDocument(fopen('stream.txt', 'rb'));
$documentStore->addDocument($streamDoc);

//ADD terminal command document
$cmdDoc = new CommandOutputDocument('dir');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());