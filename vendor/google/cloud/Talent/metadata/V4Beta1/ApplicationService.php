<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/application_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class ApplicationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Application::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/talent/v4beta1/application_service.protogoogle.cloud.talent.v4beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/talent/v4beta1/application.proto(google/cloud/talent/v4beta1/common.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateApplicationRequest3
parent (	B#�A�A
jobs.googleapis.com/ProfileB
application (2(.google.cloud.talent.v4beta1.ApplicationB�A"N
GetApplicationRequest5
name (	B\'�A�A!
jobs.googleapis.com/Application"�
UpdateApplicationRequestB
application (2(.google.cloud.talent.v4beta1.ApplicationB�A/
update_mask (2.google.protobuf.FieldMask"Q
DeleteApplicationRequest5
name (	B\'�A�A!
jobs.googleapis.com/Application"u
ListApplicationsRequest3
parent (	B#�A�A
jobs.googleapis.com/Profile

page_token (	
	page_size ("�
ListApplicationsResponse>
applications (2(.google.cloud.talent.v4beta1.Application
next_page_token (	?
metadata (2-.google.cloud.talent.v4beta1.ResponseMetadata2�
ApplicationService�
CreateApplication5.google.cloud.talent.v4beta1.CreateApplicationRequest(.google.cloud.talent.v4beta1.Application"^���C">/v4beta1/{parent=projects/*/tenants/*/profiles/*}/applications:*�Aparent,application�
GetApplication2.google.cloud.talent.v4beta1.GetApplicationRequest(.google.cloud.talent.v4beta1.Application"M���@>/v4beta1/{name=projects/*/tenants/*/profiles/*/applications/*}�Aname�
UpdateApplication5.google.cloud.talent.v4beta1.UpdateApplicationRequest(.google.cloud.talent.v4beta1.Application"c���O2J/v4beta1/{application.name=projects/*/tenants/*/profiles/*/applications/*}:*�Aapplication�
DeleteApplication5.google.cloud.talent.v4beta1.DeleteApplicationRequest.google.protobuf.Empty"M���@*>/v4beta1/{name=projects/*/tenants/*/profiles/*/applications/*}�Aname�
ListApplications4.google.cloud.talent.v4beta1.ListApplicationsRequest5.google.cloud.talent.v4beta1.ListApplicationsResponse"O���@>/v4beta1/{parent=projects/*/tenants/*/profiles/*}/applications�Aparentl�Ajobs.googleapis.com�AShttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/jobsB�
com.google.cloud.talent.v4beta1BApplicationServiceProtoPZAgoogle.golang.org/genproto/googleapis/cloud/talent/v4beta1;talent�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

