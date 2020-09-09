<body class="text-center">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <?php echo $this->render('nav.htm',NULL,get_defined_vars(),0); ?>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">Messages</h1>

      <?php foreach (($messages?:[]) as $message): ?>
        <p><?= ($message['id']) ?> <?= ($message['message']) ?></p>
      <?php endforeach; ?>
    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>
          Cover template for
          <a href="https://getbootstrap.com/">Bootstrap</a>, by
          <a href="https://twitter.com/mdo">@mdo</a>.
        </p>
      </div>
    </footer>
  </div>
</body>
