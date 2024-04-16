<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Of_tab extends Model
{
    public function index()
    {
        $of_tab = new Of_tab();
        $ids = $of_tab->getId();

        dd($ids);  // Debugging code

        return view('welcome', ['ids' => $ids]);
    }

    use HasFactory;

    protected $table = 'of_tab';

    protected $fillable =
        [ 'uuid','object_form_id','label','type','disable','order',
            'created_at','updated_at','code','view_permission_id','edit_permission_id'];

    public $timestamps = true;

    public function getType() {
        $types = DB::table('of_tab')->pluck('type');
        return $types;
    }
}