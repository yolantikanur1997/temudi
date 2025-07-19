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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('doc_num');
            $table->unsignedBigInteger('customer_id');
            $table->date('date');
            $table->text('notes')->nullable();
            $table->enum('discount_type',['percentage','amount'])->nullable();
            $table->string('discount_value')->nullable();
            $table->decimal('total_discount',10,2);
            $table->decimal('subtotal_amount',10,2);
            $table->decimal('total_amount',10,2);
            $table->enum('status',['pending','processing','completed','canceled']);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('organization_id');
            $table->bigInteger('no_queue')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
