<?php

namespace App\Http\Middleware;

use DB;
use Auth;
use Closure;
use App\Page;
use App\UserRole;
use App\PageRole;
use App\Role as Roles;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dump(Route::currentRouteName());
        
        if(Auth::user()){
            $routeMethod=$request->method();
            if($routeMethod=='GET'){
                $route=Route::currentRouteName();
              
                $page=DB::table('pages')->where('route_name',$route)->first();
                if($page){
                    if($this->checkPage($page)==1)
                        return $next($request); 
                    else 
                        return new Response(view('errors.accessDenied'));

                }else{
                    Page::store($route,'Default description',$route);   
                    $page=DB::table('pages')->where('route_name',$route)->first();

                    if($this->checkPage($page)==1)
                        return $next($request); 
                    else 
                        return new Response(view('errors.accessDenied'));
                }
            
            }else{
                return $next($request);
            }
        }else{
            
            view()->share('global_all_categories', 'abc');
            return $next($request);
        }
    }


    
 

    public function checkPage($page){
        $userRole=DB::table('user_roles')->where('user_id',Auth::user()->id)->first();
    //  dd($userRole);
        $pageRole=DB::table('page_roles')->where('page_id',$page->id)->where('role_id',$userRole->role_id)->pluck('access')->first();
    
        $role=DB::table('roles')->where('id',$userRole->role_id)->first();
        
        if(isset($pageRole)){
           return $pageRole;
        }else{
            PageRole::store($userRole->role_id,$page->id,$role->default_access);
            return $role->default_access;
        }
    }
}
