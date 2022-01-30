<?php
include('header.php');
include('includes/db.php');
?>
<link rel="stylesheet" href="styles/contact.css" />
<?php
include('nav.php');
?>
<section>
  <div class="wraper">
    <div class="contact-title">
      <h1>Let's talk</h1>
    </div>
    <?php

    if (isset($_POST['submit'])) {

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $query = "INSERT INTO contact(contact_firstname,contact_lastname,contact_email,contact_subject,contact_message) values('{$firstname}','{$lastname}','{$email}','{$subject}','{$message}') ";
      $result = mysqli_query($conn, $query);
    }
    ?>
    <form method="post">
      <div class="firstLastname">
        <div class="form-control">
          <label for="firstname">First Name</label>
          <input type="text" id="firstname" name="firstname" required />
        </div>
        <div class="form-control">
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname" required />
        </div>
      </div>
      <div class="form-control" style="padding-top: 50px">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required />
      </div>
      <div class="form-control">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required />
      </div>
      <div class="form-control">
        <label for="message">Message</label>
        <textarea type="text" id="message" rows="10" name="message" required></textarea>
      </div>

      <button type="submit" name="submit">Send</button>
    </form>
  </div>
</section>
<?php
include('footer.php');
?>