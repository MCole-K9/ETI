<?php
include 'base.php';
?>
<?php startblock("head"); ?>
<title>Developers</title>
<?php endblock(); ?>

<?php startblock("content"); ?>
<h1 class="my-5 text-center">Our team of Developers</h1>
<p class="mx-auto text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor reprehenderit fugiat magni! Adipisci iusto accusantium, magnam ipsa cumque magni vero obcaecati maxime est hic inventore. Similique cum placeat quod officia!</p>
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
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card bordered shadow fadeInBottom anim-delay-2">
  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
  <div class="card-body fadeInBottom anim-delay-2">
    <h5 class="card-title">Khalid Sheriff</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<?php endblock();?>
<style>
.anim-delay{
    animation-delay: .5s;
}
.anim-delay-2{
    animation-delay: 1s;
}

.fadeInBottom { 
    animation-name: fadeInBottom ;
    animation-duration: .5s;
    animation-fill-mode: both;
}
@keyframes fadeInBottom {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    to { opacity: 1 }
}
</style>