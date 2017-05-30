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
            <div class="table">
              <div class="table-row">
                <div class="table-head"><?= $this->Paginator->sort('OVR') ?></div>
                <div class="table-head"><?= $this->Paginator->sort('Wrestler Name') ?></div>
                <div class="table-head"><?= $this->Paginator->sort('Weight Class') ?></div>
                <div class="table-head"><?= $this->Paginator->sort('Reaction') ?></div>
              </div>
            <?php foreach ($game->wrestlers as $wrestlers): ?>
              <div class="table-row">
                <div class="table-cell"><span class="label overall"><?= h($wrestlers->overall) ?></span></div>
                <div class="table-cell"><?= $this->Html->link(__($wrestlers->wrestler_name), ['action' => '../wrestlers/view', $wrestlers->id]) ?></div>
                <div class="table-cell"><?= h($wrestlers->weight_class->weight_class) ?></div>
                <div class="table-cell"><?= h($wrestlers->reaction->crowd_reaction) ?></div>
              </div>
            <?php endforeach; ?>
            </div>
          </table>
        </div>
        <?php endif; ?>
    </div>
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
