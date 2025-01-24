<div class="container mt-5">
    <div class="row">
        <!-- Article Details -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <figure class="tm-video-item">
                <img src="<?= $this->Url->build('/' . h($article['image']), ['fullBase' => true]) ?>" alt="<?= h($article['name']) ?>" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2><?= h($article['name']) ?></h2>
                </figcaption>
            </figure>
        </div>

        <div class="col-md-6">
            <div class="article-info">
                <h2><?= h($article['name']) ?></h2>
                <p><strong>Description:</strong> <?= h($article['description']) ?></p>
                <p><strong>Price:</strong> <?= number_format($article['price'], 2) ?> FCFA</p>
                <p><strong>Views:</strong> <?= number_format($article['views'] ?? 0) ?> views</p>

            </div>
            <div class="mt-4">
                <form action="<?= $this->Url->build(['controller' => 'Articles', 'action' => 'buy', $article['id']]) ?>" method="POST">
                    <button type="submit" class="btn btn-primary">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
