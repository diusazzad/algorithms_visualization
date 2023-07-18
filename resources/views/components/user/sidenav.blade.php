<div class="fixed w-1/5 bg-white h-screen border-r border-gray-200">
    <div class="flex items-center justify-center h-16 border-b border-gray-200">
        <h1 class="text-lg font-semibold">Welcome</h1>
    </div>
    <nav class="py-4">
        <a href="{{ route('user.dashboard') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
            Dashboard
        </a>
        <a href="{{ route('user.algorithms') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">

            Algorithm
        </a>
        <a href="#" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">

            Community
        </a>
        <a href="{{ route('user.tasks.index') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
            Task
        </a>

        <a href="{{ route('user.profile') }}"
            class="nav-link flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
            Profile
        </a>
        <a href="{{ route('user.settings') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">

            Settings
        </a>
        <a href="{{ route('user.learn') }}" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">

           Learn
        </a>
        <a href="" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">

          DS
        </a>
        <a href="" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
           Mathematics
        </a>
        <a href="" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
          Help Center
        </a>
        <a href="" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
          Games
        </a>
        <a href="" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-200">
         Upcomming
        </a>




    </nav>
    <div class="absolute bottom-0 w-full border-t border-gray-200">
        <a href="{{ route('user.logout') }}"
            class="flex items-center justify-center py-3 text-gray-600 hover:bg-gray-200">
            Logout
        </a>
    </div>
</div>




{{--
                <svg class="w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
<svg class="w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 6v6l4 2"></path>
            </svg>

             <svg class="w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 6H3v14h18V6zm-2 12h-4v-2h4v2zM3 6h4V4H3v2zm0 6h4v-2H3v2zm0 6h4v-2H3v2z"></path>
            </svg>
            <svg class="w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 9l-8-4l-8 4l8 4l8-4zM12 2L2 6l10 4l10-4L12 2zM2 15l10 5l10-5"></path>
            </svg>
            <svg class="w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 1v2"></path>
                <path d="M12 15v2"></path>
                <path d="M19 18h2"></path>
                <path d="M3 18h2"></path>
                <path d="M4.22 9L6 7.22"></path>
                <path d="M20 9l-2.12-2.12"></path>
                <path d="M2.83 14.17L4 12"></path>
                <path d="M17.66 9A8 8 0 016 9"></path>
                <path d="M19.07 12A8 8 0 016 12"></path>
                <path d="M4.93 14.17L4 12"></path>
                <path d="M16 3v2"></path>
                <path d="M8 3v2"></path>
            </svg>

                        <svg class="w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5M12 19l-7-7 7-7"></path>
            </svg>

--}}
