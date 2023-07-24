<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
      body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  margin: 0;
  padding: 0;
  margin-left:-200px;
  margin-right:290px;
}

.container {
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 50%; 
  margin: 50px auto; 
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  margin-left:-120px;
  color:navy;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

.error {
  color: red;
  margin-top: 5px;
}


.form-control {
  border-radius: 3px;
  border: 1px solid #ccc;
  padding: 10px;
}

.form-control-file {
  border: 1px solid #ccc;
  padding: 10px;
}

.btn-primary {
  background-color: #4285f4;
  border: none;
}

.btn-primary:hover {
  background-color: #2d76d9;
}

.form-control[type="file"] {
  border: none;
  background-color: transparent;
  color: #4285f4;
  cursor: pointer;
}

button[type="submit"] {
  width: 100%;
  margin-top: 20px;
  padding: 12px;
  font-weight: bold;
}

  </style>
  <title>Application Form</title>
</head>
<body>
  <div class="container" id="page2" style="display: none;">
    <h1>Application Form - Page 2</h1>
    <form name="application_form" method="post" onsubmit="return validateFormPage2()">
      <div class="form-group">
        <label for="educational_qualification">Educational qualification</label>
       <select class="form-control" id="educational_qualification" name="educational_qualification">
       <option value="">Select your Educational qualification</option>
            <option value="8th">8th</option>
            <option value="sslc">SSLC</option>
            <option value="HSC">HSC</option>
            <option value="bachelor">Bachelor's Degree</option>
            <option value="master">Master's Degree</option>
            <option value="BE/BTech">BE/BTech</option>
            <option value="ME/MTech">ME/MTech</option>
            <option value="doctorate">Doctorate</option>
          </select>
          <div id="eductional_qualification_error" class="error"></div>
        </div>
        <div class="form-group">
          <label for="department">Department</label>
          <select class="form-control" id="department" name="department">
            <option value="">Select your department</option>
            <option value="computer_science">Computer Science engineering</option>
            <option value="EEE">EEE</option>
          </select>
          </div>
          <div class="form-group">
            <label for="skills">Skills</label>
            <input type="text" class="form-control" id="skills" placeholder="Enter your skills">
            <div id="skills_error" class="error"></div>
          </div>
          <div class="form-group">
            <label for="interest">Area of Interest</label>
            <input type="text" class="form-control" id="interest" placeholder="Enter your area of interest">
            <div id="interest_error" class="error"></div>
          </div>
        <div class="form-group">
        <label for="resume">Upload Resume</label>
        <input type="file" class="form-control-file" id="resume" >
        <div id="resume_error" class="error"></div>
      </div>
      <button type="button" class="btn btn-primary" onclick="previousPage()">Previous</button>
      <button type="button" class="btn btn-primary" onclick="nextPage()">Next</button>
    </form>
  </div>
  <script>
    function validateFormPage2() {
      var educational_qualification = document.getElementById('educational_qualification').value;
      var departmet=document.getElementById('departmnet').value;
      var resume = document.getElementById('resume').value;

      clearErrorMessages();

    if (educational_qualification.trim() === '') {
    displayError('Educational qualification is required.', 'eductional_qualification_error');
    return false;
  }
  if (skills.trim() === '') {
    displayError('Skills are required.', 'skills_error');
    return false;
  }

  if (interest.trim() === '') {
    displayError('Area of Interest is required.', 'interest_error');
    return false;
  }
  if (resume.trim() === '') {
    displayError('Resume is required.', 'resume_error');
    return false;
  }
}

  function clearErrorMessages() {
  var errorElements = document.querySelectorAll('.error');
  errorElements.forEach(function (errorElement) {
    errorElement.textContent = '';
  });
}

function displayError(errorMessage, errorElementId) {
  var errorElement = document.getElementById(errorElementId);
  errorElement.textContent = errorMessage;
}
function resetForm() {
      document.getElementById('application_form').reset();
      clearErrorMessages();
      document.getElementById('successMessage').textContent = '';
      document.getElementById('submitBtn').disabled = false;
    }


    function previousPage() {
      document.getElementById('page1').style.display = 'block';
      document.getElementById('page2').style.display = 'none';
    }

    function nextPage() {
      if (validateFormPage2()) {
        document.getElementById('page2').style.display = 'none';
        document.getElementById('page3').style.display = 'block';
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>