<?php

namespace App\Http\Middleware;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\User;

class Autenticador
{
    public function handle(Request $request, \Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception();
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutentificacao = JWT::decode($token, env('JWT_KEY'), ['HS256']);
            
            $user =  User::where('email', $dadosAutentificacao->email)->first();
            
            if (is_null($user)) {
                throw new \Exception();
            }
    
            return $next($request);
        } catch (\Exception $e) {
            return response()->json('Não Autorizado', 401);
        }
    }
}