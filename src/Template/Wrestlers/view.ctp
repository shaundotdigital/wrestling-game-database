<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
<div class="wrestlers view large-8 columns content">
    <h3><?= h($wrestler->wrestler_name) ?></h3>
    <div class="Attributes">
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($wrestler->attributes_points as $attributesPoints): ?>
            <tr>
                <td><?= h($attributesPoints->attribute->attribute_name) ?></td>
                <td><span class="label attribute"><?= h($attributesPoints->value) ?></span></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    </div>


    <div class="wrestlers view small-4 columns content">

    <div class="related">
        <h4><?= __('Personalty') ?></h4>
        <?php if (!empty($wrestler->wrestlers_personalty)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($wrestler->wrestlers_personalty as $wrestlersPersonalty): ?>
            <tr>
                <td><?= h($wrestlersPersonalty->personality->name) ?></td>
                <td><?= h($wrestlersPersonalty->value) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
      <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Skills') ?></h4>
        <?php if (!empty($wrestler->skills)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($wrestler->skills as $skills): ?>
            <tr>
                <td><?= h($skills->skill_name) ?></td>
                <td><?= h($skills->skill_levels_id) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
