<?php
/**
  * @var \App\View\AppView $this
  */
?>
<? $titleSymbols = array( '!', ':', '.' ,'\'');?>
<div class="game-header <?=strtolower(str_replace(' ', '-', $game->game_name)) ?>">
  <div class="container game-view">
    <div class="game-boxart left">
      <div class="boxart-image">
        <?= $this->Html->image('games/boxart/' . strtolower(str_replace(' ', '-', (str_replace($titleSymbols, '', $game->game_name)))) . '-' . $game->release_year . '.jpg')?>
      </div>
    </div>
    <div class="content-game-view-header">
      <div class="game-info">
        <span class="game-title"><?= $game->game_name ?> <span class="game-release">(<?= $game->release_year ?>)</span></span>
        <div class="game-platforms">
          <?php foreach ($game->platforms as $platform): ?>
          <a class="btn btn-platform <?= strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $platform->platform_name))))?>" href="#">
            <?= str_replace('Nintendo ', '', (str_replace('Portable', 'P', (str_replace('PlayStation', 'PS1', (str_replace('PlayStation ', 'PS', $platform->platform_name))))))) ?>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="games view large-12 columns content">
    <div class="related">
        <h4><?= __($game->game_name) ?> Roster</h4>
        <?php if (!empty($game->wrestlers)): ?>
          <div class="table-responsive">
            <table class="table">
            <tr>
                  <th scope="col"><?= $this->Paginator->sort('overall') ?></th>
                  <!-- <th></th> -->
                  <th scope="col"><?= __('Wrestler Name') ?></th>
                  <th scope="col"><?= __('Weight Class') ?></th>
                  <th scope="col"><?= __('Reaction') ?></th>
             </tr>
            <?php foreach ($game->wrestlers as $wrestlers): ?>
              <tr>
                  <td><span class="label overall"><?= h($wrestlers->overall) ?></span></td>
                  <!-- <td><?= $this->Html->image('renders/' . strtolower(str_replace(' ', '', $game->game_name)) . '/' . $wrestlers->pac . '-' . $game->release_year . '.png')?> -->
                  <td><?= $this->Html->link(__($wrestlers->wrestler_name), ['action' => '../wrestlers/view', $wrestlers->id]) ?> </td>
                  <td><?= h($wrestlers->weight_class->weight_class) ?></td>
                  <td><?= h($wrestlers->reaction->crowd_reaction) ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <?php endif; ?>
    </div>
  </div>
</div>



           <!-- <tr>
              <th></th>
                <th scope="col"><?= __('Wrestler Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('overall') ?></th>
                <th scope="col"><?= __('Gender Id') ?></th>
                <th scope="col"><?= __('Height Id') ?></th>
                <th scope="col"><?= __('Weight Class Id') ?></th>
                <th scope="col"><?= __('Reaction Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
            </tr>
            <?php foreach ($game->wrestlers as $wrestlers): ?>
            <tr>
                <td><?= $this->Html->image('renders/' . strtolower(str_replace(' ', '', $game->game_name)) . '/' . $wrestlers->pac . '-' . $game->release_year . '.png')?>
                <td><?= $this->Html->link(__($wrestlers->wrestler_name), ['action' => '../wrestlers/view', $wrestlers->id]) ?> </td>
                <td><?= h($wrestlers->overall) ?></td>
                <td><?= h($wrestlers->gender_id) ?></td>
                <td><?= h($wrestlers->height_id) ?></td>
                <td><?= h($wrestlers->weight_class_id) ?></td>
                <td><?= h($wrestlers->reaction_id) ?></td>
                <td><?= h($wrestlers->game_id) ?></td>
            </tr>
            <?php endforeach; ?> -->
