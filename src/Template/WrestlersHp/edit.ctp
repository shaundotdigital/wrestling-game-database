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
                ['action' => 'delete', $wrestlersHp->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersHp->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wrestlers Hp'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersHp form large-9 medium-8 columns content">
    <?= $this->Form->create($wrestlersHp) ?>
    <fieldset>
        <legend><?= __('Edit Wrestlers Hp') ?></legend>
        <?php
            echo $this->Form->control('wrestler_id', ['options' => $wrestlers]);
            echo $this->Form->control('head');
            echo $this->Form->control('body');
            echo $this->Form->control('arms');
            echo $this->Form->control('legs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
