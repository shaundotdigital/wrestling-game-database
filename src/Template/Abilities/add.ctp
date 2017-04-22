<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ability Levels'), ['controller' => 'AbilityLevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability Level'), ['controller' => 'AbilityLevels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abilities form large-9 medium-8 columns content">
    <?= $this->Form->create($ability) ?>
    <fieldset>
        <legend><?= __('Add Ability') ?></legend>
        <?php
            echo $this->Form->control('ability_name');
            echo $this->Form->control('ability_level_id', ['options' => $abilityLevels]);
            echo $this->Form->control('games._ids', ['options' => $games]);
            echo $this->Form->control('wrestlers._ids', ['options' => $wrestlers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
