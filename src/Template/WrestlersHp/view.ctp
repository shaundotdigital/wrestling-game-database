<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wrestlers Hp'), ['action' => 'edit', $wrestlersHp->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wrestlers Hp'), ['action' => 'delete', $wrestlersHp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersHp->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Hp'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Hp'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wrestlersHp view large-9 medium-8 columns content">
    <h3><?= h($wrestlersHp->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler') ?></th>
            <td><?= $wrestlersHp->has('wrestler') ? $this->Html->link($wrestlersHp->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersHp->wrestler->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wrestlersHp->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Head') ?></th>
            <td><?= $this->Number->format($wrestlersHp->head) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Body') ?></th>
            <td><?= $this->Number->format($wrestlersHp->body) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arms') ?></th>
            <td><?= $this->Number->format($wrestlersHp->arms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Legs') ?></th>
            <td><?= $this->Number->format($wrestlersHp->legs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Hp') ?></th>
            <td><?= $this->Number->format($wrestlersHp->total_hp) ?></td>
        </tr>
    </table>
</div>
