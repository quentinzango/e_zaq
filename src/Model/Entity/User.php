<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property int $role_id
 * @property string $name
 * @property string|null $photo
 * @property string $email
 * @property string $password
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 * @property string|null $token
 * @property \Cake\I18n\FrozenTime|null $token_expiration
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Article[] $articles
 * @property \App\Model\Entity\Category[] $categories
 */
class User extends Entity
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
        'role_id' => true,
        'name' => true,
        'photo' => true,
        'email' => true,
        'password' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'token' => true,
        'token_expiration' => true,
        'role' => true,
        'articles' => true,
        'categories' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
        'token',
    ];

     
     protected function _setPassword(string $password)
     {
        $hasher = new DefaultPasswordHasher();
      return $hasher->hash($password);
     }
     
}
