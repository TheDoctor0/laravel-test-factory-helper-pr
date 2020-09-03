<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSqlite extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'sqlite';
}
