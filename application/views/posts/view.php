<div class="container">
  <section id="post">
    <h2><?php echo $post['title']; ?></h2>
    <small>Posted On : <?= $post['created_at']; ?></small>
    <div class="post-body">
      <?php echo $post['body']; ?>
    </div>
  </section>
</div>