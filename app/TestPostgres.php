<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestPostgres extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'pgsql';
}
