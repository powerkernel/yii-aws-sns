# yii-aws-sns
Amazon Simple Notification Service for Yii 2.1

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require powerkernel/yii-aws-sns "*"
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
Yii::$app->sns->publish([$arg[]]);
// ...
```
For further instructions refer to the [AWS Documentation page](https://aws.amazon.com/sns/)
