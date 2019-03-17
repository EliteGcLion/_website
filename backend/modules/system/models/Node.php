<?php

namespace backend\modules\system\models;


use backend\models\CommonModel;
use Yii;

/**
 * This is the model class for table "king_node".
 *
 * @property string $id
 * @property string $name 节点名称
 * @property string $url 地址
 * @property string $sort 序号
 * @property int $level 层级
 * @property string $module 模块
 * @property string $icon 图标
 * @property string $pid 父级id
 * @property int $status 状态
 * @property string $remark 备注
 */
class Node extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'king_node';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort', 'level', 'pid', 'status'], 'integer'],
            [['pid'], 'required'],
            [['name', 'url', 'icon', 'remark'], 'string', 'max' => 100],
            [['module'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'sort' => 'Sort',
            'level' => 'Level',
            'module' => 'Module',
            'icon' => 'Icon',
            'pid' => 'Pid',
            'status' => 'Status',
            'remark' => 'Remark',
        ];
    }
}
