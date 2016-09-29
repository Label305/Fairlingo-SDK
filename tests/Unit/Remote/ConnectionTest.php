<?php

namespace Tests\Unit\Remote;

use Fairlingo_SDK\Remote\Connection;
use Fairlingo_SDK\Remote\Curl;
use Fairlingo_SDK\Remote\RawResponse;
use Fairlingo_SDK\Remote\Request;
use Fairlingo_SDK\Remote\RequestInterceptor;
use Mockery;
use Mockery\MockInterface;
use Tests\Unit\TestCase;

class ConnectionTest extends TestCase
{

    public function test_doRequest_shouldReturnRawResponse()
    {
        $url = 'https://google.nl';

        /** @var Curl $curl */
        $curl = Mockery::mock(Curl::class, function (MockInterface $mock) {
            $mock->shouldReceive('init');
            $mock->shouldReceive('setOption')->times(7);
            $mock->shouldReceive('execute')->andReturn(new RawResponse(''));
            $mock->shouldReceive('checkHttpStatusOrFail');
            $mock->shouldReceive('failOnCurlErrors');
            $mock->shouldReceive('close');
        });

        /** @var Request $request */
        $request = Mockery::mock(Request::class, function (MockInterface $mock) {
            $mock->shouldReceive('getEndpoint');
            $mock->shouldReceive('getMethod')->andReturn('GET');
            $mock->shouldReceive('getPostParams')->andReturn([]);
            $mock->shouldReceive('getFormattedHeaders')->andReturn([]);
        });

        $connection = new Connection($url, $curl);
        $response = $connection->doRequest($request);

        $this->assertInstanceOf(RawResponse::class, $response);
    }

    public function test_doRequest_shouldApplyInterceptors()
    {
        $url = 'https://google.nl';

        /** @var Curl $curl */
        $curl = Mockery::mock(Curl::class, function (MockInterface $mock) {
            $mock->shouldReceive('init');
            $mock->shouldReceive('setOption')->times(7);
            $mock->shouldReceive('execute')->andReturn(new RawResponse(''));
            $mock->shouldReceive('checkHttpStatusOrFail');
            $mock->shouldReceive('failOnCurlErrors');
            $mock->shouldReceive('close');
        });

        /** @var Request $request */
        $request = Mockery::mock(Request::class, function (MockInterface $mock) {
            $mock->shouldReceive('getEndpoint');
            $mock->shouldReceive('getMethod')->andReturn('GET');
            $mock->shouldReceive('getPostParams')->andReturn([]);
            $mock->shouldReceive('getFormattedHeaders')->andReturn([]);
        });

        /** @var RequestInterceptor $interceptor */
        $interceptor = Mockery::mock(RequestInterceptor::class, function (MockInterface $mock) use ($request) {
            $mock->shouldReceive('intercept')->withArgs([$request])->once()->andReturn($request);
        });

        $connection = new Connection($url, $curl);
        $connection->addInterceptor($interceptor);
        $response = $connection->doRequest($request);

        $this->assertInstanceOf(RawResponse::class, $response);
    }

}