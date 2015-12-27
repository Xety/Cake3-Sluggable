<?php
namespace Xety\Cake3Sluggable\Test\TestCase\Model\Behavior;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class SluggableBehaviorTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['plugin.Xety\Cake3Sluggable.users'];

    /**
     * setUp
     *
     * @return void
     */
    public function setUp()
    {
        $this->Model = TableRegistry::get('Users');
        $this->Model->addBehavior('Xety/Cake3Sluggable.Sluggable', [
            'field' => 'username'
        ]);
    }

    /**
     * teardown
     *
     * @return void
     */
    public function tearDown()
    {
        parent::tearDown();
        unset($this->Model);
        TableRegistry::clear();
    }

    /**
     * test findSlug
     *
     * @return void
     */
    public function testFindSlug()
    {
        $row = $this->Model->find('slug', [
                        'slug' => 'mariano',
                        'slugField' => 'Users.slug'
                    ])->first();

        $this->assertEquals('Mariano', $row->username);
    }

    /**
     * test beforeSave
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $before = $this->Model->get(1);
        $entity = new Entity(['id' => 1, 'username' => 'Larry Page']);
        $this->Model->save($entity);
        $after = $this->Model->get(1);

        $this->assertEquals('mariano', $before->slug);
        $this->assertEquals('larry-page', $after->slug);
    }
}
