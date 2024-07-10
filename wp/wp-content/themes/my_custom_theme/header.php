<!DOCTYPE html>
<html lang="ja" id="top">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg" sizes="16x16" type="image/svg+xml">
  <meta name="description" content="北村社労士事務所のホームページです。">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Zen+Maru+Gothic:wght@300;400&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="toggle" id="js"><span></span><span></span><span></span></div>
    <div class="header-inner">
      <h1><a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="社会保険労務士きたむら事務所"></a></h1>
      <div id="menu">
        <nav class="menu" id="js-nav">
          <ul>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url('/jigyou'); ?>">事業所内容</a></li>
            <li><a href="<?php echo home_url('/watasi'); ?>">私にできること</a></li>
            <li><a href="<?php echo home_url('/fee'); ?>">料金表</a></li>
            <li><a href="<?php echo home_url('/flow'); ?>">ご相談の流れ</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
