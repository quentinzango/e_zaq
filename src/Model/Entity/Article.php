<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $subcategorie_id
 * @property string|null $image
 * @property string $name
 * @property string $description
 * @property int|null $price
 * @property int|null $views
 * @property int|null $status
 * @property string|null $localization
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Subcategory $subcategory
 */
class Article extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'subcategorie_id' => true,
        'image' => true,
        'name' => true,
        'description' => true,
        'price' => true,
        'views' => true,
        'status' => true,
        'localization' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'subcategory' => true,
    ];
}
