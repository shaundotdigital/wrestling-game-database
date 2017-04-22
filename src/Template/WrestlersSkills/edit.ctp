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
                ['action' => 'delete', $wrestlersSkill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersSkill->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wrestlers Skills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersSkills form large-9 medium-8 columns content">
    <?= $this->Form->create($wrestlersSkill) ?>
    <fieldset>
        <legend><?= __('Edit Wrestlers Skill') ?></legend>
        <?php
            echo $this->Form->control('wrestler_id', ['options' => $wrestlers]);
            echo $this->Form->control('skill_id', ['options' => $skills]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
