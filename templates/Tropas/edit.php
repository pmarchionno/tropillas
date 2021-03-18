<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tropa $tropa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tropa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tropa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tropas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tropas form content">
            <?= $this->Form->create($tropa) ?>
            <fieldset>
                <legend><?= __('Edit Tropa') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
