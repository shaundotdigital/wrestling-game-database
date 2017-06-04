<?php
/**
* @var \App\View\AppView $this
*/
?>
<section class="section-header games-head">
  <div class="container">
    <div class="wrapper">
      <div class="section-masthead" itemprop="description">
        <h1>Game Library</h1>
        <p>Browese your favourite Wrestling video game.</p>
      </div>

    </div>
  </div>
</section>
<div class="container">
  <div class="content push-footer">
    <div class="games-library index large-12 columns content">
      <div class="panel-table">
        <?php foreach ($games as $game): ?>
          <? $titleSymbols = array( '!', ':', '.' ,'\'');?>
          <div class="game item col-3 <?= strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $game->game_name))))?>">
            <div class="games-library panel">
              <?= $this->Html->image('games/poster-art/' . strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $game->game_name)))) . '-' . $game->release_year . '.jpg', ['url' => ['controller' => 'Games', 'action' => 'view', $game->id]])?>
              <div class="game-name">
                <h3><?= $this->Html->link(__(($game->game_name)), ['controller' => 'Games', 'action' => 'view', $game->id]) ?></h3>
              </div>
              <div class="game-year">
                Release Year: <?= h($game->release_year) ?>
              </div>
              <div class="game-platforms">
                <?php foreach ($game->platforms as $platform): ?>
                  <div class="btn btn-platform <?= strtolower(str_replace($titleSymbols, '', (str_replace(' ', '-', $platform->platform_name))))?>" href="#">
                    <?= str_replace('Nintendo ', '', (str_replace('Portable', 'P', (str_replace('PlayStation', 'PS1', (str_replace('PlayStation ', 'PS', $platform->platform_name))))))) ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
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
</div>
