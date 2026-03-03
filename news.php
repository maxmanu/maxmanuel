<?php
include 'templates/header.php';
require_once 'includes/blog.php';

// Obtener posts del blog
$posts = get_blog_posts($current_lang);
?>

<section class="section-container">
  <div class="container">
    <div class="command-line text-center mb-5">
      <span class="color-secondary">$</span>
      <span class="color-primary"> ls -la news/</span>
    </div>
    <h2 class="section-title text-center mb-5"><?php echo t('news.title'); ?></h2>

    <!-- Grid de noticias -->
    <div class="news-grid">

      <?php foreach ($posts as $post): ?>
        <!-- Post: <?php echo htmlspecialchars($post['title']); ?> -->
        <article class="news-card">
          <div class="news-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="news-icon">
              <?php echo get_blog_icon($post['icon']); ?>
            </svg>
            <h3 class="news-title"><?php echo htmlspecialchars($post['title']); ?></h3>
          </div>
          <p class="news-description"><?php echo htmlspecialchars($post['excerpt']); ?></p>
          <div class="news-meta">
            <span class="news-date">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              <?php echo format_blog_date($post['date'], $current_lang); ?>
            </span>
            <span class="news-category"><?php echo htmlspecialchars($post['category']); ?></span>
          </div>
          <a href="post.php?slug=<?php echo urlencode($post['slug']); ?>" class="news-link"><?php echo t('news.readMore'); ?> →</a>
        </article>
      <?php endforeach; ?>

      <?php if (empty($posts)): ?>
        <p class="text-center"><?php echo t('news.noPosts'); ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include 'templates/footer.php'; ?>