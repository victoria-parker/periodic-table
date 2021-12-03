<?php
    require 'config/config.php';
    $Element=new Element();
    $elements=$Element->listElements();
    include 'includes/header.php';
?>
    <main class=" my-3">

        <h1 class="text-center">Periodic Table Elements</h1>

        <div id="periodic-table">
            <?php
                foreach ($elements as $element){
            ?>
            <div class="border rounded-1 element-container <?=$element['groupBlock']?>" id="element<?=$element['atomicNumber']?>">
                <p class="text-end"><?=$element['atomicNumber']?></p>
                <p class="text-center fw-bolder fs-4"><?=$element['symbol']?></p>
                <p class="text-center"><?=$element['name']?></p>
            </div>
            <?php
                }
            ?>
        </div>
<!---->
<!--        <div class="card" id="element-data">-->
<!--            <div class="row">-->
<!--                <div class="col-md-4" id="symbol">-->
<!--                    <span class="text-center fw-bolder fs-2">H</span>-->
<!--                </div>-->
<!--                <div class="col-md-8">-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Hydrogen</h5>-->
<!--                        <ul>-->
<!--                            <li>Atomic Number: 1</li>-->
<!--                            <li>Atomic Mass: 1</li>-->
<!--                            <li>Standard State: Gas</li>-->
<!--                            <li>Group Block: Non Metal</li>-->
<!--                            <li>Year Discovered: 1766</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
    </main>

<?php
    include 'includes/footer.html';
?>