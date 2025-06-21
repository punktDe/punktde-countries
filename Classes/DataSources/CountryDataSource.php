<?php

/*
 *  (c) 2017 punkt.de GmbH - Karlsruhe, Germany - http://punkt.de
 *  All rights reserved.
 */


namespace PunktDe\Countries\DataSources;

use Neos\ContentRepository\Core\Projection\ContentGraph\Node;
use Neos\Neos\Service\DataSource\AbstractDataSource;
use Neos\Flow\Annotations as Flow;

class CountryDataSource extends AbstractDataSource
{
    static protected $identifier ='punktde-countries-countrydatasource';

    /**
     * @Flow\InjectConfiguration(path = "countries")
     * @var array
     */
    protected $countries;


    public function getData(Node $node = null, array $arguments = [])
    {
        $data = [];

        foreach ($this->countries as $key => $value) {
            $data[$key]['label'] = $value;
        }
        return $data;
    }
}
