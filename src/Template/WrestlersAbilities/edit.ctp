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
                ['action' => 'delete', $wrestlersAbility->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersAbility->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wrestlers Abilities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersAbilities form large-9 medium-8 columns content">
    <?= $this->Form->create($wrestlersAbility) ?>
    <fieldset>
        <legend><?= __('Edit Wrestlers Ability') ?></legend>
        <?php
            echo $this->Form->control('wrestler_id', ['options' => $wrestlers]);
            echo $this->Form->control('ability_id', ['options' => $abilities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
