<?php
use App\Models\countrymodell;
use App\Http\Controllers\cricketcontroller;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountrymodellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countrymodells', function (Blueprint $table) {
            $table->id();
            $table->String("cname");
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
        Schema::dropIfExists('countrymodells');
    }
}
