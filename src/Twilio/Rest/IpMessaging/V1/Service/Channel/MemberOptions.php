<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Ip_messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\IpMessaging\V1\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MemberOptions
{
    /**
     * @param string $roleSid 
     * @return CreateMemberOptions Options builder
     */
    public static function create(
        
        string $roleSid = Values::NONE

    ): CreateMemberOptions
    {
        return new CreateMemberOptions(
            $roleSid
        );
    }



    /**
     * @param string[] $identity 
     * @return ReadMemberOptions Options builder
     */
    public static function read(
        
        array $identity = Values::ARRAY_NONE

    ): ReadMemberOptions
    {
        return new ReadMemberOptions(
            $identity
        );
    }

    /**
     * @param string $roleSid 
     * @param int $lastConsumedMessageIndex 
     * @return UpdateMemberOptions Options builder
     */
    public static function update(
        
        string $roleSid = Values::NONE,
        int $lastConsumedMessageIndex = Values::NONE

    ): UpdateMemberOptions
    {
        return new UpdateMemberOptions(
            $roleSid,
            $lastConsumedMessageIndex
        );
    }

}

class CreateMemberOptions extends Options
    {
    /**
     * @param string $roleSid 
     */
    public function __construct(
        
        string $roleSid = Values::NONE

    ) {
        $this->options['roleSid'] = $roleSid;
    }

    /**
     * 
     *
     * @param string $roleSid 
     * @return $this Fluent Builder
     */
    public function setRoleSid(string $roleSid): self
    {
        $this->options['roleSid'] = $roleSid;
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
        return '[Twilio.IpMessaging.V1.CreateMemberOptions ' . $options . ']';
    }
}



class ReadMemberOptions extends Options
    {
    /**
     * @param string[] $identity 
     */
    public function __construct(
        
        array $identity = Values::ARRAY_NONE

    ) {
        $this->options['identity'] = $identity;
    }

    /**
     * 
     *
     * @param string[] $identity 
     * @return $this Fluent Builder
     */
    public function setIdentity(array $identity): self
    {
        $this->options['identity'] = $identity;
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
        return '[Twilio.IpMessaging.V1.ReadMemberOptions ' . $options . ']';
    }
}

class UpdateMemberOptions extends Options
    {
    /**
     * @param string $roleSid 
     * @param int $lastConsumedMessageIndex 
     */
    public function __construct(
        
        string $roleSid = Values::NONE,
        int $lastConsumedMessageIndex = Values::NONE

    ) {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
    }

    /**
     * 
     *
     * @param string $roleSid 
     * @return $this Fluent Builder
     */
    public function setRoleSid(string $roleSid): self
    {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * 
     *
     * @param int $lastConsumedMessageIndex 
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex(int $lastConsumedMessageIndex): self
    {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
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
        return '[Twilio.IpMessaging.V1.UpdateMemberOptions ' . $options . ']';
    }
}

