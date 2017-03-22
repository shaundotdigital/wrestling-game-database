<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wrestlers Skill'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wrestlers'), ['controller' => 'Wrestlers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wrestler'), ['controller' => 'Wrestlers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skills'), ['controller' => 'Skills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skills', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wrestlersSkills index large-9 medium-8 columns content">
    <h3><?= __('Wrestlers Skills') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wrestler_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skill_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wrestlersSkills as $wrestlersSkill): ?>
            <tr>
                <td><?= $this->Number->format($wrestlersSkill->id) ?></td>
                <td><?= $wrestlersSkill->has('wrestler') ? $this->Html->link($wrestlersSkill->wrestler->wrestler_name, ['controller' => 'Wrestlers', 'action' => 'view', $wrestlersSkill->wrestler->id]) : '' ?></td>
                <td><?= $wrestlersSkill->has('skill') ? $this->Html->link($wrestlersSkill->skill->skill_name, ['controller' => 'Skills', 'action' => 'view', $wrestlersSkill->skill->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wrestlersSkill->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wrestlersSkill->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wrestlersSkill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestlersSkill->id)]) ?>
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
