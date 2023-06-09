# [Easy Organization](https://github.com/jucloud/easy-organization)

## 依赖

- php >= 7.4
- composer
- laravel || lumen >= 8.0

## 安装

```Shell
composer require jucloud/laravel-organization:~1.0.0
```

### laravel 用户

#### 配置文件

```Shell
php artisan vendor:publish --provider="JuCloud\LaravelOrganization\ServiceProvider" --tag=easy-organization
```

### lumen 用户

#### 配置文件

请手动复制配置文件

#### service provider

```PHP
$app->register(JuCloud\LaravelOrganization\ServiceProvider::class);
```

## 使用方法

### 天眼查

```PHP
use EasyOrganization;


// keyword 关键词
// page_size 每页大小
// page_index 当前页数
$params = [
    'keyword' => 'xxxxxx有限公司',
    'page_size' => 0, //非必填
    'page_index' => 20, //非必填
];

$result = EasyOrganization::tianyancha($this->config)->search($params);

// 下面这个方法也可以
// return EasyOrganization::search($params);

// 获取机构基本信息
$param = [
    'keyword' => 'xxxxxx有限公司', //关键词
];

//
// 天眼查通过entity_type参数管控查询特殊企业（2-香港公司，3-社会组织，4-律所，5-事业单位，6-基金会，9-新机构）数据

// $param = [
//     'keyword' => 'XXXXXX律师事务所', //关键词
//     'entity_type' => '1'
// ];

// $data = EasyOrganization::tianyancha()->baseinfo($param);
//
//

```

### 企查查

```PHP
use EasyOrganization;

$result = EasyOrganization::qichacha()->search([
    'keyword' => '',
]);

$data = EasyOrganization::qichacha()->baseinfo($param = [
    'keyword' => 'xxxxxx有限公司', //关键词
]);

```

### 启信宝

```PHP
use EasyOrganization;

$result = EasyOrganization::qixin()->search([
    'keyword' => '',
]);

$data = EasyOrganization::qixin()->baseinfo($param = [
    'keyword' => 'xxxxx律师事务所', //关键词
]);

```

具体使用说明请传送至 [https://github.com/jucloud/easy-organization](https://github.com/jucloud/easy-organization)

## License

MIT
