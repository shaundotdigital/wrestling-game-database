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
                ['action' => 'delete', $ability->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ability->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abilities form large-9 medium-8 columns content">
    <?= $this->Form->create($ability) ?>
    <fieldset>
        <legend><?= __('Edit Ability') ?></legend>
        <?php
            echo $this->Form->control('ability_name');
            echo $this->Form->control('ability_level');
            echo $this->Form->control('wrestlers._ids', ['options' => $wrestlers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
