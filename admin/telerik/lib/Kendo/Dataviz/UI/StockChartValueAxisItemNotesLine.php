<?php

namespace Kendo\Dataviz\UI;

class StockChartValueAxisItemNotesLine extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The line width of the notes.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartValueAxisItemNotesLine
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * The line color of the notes.
    * @param string $value
    * @return \Kendo\Dataviz\UI\StockChartValueAxisItemNotesLine
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The length of the connecting lines in pixels.
    * @param float $value
    * @return \Kendo\Dataviz\UI\StockChartValueAxisItemNotesLine
    */
    public function length($value) {
        return $this->setProperty('length', $value);
    }

//<< Properties
}

?>
