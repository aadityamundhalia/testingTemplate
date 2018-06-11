@section('pageTitle', 'Web Edit')
@extends('layout.mainlayout')
@section('content')
<h2>
    <center>
        Web Development Testing Checklist Edit
    </center>
</h2>
<hr>
<div id="app">
    <form method="post" action="{{route('webdata.update', $web->id)}}" enctype="multipart/form-data">
        {{ method_field('PUT') }}{{csrf_field()}}
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Developer</span>
                        </div>
                        <input type="text" name="developer" value="{{ $web->developer }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('developer', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>

                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Project Name</span>
                        </div>
                        <input type="text" name="projectName" value="{{ $web->projectName }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('projectName', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Project Number</span>
                        </div>
                        <input type="string" name="projectNumber" value="{{ $web->projectNumber }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('projectNumber', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Commencement Date</span>
                        </div>
                        <input type="date" name="commencementDate" value="{{ $web->commencementDate }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('commencementDate', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Competition Date</span>
                        </div>
                        <input type="date" name="competitionDate" value="{{ $web->competitionDate }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('competitionDate', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Time Allocated</span>
                        </div>
                        <input type="number" step="0.01" name="timeAllocated" value="{{ $web->timeAllocated }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('timeAllocated', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Time Spent</span>
                        </div>
                        <input type="number" step="0.01" name="timeSpent" value="{{ $web->timeSpent }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('timeSpent', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Additional Time</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime" value="{{ $web->additionalTime }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 2</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime1" value="{{ $web->additionalTime1 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime1', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 3</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime2" value="{{ $web->additionalTime2 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime2', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 4</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime3" value="{{ $web->additionalTime3 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime3', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 5</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime4" value="{{ $web->additionalTime4 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime4', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 6</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime5" value="{{ $web->additionalTime5 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime5', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 7</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime6" value="{{ $web->additionalTime6 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime6', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 8</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime7" value="{{ $web->additionalTime7 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime7', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 9</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime8" value="{{ $web->additionalTime8 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime8', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 150px;" class="input-group-text">Additional Time 10</span>
                        </div>
                        <input type="number" step="0.01" name="additionalTime9" value="{{ $web->additionalTime9 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('additionalTime9', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <hr>
        <h5>SEO</h5>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Max 1 H1 per page</span>
                        </div>
                        <input type="text" name="h1TagsPerPage" value="{{ $web->h1TagsPerPage }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('h1TagsPerPage', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Broken Links</span>
                        </div>
                        <input type="text" name="brokenLinks" value="{{ $web->brokenLinks }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('brokenLinks', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Insights Optimisation</span>
                        </div>
                        <input type="text" name="insightsOptimisation" value="{{ $web->insightsOptimisation }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('insightsOptimisation', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Phone Numbers – Click to Call</span>
                        </div>
                        <input type="text" name="phoneNumbers" value="{{ $web->phoneNumbers }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('phoneNumbers', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">SEO (Authority) Transfer Matrix </span>
                        </div>
                        <input type="text" name="SEOTransferMatrix" value="{{ $web->SEOTransferMatrix }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('SEOTransferMatrix', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Canonical URLs</span>
                        </div>
                        <input type="text" name="canonical_URLs" value="{{ $web->canonical_URLs }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('canonical_URLs', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Custom 404 Page </span>
                        </div>
                        <input type="text" name="custom_404" value="{{ $web->custom_404 }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('custom_404', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 270px;" class="input-group-text">Image ALT Tags </span>
                        </div>
                        <input type="text" name="image_ALT_tags" value="{{ $web->image_ALT_tags }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('image_ALT_tags', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 350px;" class="input-group-text">SEF URLs (index.php and non-www redirects)</span>
                        </div>
                        <input type="text" name="SEF_URLs" value="{{ $web->SEF_URLs }}" class="form-control"> {{-- input --}}
                    </div>
                    {!! $errors->first('SEF_URLs', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="width: 350px;" class="input-group-text">Image Optimisation (Image Recycle)</span>
                            </div>
                            <input type="text" name="imageOptimisation" value="{{ $web->imageOptimisation }}" class="form-control"> {{-- input --}}
                        </div>
                        {!! $errors->first('imageOptimisation', '<p style="color:red;" class="help-block">:message</p>') !!}
                    </div>
                </div>
        </p>

        <hr>
        <h5>Testing</h5>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Unique ‘thankyou’ page for each form</span>
                        </div>
                        <select class="custom-select" name="checkUniqueThankyou"> {{-- input --}}
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->checkUniqueThankyou == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->checkUniqueThankyou == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="checkUniqueThankyouComment" value="{{ $web->checkUniqueThankyouComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('checkUniqueThankyou', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('checkUniqueThankyouComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Personalise contact form notification</span>
                        </div>
                        <select class="custom-select" name="personaliseContactFormNotification">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->personaliseContactFormNotification == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->personaliseContactFormNotification == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="personaliseContactFormNotificationComment" value="{{ $web->personaliseContactFormNotificationComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('personaliseContactFormNotification', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('personaliseContactFormNotificationComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Social Media Links</span>
                        </div>
                        <select class="custom-select" name="socialMediaLinks">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->socialMediaLinks == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->socialMediaLinks == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="socialMediaLinksComment" value="{{ $web->socialMediaLinksComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('socialMediaLinks', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('socialMediaLinksComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Content Upload / Transfer (including blogs)</span>
                        </div>
                        <select class="custom-select" name="contentUpload">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->contentUpload == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->contentUpload == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="contentUploadComment" value="{{ $web->contentUploadComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('contentUpload', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('contentUploadComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Cross Browser Testing</span>
                        </div>
                        <select class="custom-select" name="crossBrowserTesing">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->crossBrowserTesing == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->crossBrowserTesing == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="crossBrowserTesingComment" value="{{ $web->crossBrowserTesingComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('crossBrowserTesing', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('crossBrowserTesingComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">W3C Validation</span>
                        </div>
                        <select class="custom-select" name="W3C_Validation">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->W3C_Validation == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->W3C_Validation)== 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="W3C_ValidationComment" value="{{ $web->W3C_ValidationComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('W3C_Validation', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('W3C_ValidationComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Review against design spec and consistency between pages</span>
                        </div>
                        <select class="custom-select" name="review">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->review == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->review == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="reviewComment" value="{{ $web->reviewComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('review', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('reviewComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Contact Form Submission</span>
                        </div>
                        <select class="custom-select" name="contactFormSubmission">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->contactFormSubmission == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->contactFormSubmission == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="contactFormSubmissionComment" value="{{ $web->contactFormSubmissionComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('contactFormSubmission', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('contactFormSubmissionComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Form Validation</span>
                        </div>
                        <select class="custom-select" name="formValidation">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->formValidation == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->formValidation == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="formValidationComment" value="{{ $web->formValidationComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('formValidation', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('formValidationComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Internal Links / Menu</span>
                        </div>
                        <select class="custom-select" name="internalLinks">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->internalLinks == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->internalLinks == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="internalLinksComment" value="{{ $web->internalLinksComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('internalLinks', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('internalLinksComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Captcha</span>
                        </div>
                        <select class="custom-select" name="captcha">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->captcha == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->captcha == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="captchaComment" value="{{ $web->captchaComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('captcha', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('captchaComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Favicon</span>
                        </div>
                        <select class="custom-select" name="favicon">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->favicon == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->favicon == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="faviconComment" value="{{ $web->faviconComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('favicon', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('faviconComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span style="width: 450px;" class="input-group-text">Peer review</span>
                        </div>
                        <select class="custom-select" name="peerReview">
                                <option selected value="">Choose...</option>
                                <option value="yes" @if ($web->peerReview == 'yes') selected="selected" @endif>Yes</option>
                                <option value="no" @if ($web->peerReview == 'no') selected="selected" @endif>No</option>
                        </select>
                        <input type="text" name="peerReviewComment" value="{{ $web->peerReviewComment }}" placeholder="Comment" class="form-control">
                    </div>
                    {!! $errors->first('peerReview', '<p style="color:red;" class="help-block">:message</p>') !!}
                    {!! $errors->first('peerReviewComment', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <hr>
        <h5>Manager Feedback</h5>
        <p>
            <div class="row">
                <div class="col">
                        <p><b>Planning</b> The project approach was planned well, and in collaboration with another team member.<p>
                </div>
                <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="planning1" name="planning" class="custom-control-input" value="excellent" @if ($web->planning == 'excellent') checked="checked" @endif>
                            <label class="custom-control-label" for="planning1">Excellent</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="planning2" name="planning" class="custom-control-input" value="good" @if ($web->planning == 'good') checked="checked" @endif>
                            <label class="custom-control-label" for="planning2">Good</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="planning3" name="planning" class="custom-control-input" value="improvement_needed" @if ($web->planning == 'improvement_needed') checked="checked" @endif>
                            <label class="custom-control-label" for="planning3">Improvement Needed</label>
                        </div>
                    {!! $errors->first('planning', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                        <p><b>Communication</b> The project status was regularly communicated with my manager and the project manager.<p>
                </div>
                <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="communication1" name="communication" class="custom-control-input" value="excellent" @if ($web->communication == 'excellent') checked="checked" @endif>
                            <label class="custom-control-label" for="communication1">Excellent</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="communication2" name="communication" class="custom-control-input" value="good" @if ($web->communication == 'good') checked="checked" @endif>
                            <label class="custom-control-label" for="communication2">Good</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="communication3" name="communication" class="custom-control-input" value="improvement_needed" @if ($web->communication == 'improvement_needed') checked="checked" @endif>
                            <label class="custom-control-label" for="communication3">Improvement Needed</label>
                        </div>
                    {!! $errors->first('communication', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                        <p><b>Timeframe</b> The project was completed within the allocated schedule.<p>
                </div>
                <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="timeframe1" name="timeframe" class="custom-control-input" value="excellent" @if ($web->timeframe == 'excellent') checked="checked" @endif>
                            <label class="custom-control-label" for="timeframe1">Excellent</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="timeframe2" name="timeframe" class="custom-control-input" value="good" @if ($web->timeframe == 'good') checked="checked" @endif>
                            <label class="custom-control-label" for="timeframe2">Good</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="timeframe3" name="timeframe" class="custom-control-input" value="improvement_needed" @if ($web->timeframe == 'improvement_needed') checked="checked" @endif>
                            <label class="custom-control-label" for="timeframe3">Improvement Needed</label>
                        </div>
                    {!! $errors->first('timeframe', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                        <p><b>Testing</b> The project was tested thoroughly before submitting to my manager.<p>
                </div>
                <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="testing1" name="testing" class="custom-control-input" value="excellent" @if ($web->testing == 'excellent') checked="checked" @endif>
                            <label class="custom-control-label" for="testing1">Excellent</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="testing2" name="testing" class="custom-control-input" value="good" @if ($web->testing == 'good') checked="checked" @endif>
                            <label class="custom-control-label" for="testing2">Good</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="testing3" name="testing" class="custom-control-input" value="improvement_needed" @if ($web->testing == 'improvement_needed') checked="checked" @endif>
                            <label class="custom-control-label" for="testing3">Improvement Needed</label>
                        </div>
                    {!! $errors->first('testing', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col">
                        <p><b>Quality</b> The project was delivered with no errors, re-work required, and meeting the design spec.<p>
                </div>
                <div class="col">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="quality1" name="quality" class="custom-control-input" value="excellent" @if ($web->quality == 'excellent') checked="checked" @endif>
                            <label class="custom-control-label" for="quality1">Excellent</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="quality2" name="quality" class="custom-control-input" value="good" @if ($web->quality == 'good') checked="checked" @endif>
                            <label class="custom-control-label" for="quality2">Good</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="quality3" name="quality" class="custom-control-input" value="improvement_needed" @if ($web->quality == 'improvement_needed') checked="checked" @endif>
                            <label class="custom-control-label" for="quality3">Improvement Needed</label>
                        </div>
                    {!! $errors->first('quality', '<p style="color:red;" class="help-block">:message</p>') !!}
                </div>
            </div>
        </p>
        <p>
                <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg text-center">Submit</button>
                </div>
        </p>
    </form>
</div>
@endsection
