<?php
/* @var \App\Application\Property\PropertyViewModel $property */
/* @var string $contact */
?>

<article class="property-container">
    <section class="hero">
        <h1><?= $property->title ?></h1>
        <section class="image" id="property-main-image">
            <img src="<?= $property->mainImage->src ?>" alt="<?= $property->mainImage->alt ?>" />
        </section>
        <section class="price">
            <?= number_format($property->price, 0, ',', ' ') ?> Ft
        </section>
        <section class="location">
            <i data-lucide="map-pin"></i> <?= $property->location ?>
        </section>
        <section class="features">
            <?php foreach($property->getFeatures() as $feature): ?>
                <div class="card">
                    <?= $feature->value ?>
                    <span class="label"><?= $feature->label ?></span>
                </div>
            <?php endforeach; ?>
        </section>
        <blockquote class="summary">
            <?= $property->quote ?>
        </blockquote>
    </section>
    <div class="property-details-layout sidebar-layout">
        <div class="sidebar">
            <?= $contact ?>
        </div>
        <div class="contents">
            <section class="highlights">
                <?php foreach($property->getHighlights() as $highlight): ?>
                    <div class="card">
                        <i data-lucide="<?= $highlight->icon ?>"></i>
                        <?= $highlight->value ?>
                    </div>
                <?php endforeach; ?>
            </section>
            <h2>Képek az ingatlanról</h2>
            <section class="gallery" id="property-gallery">
                <?php foreach($property->getGallery() as $galleryItem): ?>
                    <a href="<?= $galleryItem->src ?>"
                       data-pswp-width="<?= $galleryItem->width ?>"
                       data-pswp-height="<?= $galleryItem->height ?>">
                        <img src="<?= $galleryItem->src ?>" alt="<?= $galleryItem->alt ?>" />
                    </a>
                <?php endforeach; ?>
            </section>
            <h2>Ingatlan leírása</h2>
            <section class="description">
                <?= $property->description ?>
            </section>
            <section class="details">
                <?php foreach($property->getDetails() as $detail): ?>
                    <div class="block">
                        <h3><i data-lucide="<?= $detail->icon ?>"></i><?= $detail->title ?></h3>
                        <ul>
                            <?php foreach($detail->getItems() as $item): ?>
                                <li><span class="label"><?= $item->label ?></span><span class="value"><?= $item->value ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </section>
            <section class="map">
                <h2>Térkép</h2>
                    <a href="<?= $property->map->url ?>" target="_blank">
                    <img src="<?= $property->map->imgSrc ?>" alt="<?= $property->map->imgAlt ?>" />
                </a>
            </section>
        </div>
    </div>
</article>
<script type="module" src="/js/property.js"></script>