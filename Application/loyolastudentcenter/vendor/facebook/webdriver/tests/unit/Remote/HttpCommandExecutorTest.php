<?php
// Copyright 2004-present Facebook. All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace Facebook\WebDriver\Remote;

use phpmock\phpunit\PHPMock;

class HttpCommandExecutorTest extends \PHPUnit_Framework_TestCase
{
    use PHPMock;
    /** @var HttpCommandExecutor */
    private $executor;

    public function setUp()
    {
        $this->executor = new HttpCommandExecutor('http://localhost:4444');
    }

    /**
     * @dataProvider commandProvider
     * @param int $command
     * @param array $params
     * @param string $expectedUrl
     * @param string $expectedPostData
     */
    public function testShouldSendRequestToAssembledUrl($command, array $params, $expectedUrl, $expectedPostData)
    {
        $command = new WebDriverCommand('foo-123', $command, $params);

        $curlSetoptMock = $this->getFunctionMock(__NAMESPACE__, 'curl_setopt');
        $curlSetoptMock->expects($this->at(0))
            ->with($this->anything(), CURLOPT_URL, $expectedUrl);

        $curlSetoptMock->expects($this->at(2))
            ->with($this->anything(), CURLOPT_POSTFIELDS, $expectedPostData);

        $curlExecMock = $this->getFunctionMock(__NAMESPACE__, 'curl_exec');
        $curlExecMock->expects($this->once())
            ->willReturn('{}');

        $this->executor->execute($command);
    }

    /**
     * @return array[]
     */
    public function commandProvider()
    {
        return [
            'POST command having :id placeholder in url' => [
                DriverCommand::SEND_KEYS_TO_ELEMENT,
                ['value' => 'submitted-value', ':id' => '1337'],
                'http://localhost:4444/session/foo-123/element/1337/value',
                '{"value":"submitted-value"}',
            ],
            'POST command without :id placeholder in url' => [
                DriverCommand::TOUCH_UP,
                ['x' => 3, 'y' => 6],
                'http://localhost:4444/session/foo-123/touch/up',
                '{"x":3,"y":6}',
            ],
            'Extra useless placeholder parameter should be removed' => [
                DriverCommand::TOUCH_UP,
                ['x' => 3, 'y' => 6, ':useless' => 'foo'],
                'http://localhost:4444/session/foo-123/touch/up',
                '{"x":3,"y":6}',
            ],
            'DELETE command' => [
                DriverCommand::DELETE_COOKIE,
                [':name' => 'cookie-name'],
                'http://localhost:4444/session/foo-123/cookie/cookie-name',
                null,
            ],
            'GET command without session in URL' => [
                DriverCommand::GET_ALL_SESSIONS,
                [],
                'http://localhost:4444/sessions',
                null,
            ],
        ];
    }
}
