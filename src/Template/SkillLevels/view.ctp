<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Skill Level'), ['action' => 'edit', $skillLevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Skill Level'), ['action' => 'delete', $skillLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skillLevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Skill Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill Level'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="skillLevels view large-9 medium-8 columns content">
    <h3><?= h($skillLevel->skill_levels) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Skill Level') ?></th>
            <td><?= h($skillLevel->skill_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($skillLevel->id) ?></td>
        </tr>
    </table>
</div>
