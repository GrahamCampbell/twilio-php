<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Options;
use Twilio\Values;

abstract class RecordingOptions
{

    /**
     * @param bool $includeSoftDeleted A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     * @return FetchRecordingOptions Options builder
     */
    public static function fetch(
        
        bool $includeSoftDeleted = Values::NONE

    ): FetchRecordingOptions
    {
        return new FetchRecordingOptions(
            $includeSoftDeleted
        );
    }

    /**
     * @param string $dateCreatedBefore Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @param string $dateCreated Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @param string $dateCreatedAfter Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @param string $callSid The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID of the resources to read.
     * @param string $conferenceSid The Conference SID that identifies the conference associated with the recording to read.
     * @param bool $includeSoftDeleted A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     * @return ReadRecordingOptions Options builder
     */
    public static function read(
        
        string $dateCreatedBefore = Values::NONE,
        string $dateCreated = Values::NONE,
        string $dateCreatedAfter = Values::NONE,
        string $callSid = Values::NONE,
        string $conferenceSid = Values::NONE,
        bool $includeSoftDeleted = Values::NONE

    ): ReadRecordingOptions
    {
        return new ReadRecordingOptions(
            $dateCreatedBefore,
            $dateCreated,
            $dateCreatedAfter,
            $callSid,
            $conferenceSid,
            $includeSoftDeleted
        );
    }

}


class FetchRecordingOptions extends Options
    {
    /**
     * @param bool $includeSoftDeleted A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     */
    public function __construct(
        
        bool $includeSoftDeleted = Values::NONE

    ) {
        $this->options['includeSoftDeleted'] = $includeSoftDeleted;
    }

    /**
     * A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     *
     * @param bool $includeSoftDeleted A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     * @return $this Fluent Builder
     */
    public function setIncludeSoftDeleted(bool $includeSoftDeleted): self
    {
        $this->options['includeSoftDeleted'] = $includeSoftDeleted;
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
        return '[Twilio.Api.V2010.FetchRecordingOptions ' . $options . ']';
    }
}

class ReadRecordingOptions extends Options
    {
    /**
     * @param string $dateCreatedBefore Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @param string $dateCreated Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @param string $dateCreatedAfter Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @param string $callSid The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID of the resources to read.
     * @param string $conferenceSid The Conference SID that identifies the conference associated with the recording to read.
     * @param bool $includeSoftDeleted A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     */
    public function __construct(
        
        string $dateCreatedBefore = Values::NONE,
        string $dateCreated = Values::NONE,
        string $dateCreatedAfter = Values::NONE,
        string $callSid = Values::NONE,
        string $conferenceSid = Values::NONE,
        bool $includeSoftDeleted = Values::NONE

    ) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['callSid'] = $callSid;
        $this->options['conferenceSid'] = $conferenceSid;
        $this->options['includeSoftDeleted'] = $includeSoftDeleted;
    }

    /**
     * Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     *
     * @param string $dateCreatedBefore Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore(string $dateCreatedBefore): self
    {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     *
     * @param string $dateCreated Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @return $this Fluent Builder
     */
    public function setDateCreated(string $dateCreated): self
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     *
     * @param string $dateCreatedAfter Only include recordings that were created on this date. Specify a date as `YYYY-MM-DD` in GMT, for example: `2009-07-06`, to read recordings that were created on this date. You can also specify an inequality, such as `DateCreated<=YYYY-MM-DD`, to read recordings that were created on or before midnight of this date, and `DateCreated>=YYYY-MM-DD` to read recordings that were created on or after midnight of this date.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter(string $dateCreatedAfter): self
    {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID of the resources to read.
     *
     * @param string $callSid The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID of the resources to read.
     * @return $this Fluent Builder
     */
    public function setCallSid(string $callSid): self
    {
        $this->options['callSid'] = $callSid;
        return $this;
    }

    /**
     * The Conference SID that identifies the conference associated with the recording to read.
     *
     * @param string $conferenceSid The Conference SID that identifies the conference associated with the recording to read.
     * @return $this Fluent Builder
     */
    public function setConferenceSid(string $conferenceSid): self
    {
        $this->options['conferenceSid'] = $conferenceSid;
        return $this;
    }

    /**
     * A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     *
     * @param bool $includeSoftDeleted A boolean parameter indicating whether to retrieve soft deleted recordings or not. Recordings metadata are kept after deletion for a retention period of 40 days.
     * @return $this Fluent Builder
     */
    public function setIncludeSoftDeleted(bool $includeSoftDeleted): self
    {
        $this->options['includeSoftDeleted'] = $includeSoftDeleted;
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
        return '[Twilio.Api.V2010.ReadRecordingOptions ' . $options . ']';
    }
}

