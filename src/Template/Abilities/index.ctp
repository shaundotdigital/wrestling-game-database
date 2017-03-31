<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ability Levels'), ['controller' => 'AbilityLevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability Level'), ['controller' => 'AbilityLevels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abilities index large-9 medium-8 columns content">
    <h3><?= __('Abilities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability_levels_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($abilities as $ability): ?>
            <tr>
                <td><?= $this->Number->format($ability->id) ?></td>
                <td><?= h($ability->ability_name) ?></td>
                <td><?= $ability->has('ability_level') ? $this->Html->link($ability->ability_level->level, ['controller' => 'AbilityLevels', 'action' => 'view', $ability->ability_level->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ability->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ability->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ability->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
