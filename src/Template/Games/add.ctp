<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Platforms'), ['controller' => 'Platforms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Platform'), ['controller' => 'Platforms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <?php
            echo $this->Form->control('game_name');
            echo $this->Form->control('release_year');
            echo $this->Form->control('platforms._ids', ['options' => $platforms]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
