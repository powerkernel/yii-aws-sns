# yii-aws-sns
Amazon Simple Notification Service for Yii 3.0

[![Latest Stable Version](https://img.shields.io/github/release/powerkernel/yii-aws-sns.svg)](https://github.com/powerkernel/yii-aws-sns/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/powerkernel/yii-aws-sns.svg)](https://packagist.org/packages/powerkernel/yii-aws-sns)
[![GitHub license](https://img.shields.io/github/license/powerkernel/yii-aws-sns.svg)](https://github.com/powerkernel/yii-aws-sns/blob/master/LICENSE)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require powerkernel/yii-aws-sns "*"
```

or add

```
"powerkernel/yii-aws-sns": "*"
```

to the require section of your `composer.json` file.

Usage
-----

To use this extension, simply add the following code in your application configuration:
```
'components' => [
// ...
'sns' => [
            '__class' => powerkernel\sns\AwsSns::class,
            'key' => 'your aws sns key',
            'secret' => 'your aws sns secret',
        ],
// ...        
], 
```
You can then call AWS SNS functions as follows:
```
Yii::$app->sns->client->publish($arg);
// ...
```
For further instructions refer to the [AWS Documentation page](https://aws.amazon.com/sns/)
