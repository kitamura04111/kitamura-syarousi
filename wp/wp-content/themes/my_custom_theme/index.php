<?php get_header(); ?>

<div class="content-area">

  <a href="<?php echo home_url(); ?>">
    <aside>
      <h2 class="name-ja">社会保険労務士きたむら事務所</h2>
      <p class="name-en"><span>KITAMURA</span><br><span>L</span>abor and <span>S</span>ocial<br><span>S</span>ecurity <span>A</span>ttorney</p>
    </aside>
  </a>

  <div class="content-inner">
    <div class="lead">
      <h1><span>社員と会社を結ぶ、</span><br><span>懸け橋になりたい。</span></h1>
      <img src="<?php echo get_template_directory_uri(); ?>/img/2552575.png" alt="mv">
    </div>

    <div class="taisetu">
      <section>
        <div class="number">
          <div class="sub-title">
            <span class="sub-titlenumber">01</span>
            <h2>大切にしていること</h2>
          </div>
          <div class="text-box">
            <span>お客様がなるほど！<br>となる提案をいたします。</span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/22113134.png" alt="悩んでいること画像">
          </div>
        </div>
        <div class="taisetu-text">
          <h3>悩んでいることありませんか？</h3>
          <span>気軽に相談できるパートナー。不安に寄り添い、<br>実現しやすい方法を共に考え、解決へと導きます。</span>
          <a class="link" href="<?php echo home_url('/jigyou'); ?>#num01">詳細へ</a>
        </div>
      </section>
      <a class="link" href="<?php echo home_url('/jigyou'); ?>">事業所内容はこちら</a>
    </div>

    <section id="watasi" class="watasi">
      <h2>わたしにできること</h2>
      <div class="box">
        <div class="text-area">
          <h3>労務相談</h3>
          <span>年間1000件以上の相談対応している経験を基に、アドバイスを致します。対面だけでなくオンライン、チャット、電話相談等お気軽にご相談ください。</span>
        </div>
        <div class="text-area">
          <h3>労働保険・社会保険手続き<br>給与計算</h3>
          <span>各種手続きは可能な限り簡素化しています。現状から変えたくないけど業務だけ代行して欲しい！給与計算の勤怠管理は自社で行うので計算だけお願いしたい！入社から退職までの手続きのすべてお願い！など、ご相談ください。</span>
        </div>
        <div class="text-area">
          <h3>助成金</h3>
          <span>御社に適した助成金を紹介します。雇用関係、出産育児関係はもちろん、地域限定案件もご案内します。</span>
        </div>
      </div>
      <a class="link watasi-link" href="<?php echo home_url('/watasi'); ?>">私にできること詳細はこちら</a>
    </section>
    <span class="guid">その他の業務もお受けいたします</span>
  </div>
</div>

<?php get_footer(); ?>
