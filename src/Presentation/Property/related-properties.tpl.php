<?php
/* @var \App\Application\PropertyList\RelatedPropertyViewModel[] $properties */
?>

<ul>
<?php foreach ($properties as $property) : ?>
    <li><a href="/<?= $property->id ?>"><?= $property->title ?></a></li>
<?php endforeach; ?>
</ul>