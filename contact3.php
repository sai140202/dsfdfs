<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
  <style>
    /* Place the CSS code here */
    .form-container {
  max-width: 400px;
  margin: 0 auto;
}

/* Form input fields */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Submit button */
.form-container input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Success message */
.success-message {
  color: green;
  margin-bottom: 10px;
}

/* Error message */
.error-message {
  color: red;
  margin-bottom: 10px;
}

/* Add new record link */
.add-record-link {
  display: block;
  margin-top: 10px;
  text-align: center;
  }         

  </style>
</head>
<body>
  <div class="form-container">
    <form action=".php" method="post">
      <input type="text" name="txtName" placeholder="Name" required>
      <input type="email" name="txtEmail" placeholder="Email" required>
      <input type="text" name="txtPhone" placeholder="Phone" required>
      <textarea name="txtMessage" placeholder="Message" rows="5" required></textarea>
      <input type="submit" value="Submit">
    </form>
    <?php
      /* Form container */


    ?>
    <br/>
    <a class="add-record-link" href="contact.html">Add New Record</a>
  </div>
</body>
</html>
