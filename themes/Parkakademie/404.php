<?php get_header(); ?>

<div id="main-content">
  <div class="container">
    <div class="mt-5">
      <article class="text-center">
       <h1>404</h1>
        <h2>Diese Seite existiert nicht.</h2>
        <p>Ups, Es sieht so aus als würde die Seite die du in der URL eingeben hast nicht existieren. <br>Versuche nach einem Begriff mithilfe der Suchleiste zu finden.</p>
      </article> <!-- .et_pb_post -->
    </div> <!-- margin-top: 5 -->

    <div class="mt-5">
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </div>
  </div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>
