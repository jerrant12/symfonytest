<?php

namespace AppBundle\Entity;
//use AppBundle\Entity\Cell;
use Illuminate\Database\Eloquent\Model;
//include '../database.php';

class Row extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function cells()
    {
        return $this->hasMany('AppBundle\Entity\Cell');
    }

    public function getCellsArray()
    {
        $cells =  $this->cells;
        return $cells;
    }
}
