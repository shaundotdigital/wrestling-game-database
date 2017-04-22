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
                ['action' => 'delete', $skillLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Skill Levels'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="skillLevels form large-9 medium-8 columns content">
    <?= $this->Form->create($skillLevel) ?>
    <fieldset>
        <legend><?= __('Edit Skill Level') ?></legend>
        <?php
            echo $this->Form->control('skill_level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
