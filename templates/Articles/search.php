
<div class="row tm-mb-90 tm-gallery">
    <?php foreach ($articles as $article): ?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
        <figure class="effect-ming tm-video-item">
        <a href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'incrementViews', $article['id']]) ?>">
        <img src="<?= $this->Url->build('/' . h($article['image'])) ?>" alt="<?= h($article['name']) ?>" class="img-fluid">
        </a>
            <figcaption class="d-flex align-items-center justify-content-center">
                <h2><?= h($article['name']) ?></h2>
                <a href="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'viewarticle', $article['id']]) ?>">View more</a>
            </figcaption>
        </figure>
        <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"><?= $article['created']->format('d M Y') ?></span>
            <span><?= number_format($article['views']) ?> views</span>
        </div>
    </div>
    <?php endforeach; ?>
</div>
