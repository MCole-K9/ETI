<?php
  include 'base.php';
?>
<?php startblock("head"); ?>
  <title>Developers</title>
<?php endblock(); ?>

<?php startblock("content"); ?>
  <h1 class="my-5 text-center">Our team of Developers</h1>
  <p class="mx-auto text-center">Meet the passionate and hard-working developers behind this web solution</p>
  <div class="card-group p-5 flex d-flex ">
    <div class="card bordered shadow fadeInBottom">
      <img src="https://picsum.photos/200" class="card-img-top" alt="...">
      <div class="card-body fadeInBottom">
        <h5 class="card-title">Matthew Cole</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card mx-5 bordered shadow fadeInBottom anim-delay">
      <img src="https://picsum.photos/200" class="card-img-top" alt="...">
      <div class="card-body fadeInBottom anim-delay">
        <h5 class="card-title">Elliot Morrison</h5>
        <p class="card-text"><b>Full Stack Web Developer Extraordinaire </b>
        <br> - 100+ Years of javascript/typescript experience 
        <br> - 100+ Years of PHP experience
        <br> - 100+ Years of C# experience
        <br> - 100+ Years of Java experience
        <br> - 100+ Years of C++ experience
        <br> - 100+ Years of C experience
        <br> - 100+ Years of HTML experience
        <br> - 100+ Years of CSS experience
        <br> - Somehow still alive and single
      </p>
      </div>
    </div>

    <div class="card bordered shadow fadeInBottom anim-delay-2">
      <img src="https://i.imgur.com/WBI28n9.jpeg" class="card-img-top" alt="...">
      <div class="card-body fadeInBottom anim-delay-2">
        <h5 class="card-title">Khalid Sheriff</h5>
        <p class="card-text">Many dubious articles have been offered in attempts to prove the existence of Khalid, including anecdotal claims of sightings as well as alleged video and audio recordings, photographs, and casts of large footprints. Some are known or admitted hoaxes. </br></br> Specializes in "figuring it out, at the end of the day".</p>
      </div>
    </div>
  </div>
  
<video width="400" controls>
  <source src="eti_advert_1.mp4" type="video/mp4">
  <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
  Your browser does not support HTML video.
</video>
<?php endblock(); ?>
<style>
  .anim-delay {
    animation-delay: .5s;
  }

  .anim-delay-2 {
    animation-delay: 1s;
  }

  .fadeInBottom {
    animation-name: fadeInBottom;
    animation-duration: .5s;
    animation-fill-mode: both;
  }

  @keyframes fadeInBottom {
    from {
      opacity: 0;
      transform: translateY(100%);
    }

    to {
      opacity: 1
    }
  }
</style>