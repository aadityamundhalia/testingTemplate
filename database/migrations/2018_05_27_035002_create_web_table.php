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
            $table->date('competitionDate');
            $table->text('timeAllocated', 8, 5);
            $table->double('timeSpent', 8, 5);
            $table->double('additionalTime', 8, 5);

            //seo
            $table->longText('h1TagsPerPage');
            $table->longText('brokenLinks');
            $table->longText('imageOptimisation');
            $table->longText('insightsOptimisation');
            $table->longText('phoneNumbers');
            $table->longText('SEF_URLs');
            $table->longText('canonical_URLs');
            $table->longText('custom_404');
            $table->longText('image_ALT_tags');
            $table->longText('SEOTransferMatrix');

            //testing
            $table->enum('checkUniqueThankyou', ['yes', 'no']);
            $table->longText('checkUniqueThankyouComment')->nullable();
            $table->enum('personaliseContactFormNotification', ['yes', 'no']);
            $table->longText('personaliseContactFormNotificationComment')->nullable();
            $table->enum('socialMediaLinks', ['yes', 'no']);
            $table->longText('socialMediaLinksComment')->nullable();
            $table->enum('contentUpload', ['yes', 'no']);
            $table->longText('contentUploadComment')->nullable();
            $table->enum('crossBrowserTesing', ['yes', 'no']);
            $table->longText('crossBrowserTesingComment')->nullable();
            $table->enum('W3C_Validation', ['yes', 'no']);
            $table->longText('W3C_ValidationComment')->nullable();
            $table->enum('review', ['yes', 'no']);
            $table->longText('reviewComment')->nullable();
            $table->enum('contactFormSubmission', ['yes', 'no']);
            $table->longText('contactFormSubmissionComment')->nullable();
            $table->enum('formValidation', ['yes', 'no']);
            $table->longText('formValidationComment')->nullable();
            $table->enum('internalLinks', ['yes', 'no']);
            $table->longText('internalLinksComment')->nullable();
            $table->enum('captcha', ['yes', 'no']);
            $table->longText('captchaComment')->nullable();
            $table->enum('favicon', ['yes', 'no']);
            $table->longText('faviconComment')->nullable();
            $table->enum('peerReview', ['yes', 'no']);
            $table->longText('peerReviewComment')->nullable();

            //Go Live
            $table->longText('watchful_li');
            $table->longText('pingdom');
            $table->longText('GTM_Tracking');

            //Manager Feedback
            $table->enum('planning', ['excellent', 'good', 'Improvement Needed']);
            $table->enum('communication', ['excellent', 'good', 'Improvement Needed']);
            $table->enum('timeframe', ['excellent', 'good', 'Improvement Needed']);
            $table->enum('testing', ['excellent', 'good', 'Improvement Needed']);
            $table->enum('quality', ['excellent', 'good', 'Improvement Needed']);
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
