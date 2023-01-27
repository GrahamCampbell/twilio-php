<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Events
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Events\V1\Subscription;

use Twilio\Options;
use Twilio\Values;

abstract class SubscribedEventOptions
{
    /**
     * @param int $schemaVersion The schema version that the subscription should use.
     * @return CreateSubscribedEventOptions Options builder
     */
    public static function create(
        
        int $schemaVersion = Values::NONE

    ): CreateSubscribedEventOptions
    {
        return new CreateSubscribedEventOptions(
            $schemaVersion
        );
    }




    /**
     * @param int $schemaVersion The schema version that the subscription should use.
     * @return UpdateSubscribedEventOptions Options builder
     */
    public static function update(
        
        int $schemaVersion = Values::NONE

    ): UpdateSubscribedEventOptions
    {
        return new UpdateSubscribedEventOptions(
            $schemaVersion
        );
    }

}

class CreateSubscribedEventOptions extends Options
    {
    /**
     * @param int $schemaVersion The schema version that the subscription should use.
     */
    public function __construct(
        
        int $schemaVersion = Values::NONE

    ) {
        $this->options['schemaVersion'] = $schemaVersion;
    }

    /**
     * The schema version that the subscription should use.
     *
     * @param int $schemaVersion The schema version that the subscription should use.
     * @return $this Fluent Builder
     */
    public function setSchemaVersion(int $schemaVersion): self
    {
        $this->options['schemaVersion'] = $schemaVersion;
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
        return '[Twilio.Events.V1.CreateSubscribedEventOptions ' . $options . ']';
    }
}




class UpdateSubscribedEventOptions extends Options
    {
    /**
     * @param int $schemaVersion The schema version that the subscription should use.
     */
    public function __construct(
        
        int $schemaVersion = Values::NONE

    ) {
        $this->options['schemaVersion'] = $schemaVersion;
    }

    /**
     * The schema version that the subscription should use.
     *
     * @param int $schemaVersion The schema version that the subscription should use.
     * @return $this Fluent Builder
     */
    public function setSchemaVersion(int $schemaVersion): self
    {
        $this->options['schemaVersion'] = $schemaVersion;
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
        return '[Twilio.Events.V1.UpdateSubscribedEventOptions ' . $options . ']';
    }
}

