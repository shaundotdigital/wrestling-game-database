<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wrestlers Hp'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersHp index large-9 medium-8 columns content">
    <h3><?= __('Wrestlers Hp') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wrestler_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('head') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('legs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_hp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wrestlersHp as $wrestlersHp): ?>
            <tr>
                <td><?= $this->Number->format($wrestlersHp->id) ?></td>
                <td><?= $wrestlersHp->has('wrestler') ? $this->Html->link($wrestlersHp->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersHp->wrestler->id]) : '' ?></td>
                <td><?= $this->Number->format($wrestlersHp->head) ?></td>
                <td><?= $this->Number->format($wrestlersHp->body) ?></td>
                <td><?= $this->Number->format($wrestlersHp->arms) ?></td>
                <td><?= $this->Number->format($wrestlersHp->legs) ?></td>
                <td><?= $this->Number->format($wrestlersHp->total_hp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wrestlersHp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wrestlersHp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wrestlersHp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersHp->id)]) ?>
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
