<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Skills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skill Levels'), ['controller' => 'SkillLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill Level'), ['controller' => 'SkillLevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="skills view large-9 medium-8 columns content">
    <h3><?= h($skill->skill_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Skill Name') ?></th>
            <td><?= h($skill->skill_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skill Level') ?></th>
            <td><?= $skill->has('skill_level') ? $this->Html->link($skill->skill_level->skill_levels, ['controller' => 'SkillLevels', 'action' => 'view', $skill->skill_level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($skill->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Wrestlers') ?></h4>
        <?php if (!empty($skill->wrestlers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Wrestler Name') ?></th>
                <th scope="col"><?= __('Overall') ?></th>
                <th scope="col"><?= __('Gender Id') ?></th>
                <th scope="col"><?= __('Height Id') ?></th>
                <th scope="col"><?= __('Weight Class Id') ?></th>
                <th scope="col"><?= __('Reaction Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skill->wrestlers as $wrestlers): ?>
            <tr>
                <td><?= h($wrestlers->id) ?></td>
                <td><?= h($wrestler->first_name) ?></td>
<td><?= h($wrestler->nickname) ?></td>
<td><?= h($wrestler->last_name) ?></td>
<td><?= h($wrestler->wrestler_name) ?></td>
                <td><?= h($wrestlers->overall) ?></td>
                <td><?= h($wrestlers->gender_id) ?></td>
                <td><?= h($wrestlers->height_id) ?></td>
                <td><?= h($wrestlers->weight_class_id) ?></td>
                <td><?= h($wrestlers->reaction_id) ?></td>
                <td><?= h($wrestlers->game_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Wrestlers', 'action' => 'view', $wrestlers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Wrestlers', 'action' => 'edit', $wrestlers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wrestlers', 'action' => 'delete', $wrestlers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
