<!DOCTYPE html>
<html lang="en">
<?php snippet('meta') ?>

<body>
    <div class="bodyWrapper">
        <?php snippet('header') ?>
        <div class="indexWrapper">
            <div class="indexLeft">
                <div class="sliderWrapper">
                    <section class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($page->children()->children() as $project) : ?>
                                    <li class="splide__slide">
                                        <img src="<?= $project->image()->url() ?>" alt="">
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="indexRight">
                <ul>
                    <?php foreach ($page->children()->children() as $index => $project) : ?>
                        <li>
                            <a class="itemLeft" href="<?= $project->url() ?>" data-index="<?= $index ?>"><?= $project->title() ?></a>
                            <a class="itemRight" href="<?= $project->url() ?>"><?= $project->category() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <?php foreach ($page->children()->children() as $project) : ?>
            <img src="<?= $project->image()->url() ?>" alt="">
        <?php endforeach ?>
        <img src="/content/home/projects/Calder Stories/Calder.png" alt="">
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                autoplay: true,
                type: 'loop',
                interval: 2000, // Autoplay interval in milliseconds
            }).mount();
        });
    </script>
</body>

</html>