<?php get_header(); ?>


    <div class="wrapper">
      <h1 class="title">Kontaktní formulář</h1>

      <div class="advancedTitle">
        <img src="/wp-content/themes/bagrujeu/img/kontakt.svg" alt="" />
        <h1>Kontaktní formulář</h1>
      </div>

      <form action="ordered.php" method="post">
        <div>
        <label for="name">Jméno a příjmení*:</label>
        <input type="text" name="name">
      </div>
      <div>
        <label for="phone">Telefonní číslo*:</label>
        <input type="text" name="phone">
      </div>
      <div>
        <label for="email">Váš email*:</label>
        <input type="text" name="email">
      </div>
      <div>
        <label for="place">Místo práce:</label>
        <input type="text" name="place">
      </div>
      <div>
        <label for="summary">Stručný popis poptávky:</label>
        <input type="text" name="summary" id="summary">
      </div>
      <div>
        <label for="submit">&nbsp;</label>
        <input type="submit" name="submit" value="Odeslat poptávku" id="submit">
      </div>
      </form>

    </div>

<?php get_footer(); ?>
