<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
    class="sidebar fixed left-0 top-0 z-[9999] flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:bg-white dark:border-gray-800 lg:static lg:translate-x-0 transition-transform duration-300 ease-in-out">
    <!-- SIDEBAR HEADER -->
    <div :class="sidebarToggle ? 'justify-center' : 'justify-between'"
        class="flex items-center gap-2 pt-8 sidebar-header pb-7">
        <a href="{{ route('admin-dashboard') }}" class="flex items-center">
            <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
                <img class="dark:hidden" src="{{ asset('images/logo/logo.svg') }}" alt="Logo" />
                <img class="hidden dark:block" src="{{ asset('images/logo/logo-dark.svg') }}" alt="Logo" />
            </span>

            <img class="logo-icon" :class="sidebarToggle ? 'lg:block' : 'hidden'"
                src="{{ asset('images/logo/logo-icon.svg') }}" alt="Logo" />
        </a>
    </div>
    <!-- END SIDEBAR HEADER -->

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <!-- Sidebar Menu -->
        <nav x-data="{ selected: $persist('Dashboard') }">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
                    <span class="menu-group-title" :class="sidebarToggle ? 'lg:hidden' : ''">
                        MENU
                    </span>

                    <svg :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
                        class="mx-auto fill-current menu-group-icon" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
                            fill="" />
                    </svg>
                </h3>
            </div>

            <div>
                <ul class="flex flex-col gap-4 mb-6">
                    <!-- Menu Item with submenu -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="#" @click.prevent="open = !open"
                            class="menu-item group flex items-center justify-between text-gray-700 dark:text-gray-900"
                            :class="open ? 'menu-item-active' : 'menu-item-inactive'">

                            <div class="flex items-center gap-2">
                                <!-- Book Icon -->
                                <svg :class="open ? 'text-primary' : 'text-gray-400 dark:text-gray-300'" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M19 2H8C6.897 2 6 2.897 6 4v16c0 1.103.897 2 2 2h11V2zM8 4h10v16H8V4z" />
                                    <path fill="currentColor"
                                        d="M4 6H3v14c0 1.103.897 2 2 2h13v-1H5c-.552 0-1-.448-1-1V6z" />
                                </svg>
                                <span class="menu-item-text">Course Manage</span>
                            </div>

                            <svg :class="open ? 'rotate-180' : ''" class="stroke-current" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition x-cloak class="mt-2 pl-9">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="{{ route('courses.index') }}"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        Course
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Menu Item course -->

                    <!-- Menu Item with submenu -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="#" @click.prevent="open = !open"
                            class="menu-item group flex items-center justify-between text-gray-700 dark:text-gray-900"
                            :class="open ? 'menu-item-active' : 'menu-item-inactive'">

                            <div class="flex items-center gap-2">
                              <svg :class="open ? 'text-primary' : 'text-gray-400 dark:text-gray-300'"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M3 9.75L5.5 4.5h13l2.5 5.25M4.5 9.75v9.75A1.5 1.5 0 006 21h12a1.5 1.5 0 001.5-1.5V9.75M9 21V12h6v9" />
                            </svg>
                                <span class="menu-item-text">Manage Shop</span>
                            </div>

                            <svg :class="open ? 'rotate-180' : ''" class="stroke-current" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition x-cloak class="mt-2 pl-9">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="{{ route('shops.index') }}"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        Shop
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Menu Item blog -->
                    <!-- Menu Item with submenu -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="#" @click.prevent="open = !open"
                            class="menu-item group flex items-center justify-between text-gray-700 dark:text-gray-900"
                            :class="open ? 'menu-item-active' : 'menu-item-inactive'">

                            <div class="flex items-center gap-2">
                            <svg :class="open ? 'text-primary' : 'text-gray-400 dark:text-gray-300'"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M7 8h10M7 12h6M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z" />
                                </svg>
                                <span class="menu-item-text">Manage Blog</span>
                            </div>

                            <svg :class="open ? 'rotate-180' : ''" class="stroke-current" width="20"
                                height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition x-cloak class="mt-2 pl-9">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="{{ route('blogs.index') }}"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Menu Item blog -->
                    <!-- Menu Item with submenu -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="#" @click.prevent="open = !open"
                            class="menu-item group flex items-center justify-between text-gray-700 dark:text-gray-900"
                            :class="open ? 'menu-item-active' : 'menu-item-inactive'">

                        <div class="flex items-center gap-2">
                            <svg :class="open ? 'text-primary' : 'text-gray-400 dark:text-gray-300'"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.89 3.31.877 2.42 2.42a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.065 2.572c.89 1.543-.877 3.31-2.42 2.42a1.724 1.724 0 00-2.573 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.572-1.065c-1.543.89-3.31-.877-2.42-2.42a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.065-2.572c-.89-1.543.877-3.31 2.42-2.42.933.538 2.147.086 2.572-1.066z" />
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="menu-item-text">Web Setting</span>
                            </div>

                            <svg :class="open ? 'rotate-180' : ''" class="stroke-current" width="20"
                                height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition x-cloak class="mt-2 pl-9">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="{{ route('settings-general') }}"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        🔧 General Settings
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        👥 User Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        ✉️ Contact Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        📢 SEO Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        📬 Email Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        📱 Social Media Links
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        🖼️ Media Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        🔐 Security Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        💰 Payment Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        🧩 Third-Party Integrations
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        🛠️ System Settings
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                    <!-- End Menu Item web setting -->
                    <!-- Menu Item with submenu -->
                    {{--  <li x-data="{ open: false }" class="relative">
                        <a href="#" @click.prevent="open = !open"
                            class="menu-item group flex items-center justify-between text-gray-700 dark:text-gray-900"
                            :class="open ? 'menu-item-active' : 'menu-item-inactive'">

                            <div class="flex items-center gap-2">
                                <svg :class="open ? 'text-primary' : 'text-gray-400 dark:text-gray-300'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2.75C14 2.33579 14.3358 2 14.75 2C15.1642 2 15.5 2.33579 15.5 2.75V5.73291H19C19.4142 5.73291 19.75 6.0687 19.75 6.48291C19.75 6.89712 19.4142 7.23291 19 7.23291H18.5V12.2329C18.5 15.5691 15.9866 18.3183 12.75 18.6901V21.25C12.75 21.6642 12.4142 22 12 22C11.5858 22 11.25 21.6642 11.25 21.25V18.6901C8.01342 18.3183 5.5 15.5691 5.5 12.2329V7.23291H5C4.58579 7.23291 4.25 6.89712 4.25 6.48291C4.25 6.0687 4.58579 5.73291 5 5.73291H10V2.75C10 2.33579 10.3358 2 10.75 2C11.1642 2 11.5 2.33579 11.5 2.75V5.73291H14ZM7 7.23291V12.2329C7 14.9943 9.23858 17.2329 12 17.2329C14.7614 17.2329 17 14.9943 17 12.2329V7.23291H7Z"
                                        fill="currentColor" />
                                </svg>
                                <span class="menu-item-text">User & Role</span>
                            </div>

                            <svg :class="open ? 'rotate-180' : ''" class="stroke-current" width="20"
                                height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition x-cloak class="mt-2 pl-9">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a href="signin.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        Role
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        Permission
                                    </a>
                                </li>
                                <li>
                                    <a href="signup.html"
                                        class="block px-2 py-1 text-sm text-gray-600 dark:text-gray-700 hover:text-primary">
                                        User
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>  --}}
                    <!-- End Menu Item user and role -->


                </ul>
            </div>
        </nav>
        <!-- End Sidebar Menu -->
    </div>
</aside>
