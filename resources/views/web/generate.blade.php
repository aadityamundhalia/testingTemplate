@section('pageTitle', 'Web Data')
@extends('layout.mainlayout')
@section('content')
<h2>Generate File</h2>
<div id="app">
    <p>
        <h3>Select fields to display on sheet</h3>
    </p>
    <hr />
        <form method="post" action="{{url('create_file')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="id" name="id" @if (old('id') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="id">Id</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="developer" name="developer" @if (old('developer') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="developer">developer</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="projectName" name="projectName" @if (old('projectName') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="projectName">projectName</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="projectNumber" name="projectNumber" @if (old('projectNumber') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="projectNumber">projectNumber</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="commencementDate" name="commencementDate" @if (old('commencementDate') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="commencementDate">commencementDate</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="competitionDate" name="competitionDate" @if (old('competitionDate') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="competitionDate">competitionDate</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="timeAllocated" name="timeAllocated" @if (old('timeAllocated') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="timeAllocated">timeAllocated</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="timeSpent" name="timeSpent" @if (old('timeSpent') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="timeSpent">timeSpent</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime" name="additionalTime" @if (old('additionalTime') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime">additionalTime1</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime1" name="additionalTime1" @if (old('additionalTime1') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime1">additionalTime2</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime2" name="additionalTime2" @if (old('additionalTime2') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime2">additionalTime3</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime3" name="additionalTime3" @if (old('additionalTime3') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime3">additionalTime4</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime4" name="additionalTime4" @if (old('additionalTime4') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime4">additionalTime5</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime5" name="additionalTime5" @if (old('additionalTime5') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime5">additionalTime6</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime6" name="additionalTime6" @if (old('additionalTime6') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime6">additionalTime7</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime7" name="additionalTime7" @if (old('additionalTime7') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime7">additionalTime8</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime8" name="additionalTime8" @if (old('additionalTime8') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime8">additionalTime9</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="additionalTime9" name="additionalTime9" @if (old('additionalTime9') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="additionalTime9">additionalTime10</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="h1TagsPerPage" name="h1TagsPerPage" @if (old('h1TagsPerPage') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="h1TagsPerPage">h1TagsPerPage</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brokenLinks" name="brokenLinks" @if (old('brokenLinks') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="brokenLinks">brokenLinks</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="imageOptimisation" name="imageOptimisation" @if (old('imageOptimisation') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="imageOptimisation">imageOptimisation</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="insightsOptimisation" name="insightsOptimisation" @if (old('insightsOptimisation') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="insightsOptimisation">insightsOptimisation</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="phoneNumbers" name="phoneNumbers" @if (old('phoneNumbers') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="phoneNumbers">phoneNumbers</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="SEF_URLs" name="SEF_URLs" @if (old('SEF_URLs') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="SEF_URLs">SEF_URLs</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="canonical_URLs" name="canonical_URLs" @if (old('canonical_URLs') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="canonical_URLs">canonical_URLs</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_404" name="custom_404" @if (old('custom_404') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="custom_404">custom_404</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="image_ALT_tags" name="image_ALT_tags" @if (old('image_ALT_tags') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="image_ALT_tags">image_ALT_tags</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="SEOTransferMatrix" name="SEOTransferMatrix" @if (old('SEOTransferMatrix') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="SEOTransferMatrix">SEOTransferMatrix</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkUniqueThankyou" name="checkUniqueThankyou" @if (old('checkUniqueThankyou') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="checkUniqueThankyou">checkUniqueThankyou</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkUniqueThankyouComment" name="checkUniqueThankyouComment" @if (old('checkUniqueThankyouComment') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="checkUniqueThankyouComment">checkUniqueThankyouComment</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="personaliseContactFormNotification" name="personaliseContactFormNotification" @if (old('personaliseContactFormNotification') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="personaliseContactFormNotification">personaliseContactFormNotification</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="personaliseContactFormNotificationComment" name="personaliseContactFormNotificationComment" @if (old('personaliseContactFormNotificationComment') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="personaliseContactFormNotificationComment">personaliseNotificationComment</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="socialMediaLinks" name="socialMediaLinks" @if (old('socialMediaLinks') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="socialMediaLinks">socialMediaLinks</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="socialMediaLinksComment" name="socialMediaLinksComment" @if (old('socialMediaLinksComment') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="socialMediaLinksComment">socialMediaLinksComment</label>
                        </div>
                </div>
                <div class="col-sm">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="contentUpload" name="contentUpload" @if (old('contentUpload') == 'on') checked="checked" @endif>
                            <label class="custom-control-label" for="contentUpload">contentUpload</label>
                        </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="contentUploadComment" name="contentUploadComment" @if (old('contentUploadComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="contentUploadComment">contentUploadComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="crossBrowserTesing" name="crossBrowserTesing" @if (old('crossBrowserTesing') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="crossBrowserTesing">crossBrowserTesing</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="crossBrowserTesingComment" name="crossBrowserTesingComment" @if (old('crossBrowserTesingComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="crossBrowserTesingComment">crossBrowserTesingComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="W3C_Validation" name="W3C_Validation" @if (old('W3C_Validation') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="W3C_Validation">W3C_Validation</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="W3C_ValidationComment" name="W3C_ValidationComment" @if (old('W3C_ValidationComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="W3C_ValidationComment">W3C_ValidationComment</label>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="review" name="review" @if (old('review') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="review">review</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="reviewComment" name="reviewComment" @if (old('reviewComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="reviewComment">reviewComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="contactFormSubmission" name="contactFormSubmission" @if (old('contactFormSubmission') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="contactFormSubmission">contactFormSubmission</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="contactFormSubmissionComment" name="contactFormSubmissionComment" @if (old('contactFormSubmissionComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="contactFormSubmissionComment">contactFormSubmissionComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="formValidation" name="formValidation" @if (old('formValidation') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="formValidation">formValidation</label>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="formValidationComment" name="formValidationComment" @if (old('formValidationComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="formValidationComment">formValidationComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="internalLinks" name="internalLinks" @if (old('internalLinks') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="internalLinks">internalLinks</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="internalLinksComment" name="internalLinksComment" @if (old('internalLinksComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="internalLinksComment">internalLinksComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="captcha" name="captcha" @if (old('captcha') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="captcha">captcha</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="captchaComment" name="captchaComment" @if (old('captchaComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="captchaComment">captchaComment</label>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="favicon" name="favicon" @if (old('favicon') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="favicon">favicon</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="faviconComment" name="faviconComment" @if (old('faviconComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="faviconComment">faviconComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="peerReview" name="peerReview" @if (old('peerReview') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="peerReview">peerReview</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="peerReviewComment" name="peerReviewComment" @if (old('peerReviewComment') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="peerReviewComment">peerReviewComment</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="planning" name="planning" @if (old('planning') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="planning">planning</label>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="communication" name="communication" @if (old('communication') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="communication">communication</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="timeframe" name="timeframe" @if (old('timeframe') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="timeframe">timeframe</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="testing" name="testing" @if (old('testing') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="testing">testing</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="quality" name="quality" @if (old('quality') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="quality">quality</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="created_at" name="created_at" @if (old('created_at') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="created_at">created_at</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="updated_at" name="updated_at" @if (old('updated_at') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="updated_at">updated_at</label>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="*" name="*" @if (old('*') == 'on') checked="checked" @endif>
                        <label class="custom-control-label" for="*"><b>All</b></label>
                    </div>
                </div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
            </div>

            <br>

            <h3>Filters</h3>
            <Hr />
            <div class="form-group">
                <label for="operator">Operator</label>
                <select class="form-control" id="operator" name="operator">
                    <option selected value="">Choose...</option>
                    <option value="none"  @if (old('operator') == 'none') selected="selected" @endif>none</option>
                    <option value="is"  @if (old('operator') == 'is') selected="selected" @endif>is</option>
                    <option value="isNot"  @if (old('operator') == 'isNot') selected="selected" @endif>isNot</option>
                    <option value="moreThan" disabled>moreThan</option>
                    <option value="lessThan" disabled>lessThan</option>
                    <option value="in" disabled>in</option>
                    <option value="notIn" disabled>notIn</option>
                    <option value="between" disabled>between</option>
                    <option value="notBetween" disabled>notBetween</option>
                    <option value="null" disabled>null</option>
                    <option value="notNull" disabled>notNull</option>
                    <option value="dateIs" disabled>dateIs</option>
                    <option value="monthIs" disabled>monthIs</option>
                    <option value="dayIs" disabled>dayIs</option>
                    <option value="yearIs" disabled>yearIs</option>
                    <option value="timeIs" disabled>timeIs</option>
                </select>
                {!! $errors->first('operator', '<p style="color:red;" class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="field">Field</label>
                <select class="form-control" id="field" name="field">
                        <option selected value="">Choose...</option>
                        <option value="id">id</option>
                    @foreach($items->getFillable() as $field)
                        <option value="{{$field}}">{{$field}}</option>
                    @endforeach
                    <option value="created_at ">created_at </option>
                    <option value="updated_at">updated_at</option>
                </select>
                {!! $errors->first('field', '<p style="color:red;" class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="filterValue">value</label>
                <input type="text" class="form-control" value="{{ old('filterValue') }}" name="filterValue" id="filterValue" placeholder="value">
                {!! $errors->first('filterValue', '<p style="color:red;" class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option selected value="">Choose...</option>
                    <option value="xlsx" @if (old('type') == 'xlsx') selected="selected" @endif>xlsx</option>
                    <option value="xls" @if (old('type') == 'xls') selected="selected" @endif>xls</option>
                    <option value="csv" @if (old('type') == 'csv') selected="selected" @endif>csv</option>
                </select>
                {!! $errors->first('type', '<p style="color:red;" class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="fileName">File Name</label>
                <input type="text" class="form-control" value="{{ old('fileName') }}" name="fileName" id="fileName" placeholder="File Name">
                <small class="text-muted">File name with out extension, eg. report.</small>
                {!! $errors->first('fileName', '<p style="color:red;" class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg text-center">Generate</button>
            </div>
        </form>
</div>
<br>
@endsection
