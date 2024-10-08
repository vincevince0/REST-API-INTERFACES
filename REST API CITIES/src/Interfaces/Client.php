<?php
namespace App\RestApiClient;

use App\Interfaces\ClientInterface;
use Exception;

class Client implements ClassInterface {

    const API_URL = 'http://localhost:8000';
    /**
     * @var string
     */
    protected $url;

    function __construct($url = self::API_URL)
    {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }
}
