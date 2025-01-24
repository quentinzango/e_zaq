<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesFixture
 */
class ArticlesFixture extends TestFixture
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
                'user_id' => 1,
                'subcategorie_id' => 1,
                'image' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
                'views' => 1,
                'status' => 1,
                'localization' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-20 01:14:23',
                'modified' => '2025-01-20 01:14:23',
                'deleted' => '2025-01-20 01:14:23',
            ],
        ];
        parent::init();
    }
}
