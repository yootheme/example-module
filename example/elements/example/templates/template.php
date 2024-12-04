<?php

$el = $this->el('div', [
    'class' => '',
]);

// Title
$title = $this->el('h1', [
    'class' => [
        'el-title'
    ],
]);

// Content
$content = $this->el('div', [
    'class' => [
        'el-content'
    ],
]);

?>

<?= $el($props, $attrs) ?>

    <?php if ($props['title']): ?>
    <?= $title($props, $props['title']) ?>
    <?php endif; ?>

    <?php if ($props['content']): ?>
    <?= $content($props, $props['content']) ?>
    <?php endif; ?>

<?= $el->end() ?>
