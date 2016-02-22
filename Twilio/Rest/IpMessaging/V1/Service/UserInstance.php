<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V1\Service;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string sid
 * @property string accountSid
 * @property string serviceSid
 * @property string roleSid
 * @property string identity
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string url
 * @property string links
 */
class UserInstance extends InstanceResource {
    /**
     * Initialize the UserInstance
     * 
     * @return \Twilio\Rest\IpMessaging\V1\Service\UserInstance 
     */
    public function __construct(Version $version, array $payload, $serviceSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'sid' => $payload['sid'],
            'accountSid' => $payload['account_sid'],
            'serviceSid' => $payload['service_sid'],
            'roleSid' => $payload['role_sid'],
            'identity' => $payload['identity'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'url' => $payload['url'],
            'links' => $payload['links'],
        );
        
        $this->solution = array(
            'serviceSid' => $serviceSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\IpMessaging\V1\Service\UserContext Context for this
     *                                                         UserInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new UserContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a UserInstance
     * 
     * @return UserInstance Fetched UserInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the UserInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Update the UserInstance
     * 
     * @param string $roleSid The role_sid
     * @return UserInstance Updated UserInstance
     */
    public function update($roleSid) {
        return $this->proxy()->update(
            $roleSid
        );
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        
        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.IpMessaging.V1.UserInstance ' . implode(' ', $context) . ']';
    }
}