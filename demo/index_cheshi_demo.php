<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  index_cheshi_demo.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/08/15 20:27
 *  文件描述 :  Wx_小程序：发送模板消息示例
 *  历史记录 :  -----------------------
 */
include('../library/AccessTokenRequest.php');
include('../library/TemplateMessagePushLibrary.php');

// 获取success_token
$accessTokenArr = AccessTokenRequest::wxRequest(
    'wx211a9e456c091db4',
    '43be5e180ff000c6089c9765797c2096',
    './project_access_token/'
);

// 发送模板消息
print_r($res = TemplateMessagePushLibrary::sendTemplate(
    $accessTokenArr['data']['access_token'],
    [
        'touser'      => 'ot_Qu5XByDKusFSDRaPRnM6RKm2o',
        'template_id' => 'pU5ulLz_LvwGgOGC3M5RgiGJu9GxA6KK4qMOxkFCrMk',
        'page'        => '/pages/index/index',
        'form_id'     => '1534333903817',
        'data'        => [
            'keyword1' => ['value'=>'卡片名称'],
            'keyword2' => ['value'=>'修改详情'],
            'keyword3' => ['value'=>time()],
        ],
    ]
));

