<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attributes Game'), ['action' => 'edit', $attributesGame->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attributes Game'), ['action' => 'delete', $attributesGame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributesGame->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attributes Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attributes Game'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attributesGames view large-9 medium-8 columns content">
    <h3><?= h($attributesGame->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Attribute') ?></th>
            <td><?= $attributesGame->has('attribute') ? $this->Html->link($attributesGame->attribute->attribute_name, ['controller' => 'Attributes', 'action' => 'view', $attributesGame->attribute->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $attributesGame->has('game') ? $this->Html->link($attributesGame->game->game_name, ['controller' => 'Games', 'action' => 'view', $attributesGame->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attributesGame->id) ?></td>
        </tr>
    </table>
</div>
