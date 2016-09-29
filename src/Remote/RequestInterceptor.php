<?php


namespace Fairlingo_SDK\Remote;


interface RequestInterceptor
{
    /**
     * @param Request $request
     * @return Request
     */
    public function intercept(Request $request);

}