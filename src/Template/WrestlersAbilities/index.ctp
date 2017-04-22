<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wrestlers Ability'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abilities'), ['controller' => 'Abilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ability'), ['controller' => 'Abilities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersAbilities index large-9 medium-8 columns content">
    <h3><?= __('Wrestlers Abilities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wrestler_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wrestlersAbilities as $wrestlersAbility): ?>
            <tr>
                <td><?= $this->Number->format($wrestlersAbility->id) ?></td>
                <td><?= $wrestlersAbility->has('wrestler') ? $this->Html->link($wrestlersAbility->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersAbility->wrestler->id]) : '' ?></td>
                <td><?= $wrestlersAbility->has('ability') ? $this->Html->link($wrestlersAbility->ability->ability_name, ['controller' => 'Abilities', 'action' => 'view', $wrestlersAbility->ability->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wrestlersAbility->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wrestlersAbility->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wrestlersAbility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersAbility->id)]) ?>
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
