<?php

namespace IgraalOSL\StatsTable\Aggregation;

use IgraalOSL\StatsTable\Dumper\FormatInterface;
use IgraalOSL\StatsTable\StatsTableBuilder;

/**
 * Class AverageAggregation
 * Returns the average value of a column
 */
class AverageAggregation implements AggregationInterface
{
    private $columnName;
    private $format;

    public function __construct($columnName, $format = FormatInterface::INTEGER)
    {
        $this->columnName = $columnName;
        $this->format = $format;
    }

    public function aggregate(StatsTableBuilder $statsTable)
    {
        $column = array_column($statsTable->getColumn($this->columnName)->getValues(), $this->columnName);
        $sum = array_sum($column);
        $count = count($column);

        return $count ? $sum / $count : 0;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
}