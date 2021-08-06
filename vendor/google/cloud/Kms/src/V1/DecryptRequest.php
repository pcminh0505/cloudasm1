<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.Decrypt][google.cloud.kms.v1.KeyManagementService.Decrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.DecryptRequest</code>
 */
class DecryptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to use for decryption.
     * The server will choose the appropriate version.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The encrypted data originally returned in
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext].
     *
     * Generated from protobuf field <code>bytes ciphertext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ciphertext = '';
    /**
     * Optional. Optional data that must match the data originally supplied in
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $additional_authenticated_data = '';
    /**
     * Optional. An optional CRC32C checksum of the [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the
     * received [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]) is equal to
     * [DecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.DecryptRequest.ciphertext_crc32c], and if so, perform a limited number
     * of retries. A persistent mismatch may indicate an issue in your computation
     * of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ciphertext_crc32c = null;
    /**
     * Optional. An optional CRC32C checksum of the
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]. If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the received
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]) is equal to
     * [DecryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data_crc32c], and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $additional_authenticated_data_crc32c = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to use for decryption.
     *           The server will choose the appropriate version.
     *     @type string $ciphertext
     *           Required. The encrypted data originally returned in
     *           [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext].
     *     @type string $additional_authenticated_data
     *           Optional. Optional data that must match the data originally supplied in
     *           [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     *     @type \Google\Protobuf\Int64Value $ciphertext_crc32c
     *           Optional. An optional CRC32C checksum of the [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]. If
     *           specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the
     *           received [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext] using this checksum.
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     *           fails. If you receive a checksum error, your client should verify that
     *           CRC32C([DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]) is equal to
     *           [DecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.DecryptRequest.ciphertext_crc32c], and if so, perform a limited number
     *           of retries. A persistent mismatch may indicate an issue in your computation
     *           of the CRC32C checksum.
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     *           NOTE: This field is in Beta.
     *     @type \Google\Protobuf\Int64Value $additional_authenticated_data_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]. If specified,
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the received
     *           [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data] using this checksum.
     *           [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     *           fails. If you receive a checksum error, your client should verify that
     *           CRC32C([DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]) is equal to
     *           [DecryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data_crc32c], and if so, perform
     *           a limited number of retries. A persistent mismatch may indicate an issue in
     *           your computation of the CRC32C checksum.
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     *           NOTE: This field is in Beta.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to use for decryption.
     * The server will choose the appropriate version.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to use for decryption.
     * The server will choose the appropriate version.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The encrypted data originally returned in
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext].
     *
     * Generated from protobuf field <code>bytes ciphertext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCiphertext()
    {
        return $this->ciphertext;
    }

    /**
     * Required. The encrypted data originally returned in
     * [EncryptResponse.ciphertext][google.cloud.kms.v1.EncryptResponse.ciphertext].
     *
     * Generated from protobuf field <code>bytes ciphertext = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCiphertext($var)
    {
        GPBUtil::checkString($var, False);
        $this->ciphertext = $var;

        return $this;
    }

    /**
     * Optional. Optional data that must match the data originally supplied in
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAdditionalAuthenticatedData()
    {
        return $this->additional_authenticated_data;
    }

    /**
     * Optional. Optional data that must match the data originally supplied in
     * [EncryptRequest.additional_authenticated_data][google.cloud.kms.v1.EncryptRequest.additional_authenticated_data].
     *
     * Generated from protobuf field <code>bytes additional_authenticated_data = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalAuthenticatedData($var)
    {
        GPBUtil::checkString($var, False);
        $this->additional_authenticated_data = $var;

        return $this;
    }

    /**
     * Optional. An optional CRC32C checksum of the [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the
     * received [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]) is equal to
     * [DecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.DecryptRequest.ciphertext_crc32c], and if so, perform a limited number
     * of retries. A persistent mismatch may indicate an issue in your computation
     * of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getCiphertextCrc32C()
    {
        return isset($this->ciphertext_crc32c) ? $this->ciphertext_crc32c : null;
    }

    public function hasCiphertextCrc32C()
    {
        return isset($this->ciphertext_crc32c);
    }

    public function clearCiphertextCrc32C()
    {
        unset($this->ciphertext_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getCiphertextCrc32C()</code>

     * Optional. An optional CRC32C checksum of the [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the
     * received [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]) is equal to
     * [DecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.DecryptRequest.ciphertext_crc32c], and if so, perform a limited number
     * of retries. A persistent mismatch may indicate an issue in your computation
     * of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getCiphertextCrc32CValue()
    {
        return $this->readWrapperValue("ciphertext_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the
     * received [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]) is equal to
     * [DecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.DecryptRequest.ciphertext_crc32c], and if so, perform a limited number
     * of retries. A persistent mismatch may indicate an issue in your computation
     * of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCiphertextCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->ciphertext_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the
     * received [DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext]) is equal to
     * [DecryptRequest.ciphertext_crc32c][google.cloud.kms.v1.DecryptRequest.ciphertext_crc32c], and if so, perform a limited number
     * of retries. A persistent mismatch may indicate an issue in your computation
     * of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ciphertext_crc32c = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCiphertextCrc32CValue($var)
    {
        $this->writeWrapperValue("ciphertext_crc32c", $var);
        return $this;}

    /**
     * Optional. An optional CRC32C checksum of the
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]. If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the received
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]) is equal to
     * [DecryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data_crc32c], and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getAdditionalAuthenticatedDataCrc32C()
    {
        return isset($this->additional_authenticated_data_crc32c) ? $this->additional_authenticated_data_crc32c : null;
    }

    public function hasAdditionalAuthenticatedDataCrc32C()
    {
        return isset($this->additional_authenticated_data_crc32c);
    }

    public function clearAdditionalAuthenticatedDataCrc32C()
    {
        unset($this->additional_authenticated_data_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getAdditionalAuthenticatedDataCrc32C()</code>

     * Optional. An optional CRC32C checksum of the
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]. If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the received
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]) is equal to
     * [DecryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data_crc32c], and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getAdditionalAuthenticatedDataCrc32CValue()
    {
        return $this->readWrapperValue("additional_authenticated_data_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]. If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the received
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]) is equal to
     * [DecryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data_crc32c], and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAdditionalAuthenticatedDataCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->additional_authenticated_data_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]. If specified,
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will verify the integrity of the received
     * [DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data] using this checksum.
     * [KeyManagementService][google.cloud.kms.v1.KeyManagementService] will report an error if the checksum verification
     * fails. If you receive a checksum error, your client should verify that
     * CRC32C([DecryptRequest.additional_authenticated_data][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data]) is equal to
     * [DecryptRequest.additional_authenticated_data_crc32c][google.cloud.kms.v1.DecryptRequest.additional_authenticated_data_crc32c], and if so, perform
     * a limited number of retries. A persistent mismatch may indicate an issue in
     * your computation of the CRC32C checksum.
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     * NOTE: This field is in Beta.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value additional_authenticated_data_crc32c = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAdditionalAuthenticatedDataCrc32CValue($var)
    {
        $this->writeWrapperValue("additional_authenticated_data_crc32c", $var);
        return $this;}

}

