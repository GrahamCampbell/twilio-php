<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Wireless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Wireless\V1;

use Twilio\Options;
use Twilio\Values;

abstract class UsageRecordOptions
{
    /**
     * @param \DateTime $end Only include usage that has occurred on or before this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     * @param \DateTime $start Only include usage that has occurred on or after this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     * @param string $granularity How to summarize the usage by time. Can be: `daily`, `hourly`, or `all`. A value of `all` returns one Usage Record that describes the usage for the entire period.
     * @return ReadUsageRecordOptions Options builder
     */
    public static function read(
        
        \DateTime $end = Values::NONE,
        \DateTime $start = Values::NONE,
        string $granularity = Values::NONE

    ): ReadUsageRecordOptions
    {
        return new ReadUsageRecordOptions(
            $end,
            $start,
            $granularity
        );
    }

}

class ReadUsageRecordOptions extends Options
    {
    /**
     * @param \DateTime $end Only include usage that has occurred on or before this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     * @param \DateTime $start Only include usage that has occurred on or after this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     * @param string $granularity How to summarize the usage by time. Can be: `daily`, `hourly`, or `all`. A value of `all` returns one Usage Record that describes the usage for the entire period.
     */
    public function __construct(
        
        \DateTime $end = Values::NONE,
        \DateTime $start = Values::NONE,
        string $granularity = Values::NONE

    ) {
        $this->options['end'] = $end;
        $this->options['start'] = $start;
        $this->options['granularity'] = $granularity;
    }

    /**
     * Only include usage that has occurred on or before this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     *
     * @param \DateTime $end Only include usage that has occurred on or before this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     * @return $this Fluent Builder
     */
    public function setEnd(\DateTime $end): self
    {
        $this->options['end'] = $end;
        return $this;
    }

    /**
     * Only include usage that has occurred on or after this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     *
     * @param \DateTime $start Only include usage that has occurred on or after this date. Format is [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html).
     * @return $this Fluent Builder
     */
    public function setStart(\DateTime $start): self
    {
        $this->options['start'] = $start;
        return $this;
    }

    /**
     * How to summarize the usage by time. Can be: `daily`, `hourly`, or `all`. A value of `all` returns one Usage Record that describes the usage for the entire period.
     *
     * @param string $granularity How to summarize the usage by time. Can be: `daily`, `hourly`, or `all`. A value of `all` returns one Usage Record that describes the usage for the entire period.
     * @return $this Fluent Builder
     */
    public function setGranularity(string $granularity): self
    {
        $this->options['granularity'] = $granularity;
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
        return '[Twilio.Wireless.V1.ReadUsageRecordOptions ' . $options . ']';
    }
}

