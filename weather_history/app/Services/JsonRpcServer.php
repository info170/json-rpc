<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\HistoryController;
use Log;

class JsonRpcServer
{
    public function handle(Request $request, HistoryController $controller)
    {
        try {
            $content = json_decode($request->getContent(), true);

            if (empty($content)) {
                throw new JsonRpcException('Parse error', JsonRpcException::PARSE_ERROR);
            }

            list($obj,$method) = explode(".",$content['method']);

            $result = $controller->{$method}($content['params']);

            return JsonRpcResponse::success($result, $content['id']);
        } catch (\Exception $e) {
            return JsonRpcResponse::error($e->getMessage());
        }
    }
}