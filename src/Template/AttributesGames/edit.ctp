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
                ['action' => 'delete', $attributesGame->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attributesGame->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Attributes Games'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attributesGames form large-9 medium-8 columns content">
    <?= $this->Form->create($attributesGame) ?>
    <fieldset>
        <legend><?= __('Edit Attributes Game') ?></legend>
        <?php
            echo $this->Form->control('attribute_id', ['options' => $attributes]);
            echo $this->Form->control('game_id', ['options' => $games]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
