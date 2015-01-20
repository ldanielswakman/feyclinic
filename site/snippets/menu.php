<nav>

  <a href="#" id="navtoggle">
    <i class="ion-navicon ion-2x"></i>
    <i class="ion-android-close ion-2x"></i>
  </a>

  <div id="mask">
  </div>


  <ul id="menu-primary" class="menu">
    <li id="logo">
      <a href="<?php echo ($page->slug() == 'home') ? '#top' : $site->url(); ?>">
        <img src="<?php echo url('assets/images/logo_stamp.svg') ?>" width="120" title="<?php echo $site->title()->html() ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
    </li>
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