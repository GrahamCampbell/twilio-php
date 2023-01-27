<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Video
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

abstract class CompositionHookOptions
{
    /**
     * @param bool $enabled Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook will never be triggered.
     * @param array $videoLayout An object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string[] $audioSources An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     * @param string[] $audioSourcesExcluded An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     * @param string $resolution A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string $format
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     * @param bool $trim Whether to clip the intervals where there is no active media in the Compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return CreateCompositionHookOptions Options builder
     */
    public static function create(
        
        bool $enabled = Values::NONE,
        array $videoLayout = Values::ARRAY_NONE,
        array $audioSources = Values::ARRAY_NONE,
        array $audioSourcesExcluded = Values::ARRAY_NONE,
        string $resolution = Values::NONE,
        string $format = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE,
        bool $trim = Values::NONE

    ): CreateCompositionHookOptions
    {
        return new CreateCompositionHookOptions(
            $enabled,
            $videoLayout,
            $audioSources,
            $audioSourcesExcluded,
            $resolution,
            $format,
            $statusCallback,
            $statusCallbackMethod,
            $trim
        );
    }



    /**
     * @param bool $enabled Read only CompositionHook resources with an `enabled` value that matches this parameter.
     * @param \DateTime $dateCreatedAfter Read only CompositionHook resources created on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     * @param \DateTime $dateCreatedBefore Read only CompositionHook resources created before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     * @param string $friendlyName Read only CompositionHook resources with friendly names that match this string. The match is not case sensitive and can include asterisk `*` characters as wildcard match.
     * @return ReadCompositionHookOptions Options builder
     */
    public static function read(
        
        bool $enabled = Values::NONE,
        \DateTime $dateCreatedAfter = Values::NONE,
        \DateTime $dateCreatedBefore = Values::NONE,
        string $friendlyName = Values::NONE

    ): ReadCompositionHookOptions
    {
        return new ReadCompositionHookOptions(
            $enabled,
            $dateCreatedAfter,
            $dateCreatedBefore,
            $friendlyName
        );
    }

    /**
     * @param bool $enabled Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook never triggers.
     * @param array $videoLayout A JSON object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string[] $audioSources An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     * @param string[] $audioSourcesExcluded An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     * @param bool $trim Whether to clip the intervals where there is no active media in the compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string $format
     * @param string $resolution A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     * @return UpdateCompositionHookOptions Options builder
     */
    public static function update(
        
        bool $enabled = Values::NONE,
        array $videoLayout = Values::ARRAY_NONE,
        array $audioSources = Values::ARRAY_NONE,
        array $audioSourcesExcluded = Values::ARRAY_NONE,
        bool $trim = Values::NONE,
        string $format = Values::NONE,
        string $resolution = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE

    ): UpdateCompositionHookOptions
    {
        return new UpdateCompositionHookOptions(
            $enabled,
            $videoLayout,
            $audioSources,
            $audioSourcesExcluded,
            $trim,
            $format,
            $resolution,
            $statusCallback,
            $statusCallbackMethod
        );
    }

}

class CreateCompositionHookOptions extends Options
    {
    /**
     * @param bool $enabled Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook will never be triggered.
     * @param array $videoLayout An object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string[] $audioSources An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     * @param string[] $audioSourcesExcluded An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     * @param string $resolution A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string $format
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     * @param bool $trim Whether to clip the intervals where there is no active media in the Compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     */
    public function __construct(
        
        bool $enabled = Values::NONE,
        array $videoLayout = Values::ARRAY_NONE,
        array $audioSources = Values::ARRAY_NONE,
        array $audioSourcesExcluded = Values::ARRAY_NONE,
        string $resolution = Values::NONE,
        string $format = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE,
        bool $trim = Values::NONE

    ) {
        $this->options['enabled'] = $enabled;
        $this->options['videoLayout'] = $videoLayout;
        $this->options['audioSources'] = $audioSources;
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        $this->options['resolution'] = $resolution;
        $this->options['format'] = $format;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['trim'] = $trim;
    }

    /**
     * Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook will never be triggered.
     *
     * @param bool $enabled Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook will never be triggered.
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled): self
    {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * An object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param array $videoLayout An object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return $this Fluent Builder
     */
    public function setVideoLayout(array $videoLayout): self
    {
        $this->options['videoLayout'] = $videoLayout;
        return $this;
    }

    /**
     * An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     *
     * @param string[] $audioSources An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     * @return $this Fluent Builder
     */
    public function setAudioSources(array $audioSources): self
    {
        $this->options['audioSources'] = $audioSources;
        return $this;
    }

    /**
     * An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     *
     * @param string[] $audioSourcesExcluded An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     * @return $this Fluent Builder
     */
    public function setAudioSourcesExcluded(array $audioSourcesExcluded): self
    {
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        return $this;
    }

    /**
     * A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param string $resolution A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return $this Fluent Builder
     */
    public function setResolution(string $resolution): self
    {
        $this->options['resolution'] = $resolution;
        return $this;
    }

    /**
     * @param string $format
     * @return $this Fluent Builder
     */
    public function setFormat(string $format): self
    {
        $this->options['format'] = $format;
        return $this;
    }

    /**
     * The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     *
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback): self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod(string $statusCallbackMethod): self
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Whether to clip the intervals where there is no active media in the Compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param bool $trim Whether to clip the intervals where there is no active media in the Compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return $this Fluent Builder
     */
    public function setTrim(bool $trim): self
    {
        $this->options['trim'] = $trim;
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
        return '[Twilio.Video.V1.CreateCompositionHookOptions ' . $options . ']';
    }
}



class ReadCompositionHookOptions extends Options
    {
    /**
     * @param bool $enabled Read only CompositionHook resources with an `enabled` value that matches this parameter.
     * @param \DateTime $dateCreatedAfter Read only CompositionHook resources created on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     * @param \DateTime $dateCreatedBefore Read only CompositionHook resources created before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     * @param string $friendlyName Read only CompositionHook resources with friendly names that match this string. The match is not case sensitive and can include asterisk `*` characters as wildcard match.
     */
    public function __construct(
        
        bool $enabled = Values::NONE,
        \DateTime $dateCreatedAfter = Values::NONE,
        \DateTime $dateCreatedBefore = Values::NONE,
        string $friendlyName = Values::NONE

    ) {
        $this->options['enabled'] = $enabled;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * Read only CompositionHook resources with an `enabled` value that matches this parameter.
     *
     * @param bool $enabled Read only CompositionHook resources with an `enabled` value that matches this parameter.
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled): self
    {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * Read only CompositionHook resources created on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     *
     * @param \DateTime $dateCreatedAfter Read only CompositionHook resources created on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter(\DateTime $dateCreatedAfter): self
    {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Read only CompositionHook resources created before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     *
     * @param \DateTime $dateCreatedBefore Read only CompositionHook resources created before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore(\DateTime $dateCreatedBefore): self
    {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Read only CompositionHook resources with friendly names that match this string. The match is not case sensitive and can include asterisk `*` characters as wildcard match.
     *
     * @param string $friendlyName Read only CompositionHook resources with friendly names that match this string. The match is not case sensitive and can include asterisk `*` characters as wildcard match.
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
        return '[Twilio.Video.V1.ReadCompositionHookOptions ' . $options . ']';
    }
}

class UpdateCompositionHookOptions extends Options
    {
    /**
     * @param bool $enabled Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook never triggers.
     * @param array $videoLayout A JSON object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string[] $audioSources An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     * @param string[] $audioSourcesExcluded An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     * @param bool $trim Whether to clip the intervals where there is no active media in the compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string $format
     * @param string $resolution A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     */
    public function __construct(
        
        bool $enabled = Values::NONE,
        array $videoLayout = Values::ARRAY_NONE,
        array $audioSources = Values::ARRAY_NONE,
        array $audioSourcesExcluded = Values::ARRAY_NONE,
        bool $trim = Values::NONE,
        string $format = Values::NONE,
        string $resolution = Values::NONE,
        string $statusCallback = Values::NONE,
        string $statusCallbackMethod = Values::NONE

    ) {
        $this->options['enabled'] = $enabled;
        $this->options['videoLayout'] = $videoLayout;
        $this->options['audioSources'] = $audioSources;
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        $this->options['trim'] = $trim;
        $this->options['format'] = $format;
        $this->options['resolution'] = $resolution;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
    }

    /**
     * Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook never triggers.
     *
     * @param bool $enabled Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook never triggers.
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled): self
    {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * A JSON object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param array $videoLayout A JSON object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return $this Fluent Builder
     */
    public function setVideoLayout(array $videoLayout): self
    {
        $this->options['videoLayout'] = $videoLayout;
        return $this;
    }

    /**
     * An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     *
     * @param string[] $audioSources An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     * @return $this Fluent Builder
     */
    public function setAudioSources(array $audioSources): self
    {
        $this->options['audioSources'] = $audioSources;
        return $this;
    }

    /**
     * An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     *
     * @param string[] $audioSourcesExcluded An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     * @return $this Fluent Builder
     */
    public function setAudioSourcesExcluded(array $audioSourcesExcluded): self
    {
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        return $this;
    }

    /**
     * Whether to clip the intervals where there is no active media in the compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param bool $trim Whether to clip the intervals where there is no active media in the compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return $this Fluent Builder
     */
    public function setTrim(bool $trim): self
    {
        $this->options['trim'] = $trim;
        return $this;
    }

    /**
     * @param string $format
     * @return $this Fluent Builder
     */
    public function setFormat(string $format): self
    {
        $this->options['format'] = $format;
        return $this;
    }

    /**
     * A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param string $resolution A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.  The string's format is `{width}x{height}` where:   * 16 <= `{width}` <= 1280 * 16 <= `{height}` <= 1280 * `{width}` * `{height}` <= 921,600  Typical values are:   * HD = `1280x720` * PAL = `1024x576` * VGA = `640x480` * CIF = `320x240`  Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     * @return $this Fluent Builder
     */
    public function setResolution(string $resolution): self
    {
        $this->options['resolution'] = $resolution;
        return $this;
    }

    /**
     * The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     *
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback): self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod(string $statusCallbackMethod): self
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
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
        return '[Twilio.Video.V1.UpdateCompositionHookOptions ' . $options . ']';
    }
}

