<?php
$collections1 = [
    [
        'image' => '/public/assets/collections/collection-template1.png',
        'title' => 'Pitch deck template 1',
        'price' => '20.00'
    ],
    [
        'image' => '/public/assets/collections/collection-template2.png',
        'title' => 'Pitch deck template 2',
        'price' => '20.00'
    ],
    [
        'image' => '/public/assets/collections/collection-template3.png',
        'title' => 'Pitch deck template 3',
        'price' => '20.00'
    ],
    [
        'image' => '/public/assets/collections/collection-template1.png',
        'title' => 'Pitch deck template 4',
        'price' => '20.00'
    ]
]
?>

<section>
    <div class="featured--collections__wrapper collections--v1">
        <h3 class="heading-3">Featured Templates</h3>
        <div class="collections__wrapper">
            <?php foreach ($collections1 as $collection) : ?>
                <div class="collection">
                    <div class="collection--image">
                        <?php echo "<img src=\"{$collection['image']}\" alt=\"{$collection['title']}\">"; ?>
                    </div>
                    <div class="collection--content">
                        <h4 class="heading-4"><?php echo $collection['title']; ?></h4>
                        <span class="collection--price">$<?php echo $collection['price'] ?></span>
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
            <img src="/public/assets/collections/collection-template1.png" alt="Pitch Deck Template 1">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Pitch deck templates</h4>
            <span class="collection--price">$20.00</span>
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection-template2.png" alt="Pitch Deck Template 2">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Pitch deck templates</h4>
            <span class="collection--price">$20.00</span>
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection-template3.png" alt="Pitch Deck Template 3">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Pitch deck templates</h4>
            <span class="collection--price">$20.00</span>
        </div>
    </div>
    <div class="collection">
        <div class="collection--image">
            <img src="/public/assets/collections/collection-template1.png" alt="Pitch Deck Template 4">
        </div>
        <div class="collection--content">
            <h4 class="heading-4">Pitch deck templates</h4>
            <span class="collection--price">$20.00</span>
        </div>
    </div>
-->