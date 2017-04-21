<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

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
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}