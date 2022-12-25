    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik_tanah', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('pekerjaan');
            $table->string('umur');
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Katolik', 'Konghucu']);
            $table->string('alamat');
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
        Schema::dropIfExists('pemilik_tanah');
    }
};
