<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hit Point'), ['action' => 'edit', $hitPoint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hit Point'), ['action' => 'delete', $hitPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hitPoint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hit Points'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hit Point'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hitPoints view large-9 medium-8 columns content">
    <h3><?= h($hitPoint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hitPoint->id) ?></td>
        </tr>
    </table>
</div>