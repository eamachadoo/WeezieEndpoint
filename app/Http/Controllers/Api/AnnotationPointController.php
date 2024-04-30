<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\AnnotationPoint;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class AnnotationPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $table = $request->input('tableName', (new AnnotationPoint)->getTable());

        $query = "
            SELECT
                a.attname AS column_name,
                pg_catalog.format_type(a.atttypid, a.atttypmod) AS data_type,
                CASE WHEN a.attnotnull THEN 'NOT NULL' ELSE '' END AS constraints,
                CASE
                    WHEN contype = 'f' THEN confrelid::regclass::text
                    ELSE NULL
                    END AS referenced_table
            FROM
                pg_catalog.pg_attribute AS a
                JOIN
                pg_catalog.pg_class AS c ON a.attrelid = c.oid
                JOIN
                pg_catalog.pg_namespace AS n ON c.relnamespace = n.oid
                LEFT JOIN
                pg_catalog.pg_constraint AS con ON a.attrelid = con.conrelid AND a.attnum = ANY(con.conkey)
            WHERE
                n.nspname = 'public'
                AND c.relname = :tableName
                AND a.attnum > 0
            ORDER BY
                a.attnum;
        ";

        $tableStructure = DB::select($query, ['tableName' => $table]);

        return new EndpointResource($tableStructure);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $anp_id)
    {
        $annotationPoint = AnnotationPoint::findOrFail($anp_id);
        return new EndpointResource($annotationPoint);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
