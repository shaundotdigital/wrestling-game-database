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
                ['action' => 'delete', $weightClass->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $weightClass->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Weight Classes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weightClasses form large-9 medium-8 columns content">
    <?= $this->Form->create($weightClass) ?>
    <fieldset>
        <legend><?= __('Edit Weight Class') ?></legend>
        <?php
            echo $this->Form->control('weight_class');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
