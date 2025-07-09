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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('brand',100)->nullable();
            $table->string('email',100);
            $table->string('phone_number',15)->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('regency_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->text('address')->nullable();
            $table->enum('type',['dagang','jasa'])->index();
            $table->boolean('active')->nullable();
            $table->string('logo',200)->nullable();
            $table->decimal('lat',10,8)->nullable();
            $table->decimal('lng',11,8)->nullable();
            $table->boolean('offers_delivery')->default(0);
            $table->time('delivery_start')->nullable();
            $table->time('delivery_end')->nullable();
            $table->text('delivery_note')->nullable();
            $table->boolean('has_storefront')->default(0);
            $table->time('open_start')->nullable();
            $table->time('open_end')->nullable();
            $table->date('expired_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
