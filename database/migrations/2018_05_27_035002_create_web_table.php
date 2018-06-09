<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web', function (Blueprint $table) {
            $table->increments('id');
            //project Schedule
            $table->string('developer');
            $table->string('projectName');
            $table->string('projectNumber');
            $table->date('commencementDate');
            $table->date('competitionDate')->nullable();
            $table->double('timeAllocated', 8, 5)->nullable();
            $table->double('timeSpent', 8, 5)->nullable();
            $table->double('additionalTime', 8, 5)->nullable();
            $table->double('additionalTime1', 8, 5)->nullable();
            $table->double('additionalTime2', 8, 5)->nullable();
            $table->double('additionalTime3', 8, 5)->nullable();
            $table->double('additionalTime4', 8, 5)->nullable();
            $table->double('additionalTime5', 8, 5)->nullable();
            $table->double('additionalTime6', 8, 5)->nullable();
            $table->double('additionalTime7', 8, 5)->nullable();
            $table->double('additionalTime8', 8, 5)->nullable();
            $table->double('additionalTime9', 8, 5)->nullable();

            //seo
            $table->longText('h1TagsPerPage')->nullable();
            $table->longText('brokenLinks')->nullable();
            $table->longText('imageOptimisation')->nullable();
            $table->longText('insightsOptimisation')->nullable();
            $table->longText('phoneNumbers')->nullable();
            $table->longText('SEF_URLs')->nullable();
            $table->longText('canonical_URLs')->nullable();
            $table->longText('custom_404')->nullable();
            $table->longText('image_ALT_tags')->nullable();
            $table->longText('SEOTransferMatrix')->nullable();

            //testing
            $table->enum('checkUniqueThankyou', ['yes', 'no'])->nullable();
            $table->longText('checkUniqueThankyouComment')->nullable();
            $table->enum('personaliseContactFormNotification', ['yes', 'no'])->nullable();
            $table->longText('personaliseContactFormNotificationComment')->nullable();
            $table->enum('socialMediaLinks', ['yes', 'no'])->nullable();
            $table->longText('socialMediaLinksComment')->nullable();
            $table->enum('contentUpload', ['yes', 'no'])->nullable();
            $table->longText('contentUploadComment')->nullable();
            $table->enum('crossBrowserTesing', ['yes', 'no'])->nullable();
            $table->longText('crossBrowserTesingComment')->nullable();
            $table->enum('W3C_Validation', ['yes', 'no'])->nullable();
            $table->longText('W3C_ValidationComment')->nullable();
            $table->enum('review', ['yes', 'no'])->nullable();
            $table->longText('reviewComment')->nullable();
            $table->enum('contactFormSubmission', ['yes', 'no'])->nullable();
            $table->longText('contactFormSubmissionComment')->nullable();
            $table->enum('formValidation', ['yes', 'no'])->nullable();
            $table->longText('formValidationComment')->nullable();
            $table->enum('internalLinks', ['yes', 'no'])->nullable();
            $table->longText('internalLinksComment')->nullable();
            $table->enum('captcha', ['yes', 'no'])->nullable();
            $table->longText('captchaComment')->nullable();
            $table->enum('favicon', ['yes', 'no'])->nullable();
            $table->longText('faviconComment')->nullable();
            $table->enum('peerReview', ['yes', 'no'])->nullable();
            $table->longText('peerReviewComment')->nullable();

            //Manager Feedback
            $table->enum('planning', ['excellent', 'good', 'Improvement Needed'])->nullable();
            $table->enum('communication', ['excellent', 'good', 'Improvement Needed'])->nullable();
            $table->enum('timeframe', ['excellent', 'good', 'Improvement Needed'])->nullable();
            $table->enum('testing', ['excellent', 'good', 'Improvement Needed'])->nullable();
            $table->enum('quality', ['excellent', 'good', 'Improvement Needed'])->nullable();
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
        Schema::dropIfExists('web');
    }
}
