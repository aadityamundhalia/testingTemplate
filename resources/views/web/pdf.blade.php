<table class="table table-bordered">
    <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th scope="row">DprojectNameeveloper</th>
                <td>{{ $item->developer }}</td>
            </tr>
            <tr>
                <th scope="row">Project Name</th>
                <td>{{ $item->projectName }}</td>
            </tr>
            <tr>
                <th scope="row">Project Number</th>
                <td>{{ $item->projectNumber }}</td>
            </tr>
            <tr>
                <th scope="row">Commencement Date</th>
                <td>{{ $item->commencementDate }}</td>
            </tr>
            <tr>
                <th scope="row">Competition Date</th>
                <td>{{ $item->competitionDate }}</td>
            </tr>
            <tr>
                <th scope="row">Time Allocated</th>
                <td>{{ $item->timeAllocated }}</td>
            </tr>
            <tr>
                <th scope="row">Time Spent</th>
                <td>{{ $item->timeSpent }}</td>
            </tr>
            <tr>
                <th scope="row">Additional Time</th>
                <td>{{
                        $item->additionalTime +
                        $item->additionalTime1 +
                        $item->additionalTime2 +
                        $item->additionalTime3 +
                        $item->additionalTime4 +
                        $item->additionalTime5 +
                        $item->additionalTime6 +
                        $item->additionalTime7 +
                        $item->additionalTime8 +
                        $item->additionalTime9
                    }} <b>(Total Revisions - {{$item->totalRevesions }})</b></td>
            </tr>
            <tr>
                <th scope="row">Max 1 H1 per page</th>
                <td>{{ $item->h1TagsPerPage }}</td>
            </tr>
            <tr>
                <th scope="row">Broken Links</th>
                <td>{{ $item->brokenLinks }}</td>
            </tr>
            <tr>
                <th scope="row">Image Optimisation (Image Recycle)</th>
                <td>{{ $item->imageOptimisation }}</td>
            </tr>
            <tr>
                <th scope="row">Insights Optimisation</th>
                <td>{{ $item->insightsOptimisation }}</td>
            </tr>
            <tr>
                <th scope="row">Phone Numbers – Click to Call</th>
                <td>{{ $item->phoneNumbers }}</td>
            </tr>
            <tr>
                <th scope="row">SEF URLs (index.php and non-www redirects)</th>
                <td>{{ $item->SEF_URLs }}</td>
            </tr>
            <tr>
                <th scope="row">Canonical URLs</th>
                <td>{{ $item->canonical_URLs }}</td>
            </tr>
            <tr>
                <th scope="row">Custom 404 Page</th>
                <td>{{ $item->custom_404 }}</td>
            </tr>
            <tr>
                <th scope="row">Image ALT Tags</th>
                <td>{{ $item->image_ALT_tags }}</td>
            </tr>
            <tr>
                <th scope="row">SEO (Authority) Transfer Matrix</th>
                <td>{{ $item->SEOTransferMatrix }}</td>
            </tr>
            <tr>
                <th scope="row">Unique ‘thankyou’ page for each form</th>
                <td>{{ $item->checkUniqueThankyou }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->checkUniqueThankyouComment }}</td>
            </tr>
            <tr>
                <th scope="row">Personalise contact form notification	Yes/No – Comments</th>
                <td>{{ $item->personaliseContactFormNotification }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->personaliseContactFormNotificationComment }}</td>
            </tr>
            <tr>
                <th scope="row">Social Media Links</th>
                <td>{{ $item->socialMediaLinks }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->socialMediaLinksComment }}</td>
            </tr>
            <tr>
                <th scope="row">Content Upload / Transfer (including blogs)</th>
                <td>{{ $item->contentUpload }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->contentUploadComment }}</td>
            </tr>
            <tr>
                <th scope="row">Cross Browser Testing</th>
                <td>{{ $item->crossBrowserTesing }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->crossBrowserTesingComment }}</td>
            </tr>
            <tr>
                <th scope="row">W3C Validation</th>
                <td>{{ $item->W3C_Validation }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->W3C_ValidationComment }}</td>
            </tr>
            <tr>
                <th scope="row">Review against design spec and consistency between pages</th>
                <td>{{ $item->review }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->reviewComment }}</td>
            </tr>
            <tr>
                <th scope="row">Contact Form Submission</th>
                <td>{{ $item->contactFormSubmission }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->contactFormSubmissionComment }}</td>
            </tr>
            <tr>
                <th scope="row">Form Validation</th>
                <td>{{ $item->formValidation }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->formValidationComment }}</td>
            </tr>
            <tr>
                <th scope="row">Internal Links / Menu</th>
                <td>{{ $item->internalLinks }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->internalLinksComment }}</td>
            </tr>
            <tr>
                <th scope="row">Captcha	Yes/No – Comments</th>
                <td>{{ $item->captcha }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->captchaComment }}</td>
            </tr>
            <tr>
                <th scope="row">Favicon</th>
                <td>{{ $item->favicon }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->faviconComment }}</td>
            </tr>
            <tr>
                <th scope="row">Peer review</th>
                <td>{{ $item->peerReview }}</td>
            </tr>
            <tr>
                <th scope="row">Comments</th>
                <td>{{ $item->peerReviewComment }}</td>
            </tr>
            <tr>
                <th scope="row"><b>Planning</b><br>
                        The project approach was planned well, and in collaboration with another team member
                        </th>
                <td>{{ $item->planning }}</td>
            </tr>
            <tr>
                <th scope="row"><b>Communication</b><br>
                        The project status was regularly communicated with my manager and the project manager
                        </th>
                <td>{{ $item->communication }}</td>
            </tr>
            <tr>
                <th scope="row"><b>Timeframe</b><br>
                    The project was completed within the allocated schedule
                </th>
                <td>{{ $item->timeframe }}</td>
            </tr>
            <tr>
                <th scope="row"><b>Testing</b><br>
                    The project was tested thoroughly before submitting to my manager
                </th>
                <td>{{ $item->testing }}</td>
            </tr>
            <tr>
                <th scope="row"><b>Quality</b><br>
                    The project was delivered with no errors, re-work required, and meeting the design spec
                </th>
                <td>{{ $item->quality }}</td>
            </tr>
    </tbody>
</table>
