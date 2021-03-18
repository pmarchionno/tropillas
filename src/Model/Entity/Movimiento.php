<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movimiento Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $fecha
 * @property int|null $campo1_id
 * @property int|null $lote1_id
 * @property int|null $campo2_id
 * @property int|null $lote2_id
 * @property int|null $tropa_id
 * @property int|null $cantidad
 *
 * @property \App\Model\Entity\Campo $campo1, $campo
 * @property \App\Model\Entity\Lote $lote1, $lote
 * @property \App\Model\Entity\Tropa $tropa
 */
class Movimiento extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'fecha' => true,
        'campo1_id' => true,
        'lote1_id' => true,
        'campo2_id' => true,
        'lote2_id' => true,
        'tropa_id' => true,
        'cantidad' => true,
//        'campo1' => true,
//        'lote1' => true,
        'campo' => true,
        'lote' => true,
        'tropa' => true,
    ];
}
