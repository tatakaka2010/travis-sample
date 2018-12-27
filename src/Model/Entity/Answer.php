<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property string $body
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property User $user
 */
class Answer extends Entity
{
    /**
     * @var array 各プロパティが一括代入できるかどうかの情報
     */
    protected $_accessible = [
        'question_id' => true,
        'user_id' => true,
        'body' => true,
        'created' => true,
        'modified' => true
    ];
}
