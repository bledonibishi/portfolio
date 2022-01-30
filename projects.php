<?php
include('header.php');
?>
<link rel="stylesheet" href="styles/projects.css" />
<?php
include('nav.php');
?>

<section>
  <div class="wraper">
    <div class="projects-title">
      <h1>Projects</h1>
    </div>
    <div class="projects-p">
      <p>
        These are some of the repos I created using the languages I know. Here i provided the links to the github repos using the github API,
        I got the html_url, name and discription of the repos. This is a custom made slider with Javascript.
      </p>
    </div>
    <?php

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'https://api.github.com/users/bledonibishi/repos',
      CURLOPT_USERAGENT => 'Portfolio git repos API'
    ]);

    $result = curl_exec($curl);
    $data = json_decode($result, true);
    $count = 1;
    ?>
    <div class="slider">
      <?php
      $i = 1;
      foreach ($data as $repository) {
      ?>
        <div class="slide slide--<?php echo $count ?>">
          <div class="projects-card" style="padding: 0">
            <div class="card-details">
              <div class="title-styles">
                <div style="
                      width: 10px;
                      height: 42px;
                      left: 0;
                      background-color: #0050ff;
                      position: absolute;
                    "></div>
                <div>
                  <a href="<?php echo $repository['html_url'] ?>">
                    <h1><?php echo $repository['name'] ?></h1>
                  </a>
                  <small>Role Title<br /><br /></small>
                </div>
              </div>
              <p>
                <?php echo $repository['description']  ?>
              </p>
            </div>
            <div class="card-image">
              <a href="">
                <img src="./assets/p<?php echo $i; ?>.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      <?php
        $count++;
        $i++;
      };
      // curl_close($curl);

      ?>
      <button class="slider__btn slider__btn--left">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="slider__btn slider__btn--right">
        <i class="fas fa-chevron-right"></i>
      </button>

    </div>
</section>
<script src="script/slider.js"></script>

<?php
include('footer.php');
?>