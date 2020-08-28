<?php

// Element
$el = $this->el('div');

?>

<?= $el($props, $attrs) ?>

    <?php if ($props['content']) : ?>
    <?= $content($props, $props['content']) ?>
    <?php endif ?>

<?= $el->end() ?>
