<?php
$collections3 = [
    [
        'image' => '/public/assets/collections/collection3-template1.png',
        'title' => 'Pitch Deck Template 1'
    ],
    [
        'image' => '/public/assets/collections/collection3-template2.png',
        'title' => 'Pitch Deck Template 2'
    ],
    [
        'image' => '/public/assets/collections/collection3-template3.png',
        'title' => 'Pitch Deck Template 3'
    ],
    [
        'image' => '/public/assets/collections/collection3-template4.png',
        'title' => 'Pitch Deck Template 4'
    ]
]
?>

<section>
    <div class="featured--collections__wrapper collections--v3">
        <div class="collections__wrapper">
            <?php foreach ($collections3 as $collection) : ?>
                <div class="collection">
                    <div class="collection--image">
                        <?php echo "<img src=\"{$collection['image']}\" alt=\"{$collection['title']}\">"; ?>
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
            <img src="/public/assets/collections/collection3-template2.png" alt="Pitch Deck Template 2">
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection3-template3.png" alt="Pitch Deck Template 3">
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection3-template4.png" alt="Pitch Deck Template 4">
        </div>
    </div>
-->