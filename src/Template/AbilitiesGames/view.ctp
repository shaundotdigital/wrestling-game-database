<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Abilities Game'), ['action' => 'edit', $abilitiesGame->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Abilities Game'), ['action' => 'delete', $abilitiesGame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abilitiesGame->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Abilities Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abilities Game'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abilitiesGames view large-9 medium-8 columns content">
    <h3><?= h($abilitiesGame->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ability') ?></th>
            <td><?= $abilitiesGame->has('ability') ? $this->Html->link($abilitiesGame->ability->ability_name, ['controller' => 'Abilities', 'action' => 'view', $abilitiesGame->ability->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $abilitiesGame->has('game') ? $this->Html->link($abilitiesGame->game->game_name, ['controller' => 'Games', 'action' => 'view', $abilitiesGame->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($abilitiesGame->id) ?></td>
        </tr>
    </table>
</div>
