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

namespace Twilio\Rest\Api\V2010\Account\Sip;

use Twilio\Options;
use Twilio\Values;

abstract class DomainOptions
{
    /**
     * @param string $friendlyName A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     * @param string $voiceUrl The URL we should when the domain receives a call.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `voice_url`.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $voiceStatusCallbackUrl The URL that we should call to pass status parameters (such as call ended) to your application.
     * @param string $voiceStatusCallbackMethod The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     * @param bool $sipRegistration Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     * @param bool $emergencyCallingEnabled Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     * @param bool $secure Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     * @param string $byocTrunkSid The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     * @param string $emergencyCallerSid Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     * @return CreateDomainOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        string $voiceUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $voiceStatusCallbackUrl = Values::NONE,
        string $voiceStatusCallbackMethod = Values::NONE,
        bool $sipRegistration = Values::NONE,
        bool $emergencyCallingEnabled = Values::NONE,
        bool $secure = Values::NONE,
        string $byocTrunkSid = Values::NONE,
        string $emergencyCallerSid = Values::NONE

    ): CreateDomainOptions
    {
        return new CreateDomainOptions(
            $friendlyName,
            $voiceUrl,
            $voiceMethod,
            $voiceFallbackUrl,
            $voiceFallbackMethod,
            $voiceStatusCallbackUrl,
            $voiceStatusCallbackMethod,
            $sipRegistration,
            $emergencyCallingEnabled,
            $secure,
            $byocTrunkSid,
            $emergencyCallerSid
        );
    }




    /**
     * @param string $friendlyName A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML requested by `voice_url`.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`
     * @param string $voiceStatusCallbackMethod The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     * @param string $voiceStatusCallbackUrl The URL that we should call to pass status parameters (such as call ended) to your application.
     * @param string $voiceUrl The URL we should call when the domain receives a call.
     * @param bool $sipRegistration Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     * @param string $domainName The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and \\\"-\\\" and must end with `sip.twilio.com`.
     * @param bool $emergencyCallingEnabled Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     * @param bool $secure Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     * @param string $byocTrunkSid The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     * @param string $emergencyCallerSid Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     * @return UpdateDomainOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceStatusCallbackMethod = Values::NONE,
        string $voiceStatusCallbackUrl = Values::NONE,
        string $voiceUrl = Values::NONE,
        bool $sipRegistration = Values::NONE,
        string $domainName = Values::NONE,
        bool $emergencyCallingEnabled = Values::NONE,
        bool $secure = Values::NONE,
        string $byocTrunkSid = Values::NONE,
        string $emergencyCallerSid = Values::NONE

    ): UpdateDomainOptions
    {
        return new UpdateDomainOptions(
            $friendlyName,
            $voiceFallbackMethod,
            $voiceFallbackUrl,
            $voiceMethod,
            $voiceStatusCallbackMethod,
            $voiceStatusCallbackUrl,
            $voiceUrl,
            $sipRegistration,
            $domainName,
            $emergencyCallingEnabled,
            $secure,
            $byocTrunkSid,
            $emergencyCallerSid
        );
    }

}

class CreateDomainOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     * @param string $voiceUrl The URL we should when the domain receives a call.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `voice_url`.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $voiceStatusCallbackUrl The URL that we should call to pass status parameters (such as call ended) to your application.
     * @param string $voiceStatusCallbackMethod The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     * @param bool $sipRegistration Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     * @param bool $emergencyCallingEnabled Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     * @param bool $secure Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     * @param string $byocTrunkSid The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     * @param string $emergencyCallerSid Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $voiceUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $voiceStatusCallbackUrl = Values::NONE,
        string $voiceStatusCallbackMethod = Values::NONE,
        bool $sipRegistration = Values::NONE,
        bool $emergencyCallingEnabled = Values::NONE,
        bool $secure = Values::NONE,
        string $byocTrunkSid = Values::NONE,
        string $emergencyCallerSid = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['voiceStatusCallbackUrl'] = $voiceStatusCallbackUrl;
        $this->options['voiceStatusCallbackMethod'] = $voiceStatusCallbackMethod;
        $this->options['sipRegistration'] = $sipRegistration;
        $this->options['emergencyCallingEnabled'] = $emergencyCallingEnabled;
        $this->options['secure'] = $secure;
        $this->options['byocTrunkSid'] = $byocTrunkSid;
        $this->options['emergencyCallerSid'] = $emergencyCallerSid;
    }

    /**
     * A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The URL we should when the domain receives a call.
     *
     * @param string $voiceUrl The URL we should when the domain receives a call.
     * @return $this Fluent Builder
     */
    public function setVoiceUrl(string $voiceUrl): self
    {
        $this->options['voiceUrl'] = $voiceUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     *
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setVoiceMethod(string $voiceMethod): self
    {
        $this->options['voiceMethod'] = $voiceMethod;
        return $this;
    }

    /**
     * The URL that we should call when an error occurs while retrieving or executing the TwiML from `voice_url`.
     *
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `voice_url`.
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackUrl(string $voiceFallbackUrl): self
    {
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     *
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackMethod(string $voiceFallbackMethod): self
    {
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        return $this;
    }

    /**
     * The URL that we should call to pass status parameters (such as call ended) to your application.
     *
     * @param string $voiceStatusCallbackUrl The URL that we should call to pass status parameters (such as call ended) to your application.
     * @return $this Fluent Builder
     */
    public function setVoiceStatusCallbackUrl(string $voiceStatusCallbackUrl): self
    {
        $this->options['voiceStatusCallbackUrl'] = $voiceStatusCallbackUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     *
     * @param string $voiceStatusCallbackMethod The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setVoiceStatusCallbackMethod(string $voiceStatusCallbackMethod): self
    {
        $this->options['voiceStatusCallbackMethod'] = $voiceStatusCallbackMethod;
        return $this;
    }

    /**
     * Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     *
     * @param bool $sipRegistration Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     * @return $this Fluent Builder
     */
    public function setSipRegistration(bool $sipRegistration): self
    {
        $this->options['sipRegistration'] = $sipRegistration;
        return $this;
    }

    /**
     * Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     *
     * @param bool $emergencyCallingEnabled Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     * @return $this Fluent Builder
     */
    public function setEmergencyCallingEnabled(bool $emergencyCallingEnabled): self
    {
        $this->options['emergencyCallingEnabled'] = $emergencyCallingEnabled;
        return $this;
    }

    /**
     * Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     *
     * @param bool $secure Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     * @return $this Fluent Builder
     */
    public function setSecure(bool $secure): self
    {
        $this->options['secure'] = $secure;
        return $this;
    }

    /**
     * The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     *
     * @param string $byocTrunkSid The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     * @return $this Fluent Builder
     */
    public function setByocTrunkSid(string $byocTrunkSid): self
    {
        $this->options['byocTrunkSid'] = $byocTrunkSid;
        return $this;
    }

    /**
     * Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     *
     * @param string $emergencyCallerSid Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     * @return $this Fluent Builder
     */
    public function setEmergencyCallerSid(string $emergencyCallerSid): self
    {
        $this->options['emergencyCallerSid'] = $emergencyCallerSid;
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
        return '[Twilio.Api.V2010.CreateDomainOptions ' . $options . ']';
    }
}




class UpdateDomainOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML requested by `voice_url`.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`
     * @param string $voiceStatusCallbackMethod The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     * @param string $voiceStatusCallbackUrl The URL that we should call to pass status parameters (such as call ended) to your application.
     * @param string $voiceUrl The URL we should call when the domain receives a call.
     * @param bool $sipRegistration Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     * @param string $domainName The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and \\\"-\\\" and must end with `sip.twilio.com`.
     * @param bool $emergencyCallingEnabled Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     * @param bool $secure Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     * @param string $byocTrunkSid The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     * @param string $emergencyCallerSid Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceStatusCallbackMethod = Values::NONE,
        string $voiceStatusCallbackUrl = Values::NONE,
        string $voiceUrl = Values::NONE,
        bool $sipRegistration = Values::NONE,
        string $domainName = Values::NONE,
        bool $emergencyCallingEnabled = Values::NONE,
        bool $secure = Values::NONE,
        string $byocTrunkSid = Values::NONE,
        string $emergencyCallerSid = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceStatusCallbackMethod'] = $voiceStatusCallbackMethod;
        $this->options['voiceStatusCallbackUrl'] = $voiceStatusCallbackUrl;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['sipRegistration'] = $sipRegistration;
        $this->options['domainName'] = $domainName;
        $this->options['emergencyCallingEnabled'] = $emergencyCallingEnabled;
        $this->options['secure'] = $secure;
        $this->options['byocTrunkSid'] = $byocTrunkSid;
        $this->options['emergencyCallerSid'] = $emergencyCallerSid;
    }

    /**
     * A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you created to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     *
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackMethod(string $voiceFallbackMethod): self
    {
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        return $this;
    }

    /**
     * The URL that we should call when an error occurs while retrieving or executing the TwiML requested by `voice_url`.
     *
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML requested by `voice_url`.
     * @return $this Fluent Builder
     */
    public function setVoiceFallbackUrl(string $voiceFallbackUrl): self
    {
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `voice_url`
     *
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`
     * @return $this Fluent Builder
     */
    public function setVoiceMethod(string $voiceMethod): self
    {
        $this->options['voiceMethod'] = $voiceMethod;
        return $this;
    }

    /**
     * The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     *
     * @param string $voiceStatusCallbackMethod The HTTP method we should use to call `voice_status_callback_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setVoiceStatusCallbackMethod(string $voiceStatusCallbackMethod): self
    {
        $this->options['voiceStatusCallbackMethod'] = $voiceStatusCallbackMethod;
        return $this;
    }

    /**
     * The URL that we should call to pass status parameters (such as call ended) to your application.
     *
     * @param string $voiceStatusCallbackUrl The URL that we should call to pass status parameters (such as call ended) to your application.
     * @return $this Fluent Builder
     */
    public function setVoiceStatusCallbackUrl(string $voiceStatusCallbackUrl): self
    {
        $this->options['voiceStatusCallbackUrl'] = $voiceStatusCallbackUrl;
        return $this;
    }

    /**
     * The URL we should call when the domain receives a call.
     *
     * @param string $voiceUrl The URL we should call when the domain receives a call.
     * @return $this Fluent Builder
     */
    public function setVoiceUrl(string $voiceUrl): self
    {
        $this->options['voiceUrl'] = $voiceUrl;
        return $this;
    }

    /**
     * Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     *
     * @param bool $sipRegistration Whether to allow SIP Endpoints to register with the domain to receive calls. Can be `true` or `false`. `true` allows SIP Endpoints to register with the domain to receive calls, `false` does not.
     * @return $this Fluent Builder
     */
    public function setSipRegistration(bool $sipRegistration): self
    {
        $this->options['sipRegistration'] = $sipRegistration;
        return $this;
    }

    /**
     * The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and \\\"-\\\" and must end with `sip.twilio.com`.
     *
     * @param string $domainName The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and \\\"-\\\" and must end with `sip.twilio.com`.
     * @return $this Fluent Builder
     */
    public function setDomainName(string $domainName): self
    {
        $this->options['domainName'] = $domainName;
        return $this;
    }

    /**
     * Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     *
     * @param bool $emergencyCallingEnabled Whether emergency calling is enabled for the domain. If enabled, allows emergency calls on the domain from phone numbers with validated addresses.
     * @return $this Fluent Builder
     */
    public function setEmergencyCallingEnabled(bool $emergencyCallingEnabled): self
    {
        $this->options['emergencyCallingEnabled'] = $emergencyCallingEnabled;
        return $this;
    }

    /**
     * Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     *
     * @param bool $secure Whether secure SIP is enabled for the domain. If enabled, TLS will be enforced and SRTP will be negotiated on all incoming calls to this sip domain.
     * @return $this Fluent Builder
     */
    public function setSecure(bool $secure): self
    {
        $this->options['secure'] = $secure;
        return $this;
    }

    /**
     * The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     *
     * @param string $byocTrunkSid The SID of the BYOC Trunk(Bring Your Own Carrier) resource that the Sip Domain will be associated with.
     * @return $this Fluent Builder
     */
    public function setByocTrunkSid(string $byocTrunkSid): self
    {
        $this->options['byocTrunkSid'] = $byocTrunkSid;
        return $this;
    }

    /**
     * Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     *
     * @param string $emergencyCallerSid Whether an emergency caller sid is configured for the domain. If present, this phone number will be used as the callback for the emergency call.
     * @return $this Fluent Builder
     */
    public function setEmergencyCallerSid(string $emergencyCallerSid): self
    {
        $this->options['emergencyCallerSid'] = $emergencyCallerSid;
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
        return '[Twilio.Api.V2010.UpdateDomainOptions ' . $options . ']';
    }
}

