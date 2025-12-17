<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
  </head>
    <body class="bg-gray-100 min-h-screen">
        <main class="min-h-screen flex flex-col justify-center items-center">
            <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bus-front-icon lucide-bus-front"><path d="M4 6 2 7"/><path d="M10 6h4"/><path d="m22 7-2-1"/><rect width="16" height="16" x="4" y="3" rx="2"/><path d="M4 11h16"/><path d="M8 15h.01"/><path d="M16 15h.01"/><path d="M6 19v2"/><path d="M18 21v-2"/>
            </svg>
            </div>
            <div class="bg-white p-4 border-t border-t-teal-400 w-3/12">
                <h1 class="font-black text-xl mb-4">Login</h1>
                <form method="post" action="/login">
                    @csrf
                    <div>
                        <input type="email" name="email" class="bg-slate-100 px-2 py-4 w-full outline-none" placeholder="name@yourdomain.com" value={{old("email")}}>
                        @error("email") <span class="text-xs text-red-400">{{ $message }}</span>@enderror
                    </div>
                    <div class="my-4">
                        <input type="password" name="password" class="bg-slate-100 px-2 py-4 w-full outline-none" placeholder="**********">
                        @error("password") <span class="text-xs text-red-400">{{ $message }}</span>@enderror
                    </div>
                     <div>
                        <input type="submit" class="bg-teal-400 text-white px-2 py-4 w-full outline-none cursor-pointer" value="Login">
                    </div>
                </form>
            </div>
        </main>
  </body>
</html>
