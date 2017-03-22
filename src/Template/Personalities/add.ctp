<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Personalities'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="personalities form large-9 medium-8 columns content">
    <?= $this->Form->create($personality) ?>
    <fieldset>
        <legend><?= __('Add Personality') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
