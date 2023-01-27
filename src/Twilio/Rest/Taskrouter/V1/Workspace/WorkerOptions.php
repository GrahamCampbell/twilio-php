<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Options;
use Twilio\Values;

abstract class WorkerOptions
{
    /**
     * @param string $activitySid The SID of a valid Activity that will describe the new Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information. If not provided, the new Worker's initial state is the `default_activity_sid` configured on the Workspace.
     * @param string $attributes A valid JSON string that describes the new Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     * @return CreateWorkerOptions Options builder
     */
    public static function create(
        
        string $activitySid = Values::NONE,
        string $attributes = Values::NONE

    ): CreateWorkerOptions
    {
        return new CreateWorkerOptions(
            $activitySid,
            $attributes
        );
    }

    /**
     * @param string $ifMatch The If-Match HTTP request header
     * @return DeleteWorkerOptions Options builder
     */
    public static function delete(
        
        string $ifMatch = Values::NONE

    ): DeleteWorkerOptions
    {
        return new DeleteWorkerOptions(
            $ifMatch
        );
    }


    /**
     * @param string $activityName The `activity_name` of the Worker resources to read.
     * @param string $activitySid The `activity_sid` of the Worker resources to read.
     * @param string $available Whether to return only Worker resources that are available or unavailable. Can be `true`, `1`, or `yes` to return Worker resources that are available, and `false`, or any value returns the Worker resources that are not available.
     * @param string $friendlyName The `friendly_name` of the Worker resources to read.
     * @param string $targetWorkersExpression Filter by Workers that would match an expression on a TaskQueue. This is helpful for debugging which Workers would match a potential queue.
     * @param string $taskQueueName The `friendly_name` of the TaskQueue that the Workers to read are eligible for.
     * @param string $taskQueueSid The SID of the TaskQueue that the Workers to read are eligible for.
     * @param string $ordering Sorting parameter for Workers
     * @return ReadWorkerOptions Options builder
     */
    public static function read(
        
        string $activityName = Values::NONE,
        string $activitySid = Values::NONE,
        string $available = Values::NONE,
        string $friendlyName = Values::NONE,
        string $targetWorkersExpression = Values::NONE,
        string $taskQueueName = Values::NONE,
        string $taskQueueSid = Values::NONE,
        string $ordering = Values::NONE

    ): ReadWorkerOptions
    {
        return new ReadWorkerOptions(
            $activityName,
            $activitySid,
            $available,
            $friendlyName,
            $targetWorkersExpression,
            $taskQueueName,
            $taskQueueSid,
            $ordering
        );
    }

    /**
     * @param string $activitySid The SID of a valid Activity that will describe the Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information.
     * @param string $attributes The JSON string that describes the Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     * @param string $friendlyName A descriptive string that you create to describe the Worker. It can be up to 64 characters long.
     * @param bool $rejectPendingReservations Whether to reject the Worker's pending reservations. This option is only valid if the Worker's new [Activity](https://www.twilio.com/docs/taskrouter/api/activity) resource has its `availability` property set to `False`.
     * @param string $ifMatch The If-Match HTTP request header
     * @return UpdateWorkerOptions Options builder
     */
    public static function update(
        
        string $activitySid = Values::NONE,
        string $attributes = Values::NONE,
        string $friendlyName = Values::NONE,
        bool $rejectPendingReservations = Values::NONE,
        string $ifMatch = Values::NONE

    ): UpdateWorkerOptions
    {
        return new UpdateWorkerOptions(
            $activitySid,
            $attributes,
            $friendlyName,
            $rejectPendingReservations,
            $ifMatch
        );
    }

}

class CreateWorkerOptions extends Options
    {
    /**
     * @param string $activitySid The SID of a valid Activity that will describe the new Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information. If not provided, the new Worker's initial state is the `default_activity_sid` configured on the Workspace.
     * @param string $attributes A valid JSON string that describes the new Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     */
    public function __construct(
        
        string $activitySid = Values::NONE,
        string $attributes = Values::NONE

    ) {
        $this->options['activitySid'] = $activitySid;
        $this->options['attributes'] = $attributes;
    }

    /**
     * The SID of a valid Activity that will describe the new Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information. If not provided, the new Worker's initial state is the `default_activity_sid` configured on the Workspace.
     *
     * @param string $activitySid The SID of a valid Activity that will describe the new Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information. If not provided, the new Worker's initial state is the `default_activity_sid` configured on the Workspace.
     * @return $this Fluent Builder
     */
    public function setActivitySid(string $activitySid): self
    {
        $this->options['activitySid'] = $activitySid;
        return $this;
    }

    /**
     * A valid JSON string that describes the new Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     *
     * @param string $attributes A valid JSON string that describes the new Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.CreateWorkerOptions ' . $options . ']';
    }
}

class DeleteWorkerOptions extends Options
    {
    /**
     * @param string $ifMatch The If-Match HTTP request header
     */
    public function __construct(
        
        string $ifMatch = Values::NONE

    ) {
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
     * The If-Match HTTP request header
     *
     * @param string $ifMatch The If-Match HTTP request header
     * @return $this Fluent Builder
     */
    public function setIfMatch(string $ifMatch): self
    {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.DeleteWorkerOptions ' . $options . ']';
    }
}


class ReadWorkerOptions extends Options
    {
    /**
     * @param string $activityName The `activity_name` of the Worker resources to read.
     * @param string $activitySid The `activity_sid` of the Worker resources to read.
     * @param string $available Whether to return only Worker resources that are available or unavailable. Can be `true`, `1`, or `yes` to return Worker resources that are available, and `false`, or any value returns the Worker resources that are not available.
     * @param string $friendlyName The `friendly_name` of the Worker resources to read.
     * @param string $targetWorkersExpression Filter by Workers that would match an expression on a TaskQueue. This is helpful for debugging which Workers would match a potential queue.
     * @param string $taskQueueName The `friendly_name` of the TaskQueue that the Workers to read are eligible for.
     * @param string $taskQueueSid The SID of the TaskQueue that the Workers to read are eligible for.
     * @param string $ordering Sorting parameter for Workers
     */
    public function __construct(
        
        string $activityName = Values::NONE,
        string $activitySid = Values::NONE,
        string $available = Values::NONE,
        string $friendlyName = Values::NONE,
        string $targetWorkersExpression = Values::NONE,
        string $taskQueueName = Values::NONE,
        string $taskQueueSid = Values::NONE,
        string $ordering = Values::NONE

    ) {
        $this->options['activityName'] = $activityName;
        $this->options['activitySid'] = $activitySid;
        $this->options['available'] = $available;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['targetWorkersExpression'] = $targetWorkersExpression;
        $this->options['taskQueueName'] = $taskQueueName;
        $this->options['taskQueueSid'] = $taskQueueSid;
        $this->options['ordering'] = $ordering;
    }

    /**
     * The `activity_name` of the Worker resources to read.
     *
     * @param string $activityName The `activity_name` of the Worker resources to read.
     * @return $this Fluent Builder
     */
    public function setActivityName(string $activityName): self
    {
        $this->options['activityName'] = $activityName;
        return $this;
    }

    /**
     * The `activity_sid` of the Worker resources to read.
     *
     * @param string $activitySid The `activity_sid` of the Worker resources to read.
     * @return $this Fluent Builder
     */
    public function setActivitySid(string $activitySid): self
    {
        $this->options['activitySid'] = $activitySid;
        return $this;
    }

    /**
     * Whether to return only Worker resources that are available or unavailable. Can be `true`, `1`, or `yes` to return Worker resources that are available, and `false`, or any value returns the Worker resources that are not available.
     *
     * @param string $available Whether to return only Worker resources that are available or unavailable. Can be `true`, `1`, or `yes` to return Worker resources that are available, and `false`, or any value returns the Worker resources that are not available.
     * @return $this Fluent Builder
     */
    public function setAvailable(string $available): self
    {
        $this->options['available'] = $available;
        return $this;
    }

    /**
     * The `friendly_name` of the Worker resources to read.
     *
     * @param string $friendlyName The `friendly_name` of the Worker resources to read.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Filter by Workers that would match an expression on a TaskQueue. This is helpful for debugging which Workers would match a potential queue.
     *
     * @param string $targetWorkersExpression Filter by Workers that would match an expression on a TaskQueue. This is helpful for debugging which Workers would match a potential queue.
     * @return $this Fluent Builder
     */
    public function setTargetWorkersExpression(string $targetWorkersExpression): self
    {
        $this->options['targetWorkersExpression'] = $targetWorkersExpression;
        return $this;
    }

    /**
     * The `friendly_name` of the TaskQueue that the Workers to read are eligible for.
     *
     * @param string $taskQueueName The `friendly_name` of the TaskQueue that the Workers to read are eligible for.
     * @return $this Fluent Builder
     */
    public function setTaskQueueName(string $taskQueueName): self
    {
        $this->options['taskQueueName'] = $taskQueueName;
        return $this;
    }

    /**
     * The SID of the TaskQueue that the Workers to read are eligible for.
     *
     * @param string $taskQueueSid The SID of the TaskQueue that the Workers to read are eligible for.
     * @return $this Fluent Builder
     */
    public function setTaskQueueSid(string $taskQueueSid): self
    {
        $this->options['taskQueueSid'] = $taskQueueSid;
        return $this;
    }

    /**
     * Sorting parameter for Workers
     *
     * @param string $ordering Sorting parameter for Workers
     * @return $this Fluent Builder
     */
    public function setOrdering(string $ordering): self
    {
        $this->options['ordering'] = $ordering;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.ReadWorkerOptions ' . $options . ']';
    }
}

class UpdateWorkerOptions extends Options
    {
    /**
     * @param string $activitySid The SID of a valid Activity that will describe the Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information.
     * @param string $attributes The JSON string that describes the Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     * @param string $friendlyName A descriptive string that you create to describe the Worker. It can be up to 64 characters long.
     * @param bool $rejectPendingReservations Whether to reject the Worker's pending reservations. This option is only valid if the Worker's new [Activity](https://www.twilio.com/docs/taskrouter/api/activity) resource has its `availability` property set to `False`.
     * @param string $ifMatch The If-Match HTTP request header
     */
    public function __construct(
        
        string $activitySid = Values::NONE,
        string $attributes = Values::NONE,
        string $friendlyName = Values::NONE,
        bool $rejectPendingReservations = Values::NONE,
        string $ifMatch = Values::NONE

    ) {
        $this->options['activitySid'] = $activitySid;
        $this->options['attributes'] = $attributes;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['rejectPendingReservations'] = $rejectPendingReservations;
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
     * The SID of a valid Activity that will describe the Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information.
     *
     * @param string $activitySid The SID of a valid Activity that will describe the Worker's initial state. See [Activities](https://www.twilio.com/docs/taskrouter/api/activity) for more information.
     * @return $this Fluent Builder
     */
    public function setActivitySid(string $activitySid): self
    {
        $this->options['activitySid'] = $activitySid;
        return $this;
    }

    /**
     * The JSON string that describes the Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     *
     * @param string $attributes The JSON string that describes the Worker. For example: `{ \\\"email\\\": \\\"Bob@example.com\\\", \\\"phone\\\": \\\"+5095551234\\\" }`. This data is passed to the `assignment_callback_url` when TaskRouter assigns a Task to the Worker. Defaults to {}.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the Worker. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the Worker. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Whether to reject the Worker's pending reservations. This option is only valid if the Worker's new [Activity](https://www.twilio.com/docs/taskrouter/api/activity) resource has its `availability` property set to `False`.
     *
     * @param bool $rejectPendingReservations Whether to reject the Worker's pending reservations. This option is only valid if the Worker's new [Activity](https://www.twilio.com/docs/taskrouter/api/activity) resource has its `availability` property set to `False`.
     * @return $this Fluent Builder
     */
    public function setRejectPendingReservations(bool $rejectPendingReservations): self
    {
        $this->options['rejectPendingReservations'] = $rejectPendingReservations;
        return $this;
    }

    /**
     * The If-Match HTTP request header
     *
     * @param string $ifMatch The If-Match HTTP request header
     * @return $this Fluent Builder
     */
    public function setIfMatch(string $ifMatch): self
    {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.UpdateWorkerOptions ' . $options . ']';
    }
}

