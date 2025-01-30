<!-- Base -->
<div class="flex grow">
    <!-- Header -->
    <header class="flex items-center fixed z-10 top-0 left-0 right-0 shrink-0 h-[--tw-header-height] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]" id="header">
        <!-- Container -->
        <div class="container-fluid flex justify-between items-stretch px-5 lg:ps-0 lg:gap-4" id="header_container">
            <div class="flex items-center mr-1">
                <div class="flex items-center justify-center lg:w-[--tw-sidebar-width] gap-2 shrink-0">
                    <button class="btn btn-icon btn-light btn-clear btn-sm -ms-2 lg:hidden" data-drawer-toggle="#sidebar">
                        <i class="ki-filled ki-menu">
                        </i>
                    </button>
                    <a class="mx-1" href="">
                        <img class="dark:hidden min-h-[24px]" src="{{asset('DashboardAssets/assets/media/app/mini-logo-primary.svg')}}"/>
                        <img class="hidden dark:block min-h-[24px]" src="{{asset('DashboardAssets/assets/media/app/mini-logo-primary-dark.svg')}}"/>
                    </a>
                </div>
            </div>
            <!-- End of Logo -->
            <!-- Topbar -->
            <div class="flex items-center lg:gap-3.5">
                <div class="menu" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0px, 9px" data-menu-item-placement="bottom-end" data-menu-item-placement-rtl="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <div class="menu-toggle btn btn-icon rounded-full">
                            <img alt="" class="size-8 rounded-full justify-center border border-gray-500 shrink-0" src="assets/media/avatars/gray/5.png">
                            </img>
                        </div>
                        <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                            <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                                <div class="flex items-center gap-2">
                                    <div class="flex flex-col gap-1.5">
             <span class="text-sm text-gray-800 font-semibold leading-none">
              Cody Fisher
             </span>
                                        <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none" href="html/demo3/account/home/get-started.html">
                                            c.fisher@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="flex flex-col">
                                <div class="menu-item px-4 py-1.5">
                                    <a class="btn btn-sm btn-light justify-center" href="html/demo3/authentication/classic/sign-in.html">
                                        Log out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Topbar -->
        </div>
        <!-- End of Container -->
    </header>
    <!-- End of Header -->
