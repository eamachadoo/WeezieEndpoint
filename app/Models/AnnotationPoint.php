<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnotationPoint extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;

    public function __construct(array $attributes = [], string $table = null)
    {
        parent::__construct($attributes);

        if ($table) {
            $this->table = $table;
        } 
    }
}
