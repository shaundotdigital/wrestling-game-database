
<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($games) ?>
    <fieldset>
        <legend><?= __('Select Game') ?></legend>
        <?php
            echo $this->Form->select('game_id', $games);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <p id="get">test</p>
    <?= $this->Form->end() ?>

    <div id="next"></div>
</div>
