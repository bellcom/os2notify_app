<?php if ($view_mode == 'list_simple'): ?><?php xdebug_break(); ?>
  <!-- node--list_simple--animal.tpl.php -->
  <!-- Begin - list -->
  <section id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> fki-list-simple fki-list-simple-animal"<?php print $attributes; ?>>

    <!-- Begin - heading -->
    <div class="fki-list-heading">
      <h3 class="fki-list-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
    </div>
    <!-- End - heading -->

    <!-- Begin - body -->
    <div class="fki-list-body">
    </div>
    <!-- End - body -->

  </section>
  <!-- End - list -->

<?php endif; ?>
