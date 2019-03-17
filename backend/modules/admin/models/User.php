<?php

namespace backend\modules\admin\models;

use backend\models\CommonModel;
use Yii;

/**
 * This is the model class for table "king_user".
 *
 * @property int $id
 * @property string $username 登陆账号
 * @property string $passsword 密码
 * @property string $name 用户名
 * @property string $tel 电话
 * @property string $last_login_ip 最后登陆id地址
 * @property int $last_login_times 最后登陆事件
 * @property int $login_times 在线时间
 * @property int $status 用户状态
 * @property int $addtime 添加时间
 */
class User extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'last_login_times', 'login_times', 'status', 'addtime'], 'integer'],
            [['username', 'password'], 'string', 'max' => 100],
            [['name', 'tel'], 'string', 'max' => 30],
            [['last_login_ip'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'tel' => 'Tel',
            'last_login_ip' => 'Last Login Ip',
            'last_login_times' => 'Last Login Times',
            'login_times' => 'Login Times',
            'status' => 'Status',
            'addtime' => 'Addtime',
        ];
    }
}
