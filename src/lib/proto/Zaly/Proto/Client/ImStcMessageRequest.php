<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: client/im_stc_message.proto

namespace Zaly\Proto\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * action: im.stc.message
 *
 * Generated from protobuf message <code>client.ImStcMessageRequest</code>
 */
class ImStcMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .core.Message list = 1;</code>
     */
    private $list;

    public function __construct() {
        \GPBMetadata\Client\ImStcMessage::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .core.Message list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .core.Message list = 1;</code>
     * @param \Zaly\Proto\Core\Message[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zaly\Proto\Core\Message::class);
        $this->list = $arr;

        return $this;
    }

}
