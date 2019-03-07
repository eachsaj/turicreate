<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;

use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes an enum type.
 * </pre>
 *
 * Protobuf type <code>google.protobuf.EnumDescriptorProto</code>
 */
class EnumDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>optional string name = 1;</code>
     */
    private $name = '';
    private $has_name = false;
    /**
     * <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     */
    private $value;
    private $has_value = false;
    /**
     * <code>optional .google.protobuf.EnumOptions options = 3;</code>
     */
    private $options = null;
    private $has_options = false;

    public function __construct() {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct();
    }

    /**
     * <code>optional string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>optional string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        $this->has_name = true;
    }

    public function hasName()
    {
        return $this->has_name;
    }

    /**
     * <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>repeated .google.protobuf.EnumValueDescriptorProto value = 2;</code>
     */
    public function setValue(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\EnumValueDescriptorProto::class);
        $this->value = $arr;
        $this->has_value = true;
    }

    public function hasValue()
    {
        return $this->has_value;
    }

    /**
     * <code>optional .google.protobuf.EnumOptions options = 3;</code>
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * <code>optional .google.protobuf.EnumOptions options = 3;</code>
     */
    public function setOptions(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Internal\EnumOptions::class);
        $this->options = $var;
        $this->has_options = true;
    }

    public function hasOptions()
    {
        return $this->has_options;
    }

}
