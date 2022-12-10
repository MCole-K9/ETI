<?php
include 'base.php';
?>


<?php startblock("head"); ?>
<title>Learn | Homonyms</title>
<?php endblock(); ?>

<?php startblock("content"); ?>

<section id="header">
    <div class="mx-auto text-center shadow my-5 w-75 rounded">
        <h2 class="py-3">Homonyms</h2>
    </div>
</section>

<section id="intro" class="row mt-5">
    <div class="col-12 col-lg-5 ">
        <h5 class="mb-3">What are Homonyms?</h5>
        <p class="w-75 lh-lg my-4">Homonyms are words that are spelled the same but have different meanings. For example, the word "read" can be a verb or a noun. It can mean "to read" or "a reading".</p>
    </div>
    <div class="col-12 col-lg-7">
        <div class="" class="ratio ratio-16x9 py-5">
            <iframe class="w-100" src="https://www.youtube.com/embed/iUVrp11MCeE" style="height: 300px ;"></iframe>
        </div>
    </div>

</section>

<section id="examples" class="my-5">
    <h3>Homonym Examples</h3>
    <table class="table mb-5 table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Word</th>
                <th scope="col">Meaning A.</th>
                <th scope="col">Meaning B.</th>
            </tr>
        </thead>
        <tbody >
            <tr>
                <th scope="row">1</th>
                <td class="fw-bold">Light</td>
                <td>Opposite of dark</td>
                <td>Opposite of heavy</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td class="fw-bold">Change</td>
                <td> To transform / (noun) A transformation</td>
                <td>The money you receive back after paying more than an item cost</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td class="fw-bold">Bank</td>
                <td> A place to keep your money</td>
                <td>The inclined land on the edge of a river</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td class="fw-bold">Trip</td>
                <td>A travel experience</td>
                <td>When your foot hits an object, and you lose balance and fall</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td class="fw-bold">Duck</td>
                <td>A bird that likes to swim in the water</td>
                <td>to put your head/body down quickly-often in response to some danger</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td class="fw-bold">Wave</td>
                <td>When the water of the ocean rises and crashes down on the beach</td>
                <td>To greet or say goodbye to someone by moving your hand</td>
            </tr>
        </tbody>
    </table>
    <!-- ref - https://qqeng.net/Learning/improve-your-english-by-learning-english-homonyms/ -->
</section>
<section id="activity-first" class="mt-5">
    <div class="border border-success rounded p-3">
        <p class="bg-success rounded p-2 text-white font-bold" style="margin-top: -32px; width: fit-content">Activity</p>
        <p class=""><strong>Identify the Homonyms by the pair of definitions below</strong></p>
        <div class="mb-3 row justify-content-between">
            <label for="" class="col-sm-5 col-form-label">A Holding area for animals</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="mb-3 row justify-content-between">
            <label for="" class="col-sm-5 col-form-label">A writing instrument</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="">
            </div>
        </div>
    </div>
</section>

<?php endblock() ?>