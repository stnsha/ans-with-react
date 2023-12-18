<?php

use App\Models\CatSitting;
use App\Models\Customers;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customers::class);
            $table->foreignIdFor(CatSitting::class);
            $table->double('subtotal', 3, 2,)->default(0.00);
            $table->double('total_payment', 3, 2,)->default(0.00);
            $table->integer('payment_method');
            $table->boolean('payment_status')->default(false);
            $table->double('discount', 3, 2)->default(0.00);
            $table->double('tips', 3, 2)->default(0.00);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
