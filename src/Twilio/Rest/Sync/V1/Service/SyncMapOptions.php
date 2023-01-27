<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Sync\V1\Service;

use Twilio\Options;
use Twilio\Values;

abstract class SyncMapOptions
{
    /**
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as an alternative to the `sid` in the URL path to address the resource.
     * @param int $ttl An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     * @param int $collectionTtl How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     * @return CreateSyncMapOptions Options builder
     */
    public static function create(
        
        string $uniqueName = Values::NONE,
        int $ttl = Values::NONE,
        int $collectionTtl = Values::NONE

    ): CreateSyncMapOptions
    {
        return new CreateSyncMapOptions(
            $uniqueName,
            $ttl,
            $collectionTtl
        );
    }




    /**
     * @param int $ttl An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     * @param int $collectionTtl How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     * @return UpdateSyncMapOptions Options builder
     */
    public static function update(
        
        int $ttl = Values::NONE,
        int $collectionTtl = Values::NONE

    ): UpdateSyncMapOptions
    {
        return new UpdateSyncMapOptions(
            $ttl,
            $collectionTtl
        );
    }

}

class CreateSyncMapOptions extends Options
    {
    /**
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as an alternative to the `sid` in the URL path to address the resource.
     * @param int $ttl An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     * @param int $collectionTtl How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     */
    public function __construct(
        
        string $uniqueName = Values::NONE,
        int $ttl = Values::NONE,
        int $collectionTtl = Values::NONE

    ) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['ttl'] = $ttl;
        $this->options['collectionTtl'] = $collectionTtl;
    }

    /**
     * An application-defined string that uniquely identifies the resource. It can be used as an alternative to the `sid` in the URL path to address the resource.
     *
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as an alternative to the `sid` in the URL path to address the resource.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self
    {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     *
     * @param int $ttl An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self
    {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     *
     * @param int $collectionTtl How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     * @return $this Fluent Builder
     */
    public function setCollectionTtl(int $collectionTtl): self
    {
        $this->options['collectionTtl'] = $collectionTtl;
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
        return '[Twilio.Sync.V1.CreateSyncMapOptions ' . $options . ']';
    }
}




class UpdateSyncMapOptions extends Options
    {
    /**
     * @param int $ttl An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     * @param int $collectionTtl How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     */
    public function __construct(
        
        int $ttl = Values::NONE,
        int $collectionTtl = Values::NONE

    ) {
        $this->options['ttl'] = $ttl;
        $this->options['collectionTtl'] = $collectionTtl;
    }

    /**
     * An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     *
     * @param int $ttl An alias for `collection_ttl`. If both parameters are provided, this value is ignored.
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self
    {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     *
     * @param int $collectionTtl How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Sync Map expires (time-to-live) and is deleted.
     * @return $this Fluent Builder
     */
    public function setCollectionTtl(int $collectionTtl): self
    {
        $this->options['collectionTtl'] = $collectionTtl;
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
        return '[Twilio.Sync.V1.UpdateSyncMapOptions ' . $options . ']';
    }
}

