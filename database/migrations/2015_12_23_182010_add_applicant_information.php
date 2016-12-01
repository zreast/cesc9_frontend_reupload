<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicantInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('prefix', 30);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname', 20);
            $table->smallInteger('gender');
            $table->string('email', 30);
            $table->string('id_card', 13);
            $table->timestamp('birthday');
            $table->string('address', 512);
            $table->string('province');
            $table->string('post_code', 5);
            $table->string('tel', 10);
            $table->string('tel_carries');
            $table->string('tel_home', 10);
            $table->string('facebook', 60);
            $table->smallInteger('class');
            $table->string('school');
            $table->string('school_province');
            $table->string('department');
            $table->float('GPA');
            $table->string('religion');
            $table->string('blood');
            $table->string('congenital_disease');
            $table->string('allergic');
            $table->string('allergic_drug');
            $table->string('allergic_food');
            $table->string('not_eat');
            $table->text('talent');
            $table->string('parent');
            $table->string('parent_relationship');
            $table->string('parent_tel');
            $table->string('team'); // Robot or Network
            $table->string('past_camp_1');
            $table->string('past_camp_place_1');
            $table->string('past_camp_2');
            $table->string('past_camp_place_2');
            $table->string('past_camp_3');
            $table->string('past_camp_place_3');
            $table->string('ref_camp'); // ads, camp-site
            $table->smallInteger('status')->default(0); // 0, 1, 2 ,3
            $table->string('pic');
            $table->string('document');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
    }
}
