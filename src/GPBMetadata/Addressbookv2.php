<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: addressbookv2.proto

namespace GPBMetadata;

class Addressbookv2
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x90\x03\x0A\x13addressbookv2.proto\x12\x0Daddressbookv2\"E\x0A\x0BPhoneNumber\x12\x0E\x0A\x06number\x18\x01 \x01(\x09\x12&\x0A\x04type\x18\x02 \x01(\x0E2\x18.addressbookv2.PhoneType\"]\x0A\x06Person\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0A\x0A\x02id\x18\x02 \x01(\x05\x12\x0D\x0A\x05email\x18\x03 \x01(\x09\x12*\x0A\x06phones\x18\x04 \x03(\x0B2\x1A.addressbookv2.PhoneNumber\"4\x0A\x0BAddressBook\x12%\x0A\x06people\x18\x01 \x03(\x0B2\x15.addressbookv2.Person*h\x0A\x09PhoneType\x12\x1A\x0A\x16PHONE_TYPE_UNSPECIFIED\x10\x00\x12\x15\x0A\x11PHONE_TYPE_MOBILE\x10\x01\x12\x13\x0A\x0FPHONE_TYPE_HOME\x10\x02\x12\x13\x0A\x0FPHONE_TYPE_WORK\x10\x03B\x1CZ\x1Aprotos/pbs/addressbookv2bpb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

