<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ability'), ['action' => 'edit', $ability->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ability'), ['action' => 'delete', $ability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ability->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Abilities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ability Levels'), ['controller' => 'AbilityLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ability Level'), ['controller' => 'AbilityLevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abilities view large-9 medium-8 columns content">
    <h3><?= h($ability->ability_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ability Name') ?></th>
            <td><?= h($ability->ability_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ability Level') ?></th>
            <td><?= $ability->has('ability_level') ? $this->Html->link($ability->ability_level->level, ['controller' => 'AbilityLevels', 'action' => 'view', $ability->ability_level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ability->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Games') ?></h4>
        <?php if (!empty($ability->games)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Name') ?></th>
                <th scope="col"><?= __('Release Year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ability->games as $games): ?>
            <tr>
                <td><?= h($games->id) ?></td>
                <td><?= h($games->game_name) ?></td>
                <td><?= h($games->release_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Games', 'action' => 'view', $games->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Games', 'action' => 'edit', $games->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Games', 'action' => 'delete', $games->id], ['confirm' => __('Are you sure you want to delete # {0}?', $games->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wrestlers') ?></h4>
        <?php if (!empty($ability->wrestlers)): ?>
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
            <?php foreach ($ability->wrestlers as $wrestlers): ?>
            <tr>
                <td><?= h($wrestlers->id) ?></td>
                <td><?= h($wrestlers->wrestler_name) ?></td>
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
