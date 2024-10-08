<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: addressbookv2.proto

namespace Addressbookv2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>addressbookv2.Person</code>
 */
class Person extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 id = 2;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string email = 3;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>repeated .addressbookv2.PhoneNumber phones = 4;</code>
     */
    private $phones;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $id
     *     @type string $email
     *     @type array<\Addressbookv2\PhoneNumber>|\Google\Protobuf\Internal\RepeatedField $phones
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Addressbookv2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 id = 2;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .addressbookv2.PhoneNumber phones = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Generated from protobuf field <code>repeated .addressbookv2.PhoneNumber phones = 4;</code>
     * @param array<\Addressbookv2\PhoneNumber>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhones($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Addressbookv2\PhoneNumber::class);
        $this->phones = $arr;

        return $this;
    }

}

