<?php

namespace Tests\Unit\Remote;

use Fairlingo_SDK\Remote\Curl;
use Fairlingo_SDK\Remote\Exceptions\CurlException;
use Mockery\MockInterface;
use Tests\Unit\TestCase;

class CurlTest extends TestCase
{

    public function test_checkHttpStatusOrFail_shouldThrowCurlExceptionWhenReturnStatusIsNot200()
    {
        // Given
        $this->setExpectedException(CurlException::class);

        /** @var Curl $curl */
        $curl = \Mockery::mock(Curl::class . '[getInfo,setOption,execute]', function (MockInterface $mock) {
            $mock->shouldReceive('getInfo')->andReturn(300);
        });

        // When
        $curl->checkHttpStatusOrFail();
    }

    public function test_failOnCurlErrors_shouldThrowCurlExceptionWhenResponseErrors()
    {
        // Given
        $this->expectException(CurlException::class);

        /** @var Curl $curl */
        $curl = \Mockery::mock(Curl::class . '[errors,setOption,execute]', function (MockInterface $mock) {
            $mock->shouldReceive('errors')->andReturn('Error');
        });

        // When
        $curl->failOnCurlErrors();
    }

}