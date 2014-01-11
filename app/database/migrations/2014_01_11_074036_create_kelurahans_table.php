<?php

/**
 *
 * ====================================
 * Aplikasi Persentase Kekuatan Wilayah
 * ====================================
 * @author Novay Mawbowo ('novay@otaku.si')
 * 
 */

use Illuminate\Database\Migrations\Migration;

class CreateKelurahansTable extends Migration {    

	public function up()
    {
		Schema::create('kelurahan', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->integer('id_kecamatan');
			$table->integer('id_kabupaten');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('kelurahan');

    }

}