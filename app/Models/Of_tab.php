<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Of_tab extends Model
{
    use HasFactory;

    protected $table = 'of_tab';

    protected $fillable =
        [ 'uuid','object_form_id','label','type','disable','order',
            'created_at','updated_at','code','view_permission_id','edit_permission_id'];

    public $timestamps = true;
}
