<?php

namespace App\Model\Table;

use App\Model\Entity\Bucket;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 *
 * @author artem
 */
class JobsTable extends Table {
    
     public function initialize(array $config) {
        parent::initialize($config);

        $this->table('jobs');
        $this->displayField('id');
        $this->primaryKey('id');

    }
}
