<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wrestlers Personality'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalities'), ['controller' => 'Personalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personality'), ['controller' => 'Personalities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersPersonality index large-9 medium-8 columns content">
    <h3><?= __('Wrestlers Personality') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wrestler_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('personalities_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wrestlersPersonality as $wrestlersPersonality): ?>
            <tr>
                <td><?= $this->Number->format($wrestlersPersonality->id) ?></td>
                <td><?= $wrestlersPersonality->has('wrestler') ? $this->Html->link($wrestlersPersonality->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersPersonality->wrestler->id]) : '' ?></td>
                <td><?= $wrestlersPersonality->has('personality') ? $this->Html->link($wrestlersPersonality->personality->name, ['controller' => 'Personalities', 'action' => 'view', $wrestlersPersonality->personality->id]) : '' ?></td>
                <td><?= $this->Number->format($wrestlersPersonality->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wrestlersPersonality->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wrestlersPersonality->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wrestlersPersonality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersPersonality->id)]) ?>
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
