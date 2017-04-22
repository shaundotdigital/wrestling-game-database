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
                ['action' => 'delete', $reaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reaction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reactions form large-9 medium-8 columns content">
    <?= $this->Form->create($reaction) ?>
    <fieldset>
        <legend><?= __('Edit Reaction') ?></legend>
        <?php
            echo $this->Form->control('crowd_reaction');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
