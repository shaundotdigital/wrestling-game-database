<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $abilitiesGame->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $abilitiesGame->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Abilities Games'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abilitiesGames form large-9 medium-8 columns content">
    <?= $this->Form->create($abilitiesGame) ?>
    <fieldset>
        <legend><?= __('Edit Abilities Game') ?></legend>
        <?php
            echo $this->Form->control('ability_id', ['options' => $abilities]);
            echo $this->Form->control('game_id', ['options' => $games]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
