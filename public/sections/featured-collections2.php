<?php
$collections2 = [
    [
        'image' => '/public/assets/collections/collection2-template1.png',
        'title' => 'Ut enim ad minim veniam',
        'cta_url' => '#',
        'cta_text' => 'Download'
    ],
    [
        'image' => '/public/assets/collections/collection2-template2.png',
        'title' => 'Ut enim ad minim veniam',
        'cta_url' => '#',
        'cta_text' => 'Download'
    ],
    [
        'image' => '/public/assets/collections/collection2-template2.png',
        'title' => 'Ut enim ad minim veniam',
        'cta_url' => '#',
        'cta_text' => 'Download'
    ]
]
?>

<section>
    <div class="featured--collections__wrapper collections--v2">
        <h3 class="heading-3">Featured Templates</h3>
        <div class="collections__wrapper">
            <?php foreach ($collections2 as $collection) : ?>
                <div class="collection">
                    <div class="collection--image">
                        <?php echo "<img src=\"{$collection['image']}\" alt=\"{$collection['title']}\"/>"; ?>
                    </div>
                    <div class="collection--content">
                        <h4 class="heading-4"><?php echo $collection['title']; ?></h4>
                        <a href="#" class="collection--download"><?php echo $collection['cta_text']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 
    Chunks removed:
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection2-template1.png" alt="Ut enim ad minim veniam 1">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Ut enim ad minim veniam</h4>
            <a href="#" class="collection--download">Download</a>
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection2-template2.png" alt="Ut enim ad minim veniam 2">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Ut enim ad minim veniam</h4>
            <a href="#" class="collection--download">Download</a>
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection2-template3.png" alt="Ut enim ad minim veniam 3">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Ut enim ad minim veniam</h4>
            <a href="#" class="collection--download">Download</a>
        </div>
    </div>
-->