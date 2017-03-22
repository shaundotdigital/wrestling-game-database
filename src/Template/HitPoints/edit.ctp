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
                ['action' => 'delete', $hitPoint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hitPoint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hit Points'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hitPoints form large-9 medium-8 columns content">
    <?= $this->Form->create($hitPoint) ?>
    <fieldset>
        <legend><?= __('Edit Hit Point') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
