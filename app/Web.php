<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    protected $table = 'web';
    //protected $guarded = 'id';
    public $timestamps = true;
    protected $fillable = [
                            'developer' ,
                            'projectName' ,
                            'projectNumber',
                            'commencementDate',
                            'competitionDate',
                            'timeAllocated',
                            'timeSpent',
                            'additionalTime',
                            'additionalTime1',
                            'additionalTime2',
                            'additionalTime3',
                            'additionalTime4',
                            'additionalTime5',
                            'additionalTime6',
                            'additionalTime7',
                            'additionalTime8',
                            'additionalTime9',

                            'h1TagsPerPage',
                            'brokenLinks',
                            'imageOptimisation',
                            'insightsOptimisation',
                            'phoneNumbers',
                            'SEF_URLs',
                            'canonical_URLs',
                            'custom_404',
                            'image_ALT_tags',
                            'SEOTransferMatrix',

                            'checkUniqueThankyou',
                            'checkUniqueThankyouComment',
                            'personaliseContactFormNotification',
                            'personaliseContactFormNotificationComment',
                            'socialMediaLinks',
                            'socialMediaLinksComment',
                            'contentUpload',
                            'contentUploadComment',
                            'crossBrowserTesing',
                            'crossBrowserTesingComment',
                            'W3C_Validation',
                            'W3C_ValidationComment',
                            'review',
                            'reviewComment',
                            'contactFormSubmission',
                            'contactFormSubmissionComment',
                            'formValidation',
                            'formValidationComment',
                            'internalLinks',
                            'internalLinksComment',
                            'captcha',
                            'captchaComment',
                            'favicon',
                            'faviconComment',
                            'peerReview',
                            'peerReviewComment',

                            'planning',
                            'communication',
                            'timeframe',
                            'testing',
                            'quality'
                         ];
}
