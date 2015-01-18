<nav>

  <ul id="menu-primary" class="menu">
    <?php 
    foreach($pages->visible() as $p): 
    if ($p->slug() == 'separator') :
    ?>
    </ul>
    <ul id="menu-secondary" class="menu">
    <?php
    else :
    ?>
    <li>
      <a <?php e($p->isOpen(), ' class="isActive"') ?> href="<?php echo $p->url() ?>"><?php echo strtolower(html($p->title())) ?></a>
    </li>
    <?php 
    endif;
    endforeach;
    ?>
  </ul>

</nav>