<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
  </head>
    <body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="bg-slate-900 text-white sticky top-0 z-10 flex">
        <div class="p-4 w-15 flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bus-front-icon lucide-bus-front"><path d="M4 6 2 7"/><path d="M10 6h4"/><path d="m22 7-2-1"/><rect width="16" height="16" x="4" y="3" rx="2"/><path d="M4 11h16"/><path d="M8 15h.01"/><path d="M16 15h.01"/><path d="M6 19v2"/><path d="M18 21v-2"/>
            </svg>
        </div>
        <div class="py-4 w-11/12">
            <nav class="flex justify-between">
                <div>
                    <a href="#" class="bg-slate-800 text-xs text-white font-bold px-3 py-1 rounded inline-flex items-center space-x-2">
                        <span>Lead</span>
                        <span class="bg-teal-400 text-white text-sm px-2 py-0.5 rounded-full">2</span>
                    </a>

                    <a href="#" class="bg-slate-800 text-xs text-white font-bold px-3 py-1 rounded inline-flex items-center space-x-2">
                        <span>Contacted</span>
                        <span class="bg-teal-400 text-white text-sm px-2 py-0.5 rounded-full">5</span>
                    </a>

                    <a href="#" class="bg-slate-800 text-xs text-white font-bold px-3 py-1 rounded inline-flex items-center space-x-2">
                        <span>Negotiation</span>
                        <span class="bg-teal-400 text-white text-sm px-2 py-0.5 rounded-full">2</span>
                    </a>

                    <a href="#" class="bg-slate-800 text-xs text-white font-bold px-3 py-1 rounded inline-flex items-center space-x-2">
                        <span>Won / Lost</span>
                        <span class="bg-teal-400 text-white text-sm px-2 py-0.5 rounded-full">1</span>
                    </a>
                </div>
                <div>
                   <form method="post" action="/logout">
                    @csrf
                        <button class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg>
                        </button>
                   </form>
                </div>
            </nav>
        <div>
       
    </header>
    <main class="flex flex-1">
        <div class="border-r border-gray-200 py-3">
            <ul class="flex flex-col space-y-5 items-center">
                <li class="border-l border-l-4 border-teal-400 px-4 py-2">
                <a href="#">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2cc7bb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    </a>
                </li>

                <li class="border-l border-l-4 border-white px-4 py-2">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity-icon lucide-activity"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
                    </a>
                </li>

                <li class="border-l border-l-4 border-white px-4 py-2">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-aperture-icon lucide-aperture"><circle cx="12" cy="12" r="10"/><path d="m14.31 8 5.74 9.94"/><path d="M9.69 8h11.48"/><path d="m7.38 12 5.74-9.94"/><path d="M9.69 16 3.95 6.06"/><path d="M14.31 16H2.83"/><path d="m16.62 12-5.74 9.94"/></svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex-1">
            <div class="bg-gray-100 p-4">
               {{-- Développé le file d'Ariane --}}
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam sed exercitationem minima corrupti cumque odit minus repudiandae dicta repellendus neque voluptates ullam ad velit, quae quibusdam quidem assumenda animi illum.</p>
            </div>

            <div class="p-4">
                <h2 class="font-black text-2xl">Leads</h2>

             <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-slate-50 rounded-lg mt-5">
                <table class="w-full text-left table-auto min-w-max text-slate-800">
                    <thead>
                    <tr class="text-white border-b border-slate-300 bg-teal-400">
                        <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Contact Name
                        </p>
                        </th>
                        <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Start Date
                        </p>
                        </th>
                        <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            End Date
                        </p>
                        </th>
                        <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Owner
                        </p>
                        </th>
                        <th class="p-4">
                        <p class="text-sm leading-none font-normal">
                            Budget
                        </p>
                        </th>
                        <th class="p-4">
                        <p></p>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4">
                        <p class="text-sm font-bold">
                            <img src="https://ui-avatars.com/api/?name=John+Doe" alt="avatar" class="rounded-full w-10">
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            01/01/2024
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            30/06/2024
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            John Michael
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            $50,000
                        </p>
                        </td>
                        <td class="p-4">
                        <a href="#" class="text-sm font-semibold ">
                            Edit
                        </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4">
                        <p class="text-sm font-bold">
                            <img src="https://ui-avatars.com/api/?name=John+Doe" alt="avatar" class="rounded-full w-10">
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            15/02/2024
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            15/08/2024
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            Alexa Liras
                        </p>
                        </td>
                        <td class="p-4">
                        <p class="text-sm">
                            $75,000
                        </p>
                        </td>
                        <td class="p-4">
                        <a href="#" class="text-sm font-semibold ">
                            Edit
                        </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            </div>
        </div>


    </main>

    <footer class="flex justify-center">
        <p class="text-xs">CRMLITE - 2025</p>
    </footer>
  </body>
</html>
