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
                ['action' => 'delete', $height->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $height->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Heights'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="heights form large-9 medium-8 columns content">
    <?= $this->Form->create($height) ?>
    <fieldset>
        <legend><?= __('Edit Height') ?></legend>
        <?php
            echo $this->Form->control('height');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
