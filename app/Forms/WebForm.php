<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class WebForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('developer', 'text', [
                'label' => 'Developer',
                'rules' => 'required|max:255',
                ]
            )
            ->add('projectName', 'text', [
                'label' => 'Project Name',
                'rules' => 'required|max:255',
                ]
            )
            ->add('projectNumber', 'text', [
                'label' => 'Project Number',
                'rules' => 'required|max:255',
                ]
            )
            ->add('commencementDate', 'date', [
                'label' => 'Commencement Date',
                'rules' => 'required|max:255',
                ]
            )
            ->add('competitionDate', 'date', ['label' => 'Competition Date'])
            ->add('timeAllocated', 'text', ['label' => 'Time Allocated'])
            ->add('timeSpent', 'text', ['label' => 'Time Spent'])
            ->add('additionalTime', 'text', ['label' => 'Additional Time 1'])
            ->add('additionalTime1', 'text', ['label' => 'Additional Time 2'])
            ->add('additionalTime2', 'text', ['label' => 'Additional Time 3'])
            ->add('additionalTime3', 'text', ['label' => 'Additional Time 4'])
            ->add('additionalTime4', 'text', ['label' => 'Additional Time 5'])
            ->add('additionalTime5', 'text', ['label' => 'Additional Time 6'])
            ->add('additionalTime6', 'text', ['label' => 'Additional Time 7'])
            ->add('additionalTime7', 'text', ['label' => 'Additional Time 8'])
            ->add('additionalTime8', 'text', ['label' => 'Additional Time 9'])
            ->add('additionalTime9', 'text', ['label' => 'Additional Time 10'])
            ->add('h1TagsPerPage', 'text', ['label' => 'Max 1 H1 per page'])
            ->add('brokenLinks', 'text', ['label' => 'Broken Links'])
            ->add('imageOptimisation', 'text', ['label' => 'Image Optimisation (Image Recycle)'])
            ->add('insightsOptimisation', 'text', ['label' => 'Insights Optimisation'])
            ->add('phoneNumbers', 'text', ['label' => 'Phone Numbers – Click to Call'])
            ->add('SEF_URLs', 'text', ['label' => 'SEF URLs (index.php and non-www redirects)'])
            ->add('canonical_URLs', 'text', ['label' => 'Canonical URLs'])
            ->add('custom_404', 'text', ['label' => 'Custom 404 Page'])
            ->add('textimage_ALT_tags', 'text', ['label' => 'Image ALT Tags'])
            ->add('SEOTransferMatrix', 'text', ['label' => 'SEO (Authority) Transfer Matrix'])

            ->add('checkUniqueThankyou', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Unique ‘thankyou’ page for each form',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('checkUniqueThankyouComment', 'textarea', ['label' => 'Comments'])

            ->add('personaliseContactFormNotification', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Personalise contact form notification',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('personaliseContactFormNotificationComment', 'textarea', ['label' => 'Comments'])

            ->add('socialMediaLinks', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Social Media Links',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('socialMediaLinksComment', 'textarea', ['label' => 'Comments'])

            ->add('contentUpload', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Content Upload / Transfer (including blogs)',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('contentUploadComment', 'textarea', ['label' => 'Comments'])

            ->add('crossBrowserTesing', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Cross Browser Testing',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('crossBrowserTesingComment', 'textarea', ['label' => 'Comments'])

            ->add('W3C_Validation', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'W3C Validation',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('W3C_ValidationComment', 'textarea', ['label' => 'Comments'])

            ->add('review', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Review against design spec and consistency between pages',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('reviewComment', 'textarea', ['label' => 'Comments'])

            ->add('contactFormSubmission', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Contact Form Submission',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('contactFormSubmissionComment', 'textarea', ['label' => 'Comments'])

            ->add('formValidation', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Form Validation',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('formValidationComment', 'textarea', ['label' => 'Comments'])

            ->add('internalLinks', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Internal Links / Menu',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('internalLinksComment', 'textarea', ['label' => 'Comments'])

            ->add('captcha', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Captcha',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('captchaComment', 'textarea', ['label' => 'Comments'])

            ->add('favicon', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Favicon',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('faviconComment', 'textarea', ['label' => 'Comments'])

            ->add('peerReview', 'select', [
                'choices' => ['yes' => 'Yes', 'no' => 'No'],
                'label' => 'Peer review',
                'empty_value' => '=== Choose One ==='
            ])
            ->add('peerReviewComment', 'textarea', ['label' => 'Comments'])

            ->add('remember_me', 'radio', [
                'value' => 1,
                'checked' => false
            ])
            ;
    }
}
