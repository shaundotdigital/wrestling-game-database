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
                ['action' => 'delete', $skill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Skills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="skills form large-9 medium-8 columns content">
    <?= $this->Form->create($skill) ?>
    <fieldset>
        <legend><?= __('Edit Skill') ?></legend>
        <?php
            echo $this->Form->control('skill_name');
            echo $this->Form->control('skill_levels');
            echo $this->Form->control('wrestlers._ids', ['options' => $wrestlers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
