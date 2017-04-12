<?php

namespace AppBundle\Entity;
use Illuminate\Database\Eloquent\Model;
//include '../database.php';

class Cell extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function row()
    {
        return $this->belongsTo('Entity\Board');
    }
}
