<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Game Dlcs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gameDlcs form large-9 medium-8 columns content">
    <?= $this->Form->create($gameDlc) ?>
    <fieldset>
        <legend><?= __('Add Game Dlc') ?></legend>
        <?php
            echo $this->Form->control('game_id', ['options' => $games]);
            echo $this->Form->control('dlc_name');
            echo $this->Form->control('dlc_number');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
