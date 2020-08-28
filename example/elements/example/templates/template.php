<?php

// Element
$el = $this->el('div');

?>

<?= $el($props, $attrs) ?>

    <?php if ($props['content']) : ?>
        <?= $props['content'] ?>
    <?php endif ?>

<?= $el->end() ?>
