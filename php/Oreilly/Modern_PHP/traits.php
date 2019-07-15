<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月11日 下午1:54:27
 * @link      git@github.com:yuanmingtao/l1.git
 */

#bad reaction
// class Geocodable
// {
//     function latitude()
//     {
//         return "latitude" . PHP_EOL;
//     }
    
//     function longitude()
//     {
//         return "longitude" . PHP_EOL;
//     }
// }

// class RetailStore extends Geocodable
// {
    
// }

// class Car extends Geocodable
// {
    
// }

#better reaction
#not a DRY solution
// interface Geocodable
// {
//     function latitude();
//     function longitude();
// }

// class RetailStore implements Geocodable
// {
//     /**
//      * {@inheritDoc}
//      * @see Geocodable::latitude()
//      */
//     public function latitude()
//     {
//         // TODO Auto-generated method stub
//         return parent::latitude();
//     }

//     /**
//      * {@inheritDoc}
//      * @see Geocodable::longitude()
//      */
//     public function longitude()
//     {
//         // TODO Auto-generated method stub
//         return parent::longitude();
//     }


// }

// class Car implements Geocodable{
//     /**
//      * {@inheritDoc}
//      * @see Geocodable::latitude()
//      */
//     public function latitude()
//     {
//         // TODO Auto-generated method stub
        
//     }

//     /**
//      * {@inheritDoc}
//      * @see Geocodable::longitude()
//      */
//     public function longitude()
//     {
//         // TODO Auto-generated method stub
        
//     }
// }

#third reaction
#The Geocodable Trait definition
trait Geocodable 
{
    //@var string
    protected $address;
    
    //@var \Geocoder\Geocoder
    protected $geocoder;
    
    //@var \Geocode\Result\Geocoded
    protected $geocoderResult;
    
    public function setGeocoder(GeocoderInterface $geocoder)
    {
        $this->geocoder = $geocoder;
    }
    
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    public function getLatitude()
    {
        if (isset($this->geocoderResult) === false)
        {
            $this->geocodeAddess();
        }
        return $this->geocoderResult->getLatitude();
    }
    
    public function getLongitude()
    {
        if(isset($this->geocoderResult) ===false)
        {
           $this->geocodeAddress();
        }
        return $this->geocoderResult->getLongitude();
    }
    
    protected function geocodeAddress()
    {
        $this->geocoderResult = $this->geocode($this->address);
        return true;
    }    
}

class RetailStore
{
    use Geocodable;
}

$geocoderAdapter = new \Geocoder\HttpAdapter\CurlHttpAdaper();
$geocoderProvider = new \Geocoder\Provider\GoogleMapsProvider($geocoderAdapter);
$geocoder = new \Geocoder\Geocoder($geocoderProvider);

$store = new RetailStore();
$store->setAddress('420 9th Avenue, New York, NY 10001 USA');
$store->setGeocoder($geocoder);

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();
echo $latitude, ":", $longitude;
