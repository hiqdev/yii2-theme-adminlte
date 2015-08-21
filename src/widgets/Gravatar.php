<?php

namespace hiqdev\themes\adminlte\widgets;

class Gravatar extends \cebe\gravatar\Gravatar
{
    public $defaultImage = 'identicon';

    public $alt;

    public $size = 25;

    public $defaultOptions = [
        'class' => 'img-circle',
    ];

    public function init()
    {
        parent::init();
        $this->options['alt'] = $this->alt;
        $this->options = array_merge($this->defaultOptions, (array) $this->options);
    }

    protected $_emailHash;

    public function setEmailHash($hash)
    {
        $this->_emailHash = $hash;
    }

    /**
     * @return string
     */
    public function getEmailHash()
    {
        return $this->_emailHash ?: self::hashEmail($this->email);
    }

    static public function hashEmail($email)
    {
        $email = strtolower(trim($email));
        return strpos($email, '@') === false ? $email : md5($email);
    }
}
