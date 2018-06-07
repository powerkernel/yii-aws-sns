<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

namespace powerkernel\sns;

use Aws\Credentials\Credentials;
use Aws\Sns\Exception\SnsException;
use Aws\Sns\SnsClient;
use yii\base\InvalidConfigException;

/**
 * Class AwsSns
 * @package powerkernel\sns
 */
class AwsSns extends \yii\base\Component
{
    public $key;
    public $secret;
    public $region;

    private $_client;
    private $_credentials;

    /**
     * @inheritdoc
     * @throws InvalidConfigException
     */
    public function init()
    {
        if (empty($this->key)) {
            throw new InvalidConfigException(get_class($this) . '::key cannot be empty.');
        }
        if (empty($this->secret)) {
            throw new InvalidConfigException(get_class($this) . '::secret cannot be empty.');
        }
        if (empty($this->region)) {
            throw new InvalidConfigException(get_class($this) . '::region cannot be empty.');
        }
        $this->_credentials = new Credentials($this->key, $this->secret);
        parent::init();
    }

    /**
     * Get Client
     */
    public function getClient()
    {
        if (!$this->_client) {
            try {
                $this->_client = new SnsClient([
                    'credentials' => $this->_credentials,
                    'region' => $this->region,
                    'version' => '2010-03-31'
                ]);
            } catch (SnsException $e) {
                return $e->getMessage();
            }
        }
        return $this->_client;
    }
}