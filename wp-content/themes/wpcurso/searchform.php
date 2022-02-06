<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')) ?>">
    <input type="search" class="search-field" value="<?= get_search_query() ?>" name="s" aria-label="Procurar"
           placeholder="<?= esc_attr_x('Pesquisar', 'placeholder', 'twenty')?>">
    <button type="submit" class="search-submit">
        <span class="screen-reader-text"><?= _x('Pesquisar', 'submit button', 'twenty') ?></span>
    </button>
</form>
