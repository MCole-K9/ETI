<?php
include 'base.php';
?>


<?php startblock("head"); ?>
<title>Learn | Homonyms</title>
<?php endblock(); ?>

<?php startblock("content"); ?>

<section id="header">
    <div class="mx-auto text-center shadow my-5 w-75 rounded">
        <h2 class="py-3">Homographs</h2>
    </div>
</section>

<section id="intro" class="row mt-5">
    <div class="col-12 col-lg-5 ">
        <h5 class="mb-3">What are Homographs?</h5>
        <p class="w-75 lh-lg my-4">Homographs  are words that have the same spelling but differ in origin, meaning, and sometimes pronunciation</p>
    </div>
    <div class="col-12 col-lg-7">
        <div class="" class="ratio ratio-16x9 py-5">
            <iframe class="w-100" src="https://www.youtube.com/embed/FUQKaUncNmQ" style="height: 300px ;"></iframe>
        </div>
    </div>

</section>

<section id="examples" class="my-5">
    <h3>Homograph Examples</h3>
    <table class="table mb-5 table-hover">
    <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Word </th>
                <th scope="col">Meaning A.</th>
                <th scope="col">Meaning B.</th>
            </tr>
        </thead>
        <tbody >
            <tr>
                <th scope="row">1</th>
                <td class="fw-bold">Bear</td>
                <td>To carry or endure</td>
                <td>An animal with a shaggy coat </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td class="fw-bold">Attribute</td>
                <td>to think of as belonging to or originating in some person, place</td>
                <td> a characteristic or quality</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td class="fw-bold">Contract</td>
                <td>a written agreement</td>
                <td>to get, acquire or incur</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td class="fw-bold">Evening</td>
                <td>late afternoon</td>
                <td>making more even</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td class="fw-bold">Tear</td>
                <td>to rip</td>
                <td>a drop of water from the eye</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td class="fw-bold">Second</td>
                <td>1/60 of a minute</td>
                <td>the position after first</td>
            </tr>
        </tbody>
    </table>
</section>
<section id="activity-first" class="m-5">
    <div class="border border-success rounded p-3">
        <p class="bg-success rounded p-2 text-white font-bold" style="margin-top: -32px; width: fit-content">Activity</p>
        <p class=""><strong>Identify the Homographs by the pair of definitions below</strong></p>
        <div class="mb-3 row justify-content-between">
            <label for="" class="col-sm-5 col-form-label">A public play area</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="answer_one">
            </div>
        </div>
        <div class="mb-3 row justify-content-between">
            <label for="" class="col-sm-5 col-form-label">To bring a vehicle to a stop and leave it temporarily.</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="answer_two">
            </div>
        </div>
        <div class="row justify-content-end mt-3 mx-1">
            <button type="button" class="btn btn-primary w-25" id="btnSubmit_Homographs">Submit</button>
        </div>
    </div>
</section>
<script>
    let btnSubmit_Homographs = document.getElementById('btnSubmit_Homographs');
    btnSubmit_Homographs.addEventListener('click', function() {
    let answer_one = String(document.getElementById('answer_one').value);
    let answer_two = String(document.getElementById('answer_two').value);
    if (answer_one.toLowerCase() == 'park' && answer_two.toLowerCase() == 'park') {
        btnSubmit_Homographs.setAttribute('disabled', true);
        btnSubmit_Homographs.classList.add('btn-success');
        btnSubmit_Homographs.classList.remove('btn-primary');
        btnSubmit_Homographs.textContent = 'Correct!';

        }
        else {
            btnSubmit_Homographs.textContent = 'Incorrect Try Again';
        }
});
</script>
<?php endblock() ?>