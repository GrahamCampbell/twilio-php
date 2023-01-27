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

abstract class TaskQueueOptions
{
    /**
     * @param string $targetWorkers A string that describes the Worker selection criteria for any Tasks that enter the TaskQueue. For example, `'\\\"language\\\" == \\\"spanish\\\"'`. The default value is `1==1`. If this value is empty, Tasks will wait in the TaskQueue until they are deleted or moved to another TaskQueue. For more information about Worker selection, see [Describing Worker selection criteria](https://www.twilio.com/docs/taskrouter/api/taskqueues#target-workers).
     * @param int $maxReservedWorkers The maximum number of Workers to reserve for the assignment of a Task in the queue. Can be an integer between 1 and 50, inclusive and defaults to 1.
     * @param string $taskOrder
     * @param string $reservationActivitySid The SID of the Activity to assign Workers when a task is reserved for them.
     * @param string $assignmentActivitySid The SID of the Activity to assign Workers when a task is assigned to them.
     * @return CreateTaskQueueOptions Options builder
     */
    public static function create(
        
        string $targetWorkers = Values::NONE,
        int $maxReservedWorkers = Values::NONE,
        string $taskOrder = Values::NONE,
        string $reservationActivitySid = Values::NONE,
        string $assignmentActivitySid = Values::NONE

    ): CreateTaskQueueOptions
    {
        return new CreateTaskQueueOptions(
            $targetWorkers,
            $maxReservedWorkers,
            $taskOrder,
            $reservationActivitySid,
            $assignmentActivitySid
        );
    }



    /**
     * @param string $friendlyName The `friendly_name` of the TaskQueue resources to read.
     * @param string $evaluateWorkerAttributes The attributes of the Workers to read. Returns the TaskQueues with Workers that match the attributes specified in this parameter.
     * @param string $workerSid The SID of the Worker with the TaskQueue resources to read.
     * @param string $ordering Sorting parameter for TaskQueues
     * @return ReadTaskQueueOptions Options builder
     */
    public static function read(
        
        string $friendlyName = Values::NONE,
        string $evaluateWorkerAttributes = Values::NONE,
        string $workerSid = Values::NONE,
        string $ordering = Values::NONE

    ): ReadTaskQueueOptions
    {
        return new ReadTaskQueueOptions(
            $friendlyName,
            $evaluateWorkerAttributes,
            $workerSid,
            $ordering
        );
    }

    /**
     * @param string $friendlyName A descriptive string that you create to describe the TaskQueue. For example `Support-Tier 1`, `Sales`, or `Escalation`.
     * @param string $targetWorkers A string describing the Worker selection criteria for any Tasks that enter the TaskQueue. For example '\\\"language\\\" == \\\"spanish\\\"' If no TargetWorkers parameter is provided, Tasks will wait in the queue until they are either deleted or moved to another queue. Additional examples on how to describing Worker selection criteria below.
     * @param string $reservationActivitySid The SID of the Activity to assign Workers when a task is reserved for them.
     * @param string $assignmentActivitySid The SID of the Activity to assign Workers when a task is assigned for them.
     * @param int $maxReservedWorkers The maximum number of Workers to create reservations for the assignment of a task while in the queue. Maximum of 50.
     * @param string $taskOrder
     * @return UpdateTaskQueueOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        string $targetWorkers = Values::NONE,
        string $reservationActivitySid = Values::NONE,
        string $assignmentActivitySid = Values::NONE,
        int $maxReservedWorkers = Values::NONE,
        string $taskOrder = Values::NONE

    ): UpdateTaskQueueOptions
    {
        return new UpdateTaskQueueOptions(
            $friendlyName,
            $targetWorkers,
            $reservationActivitySid,
            $assignmentActivitySid,
            $maxReservedWorkers,
            $taskOrder
        );
    }

}

class CreateTaskQueueOptions extends Options
    {
    /**
     * @param string $targetWorkers A string that describes the Worker selection criteria for any Tasks that enter the TaskQueue. For example, `'\\\"language\\\" == \\\"spanish\\\"'`. The default value is `1==1`. If this value is empty, Tasks will wait in the TaskQueue until they are deleted or moved to another TaskQueue. For more information about Worker selection, see [Describing Worker selection criteria](https://www.twilio.com/docs/taskrouter/api/taskqueues#target-workers).
     * @param int $maxReservedWorkers The maximum number of Workers to reserve for the assignment of a Task in the queue. Can be an integer between 1 and 50, inclusive and defaults to 1.
     * @param string $taskOrder
     * @param string $reservationActivitySid The SID of the Activity to assign Workers when a task is reserved for them.
     * @param string $assignmentActivitySid The SID of the Activity to assign Workers when a task is assigned to them.
     */
    public function __construct(
        
        string $targetWorkers = Values::NONE,
        int $maxReservedWorkers = Values::NONE,
        string $taskOrder = Values::NONE,
        string $reservationActivitySid = Values::NONE,
        string $assignmentActivitySid = Values::NONE

    ) {
        $this->options['targetWorkers'] = $targetWorkers;
        $this->options['maxReservedWorkers'] = $maxReservedWorkers;
        $this->options['taskOrder'] = $taskOrder;
        $this->options['reservationActivitySid'] = $reservationActivitySid;
        $this->options['assignmentActivitySid'] = $assignmentActivitySid;
    }

    /**
     * A string that describes the Worker selection criteria for any Tasks that enter the TaskQueue. For example, `'\\\"language\\\" == \\\"spanish\\\"'`. The default value is `1==1`. If this value is empty, Tasks will wait in the TaskQueue until they are deleted or moved to another TaskQueue. For more information about Worker selection, see [Describing Worker selection criteria](https://www.twilio.com/docs/taskrouter/api/taskqueues#target-workers).
     *
     * @param string $targetWorkers A string that describes the Worker selection criteria for any Tasks that enter the TaskQueue. For example, `'\\\"language\\\" == \\\"spanish\\\"'`. The default value is `1==1`. If this value is empty, Tasks will wait in the TaskQueue until they are deleted or moved to another TaskQueue. For more information about Worker selection, see [Describing Worker selection criteria](https://www.twilio.com/docs/taskrouter/api/taskqueues#target-workers).
     * @return $this Fluent Builder
     */
    public function setTargetWorkers(string $targetWorkers): self
    {
        $this->options['targetWorkers'] = $targetWorkers;
        return $this;
    }

    /**
     * The maximum number of Workers to reserve for the assignment of a Task in the queue. Can be an integer between 1 and 50, inclusive and defaults to 1.
     *
     * @param int $maxReservedWorkers The maximum number of Workers to reserve for the assignment of a Task in the queue. Can be an integer between 1 and 50, inclusive and defaults to 1.
     * @return $this Fluent Builder
     */
    public function setMaxReservedWorkers(int $maxReservedWorkers): self
    {
        $this->options['maxReservedWorkers'] = $maxReservedWorkers;
        return $this;
    }

    /**
     * @param string $taskOrder
     * @return $this Fluent Builder
     */
    public function setTaskOrder(string $taskOrder): self
    {
        $this->options['taskOrder'] = $taskOrder;
        return $this;
    }

    /**
     * The SID of the Activity to assign Workers when a task is reserved for them.
     *
     * @param string $reservationActivitySid The SID of the Activity to assign Workers when a task is reserved for them.
     * @return $this Fluent Builder
     */
    public function setReservationActivitySid(string $reservationActivitySid): self
    {
        $this->options['reservationActivitySid'] = $reservationActivitySid;
        return $this;
    }

    /**
     * The SID of the Activity to assign Workers when a task is assigned to them.
     *
     * @param string $assignmentActivitySid The SID of the Activity to assign Workers when a task is assigned to them.
     * @return $this Fluent Builder
     */
    public function setAssignmentActivitySid(string $assignmentActivitySid): self
    {
        $this->options['assignmentActivitySid'] = $assignmentActivitySid;
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
        return '[Twilio.Taskrouter.V1.CreateTaskQueueOptions ' . $options . ']';
    }
}



class ReadTaskQueueOptions extends Options
    {
    /**
     * @param string $friendlyName The `friendly_name` of the TaskQueue resources to read.
     * @param string $evaluateWorkerAttributes The attributes of the Workers to read. Returns the TaskQueues with Workers that match the attributes specified in this parameter.
     * @param string $workerSid The SID of the Worker with the TaskQueue resources to read.
     * @param string $ordering Sorting parameter for TaskQueues
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $evaluateWorkerAttributes = Values::NONE,
        string $workerSid = Values::NONE,
        string $ordering = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['evaluateWorkerAttributes'] = $evaluateWorkerAttributes;
        $this->options['workerSid'] = $workerSid;
        $this->options['ordering'] = $ordering;
    }

    /**
     * The `friendly_name` of the TaskQueue resources to read.
     *
     * @param string $friendlyName The `friendly_name` of the TaskQueue resources to read.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The attributes of the Workers to read. Returns the TaskQueues with Workers that match the attributes specified in this parameter.
     *
     * @param string $evaluateWorkerAttributes The attributes of the Workers to read. Returns the TaskQueues with Workers that match the attributes specified in this parameter.
     * @return $this Fluent Builder
     */
    public function setEvaluateWorkerAttributes(string $evaluateWorkerAttributes): self
    {
        $this->options['evaluateWorkerAttributes'] = $evaluateWorkerAttributes;
        return $this;
    }

    /**
     * The SID of the Worker with the TaskQueue resources to read.
     *
     * @param string $workerSid The SID of the Worker with the TaskQueue resources to read.
     * @return $this Fluent Builder
     */
    public function setWorkerSid(string $workerSid): self
    {
        $this->options['workerSid'] = $workerSid;
        return $this;
    }

    /**
     * Sorting parameter for TaskQueues
     *
     * @param string $ordering Sorting parameter for TaskQueues
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
        return '[Twilio.Taskrouter.V1.ReadTaskQueueOptions ' . $options . ']';
    }
}

class UpdateTaskQueueOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the TaskQueue. For example `Support-Tier 1`, `Sales`, or `Escalation`.
     * @param string $targetWorkers A string describing the Worker selection criteria for any Tasks that enter the TaskQueue. For example '\\\"language\\\" == \\\"spanish\\\"' If no TargetWorkers parameter is provided, Tasks will wait in the queue until they are either deleted or moved to another queue. Additional examples on how to describing Worker selection criteria below.
     * @param string $reservationActivitySid The SID of the Activity to assign Workers when a task is reserved for them.
     * @param string $assignmentActivitySid The SID of the Activity to assign Workers when a task is assigned for them.
     * @param int $maxReservedWorkers The maximum number of Workers to create reservations for the assignment of a task while in the queue. Maximum of 50.
     * @param string $taskOrder
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $targetWorkers = Values::NONE,
        string $reservationActivitySid = Values::NONE,
        string $assignmentActivitySid = Values::NONE,
        int $maxReservedWorkers = Values::NONE,
        string $taskOrder = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['targetWorkers'] = $targetWorkers;
        $this->options['reservationActivitySid'] = $reservationActivitySid;
        $this->options['assignmentActivitySid'] = $assignmentActivitySid;
        $this->options['maxReservedWorkers'] = $maxReservedWorkers;
        $this->options['taskOrder'] = $taskOrder;
    }

    /**
     * A descriptive string that you create to describe the TaskQueue. For example `Support-Tier 1`, `Sales`, or `Escalation`.
     *
     * @param string $friendlyName A descriptive string that you create to describe the TaskQueue. For example `Support-Tier 1`, `Sales`, or `Escalation`.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A string describing the Worker selection criteria for any Tasks that enter the TaskQueue. For example '\\\"language\\\" == \\\"spanish\\\"' If no TargetWorkers parameter is provided, Tasks will wait in the queue until they are either deleted or moved to another queue. Additional examples on how to describing Worker selection criteria below.
     *
     * @param string $targetWorkers A string describing the Worker selection criteria for any Tasks that enter the TaskQueue. For example '\\\"language\\\" == \\\"spanish\\\"' If no TargetWorkers parameter is provided, Tasks will wait in the queue until they are either deleted or moved to another queue. Additional examples on how to describing Worker selection criteria below.
     * @return $this Fluent Builder
     */
    public function setTargetWorkers(string $targetWorkers): self
    {
        $this->options['targetWorkers'] = $targetWorkers;
        return $this;
    }

    /**
     * The SID of the Activity to assign Workers when a task is reserved for them.
     *
     * @param string $reservationActivitySid The SID of the Activity to assign Workers when a task is reserved for them.
     * @return $this Fluent Builder
     */
    public function setReservationActivitySid(string $reservationActivitySid): self
    {
        $this->options['reservationActivitySid'] = $reservationActivitySid;
        return $this;
    }

    /**
     * The SID of the Activity to assign Workers when a task is assigned for them.
     *
     * @param string $assignmentActivitySid The SID of the Activity to assign Workers when a task is assigned for them.
     * @return $this Fluent Builder
     */
    public function setAssignmentActivitySid(string $assignmentActivitySid): self
    {
        $this->options['assignmentActivitySid'] = $assignmentActivitySid;
        return $this;
    }

    /**
     * The maximum number of Workers to create reservations for the assignment of a task while in the queue. Maximum of 50.
     *
     * @param int $maxReservedWorkers The maximum number of Workers to create reservations for the assignment of a task while in the queue. Maximum of 50.
     * @return $this Fluent Builder
     */
    public function setMaxReservedWorkers(int $maxReservedWorkers): self
    {
        $this->options['maxReservedWorkers'] = $maxReservedWorkers;
        return $this;
    }

    /**
     * @param string $taskOrder
     * @return $this Fluent Builder
     */
    public function setTaskOrder(string $taskOrder): self
    {
        $this->options['taskOrder'] = $taskOrder;
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
        return '[Twilio.Taskrouter.V1.UpdateTaskQueueOptions ' . $options . ']';
    }
}

