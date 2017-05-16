<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'SmackDown DB';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('styles.css') ?>

    <?= $this->Html->script('jQuery.js') ?>
    <?= $this->Html->script('scripts.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div class="top-bar" data-subbar role="top-navigation">
  </div>
  <nav class="main-bar" data-topbar role="navigation">
    <div class="nav-container">
      <div class="main-bar-navigation">
        <ul class="left">
          <li><?= $this->Html->link(__('Wrestlers'), ['action' => '../wrestlers']) ?> </li>
          <li><?= $this->Html->link(__('Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="sub-bar" data-subbar role="sub-navigation">
  </div>


    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
