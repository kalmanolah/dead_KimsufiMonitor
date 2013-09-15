<?php

namespace KalmanOlah\KimsufiMonitor;

class Poller {
    private $app;
    private $ks_target;

    public function __construct(\Silex\Application $app) {
        $this->app = $app;
        $this->ks_target = "http://kimsufi.com/fr/";
    }

    private function getKimsufiResponse()
    {
        $response = file_get_contents($this->ks_target);
        return $response;
    }

    public function getKimsufiAvailability()
    {
        $availability = array("2g" => false, "4g" => false, "16g" => false, "24g" => false);

        $response = $this->getKimsufiResponse();
        preg_match_all('/<td ovhTr:qtlid="36931" class="[a-z\s]*">\n(.*)\n.*<\/td>/', $response, $matches);

        foreach($matches[0] as $key => $match) {
            $availability[array_keys($availability)[$key]] = !preg_match("/Sold out/", $match);
        }

        return $availability;
    }
}