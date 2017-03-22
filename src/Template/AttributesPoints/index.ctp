<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attributes Point'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attributesPoints index large-9 medium-8 columns content">
    <h3><?= __('Attributes Points') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wrestler_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('attribute_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attributesPoints as $attributesPoint): ?>
            <tr>
                <td><?= $this->Number->format($attributesPoint->id) ?></td>
                <td><?= $attributesPoint->has('wrestler') ? $this->Html->link($attributesPoint->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $attributesPoint->wrestler->id]) : '' ?></td>
                <td><?= $attributesPoint->has('attribute') ? $this->Html->link($attributesPoint->attribute->id, ['controller' => 'Attributes', 'action' => 'view', $attributesPoint->attribute->id]) : '' ?></td>
                <td><?= $this->Number->format($attributesPoint->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attributesPoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attributesPoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attributesPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributesPoint->id)]) ?>
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
