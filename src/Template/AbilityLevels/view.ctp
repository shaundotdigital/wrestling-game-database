<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ability Level'), ['action' => 'edit', $abilityLevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ability Level'), ['action' => 'delete', $abilityLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abilityLevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ability Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability Level'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abilityLevels view large-9 medium-8 columns content">
    <h3><?= h($abilityLevel->level) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= h($abilityLevel->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($abilityLevel->id) ?></td>
        </tr>
    </table>
</div>
