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
            <?= $this->Html->link(__('Edit Campo'), ['action' => 'edit', $campo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Campo'), ['action' => 'delete', $campo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Campos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Campo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campos view content">
            <h3><?= h($campo->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($campo->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($campo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($campo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($campo->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($campo->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Lotes') ?></h4>
                <?php if (!empty($campo->lotes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Campo Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($campo->lotes as $lotes) : ?>
                        <tr>
                            <td><?= h($lotes->id) ?></td>
                            <td><?= h($lotes->name) ?></td>
                            <td><?= h($lotes->description) ?></td>
                            <td><?= h($lotes->campo_id) ?></td>
                            <td><?= h($lotes->created) ?></td>
                            <td><?= h($lotes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lotes', 'action' => 'view', $lotes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lotes', 'action' => 'edit', $lotes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lotes', 'action' => 'delete', $lotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
