<?php
//入力フォームの型
public function up()
{
    Schema::create('entry_info', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('name_kana');
        $table->string('birthday');
        $table->integer('sex')->nullable();
        $table->string('zip')->nullable();
        $table->string('prefecture')->nullable();
        $table->string('address1')->nullable();
        $table->string('address2')->nullable();
        $table->integer('phone_number');
        $table->string('email');
        $table->integer('occupation');

        $table->string('school');
        $table->string('faculty');
        $table->string('guraduatded_date');
        $table->string('qualification',1000)->nullable();

        $table->string('comment',2000)->nullable();
        $table->timestamps();
    });
}
?>

//これでmigrationファイル
//entry_infoテーブル作成してカラムとデータ型を指定する
