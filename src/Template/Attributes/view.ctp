<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attribute'), ['action' => 'edit', $attribute->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attribute'), ['action' => 'delete', $attribute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attribute->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes Points'), ['controller' => 'AttributesPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attributes Point'), ['controller' => 'AttributesPoints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attributes view large-9 medium-8 columns content">
    <h3><?= h($attribute->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Attribute Name') ?></th>
            <td><?= h($attribute->attribute_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attribute->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Attributes Points') ?></h4>
        <?php if (!empty($attribute->attributes_points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Wrestler Id') ?></th>
                <th scope="col"><?= __('Attribute Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($attribute->attributes_points as $attributesPoints): ?>
            <tr>
                <td><?= h($attributesPoints->id) ?></td>
                <td><?= h($attributesPoints->wrestler_id) ?></td>
                <td><?= h($attributesPoints->attribute_id) ?></td>
                <td><?= h($attributesPoints->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AttributesPoints', 'action' => 'view', $attributesPoints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AttributesPoints', 'action' => 'edit', $attributesPoints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AttributesPoints', 'action' => 'delete', $attributesPoints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributesPoints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
