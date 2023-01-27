<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Conversations\V1\User;

use Twilio\Options;
use Twilio\Values;

abstract class UserConversationOptions
{



    /**
     * @param string $notificationLevel
     * @param \DateTime $lastReadTimestamp The date of the last message read in conversation by the user, given in ISO 8601 format.
     * @param int $lastReadMessageIndex The index of the last Message in the Conversation that the Participant has read.
     * @return UpdateUserConversationOptions Options builder
     */
    public static function update(
        
        string $notificationLevel = Values::NONE,
        \DateTime $lastReadTimestamp = Values::NONE,
        int $lastReadMessageIndex = Values::NONE

    ): UpdateUserConversationOptions
    {
        return new UpdateUserConversationOptions(
            $notificationLevel,
            $lastReadTimestamp,
            $lastReadMessageIndex
        );
    }

}




class UpdateUserConversationOptions extends Options
    {
    /**
     * @param string $notificationLevel
     * @param \DateTime $lastReadTimestamp The date of the last message read in conversation by the user, given in ISO 8601 format.
     * @param int $lastReadMessageIndex The index of the last Message in the Conversation that the Participant has read.
     */
    public function __construct(
        
        string $notificationLevel = Values::NONE,
        \DateTime $lastReadTimestamp = Values::NONE,
        int $lastReadMessageIndex = Values::NONE

    ) {
        $this->options['notificationLevel'] = $notificationLevel;
        $this->options['lastReadTimestamp'] = $lastReadTimestamp;
        $this->options['lastReadMessageIndex'] = $lastReadMessageIndex;
    }

    /**
     * @param string $notificationLevel
     * @return $this Fluent Builder
     */
    public function setNotificationLevel(string $notificationLevel): self
    {
        $this->options['notificationLevel'] = $notificationLevel;
        return $this;
    }

    /**
     * The date of the last message read in conversation by the user, given in ISO 8601 format.
     *
     * @param \DateTime $lastReadTimestamp The date of the last message read in conversation by the user, given in ISO 8601 format.
     * @return $this Fluent Builder
     */
    public function setLastReadTimestamp(\DateTime $lastReadTimestamp): self
    {
        $this->options['lastReadTimestamp'] = $lastReadTimestamp;
        return $this;
    }

    /**
     * The index of the last Message in the Conversation that the Participant has read.
     *
     * @param int $lastReadMessageIndex The index of the last Message in the Conversation that the Participant has read.
     * @return $this Fluent Builder
     */
    public function setLastReadMessageIndex(int $lastReadMessageIndex): self
    {
        $this->options['lastReadMessageIndex'] = $lastReadMessageIndex;
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
        return '[Twilio.Conversations.V1.UpdateUserConversationOptions ' . $options . ']';
    }
}

