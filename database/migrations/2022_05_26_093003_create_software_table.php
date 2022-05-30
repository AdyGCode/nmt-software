<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('ERROR: No title given');
            $table->string('filename')->default('ERROR: No filename given');
            $table->string('file_extension',16)->default('unknown')->nullable();
            $table->string('mime_type')->default('unknown/unknown');
            $table->string('description')->nullable();
            $table->string('version')->nullable();
            $table->unsignedBigInteger('file_size')->default(0);
            $table->uuid('uuid')->nullable();
            $table->unsignedInteger('downloads')->nullable();
            $table->boolean('members_only')->default(true);
            $table->dateTime('expires')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
};
