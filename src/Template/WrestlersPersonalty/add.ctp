<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Wrestlers Personalty'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalities'), ['controller' => 'Personalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personality'), ['controller' => 'Personalities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersPersonalty form large-9 medium-8 columns content">
    <?= $this->Form->create($wrestlersPersonalty) ?>
    <fieldset>
        <legend><?= __('Add Wrestlers Personalty') ?></legend>
        <?php
            echo $this->Form->control('wrestler_id', ['options' => $wrestlers]);
            echo $this->Form->control('personalities_id', ['options' => $personalities]);
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
