<?php

namespace AppBundle\Entity;
use Illuminate\Database\Eloquent\Model;


class Board extends Model
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
        $cells =  $this->cells()->orderBy('y_coord','x_coord')->get();
        return $cells;
    }
}
