<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Controller function that handles GET requests for dynamic url
     *
     * @param Request $oRequest
     * @param string $sUrl
     * @return void
     */
    public function handleDynamicUrlGet(Request $oRequest, string $sUrl)
    {
        $sUserAgent = $oRequest->userAgent();
        $sHost = $oRequest->getHost();

        return response()->json([
            'url' => $sUrl,
            'user_agent' => $sUserAgent,
            'host' => $sHost
        ]);
    }

    /**
     * Controller function that handles PSOT requests for dynamic url
     *
     * @param Request $oRequest
     * @param string $sUrl
     * @return void
     */
    public function handleDynamicUrlPost(Request $oRequest)
    {
        $sUrl = $oRequest->url();
        $sUserAgent = $oRequest->userAgent();
        $sHost = $oRequest->getHost();
        $sBody = $oRequest->all();

        return response()->json([
            'url' => $sUrl,
            'user_agent' => $sUserAgent,
            'host' => $sHost,
            'body' => $sBody
        ]);
    }
}
