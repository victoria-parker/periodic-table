<?php
    require 'config/config.php';
    $Element=new Element();
    $elements=$Element->listElements();
    include 'includes/header.php';
?>
    <main class="container my-3">
        <h1>Periodic Table Elements</h1>
        <?php
            foreach ($elements as $element){
        ?>
        <div class="border rounded-1 element-container">
            <p class="text-end"><?=$element['atomicNumber']?></p>
            <p class="text-center fw-bold"><?=$element['symbol']?></p>
            <p><?=$element['name']?></p>
            <p><?=$element['atomicMass']?></p>
        </div>
        <?php
            }
        ?>
    </main>

<?php
    include 'includes/footer.html';
?>