<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customers;
use App\Models\Events;
use App\Models\CatSittingServices;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cat_sittings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customers::class);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('total_days');
            $table->integer('frequency');
            $table->integer('total_cats');
            $table->double('price', 3, 2)->default(0.00);
            $table->double('mileage', 3, 2)->default(0);
            $table->integer('cage_uncage');
            $table->foreignIdFor(Events::class);
            $table->foreignIdFor(CatSittingServices::class);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_sittings');
    }
};
