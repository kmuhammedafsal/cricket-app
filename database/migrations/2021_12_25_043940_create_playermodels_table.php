<?php
use App\Models\playermodel;
use App\Http\Controllers\cricketcontroller;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playermodels', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->String('pcountry');
            $table->string('ptop');
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
        Schema::dropIfExists('playermodels');
    }
}
