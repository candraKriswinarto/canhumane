<div class="container">
  <section id="posts">
    <!-- <div id="output"></div> -->
    <h2><?= $title; ?></h2>
    <div id="output">
      <?php foreach($posts as $post) : ?>
        <div class="post">
          <h5 class="post-title"><?= $post['title']; ?></h5>
          <small>Posted On : <?= $post['created_at']; ?></small>
          <p><?= $post['body']; ?></p>
          <a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="post-btn">Read More</a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>