<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Personality'), ['action' => 'edit', $personality->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Personality'), ['action' => 'delete', $personality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personality->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personalities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personality'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personalities view large-9 medium-8 columns content">
    <h3><?= h($personality->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($personality->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($personality->id) ?></td>
        </tr>
    </table>
</div>
