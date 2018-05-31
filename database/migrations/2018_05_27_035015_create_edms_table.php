<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('developer');
            $table->date('date');
            $table->string('client');
            $table->string('job_number');
            $table->string('task_name');
            $table->date('due_date');
            $table->double('time_allocated', 8, 5);
            $table->double('time_spent', 8, 5);
            $table->bigInteger('revisions');
            $table->double('additional_time', 8, 5);
            $table->date('completed_date');
            $table->enum('check_psd', ['yes', 'no', 'na']);
            $table->longText('check_psd_comment')->nullable();
            $table->enum('check_desktop', ['yes', 'no', 'na']);
            $table->longText('check_desktop_comment')->nullable();
            $table->enum('check_mobile', ['yes', 'no', 'na']);
            $table->longText('check_mobile_comment')->nullable();
            $table->enum('spam_test_score', ['yes', 'no', 'na']);
            $table->longText('spam_test_score_comment')->nullable();
            $table->enum('all_links_added', ['yes', 'no', 'na']);
            $table->longText('all_links_added_comment')->nullable();
            $table->enum('utm_tags_added', ['yes', 'no', 'na']);
            $table->longText('utm_tags_added_comment')->nullable();
            $table->enum('unsubscribe_link_added', ['yes', 'no', 'na']);
            $table->longText('unsubscribe_link_added_comment')->nullable();
            $table->enum('notes_in_brief_completed', ['yes', 'no', 'na']);
            $table->longText('notes_in_brief_completed_comment')->nullable();
            $table->enum('job_complete', ['yes', 'no', 'na']);
            $table->longText('job_complete_comment')->nullable();
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
        Schema::dropIfExists('edms');
    }
}
