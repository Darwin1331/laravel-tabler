
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string('productos', 20);
            $table->decimal('precio', 10, 2);
            $table->string('categoria', 30);
            $table->integer('stock');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
