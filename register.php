<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/all.css">
  <link rel="stylesheet" href="assets/css/registration.css">
</head>
<body>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
      <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
        <h2 id="header">Sign Up Your User Accounts</h2>
        <p>Fill all form field to go to next step</p>
        <form id="msform">
          <ul id="progressbar">
            <li class="active" id="account"><strong>Account</strong></li>
            <li id="personal">Personal</li>
            <li id="image">Image</li>
            <li id="confirm">Finish</li>
          </ul>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
          </div><br/>
          <fieldset>
            <div class="form-card">
              <div class="row">
                <div class="col-7">
                  <h2 class="fs-title">Account Information:</h2>
                </div>
                <div class="col-5">
                  <h2 class="steps">Step 1 - 4</h2>
                </div>
              </div>
              <!-- START: first form -->
              <label for="email" class="fieldlabels">Email:</label>
              <input type="email" name="email" id="email" placeholder="Email"  />
              <label for="username" class="fieldlabels">Username:</label>
              <input type="text" name="username" id="username" placeholder="Username"  />
              <label for="password" class="fieldlabels">Password</label>
              <input type="password" name="password" id="password" placeholder="Password"  />
              <label for="confirm_password" class="fieldlabels">Confirm Password</label>
              <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"  />
            </div>
            <button type="button" name="next" class="next action-button">Next</button>
            <!-- END: first form -->
          </fieldset>
          <fieldset>
            <div class="form-card">
              <div class="row">
                <div class="col-7">
                  <h2 class="fs-title">Personal Information</h2>
                </div>
                <div class="col-5">
                  <h2 class="steps">Step 2 - 4</h2>
                </div>
              </div>
              <!-- START: second form -->
                <label for="first_name" class="fieldlabels">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="First Name"  />
                <label for="last_name" class="fieldlabels">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Last Name"  />
                <label for="contact_no" class="fieldlabels">Contact Number</label>
                <input type="text" name="contact_no" id="contact_no" placeholder="Contact Number"  />
                <label for="alt_contact_no" class="fieldlabels">Alternative Contact Number</label>
                <input type="text" name="alt_contact_no" id="alt_contact_no" placeholder="Alternative Contact Number" requried />
            </div>
            <button type="button" class="next action-button" name="next">Next</button>
            <button type="button" class="previous action-button-previous" name="previous">Previous</button>
            <!-- END: second form -->
          </fieldset>
          <fieldset>
            <div class="form-card">
              <div class="row">
                <div class="col-7">
                  <h2 class="fs-title">Avatar Upload</h2>
                </div>
                <div class="col-5">
                  <h2 class="steps">Step 3 - 4 </h2>
                </div>
              </div>
              <!-- START: third form  -->
              <label for="avatar" class="fieldlabels">Upload Your Avatar</label>
              <input type="file" name="avatar" id="avatar" accept="image/*">
            </div>
            <button type="button" class="next action-button">Next</button>
            <button type="button" class="previous action-button-previous" name="previous">Previous</button>
            <!-- END: third form  -->
          </fieldset>
          <fieldset>
            <div class="form-card">
              <div class="row">
                <div class="col-7">
                  <h2 class="fs-title">Data Privacy Consent</h2>
                </div>
                <div class="col-5">
                  <h2 class="steps">Step 4 - 4</h2>
                </div>
              </div>
              <br/><br/>
            <h2 class="purple-text text-center"><strong>Data Privacy Act of 2012</strong></h2>
            <p class="lead text-justify">
            In accordance with RA 10173 or Data Privacy Act of 2012, I consent to the following terms and conditions on the collection, use, processing and disclosure of my personal data:

I am aware that SOMEONE under the ORGANIZATION_NAME has collected and stored my personal data upon accomplishment of this form.

I express my consent for SOMEONE to collect, store my personal information.

I hereby affirm my right to be informed, object to processing, access, and rectify and to suspend or withdraw my personal data pursuant to the provisions of the RA 10173 and its implementing rules and regulations.

By clicking the <strong>FINISH</strong> button below, I warrant that I have read, understood all of the above provisions, and agreed with its full implementation.
            </p>
            </div>
            
            <button type="submit" class="next action-button">Finish</button>
            <button type="button" class="previous action-button-previous" name="previous">Previous</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/font-awesome/js/all.js"></script>
  <script src="assets/js/registration.js"></script>
</body>
</html>