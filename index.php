<?php
include 'base.php';
?>

<?php startblock("head"); ?>
<title>Home</title>
<?php endblock(); ?>

<?php startblock("content"); ?>

<section id="hero" class="row mt-3 mt-lg-5 ">
  <div class="col-12 col-lg-5 text-center text-lg-start">
    <h1 class="lh-base ">Having Trouble<br>With English? </h1>
    <h3>Look No Further</h3>
    <h5 class="lh-base">Welcome to English Training<br>Interactive</h5>
  </div>
  <div class="col-12 col-lg-7">
    <video width="640" height="400" controls autoplay>
      <source src="media/eti_advert_1.mp4" type="video/mp4">
      There is no reason on this earth why this video shouldn't
    </video>
  </div>
</section>


<section class="row mt-5">
  <div class="col-12 col-lg-6">
    <h5 class="mb-3">Why use the E.T.I.?</h5>
    <p class="w-75">English is a  funny language and can be tricky at times; words that sound the same but mean different things, words spelled the same but sound and differ in meaning and many other principles. we at the E.T.I. aim to make these these things less confusing at to improve YOUR english proficiency </p>


  </div>
  <div class="col-12 col-lg-6">
    <h5 class="mb-3">Some of Our Topics</h5>
    <ul class="list-group">
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Homonyms
        <span class="badge bg-primary rounded-pill">
          <a class="text-white text-decoration-none" href="homonyms.php">Go <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </a>
        </span>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Homophones
        <span class="badge bg-primary rounded-pill">
          <a class="text-white text-decoration-none" href="homophones.php">Go <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </a>
        </span>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Homographs
        <span class="badge bg-primary rounded-pill">
          <a class="text-white text-decoration-none" href="homographs.php">Go <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
          </a>
        </span>
      </li>
    </ul>
  </div>

</section>
<style>
  #hero-bg {
    /*background-color: #3B42CA;*/

  }

</style>
<?php endblock(); ?>