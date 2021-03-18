<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campo[]|\Cake\Collection\CollectionInterface $campos
 */
?>
<div class="campos index content">
    <?= $this->Html->link(__('New Campo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Campos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campos as $campo): ?>
                <tr>
                    <td><?= $this->Number->format($campo->id) ?></td>
                    <td><?= h($campo->name) ?></td>
                    <td><?= h($campo->created) ?></td>
                    <td><?= h($campo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $campo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campo->id)]) ?>
                    </td>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
