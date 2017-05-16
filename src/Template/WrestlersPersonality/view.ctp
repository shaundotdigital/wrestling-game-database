<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wrestlers Personality'), ['action' => 'edit', $wrestlersPersonality->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wrestlers Personality'), ['action' => 'delete', $wrestlersPersonality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersPersonality->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Personality'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Personality'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personalities'), ['controller' => 'Personalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personality'), ['controller' => 'Personalities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wrestlersPersonality view large-9 medium-8 columns content">
    <h3><?= h($wrestlersPersonality->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler') ?></th>
            <td><?= $wrestlersPersonality->has('wrestler') ? $this->Html->link($wrestlersPersonality->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersPersonality->wrestler->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personality') ?></th>
            <td><?= $wrestlersPersonality->has('personality') ? $this->Html->link($wrestlersPersonality->personality->name, ['controller' => 'Personalities', 'action' => 'view', $wrestlersPersonality->personality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wrestlersPersonality->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($wrestlersPersonality->value) ?></td>
        </tr>
    </table>
</div>
