<?php 
/*
 * Template Name: Basic Section Template
 * description: >-
  Page template for sectional pages
 */

  get_header(); 
?>

<!-- page-templates/basic-section-page.php -->

<article class="article">
  <?php get_template_part( 'partials/section-picker' ); ?>
</article>

<section class="hero-section" style="background: linear-gradient(120deg, #d1fae5 0%, #f87171 100%); padding: 3rem 1rem; text-align: center; border-radius: 1rem; margin-bottom: 2rem;">
  <img src="https://upload.wikimedia.org/wikipedia/en/0/0c/Liverpool_FC.svg" alt="Liverpool FC Crest" style="width: 100px; margin-bottom: 1rem;">
  <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: #b91c1c;">Why Liverpool FC is the Best Soccer Team</h1>
  <p style="font-size: 1.25rem; color: #374151; margin-bottom: 2rem;">You'll Never Walk Alone – a club with history, passion, and legendary moments.</p>
  <a href="https://www.liverpoolfc.com/" target="_blank" style="display: inline-block; background: #b91c1c; color: #fff; padding: 0.75rem 2rem; border-radius: 999px; text-decoration: none; font-weight: bold; transition: background 0.2s;">Visit Official Site</a>
</section>

<section class="card-grid" style="display: flex; gap: 1.5rem; flex-wrap: wrap; justify-content: center;">
  <div class="card" style="background: #fff; border-radius: 0.75rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 2rem; width: 300px;">
    <h2 style="color: #b91c1c;">Rich History</h2>
    <p style="color: #6b7280;">Founded in 1892, Liverpool FC has won 19 league titles, 6 European Cups, and countless other trophies.</p>
  </div>
  <div class="card" style="background: #fff; border-radius: 0.75rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 2rem; width: 300px;">
    <h2 style="color: #b91c1c;">Legendary Players</h2>
    <p style="color: #6b7280;">From Kenny Dalglish to Steven Gerrard and Mohamed Salah, the club has produced and attracted world-class talent.</p>
  </div>
  <div class="card" style="background: #fff; border-radius: 0.75rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 2rem; width: 300px;">
    <h2 style="color: #b91c1c;">Passionate Fans</h2>
    <p style="color: #6b7280;">Anfield is famous for its electric atmosphere and the iconic anthem "You'll Never Walk Alone." The fans are the heart of the club.</p>
  </div>
</section>

<?php get_footer(); ?>