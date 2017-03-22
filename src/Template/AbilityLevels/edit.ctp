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
                ['action' => 'delete', $abilityLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $abilityLevel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ability Levels'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="abilityLevels form large-9 medium-8 columns content">
    <?= $this->Form->create($abilityLevel) ?>
    <fieldset>
        <legend><?= __('Edit Ability Level') ?></legend>
        <?php
            echo $this->Form->control('level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
