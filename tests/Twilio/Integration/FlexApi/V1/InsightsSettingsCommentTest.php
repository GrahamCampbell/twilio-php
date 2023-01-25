<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\FlexApi\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class InsightsSettingsCommentTest extends HolodeckTestCase {
    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['token' => "token", ];

        try {
            $this->twilio->flexApi->v1->insightsSettingsComment->fetch($options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $headers = ['Token' => "token", ];

        $this->assertRequest(new Request(
            'get',
            'https://flex-api.twilio.com/v1/Insights/QM/Settings/CommentTags',
            [],
            [],
            $headers
        ));
    }

    public function testReadResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "comments": [
                    {
                        "default": false,
                        "id": "4c5ba39a-e192-4c5d-a41c-b765a833665b",
                        "name": "Good",
                        "sort": 0
                    }
                ],
                "url": "https://flex-api.twilio.com/v1/Insights/QM/Settings/CommentTags"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->insightsSettingsComment->fetch();

        $this->assertNotNull($actual);
    }
}