<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'role_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-01-20 01:13:20',
                'modified' => '2025-01-20 01:13:20',
                'deleted' => '2025-01-20 01:13:20',
                'token' => 'Lorem ipsum dolor sit amet',
                'token_expiration' => '2025-01-20 01:13:20',
            ],
        ];
        parent::init();
    }
}
