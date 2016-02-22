<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Lookups\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string countryCode
 * @property string phoneNumber
 * @property string nationalFormat
 * @property string carrier
 */
class PhoneNumberInstance extends InstanceResource {
    /**
     * Initialize the PhoneNumberInstance
     * 
     * @return \Twilio\Rest\Lookups\V1\PhoneNumberInstance 
     */
    public function __construct(Version $version, array $payload, $phoneNumber = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'countryCode' => $payload['country_code'],
            'phoneNumber' => $payload['phone_number'],
            'nationalFormat' => $payload['national_format'],
            'carrier' => $payload['carrier'],
        );
        
        $this->solution = array(
            'phoneNumber' => $phoneNumber ?: $this->properties['phoneNumber'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Lookups\V1\PhoneNumberContext Context for this
     *                                                    PhoneNumberInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new PhoneNumberContext(
                $this->version,
                $this->solution['phoneNumber']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a PhoneNumberInstance
     * 
     * @param array $options Optional Arguments
     * @return PhoneNumberInstance Fetched PhoneNumberInstance
     */
    public function fetch(array $options = array()) {
        return $this->proxy()->fetch(
            $options
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
        return '[Twilio.Lookups.V1.PhoneNumberInstance ' . implode(' ', $context) . ']';
    }
}