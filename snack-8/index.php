<?php

include __DIR__ .'/animals.php';

?>

<ul>
    <?php foreach($animals as $animal) {?>
        <li>
                    <?php echo $animal['nome'];?> - <?php echo $animal['specie'];?> - <?php echo $animal['classe'];?>
                </li>
            <?php }?>
</ul>