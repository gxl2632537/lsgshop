<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Throwable;

class InternalException extends Exception
{
    //
    protected $msgForUser;
    public function __construct($message = "", $code = 500, Throwable $previous = null,$msgForUser='系统内部错误')
    {
        parent::__construct($message, $code, $previous);
        $this->msgForUser =$msgForUser;
    }
    //异常类触发时自动调用
    public function render(Request $request){
        if($request->expectsJson()){
            return response()->json(['msg'=>$this->msgForUser],$this->code);
        }
        return view('pages.error',['msg'=>$this->msgForUser]);
    }
}
