<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campo $campo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Campos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campos form content">
            <?= $this->Form->create($campo) ?>
            <fieldset>
                <legend><?= __('Edit Campo') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
