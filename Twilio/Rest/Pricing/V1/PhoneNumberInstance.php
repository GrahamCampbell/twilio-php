<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Version;

/**
 * @property string name
 * @property string url
 * @property string links
 */
class PhoneNumberInstance extends InstanceResource {
    /**
     * Initialize the PhoneNumberInstance
     * 
     * @return \Twilio\Rest\Pricing\V1\PhoneNumberInstance 
     */
    public function __construct(Version $version, array $payload) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'name' => $payload['name'],
            'url' => $payload['url'],
            'links' => $payload['links'],
        );
        
        $this->solution = array();
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
        return '[Twilio.Pricing.V1.PhoneNumberInstance]';
    }
}