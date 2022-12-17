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
        <p class="card-text"><b>Student at the VTDI, pursuing a Bsc in Information communication and Technology</b></p>
        <p>As a software engineer, I specialize in turning procrastination into productivity. When I'm not busy pulling crafty and elegant solutions or just solutions (lol) out of thin air, you can find me playing with my pet rock. Fun fact: I once stayed up all night coding and ended up with a solution that was exactly the same as the one I had when I started. But hey, at least my mental health issues have an explanation</p>
      </div>
    </div>

    <div class="card mx-5 bordered shadow fadeInBottom anim-delay">
      <img src="https://techunwrapped.com/wp-content/uploads/2022/04/Anonymous-keeps-up-the-pressure-on-Russia.jpg" class="card-img-top" alt="...">
      <div class="card-body fadeInBottom anim-delay">
        <h5 class="card-title">Elliot Morrison</h5>
        <p class="card-text"><b>A Student at the VTDI, pursuing a Bsc in Information communication and Technology</b>
        <br> - 100+ Years of javascript/typescript experience
        <br> - Full Stack Web Developer Extraordinaire  
        <br> - 100+ Years of experience with every js framework in existence
        <br> - 100+ Years of experience with every programming language under the sun
        <br> - 100+ Years of experience with every database under the sun
        <br> - Somehow still alive
        <br> - "I can do all things through StackOverflow who strengthens me" - Elliot Morrison 2022
      </p>
      </div>
    </div>

    <div class="card bordered shadow fadeInBottom anim-delay-2">
      <img src="https://i.imgur.com/WBI28n9.jpeg" class="card-img-top" alt="...">
      <div class="card-body fadeInBottom anim-delay-2">
        <h5 class="card-title">Khalid Sheriff</h5>
        <b>A Student at the VTDI, pursuing a Bsc in Information communication and Technology</b>
        <p class="card-text">Many dubious articles have been offered in attempts to prove the existence of Khalid, including anecdotal claims of sightings as well as alleged video and audio recordings, photographs, and casts of large footprints. Some are known or admitted hoaxes. </br></br> Specializes in "figuring it out, at the end of the day".</p>
      </div>
    </div>
  </div>
  
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