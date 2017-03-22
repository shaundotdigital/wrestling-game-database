<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attributes Point'), ['action' => 'edit', $attributesPoint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attributes Point'), ['action' => 'delete', $attributesPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributesPoint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attributes Points'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attributes Point'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attributesPoints view large-9 medium-8 columns content">
    <h3><?= h($attributesPoint->attribute_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler') ?></th>
            <td><?= $attributesPoint->has('wrestler') ? $this->Html->link($attributesPoint->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $attributesPoint->wrestler->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Attribute') ?></th>
            <td><?= $attributesPoint->has('attribute') ? $this->Html->link($attributesPoint->attribute->id, ['controller' => 'Attributes', 'action' => 'view', $attributesPoint->attribute->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attributesPoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($attributesPoint->value) ?></td>
        </tr>
    </table>
</div>
