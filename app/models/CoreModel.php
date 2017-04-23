<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{
    use SoftDeletes;
    public $incrementing = false;

    /**
     * Booting model of the model
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * Method that creates uuid for all Models that extend CoreModel
         * They all require UUID
         */

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });
    }

    public function generateNewId()
    {
        if(isset($this->attributes ['id'])) {
            return $this->attributes['id'];
        }

        return Uuid::uuid4();
    }
}