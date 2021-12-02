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
                <p class="text-center fw-bold"><?=$element['symbol']?></p>
                <p><?=$element['name']?></p>
                <p><?=round($element['atomicMass'],2)?></p>
            </div>
            <?php
                }
            ?>
        </div>
    </main>

<?php
    include 'includes/footer.html';
?>