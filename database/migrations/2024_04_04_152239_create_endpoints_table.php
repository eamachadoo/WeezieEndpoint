<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('endpoints', function (Blueprint $table) {
            $table->id(); // id column
            $table->uuid('uuid'); // uuid column
            $table->foreignId('object_form_id')->constrained('of_object_form'); // object_form_id foreign key
            $table->string('label', 254); // label column
            $table->string('type', 254); // type column
            $table->boolean('disable'); // disable column
            $table->integer('order'); // order column
            $table->timestamps(); // created_at and updated_at columns
            $table->timestamp('deleted_at')->nullable(); // deleted_at column
            $table->string('code', 255); // code column
            $table->foreignId('view_permission_id')->constrained('acl_permissions'); // view_permission_id foreign key
            $table->foreignId('edit_permission_id')->constrained('acl_permissions'); // edit_permission_id foreign key
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endpoints');
    }
};
