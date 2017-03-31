<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wrestlers Personalty'), ['action' => 'edit', $wrestlersPersonalty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wrestlers Personalty'), ['action' => 'delete', $wrestlersPersonalty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersPersonalty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Personalty'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Personalty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personalities'), ['controller' => 'Personalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personality'), ['controller' => 'Personalities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wrestlersPersonalty view large-9 medium-8 columns content">
    <h3><?= h($wrestlersPersonalty->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler') ?></th>
            <td><?= $wrestlersPersonalty->has('wrestler') ? $this->Html->link($wrestlersPersonalty->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersPersonalty->wrestler->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personality') ?></th>
            <td><?= $wrestlersPersonalty->has('personality') ? $this->Html->link($wrestlersPersonalty->personality->name, ['controller' => 'Personalities', 'action' => 'view', $wrestlersPersonalty->personality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wrestlersPersonalty->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($wrestlersPersonalty->value) ?></td>
        </tr>
    </table>
</div>
