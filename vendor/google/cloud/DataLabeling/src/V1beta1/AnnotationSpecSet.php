<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation_spec_set.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An AnnotationSpecSet is a collection of label definitions. For example, in
 * image classification tasks, you define a set of possible labels for images as
 * an AnnotationSpecSet. An AnnotationSpecSet is immutable upon creation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.AnnotationSpecSet</code>
 */
class AnnotationSpecSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The AnnotationSpecSet resource name in the following format:
     * "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The display name for AnnotationSpecSet that you define when you
     * create it. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Optional. User-provided description of the annotation specification set.
     * The description can be up to 10,000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Required. The array of AnnotationSpecs that you define when you create the
     * AnnotationSpecSet. These are the possible labels for the labeling task.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_specs = 4;</code>
     */
    private $annotation_specs;
    /**
     * Output only. The names of any related resources that are blocking changes
     * to the annotation spec set.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 5;</code>
     */
    private $blocking_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The AnnotationSpecSet resource name in the following format:
     *           "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *     @type string $display_name
     *           Required. The display name for AnnotationSpecSet that you define when you
     *           create it. Maximum of 64 characters.
     *     @type string $description
     *           Optional. User-provided description of the annotation specification set.
     *           The description can be up to 10,000 characters long.
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec[]|\Google\Protobuf\Internal\RepeatedField $annotation_specs
     *           Required. The array of AnnotationSpecs that you define when you create the
     *           AnnotationSpecSet. These are the possible labels for the labeling task.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $blocking_resources
     *           Output only. The names of any related resources that are blocking changes
     *           to the annotation spec set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\AnnotationSpecSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The AnnotationSpecSet resource name in the following format:
     * "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The AnnotationSpecSet resource name in the following format:
     * "projects/<var>{project_id}</var>/annotationSpecSets/<var>{annotation_spec_set_id}</var>"
     *
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
     * Required. The display name for AnnotationSpecSet that you define when you
     * create it. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name for AnnotationSpecSet that you define when you
     * create it. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-provided description of the annotation specification set.
     * The description can be up to 10,000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. User-provided description of the annotation specification set.
     * The description can be up to 10,000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. The array of AnnotationSpecs that you define when you create the
     * AnnotationSpecSet. These are the possible labels for the labeling task.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_specs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationSpecs()
    {
        return $this->annotation_specs;
    }

    /**
     * Required. The array of AnnotationSpecs that you define when you create the
     * AnnotationSpecSet. These are the possible labels for the labeling task.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_specs = 4;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotationSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec::class);
        $this->annotation_specs = $arr;

        return $this;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the annotation spec set.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockingResources()
    {
        return $this->blocking_resources;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the annotation spec set.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockingResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blocking_resources = $arr;

        return $this;
    }

}

