<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wrestlers Ability'), ['action' => 'edit', $wrestlersAbility->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wrestlers Ability'), ['action' => 'delete', $wrestlersAbility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersAbility->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Abilities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Ability'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wrestlersAbilities view large-9 medium-8 columns content">
    <h3><?= h($wrestlersAbility->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler') ?></th>
            <td><?= $wrestlersAbility->has('wrestler') ? $this->Html->link($wrestlersAbility->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersAbility->wrestler->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ability') ?></th>
            <td><?= $wrestlersAbility->has('ability') ? $this->Html->link($wrestlersAbility->ability->ability_name, ['controller' => 'Abilities', 'action' => 'view', $wrestlersAbility->ability->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wrestlersAbility->id) ?></td>
        </tr>
    </table>
</div>
