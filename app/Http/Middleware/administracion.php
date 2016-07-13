<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;
use Laracasts\Flash\Flash;



class administracion
{
    protected $auth;
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->rol_user != 'admin'){
            Flash::info('usuario '.$this->auth->user()->nombre_user.' sin privilegios!!');
            return redirect('/');
        }
        return $next($request);
        
    }
}
