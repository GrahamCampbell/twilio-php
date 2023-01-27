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

abstract class ApplicationOptions
{
    /**
     * @param string $apiVersion The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is the account's default API version.
     * @param string $voiceUrl The URL we should call when the phone number assigned to this application receives a call.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     * @param bool $voiceCallerIdLookup Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     * @param string $smsUrl The URL we should call when the phone number receives an incoming SMS message.
     * @param string $smsMethod The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     * @param string $smsFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     * @param string $smsFallbackMethod The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     * @param string $smsStatusCallback The URL we should call using a POST method to send status information about SMS messages sent by the application.
     * @param string $messageStatusCallback The URL we should call using a POST method to send message status information to your application.
     * @param string $friendlyName A descriptive string that you create to describe the new application. It can be up to 64 characters long.
     * @param bool $publicApplicationConnectEnabled Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     * @return CreateApplicationOptions Options builder
     */
    public static function create(
        
        string $apiVersion = Values::NONE,
        string $voiceUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE,
        bool $voiceCallerIdLookup = Values::NONE,
        string $smsUrl = Values::NONE,
        string $smsMethod = Values::NONE,
        string $smsFallbackUrl = Values::NONE,
        string $smsFallbackMethod = Values::NONE,
        string $smsStatusCallback = Values::NONE,
        string $messageStatusCallback = Values::NONE,
        string $friendlyName = Values::NONE,
        bool $publicApplicationConnectEnabled = Values::NONE

    ): CreateApplicationOptions
    {
        return new CreateApplicationOptions(
            $apiVersion,
            $voiceUrl,
            $voiceMethod,
            $voiceFallbackUrl,
            $voiceFallbackMethod,
            $statusCallback,
            $statusCallbackMethod,
            $voiceCallerIdLookup,
            $smsUrl,
            $smsMethod,
            $smsFallbackUrl,
            $smsFallbackMethod,
            $smsStatusCallback,
            $messageStatusCallback,
            $friendlyName,
            $publicApplicationConnectEnabled
        );
    }



    /**
     * @param string $friendlyName The string that identifies the Application resources to read.
     * @return ReadApplicationOptions Options builder
     */
    public static function read(
        
        string $friendlyName = Values::NONE

    ): ReadApplicationOptions
    {
        return new ReadApplicationOptions(
            $friendlyName
        );
    }

    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $apiVersion The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is your account's default API version.
     * @param string $voiceUrl The URL we should call when the phone number assigned to this application receives a call.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     * @param bool $voiceCallerIdLookup Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     * @param string $smsUrl The URL we should call when the phone number receives an incoming SMS message.
     * @param string $smsMethod The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     * @param string $smsFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     * @param string $smsFallbackMethod The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     * @param string $smsStatusCallback Same as message_status_callback: The URL we should call using a POST method to send status information about SMS messages sent by the application. Deprecated, included for backwards compatibility.
     * @param string $messageStatusCallback The URL we should call using a POST method to send message status information to your application.
     * @param bool $publicApplicationConnectEnabled Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     * @return UpdateApplicationOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        string $apiVersion = Values::NONE,
        string $voiceUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE,
        bool $voiceCallerIdLookup = Values::NONE,
        string $smsUrl = Values::NONE,
        string $smsMethod = Values::NONE,
        string $smsFallbackUrl = Values::NONE,
        string $smsFallbackMethod = Values::NONE,
        string $smsStatusCallback = Values::NONE,
        string $messageStatusCallback = Values::NONE,
        bool $publicApplicationConnectEnabled = Values::NONE

    ): UpdateApplicationOptions
    {
        return new UpdateApplicationOptions(
            $friendlyName,
            $apiVersion,
            $voiceUrl,
            $voiceMethod,
            $voiceFallbackUrl,
            $voiceFallbackMethod,
            $statusCallback,
            $statusCallbackMethod,
            $voiceCallerIdLookup,
            $smsUrl,
            $smsMethod,
            $smsFallbackUrl,
            $smsFallbackMethod,
            $smsStatusCallback,
            $messageStatusCallback,
            $publicApplicationConnectEnabled
        );
    }

}

class CreateApplicationOptions extends Options
    {
    /**
     * @param string $apiVersion The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is the account's default API version.
     * @param string $voiceUrl The URL we should call when the phone number assigned to this application receives a call.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     * @param bool $voiceCallerIdLookup Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     * @param string $smsUrl The URL we should call when the phone number receives an incoming SMS message.
     * @param string $smsMethod The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     * @param string $smsFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     * @param string $smsFallbackMethod The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     * @param string $smsStatusCallback The URL we should call using a POST method to send status information about SMS messages sent by the application.
     * @param string $messageStatusCallback The URL we should call using a POST method to send message status information to your application.
     * @param string $friendlyName A descriptive string that you create to describe the new application. It can be up to 64 characters long.
     * @param bool $publicApplicationConnectEnabled Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     */
    public function __construct(
        
        string $apiVersion = Values::NONE,
        string $voiceUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE,
        bool $voiceCallerIdLookup = Values::NONE,
        string $smsUrl = Values::NONE,
        string $smsMethod = Values::NONE,
        string $smsFallbackUrl = Values::NONE,
        string $smsFallbackMethod = Values::NONE,
        string $smsStatusCallback = Values::NONE,
        string $messageStatusCallback = Values::NONE,
        string $friendlyName = Values::NONE,
        bool $publicApplicationConnectEnabled = Values::NONE

    ) {
        $this->options['apiVersion'] = $apiVersion;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        $this->options['smsUrl'] = $smsUrl;
        $this->options['smsMethod'] = $smsMethod;
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        $this->options['smsStatusCallback'] = $smsStatusCallback;
        $this->options['messageStatusCallback'] = $messageStatusCallback;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['publicApplicationConnectEnabled'] = $publicApplicationConnectEnabled;
    }

    /**
     * The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is the account's default API version.
     *
     * @param string $apiVersion The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is the account's default API version.
     * @return $this Fluent Builder
     */
    public function setApiVersion(string $apiVersion): self
    {
        $this->options['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
     * The URL we should call when the phone number assigned to this application receives a call.
     *
     * @param string $voiceUrl The URL we should call when the phone number assigned to this application receives a call.
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
     * The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
     *
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
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
     * The URL we should call using the `status_callback_method` to send status information to your application.
     *
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application.
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback): self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod(string $statusCallbackMethod): self
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     *
     * @param bool $voiceCallerIdLookup Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     * @return $this Fluent Builder
     */
    public function setVoiceCallerIdLookup(bool $voiceCallerIdLookup): self
    {
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        return $this;
    }

    /**
     * The URL we should call when the phone number receives an incoming SMS message.
     *
     * @param string $smsUrl The URL we should call when the phone number receives an incoming SMS message.
     * @return $this Fluent Builder
     */
    public function setSmsUrl(string $smsUrl): self
    {
        $this->options['smsUrl'] = $smsUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     *
     * @param string $smsMethod The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setSmsMethod(string $smsMethod): self
    {
        $this->options['smsMethod'] = $smsMethod;
        return $this;
    }

    /**
     * The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     *
     * @param string $smsFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     * @return $this Fluent Builder
     */
    public function setSmsFallbackUrl(string $smsFallbackUrl): self
    {
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     *
     * @param string $smsFallbackMethod The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setSmsFallbackMethod(string $smsFallbackMethod): self
    {
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        return $this;
    }

    /**
     * The URL we should call using a POST method to send status information about SMS messages sent by the application.
     *
     * @param string $smsStatusCallback The URL we should call using a POST method to send status information about SMS messages sent by the application.
     * @return $this Fluent Builder
     */
    public function setSmsStatusCallback(string $smsStatusCallback): self
    {
        $this->options['smsStatusCallback'] = $smsStatusCallback;
        return $this;
    }

    /**
     * The URL we should call using a POST method to send message status information to your application.
     *
     * @param string $messageStatusCallback The URL we should call using a POST method to send message status information to your application.
     * @return $this Fluent Builder
     */
    public function setMessageStatusCallback(string $messageStatusCallback): self
    {
        $this->options['messageStatusCallback'] = $messageStatusCallback;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the new application. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the new application. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     *
     * @param bool $publicApplicationConnectEnabled Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     * @return $this Fluent Builder
     */
    public function setPublicApplicationConnectEnabled(bool $publicApplicationConnectEnabled): self
    {
        $this->options['publicApplicationConnectEnabled'] = $publicApplicationConnectEnabled;
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
        return '[Twilio.Api.V2010.CreateApplicationOptions ' . $options . ']';
    }
}



class ReadApplicationOptions extends Options
    {
    /**
     * @param string $friendlyName The string that identifies the Application resources to read.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * The string that identifies the Application resources to read.
     *
     * @param string $friendlyName The string that identifies the Application resources to read.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
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
        return '[Twilio.Api.V2010.ReadApplicationOptions ' . $options . ']';
    }
}

class UpdateApplicationOptions extends Options
    {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $apiVersion The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is your account's default API version.
     * @param string $voiceUrl The URL we should call when the phone number assigned to this application receives a call.
     * @param string $voiceMethod The HTTP method we should use to call `voice_url`. Can be: `GET` or `POST`.
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
     * @param string $voiceFallbackMethod The HTTP method we should use to call `voice_fallback_url`. Can be: `GET` or `POST`.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     * @param bool $voiceCallerIdLookup Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     * @param string $smsUrl The URL we should call when the phone number receives an incoming SMS message.
     * @param string $smsMethod The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     * @param string $smsFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     * @param string $smsFallbackMethod The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     * @param string $smsStatusCallback Same as message_status_callback: The URL we should call using a POST method to send status information about SMS messages sent by the application. Deprecated, included for backwards compatibility.
     * @param string $messageStatusCallback The URL we should call using a POST method to send message status information to your application.
     * @param bool $publicApplicationConnectEnabled Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $apiVersion = Values::NONE,
        string $voiceUrl = Values::NONE,
        string $voiceMethod = Values::NONE,
        string $voiceFallbackUrl = Values::NONE,
        string $voiceFallbackMethod = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE,
        bool $voiceCallerIdLookup = Values::NONE,
        string $smsUrl = Values::NONE,
        string $smsMethod = Values::NONE,
        string $smsFallbackUrl = Values::NONE,
        string $smsFallbackMethod = Values::NONE,
        string $smsStatusCallback = Values::NONE,
        string $messageStatusCallback = Values::NONE,
        bool $publicApplicationConnectEnabled = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['apiVersion'] = $apiVersion;
        $this->options['voiceUrl'] = $voiceUrl;
        $this->options['voiceMethod'] = $voiceMethod;
        $this->options['voiceFallbackUrl'] = $voiceFallbackUrl;
        $this->options['voiceFallbackMethod'] = $voiceFallbackMethod;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        $this->options['smsUrl'] = $smsUrl;
        $this->options['smsMethod'] = $smsMethod;
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        $this->options['smsStatusCallback'] = $smsStatusCallback;
        $this->options['messageStatusCallback'] = $messageStatusCallback;
        $this->options['publicApplicationConnectEnabled'] = $publicApplicationConnectEnabled;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is your account's default API version.
     *
     * @param string $apiVersion The API version to use to start a new TwiML session. Can be: `2010-04-01` or `2008-08-01`. The default value is your account's default API version.
     * @return $this Fluent Builder
     */
    public function setApiVersion(string $apiVersion): self
    {
        $this->options['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
     * The URL we should call when the phone number assigned to this application receives a call.
     *
     * @param string $voiceUrl The URL we should call when the phone number assigned to this application receives a call.
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
     * The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
     *
     * @param string $voiceFallbackUrl The URL that we should call when an error occurs retrieving or executing the TwiML requested by `url`.
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
     * The URL we should call using the `status_callback_method` to send status information to your application.
     *
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application.
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback): self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod(string $statusCallbackMethod): self
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     *
     * @param bool $voiceCallerIdLookup Whether we should look up the caller's caller-ID name from the CNAM database (additional charges apply). Can be: `true` or `false`.
     * @return $this Fluent Builder
     */
    public function setVoiceCallerIdLookup(bool $voiceCallerIdLookup): self
    {
        $this->options['voiceCallerIdLookup'] = $voiceCallerIdLookup;
        return $this;
    }

    /**
     * The URL we should call when the phone number receives an incoming SMS message.
     *
     * @param string $smsUrl The URL we should call when the phone number receives an incoming SMS message.
     * @return $this Fluent Builder
     */
    public function setSmsUrl(string $smsUrl): self
    {
        $this->options['smsUrl'] = $smsUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     *
     * @param string $smsMethod The HTTP method we should use to call `sms_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setSmsMethod(string $smsMethod): self
    {
        $this->options['smsMethod'] = $smsMethod;
        return $this;
    }

    /**
     * The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     *
     * @param string $smsFallbackUrl The URL that we should call when an error occurs while retrieving or executing the TwiML from `sms_url`.
     * @return $this Fluent Builder
     */
    public function setSmsFallbackUrl(string $smsFallbackUrl): self
    {
        $this->options['smsFallbackUrl'] = $smsFallbackUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     *
     * @param string $smsFallbackMethod The HTTP method we should use to call `sms_fallback_url`. Can be: `GET` or `POST`.
     * @return $this Fluent Builder
     */
    public function setSmsFallbackMethod(string $smsFallbackMethod): self
    {
        $this->options['smsFallbackMethod'] = $smsFallbackMethod;
        return $this;
    }

    /**
     * Same as message_status_callback: The URL we should call using a POST method to send status information about SMS messages sent by the application. Deprecated, included for backwards compatibility.
     *
     * @param string $smsStatusCallback Same as message_status_callback: The URL we should call using a POST method to send status information about SMS messages sent by the application. Deprecated, included for backwards compatibility.
     * @return $this Fluent Builder
     */
    public function setSmsStatusCallback(string $smsStatusCallback): self
    {
        $this->options['smsStatusCallback'] = $smsStatusCallback;
        return $this;
    }

    /**
     * The URL we should call using a POST method to send message status information to your application.
     *
     * @param string $messageStatusCallback The URL we should call using a POST method to send message status information to your application.
     * @return $this Fluent Builder
     */
    public function setMessageStatusCallback(string $messageStatusCallback): self
    {
        $this->options['messageStatusCallback'] = $messageStatusCallback;
        return $this;
    }

    /**
     * Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     *
     * @param bool $publicApplicationConnectEnabled Whether to allow other Twilio accounts to dial this applicaton using Dial verb. Can be: `true` or `false`.
     * @return $this Fluent Builder
     */
    public function setPublicApplicationConnectEnabled(bool $publicApplicationConnectEnabled): self
    {
        $this->options['publicApplicationConnectEnabled'] = $publicApplicationConnectEnabled;
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
        return '[Twilio.Api.V2010.UpdateApplicationOptions ' . $options . ']';
    }
}

