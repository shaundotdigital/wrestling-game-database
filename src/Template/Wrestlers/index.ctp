<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
<div class="wrestlers index large-12 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('overall') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Arm Power') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Leg Power') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wrestlers as $wrestler): ?>
            <tr>
                <td><?= $this->Html->link(__($wrestler->wrestler_name), ['action' => 'view', $wrestler->id]) ?> </td>
                <td><span class="label overall"><?= $this->Number->format($wrestler->overall) ?></span></td>
                <?php if (isset($wrestler->attributes_points[1])) { ?>
                  <td><span class="label attribute"><?= h($wrestler->attributes_points[1]->value) ?></span></td>
                <?php } else { ?>
                  <td><span class="label attribute">NA</span></td>
                <?php } ?>

                <?php if (isset($wrestler->attributes_points[3])) { ?>
                  <td><span class="label attribute"><?= h($wrestler->attributes_points[3]->value) ?></span></td>
                <?php } else { ?>
                  <td><span class="label attribute">NA</span></td>
                <?php } ?>
                <?php /* foreach ($wrestler->attributes_points[1] as $attributesPoints):
                  if ($attributesPoints->attribute_id == "1" || $attributesPoints->attribute_id == "3"): ?>
                    <?= h($attributesPoints->attribute->attribute_name) ?>
                    <td><span class="label attribute"><?= h($attributesPoints->value) ?></span></td>
                <?php endif; ?>
                <?php endforeach; */ ?>
                <td><?= $wrestler->has('height') ? $this->Html->link($wrestler->height->height, ['controller' => 'Heights', 'action' => 'view', $wrestler->height->id]) : '' ?></td>
                <td><?= $wrestler->has('weight_class') ? $this->Html->link($wrestler->weight_class->weight_class, ['controller' => 'WeightClasses', 'action' => 'view', $wrestler->weight_class->id]) : '' ?></td>
                <td><?= $wrestler->has('game') ? $this->Html->link($wrestler->game->game_name, ['controller' => 'Games', 'action' => 'view', $wrestler->game->id]) : '' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} of {{count}} total')]) ?></p>
</div>
</div>
</div>
