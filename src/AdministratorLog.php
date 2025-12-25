<?php
namespace Antidc\Api;

/**
 * 管理员操作日志
 */
class AdministratorLog extends ClientV1{

    /**
     * 请求地址
     * @var string
     */
    public $aLog = 'aLog'; //管理员操作日志列表
    public $logNum = 'log_num'; //获取要删除的日志数量
    public $log = 'log'; //删除日志

    public function delLog()
    {
        echo  '调用成功';
    }
}