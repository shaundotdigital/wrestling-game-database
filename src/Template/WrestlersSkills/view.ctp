<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wrestlers Skill'), ['action' => 'edit', $wrestlersSkill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wrestlers Skill'), ['action' => 'delete', $wrestlersSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersSkill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers Skills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestlers Skill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wrestlersSkills view large-9 medium-8 columns content">
    <h3><?= h($wrestlersSkill->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wrestler') ?></th>
            <td><?= $wrestlersSkill->has('wrestler') ? $this->Html->link($wrestlersSkill->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersSkill->wrestler->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skill') ?></th>
            <td><?= $wrestlersSkill->has('skill') ? $this->Html->link($wrestlersSkill->skill->skill_name, ['controller' => 'Skills', 'action' => 'view', $wrestlersSkill->skill->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wrestlersSkill->id) ?></td>
        </tr>
    </table>
</div>
