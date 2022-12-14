<?php
include 'base.php';
?>


<?php startblock("head"); ?>
<title>Learn | Homonyms</title>
<?php endblock(); ?>

<?php startblock("content"); ?>

<section id="header">
    <div class="mx-auto text-center shadow my-5 w-75 rounded">
        <h2 class="py-3">Homophones</h2>
    </div>
</section>

<section id="intro" class="row mt-5">
    <div class="col-12 col-lg-5 ">
        <h5 class="mb-3">What are Homophones?</h5>
        <p class="w-75 lh-lg my-4">Homophones are words that have the same sound, in terms of how they are pronounced but have a different meaning and are (often) spelt differently.</p>
    </div>
    <div class="col-12 col-lg-7">
        <div class="" class="ratio ratio-16x9 py-5">
            <iframe class="w-100" src="https://www.youtube.com/embed/wm5LwCcwRQ8" style="height: 300px ;"></iframe>
        </div>
    </div>

</section>

<section id="examples" class="my-5">
    <h3>Homophone Examples</h3>
    <table class="table mb-5 table-hover">
    <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Word A</th>
                <th scope="col">Word B</th>
                <th scope="col">Word A. Meaning</th>
                <th scope="col">Word B. Meaning</th>
            </tr>
        </thead>
        <tbody >
            <tr>
                <th scope="row">1</th>
                <td class="fw-bold">Weather</td>
                <td class="fw-bold">Whether</td>
                <td>'Weather' is a noun that refers to the current atmospheric conditions, such as if it's windy, rainy, or sunny.</td>
                <td>'Whether' is neither a noun nor a verb - it's a conjunction. It joins two words or phrases together in a sentence. It's used similarly to the word 'if'. </td>
            </tr>
        
            <tr>
                <th scope="row">2</th>
                <td class="fw-bold">Night</td>
                <td class="fw-bold">Knight</td>
                <td> Night is defined as “the period between sunset and sunrise, especially the hours of darkness. - Opposite of day</td>
                <td>A knight is a man who served in the military during medieval times as a high-ranking soldier.  </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td class="fw-bold">Here</td>
                <td class="fw-bold">Hear</td>
                <td>The word here means, "in, at or to this place". Simply speaking, here is used when you are referring to the place where you are. It is an adverb, a word that gives more information about a verb or adjective.</td>
                <td> Hear is a verb, meaning to listen to a sound. It can also mean gaining a message or information.</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td class="fw-bold">Groan</td>
                <td class="fw-bold">Grown</td>
                <td>Indicate pain, discomfort, or displeasure</td>
                <td>(of animals, as well as humans) fully developed</td>
            </tr>
        
        </tbody>
    </table>
</section>
<section id="activity-first" class="m-5">
    <div class="border border-success rounded p-3">
        <p class="bg-success rounded p-2 text-white font-bold" style="margin-top: -32px; width: fit-content">Activity</p>
        <p class=""><strong>Identify the Homophones by the pair of definitions below</strong></p>
        <div class="mb-3 row justify-content-between">
            <label for="" class="col-sm-5 col-form-label">A large saltwater body, usually partly or wholly surrounded by land.</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="answer_one">
            </div>
        </div>
        <div class="mb-3 row justify-content-between">
            <label for="" class="col-sm-5 col-form-label">To perceive with the eyes; discern visually.</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="answer_two">
            </div>
        </div>
        <div class="row justify-content-end mt-3 mx-1">
            <button type="button" id="btnSubmit_Homophones" class="btn btn-primary w-25">Submit</button>
        </div>
    </div>
</section>
<script>
   let btnSubmit_Homophones = document.getElementById('btnSubmit_Homophones');
   btnSubmit_Homophones.addEventListener('click', function() { 
    let answer_one = String(document.getElementById('answer_one').value);
    let answer_two = String(document.getElementById('answer_two').value);
    if (answer_one.toLowerCase() == 'sea' && answer_two.toLowerCase() == 'see') {
        btnSubmit_Homophones.setAttribute('disabled', true);
        btnSubmit_Homophones.classList.remove('btn-primary');
        btnSubmit_Homophones.classList.add('btn-success');
        btnSubmit_Homophones.textContent = 'Correct!';
        }
        else {
            btnSubmit_Homophones.textContent = 'Incorrect Try Again';
        }
});
</script>
<?php endblock() ?>