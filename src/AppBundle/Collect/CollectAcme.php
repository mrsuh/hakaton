<?php

namespace AppBundle\Parser\Source;

use AppBundle\Client\Http;
use Doctrine\ORM\EntityManager;

class CollectAcme
{
    private $http_client;

    public function __construct(EntityManager $em, Http $http_client)
    {
        $this->em = $em;
        $this->http_client = $http_client;
    }

    public function collect()
    {

    }
}
