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
            <?= $this->Html->link(__('Edit Tropa'), ['action' => 'edit', $tropa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tropa'), ['action' => 'delete', $tropa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tropa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tropas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tropa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tropas view content">
            <h3><?= h($tropa->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tropa->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tropa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($tropa->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tropa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tropa->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tropa->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Movimientos') ?></h4>
                <?php if (!empty($tropa->movimientos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Campo1 Id') ?></th>
                            <th><?= __('Lote1 Id') ?></th>
                            <th><?= __('Campo2 Id') ?></th>
                            <th><?= __('Lote2 Id') ?></th>
                            <th><?= __('Tropa Id') ?></th>
                            <th><?= __('Cantidad') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tropa->movimientos as $movimientos) : ?>
                        <tr>
                            <td><?= h($movimientos->id) ?></td>
                            <td><?= h($movimientos->fecha) ?></td>
                            <td><?= h($movimientos->campo1_id) ?></td>
                            <td><?= h($movimientos->lote1_id) ?></td>
                            <td><?= h($movimientos->campo2_id) ?></td>
                            <td><?= h($movimientos->lote2_id) ?></td>
                            <td><?= h($movimientos->tropa_id) ?></td>
                            <td><?= h($movimientos->cantidad) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Movimientos', 'action' => 'view', $movimientos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Movimientos', 'action' => 'edit', $movimientos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movimientos', 'action' => 'delete', $movimientos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientos->id)]) ?>
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
