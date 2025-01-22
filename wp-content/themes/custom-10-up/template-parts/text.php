<?php
$textColor = isset($args['textColor']) ? $args['textColor'] : 'text-dark';
$eyebrowColor = isset($args['eyebrowColor']) ? $args['eyebrowColor'] : 'text-green';

$eyebrow = isset($args['eyebrow']) ? $args['eyebrow'] : null;
$header = isset($args['header']) ? $args['header'] : null;
$body = isset($args['body']) ? $args['body'] : null;

$hero = isset($args['hero']) ? $args['hero'] : null;
?>

<div class="text-wrapper <? echo $textColor; ?>">
    <?php if($eyebrow): ?>
        <h3 class="eyebrow <? echo $eyebrowColor; ?>"><? echo $eyebrow; ?></h3>
    <?php endif; ?>
    
    <?php if($header): ?>
        <?php if($hero): ?>
            <h1><? echo $header; ?></h1>
        <?php else: ?>
            <h2><? echo $header; ?></h2>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($body): ?>
        <p><? echo $body; ?></p>
    <?php endif; ?>
</div>