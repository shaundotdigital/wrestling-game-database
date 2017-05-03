<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->element('menus/main'); ?>

<div class="wrestlers index large-9 medium-8 columns content">
    <h3><?= __('Wrestlers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wrestler_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('overall') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reaction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wrestlers as $wrestler): ?>
            <tr>
                <td><?= $this->Number->format($wrestler->id) ?></td>
                <td><?= h($wrestler->wrestler_name) ?></td>
                <td><?= $this->Number->format($wrestler->overall) ?></td>
                <td><?= $wrestler->has('gender') ? $this->Html->link($wrestler->gender->gender, ['controller' => 'Genders', 'action' => 'view', $wrestler->gender->id]) : '' ?></td>
                <td><?= $wrestler->has('height') ? $this->Html->link($wrestler->height->height, ['controller' => 'Heights', 'action' => 'view', $wrestler->height->id]) : '' ?></td>
                <td><?= $wrestler->has('weight_class') ? $this->Html->link($wrestler->weight_class->weight_class, ['controller' => 'WeightClasses', 'action' => 'view', $wrestler->weight_class->id]) : '' ?></td>
                <td><?= $wrestler->has('reaction') ? $this->Html->link($wrestler->reaction->crowd_reaction, ['controller' => 'Reactions', 'action' => 'view', $wrestler->reaction->id]) : '' ?></td>
                <td><?= $wrestler->has('game') ? $this->Html->link($wrestler->game->game_name, ['controller' => 'Games', 'action' => 'view', $wrestler->game->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wrestler->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wrestler->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wrestler->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wrestler->id)]) ?>
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
