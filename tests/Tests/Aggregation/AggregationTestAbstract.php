<?php

namespace Tests\Aggregation;

use IgraalOSL\StatsTable\StatsTableBuilder;
use PHPUnit\Framework\TestCase;

class AggregationTestAbstract extends TestCase
{
    /**
     * @return StatsTableBuilder
     */
    protected function getSampleTable()
    {
        $table = [
            '2014-01-01' => ['hits' => 10, 'subscribers' => 5],
            '2014-01-02' => ['hits' => 30, 'subscribers' => 8],
        ];

        return new StatsTableBuilder($table);
    }
}
