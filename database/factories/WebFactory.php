<?php

use Faker\Generator as Faker;

$factory->define(App\Web::class, function (Faker $faker) {
    return [
        'developer' => $faker->name,
        'projectName' => $faker->word,
        'projectNumber' => $faker->randomNumber,
        'commencementDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'competitionDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'timeAllocated' => $faker->randomDigit,
        'timeSpent' => $faker->randomDigit,
        'additionalTime' => $faker->randomDigit,
        //seo
        'h1TagsPerPage' => $faker->randomElement($array = array ('yes','no','na')),
        'brokenLinks' => $faker->randomElement($array = array ('yes','no','na')),
        'imageOptimisation' => $faker->randomElement($array = array ('yes','no','na')),
        'insightsOptimisation' => $faker->randomElement($array = array ('yes','no','na')),
        'phoneNumbers' => $faker->randomElement($array = array ('yes','no','na')),
        'SEF_URLs' => $faker->randomElement($array = array ('yes','no','na')),
        'canonical_URLs' => $faker->randomElement($array = array ('yes','no','na')),
        'custom_404' => $faker->randomElement($array = array ('yes','no','na')),
        'image_ALT_tags' => $faker->randomElement($array = array ('yes','no','na')),
        'SEOTransferMatrix' => $faker->randomElement($array = array ('yes','no','na')),

        //testing
        'checkUniqueThankyou' => $faker->randomElement($array = array ('yes','no')),
        'checkUniqueThankyouComment' => $faker->text,
        'personaliseContactFormNotification' => $faker->randomElement($array = array ('yes','no')),
        'personaliseContactFormNotificationComment' => $faker->text,
        'socialMediaLinks' => $faker->randomElement($array = array ('yes','no')),
        'socialMediaLinksComment' => $faker->text,
        'contentUpload' => $faker->randomElement($array = array ('yes','no')),
        'contentUploadComment' => $faker->text,
        'crossBrowserTesing' => $faker->randomElement($array = array ('yes','no')),
        'crossBrowserTesingComment' => $faker->text,
        'W3C_Validation' => $faker->randomElement($array = array ('yes','no')),
        'W3C_ValidationComment' => $faker->text,
        'review' => $faker->randomElement($array = array ('yes','no')),
        'reviewComment' => $faker->text,
        'contactFormSubmission' => $faker->randomElement($array = array ('yes','no')),
        'contactFormSubmissionComment' => $faker->text,
        'formValidation' => $faker->randomElement($array = array ('yes','no')),
        'formValidationComment' => $faker->text,
        'internalLinks' => $faker->randomElement($array = array ('yes','no')),
        'internalLinksComment' => $faker->text,
        'captcha' => $faker->randomElement($array = array ('yes','no')),
        'captchaComment' => $faker->text,
        'favicon' => $faker->randomElement($array = array ('yes','no')),
        'faviconComment' => $faker->text,
        'peerReview' => $faker->randomElement($array = array ('yes','no')),
        'peerReviewComment' => $faker->text,
        //go live
        'watchful_li' => $faker->numberBetween($min = 1, $max = 100),
        'pingdom' => $faker->numberBetween($min = 1, $max = 100),
        'GTM_Tracking' => $faker->numberBetween($min = 1, $max = 100),
        //manage feedback
        'planning' => $faker->randomElement($array = array ('excellent','good', 'Improvement Needed')),
        'communication' => $faker->randomElement($array = array ('excellent','good', 'Improvement Needed')),
        'timeframe' => $faker->randomElement($array = array ('excellent','good', 'Improvement Needed')),
        'testing' => $faker->randomElement($array = array ('excellent','good', 'Improvement Needed')),
        'quality' => $faker->randomElement($array = array ('excellent','good', 'Improvement Needed')),
    ];
});
