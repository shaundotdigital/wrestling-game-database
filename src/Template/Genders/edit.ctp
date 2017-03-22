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
                ['action' => 'delete', $gender->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gender->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Genders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="genders form large-9 medium-8 columns content">
    <?= $this->Form->create($gender) ?>
    <fieldset>
        <legend><?= __('Edit Gender') ?></legend>
        <?php
            echo $this->Form->control('gender');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
