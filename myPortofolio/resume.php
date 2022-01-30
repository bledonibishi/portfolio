<?php
include('header.php');

?>
<link rel="stylesheet" href="styles/resume.css" />
<?php
include('nav.php');
include('includes/db.php')
?>



<section>
  <div class="wraper">
    <div class="resume-div">
      <h1>Resume</h1>
    </div>
    <div class="experience-cv">
      <h2>Experience</h2>
      <button>DOWNLOAD CV</button>
    </div>


    <?php

    $query = "SELECT * FROM experience";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $experience_year = $row['experience_year'];
      $job_position = $row['job_position'];
      $company_name = $row['company_name'];
      $company_location = $row['company_location'];
      $description = $row['description'];
    ?>
      <div class="resume-card">
        <div class="rc-title">
          <h1><?php echo $experience_year ?> - Present</h1>
          <p>Job Position: <?php echo $job_position ?></p>
          <p>Company name: <?php echo $company_name ?></p>
          <p>Company Location: <?php echo $company_location ?></p>
        </div>
        <div class="rc-desc">
          <h2>Description</h2>
          <p>
            <?php echo $description ?>
          </p>
        </div>
      </div>
    <?php
    }
    ?>

    <div class="experience-cv">
      <h1>Education</h1>
    </div>
    <?php

    $query = "SELECT * FROM education";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $education_year = $row['education_year'];
      $university_name = $row['university_name'];
      $degree_level = $row['degree_level'];
      $university_location = $row['university_location'];
      $description = $row['description'];

    ?>
      <div class="resume-card">
        <div class="rc-title">
          <h1><?php echo $education_year ?> </h1>
          <p>University name: <?php echo $university_name ?></p>
          <p>Degree Level: <?php echo $degree_level ?></p>
          <p>University Location: <?php echo $university_location ?></p>
        </div>
        <div class="rc-desc">
          <h2>Description</h2>
          <p>
            <?php echo $description ?>
          </p>
        </div>
      </div>
    <?php
    }


    ?>
    <div class="resume-card">
      <div class="skill-wraper">
        <div class="skills-div">
          <h1>Professional skillset</h1>
          <div class="skill">
            <?php

            $query = "SELECT * FROM skillset";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              $programming_languages = $row['programming_languages'];
            ?>
              <div class="skill-div">
                <div style="height: 14px; width: 14px; background-color: #0050ff;"></div>
                <p><?php echo $programming_languages ?></p>
              </div>
            <?php  } ?>
          </div>
        </div>
        <div class="skills-div">
          <h1>Languages</h1>
          <?php

          $query = "SELECT * FROM languages";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) {
            $languages = $row['languages'];
          ?>
            <div class="skill">
              <div style="height: 14px; width: 14px; background-color: blue"></div>
              <p><?php echo $languages ?></p>
            </div>
          <?php  } ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('footer.php');
?>