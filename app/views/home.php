<?php require VIEW_HEADER; ?>
  
  <div class="jumbotron">
    <div class="container">
      <?php if (empty($articles)) : ?>
        <p>Sorry, no articles at the moment.</p>
      <?php else: ?>
        <ul>
          <?php foreach ($articles as $article) : ?>
            <li><a href="<?= BASE_URL; ?>/article.php?article=<?= $article['slug']; ?>"><?= $article['label']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>

<?php require VIEW_FOOTER; ?>