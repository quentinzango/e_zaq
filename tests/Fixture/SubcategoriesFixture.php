<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubcategoriesFixture
 */
class SubcategoriesFixture extends TestFixture
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
                'categorie_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-20 01:14:10',
                'modified' => '2025-01-20 01:14:10',
                'deleted' => '2025-01-20 01:14:10',
            ],
        ];
        parent::init();
    }
}
