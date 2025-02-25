<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr" lang="en">
<<<<<<< HEAD
<head><base href="../../../../">
    <title>
        Metronic - Tailwind CSS Settings - With Sidebar
    </title>
    <meta charset="utf-8"/>
    <meta content="follow, index" name="robots"/>
    <link href="https://127.0.0.1:8001/metronic-tailwind-html/demo3/account/home/settings-sidebar" rel="canonical"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta content="Sidebar settings page using Tailwind CSS" name="description"/>
    <meta content="@keenthemes" name="twitter:site"/>
    <meta content="@keenthemes" name="twitter:creator"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="Metronic - Tailwind CSS Settings - With Sidebar" name="twitter:title"/>
    <meta content="Sidebar settings page using Tailwind CSS" name="twitter:description"/>
    <meta content="assets/media/app/og-image.png" name="twitter:image"/>
    <meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo3/account/home/settings-sidebar" property="og:url"/>
    <meta content="en_US" property="og:locale"/>
    <meta content="website" property="og:type"/>
    <meta content="@keenthemes" property="og:site_name"/>
    <meta content="Metronic - Tailwind CSS Settings - With Sidebar" property="og:title"/>
    <meta content="Sidebar settings page using Tailwind CSS" property="og:description"/>
    <meta content="assets/media/app/og-image.png" property="og:image"/>
    <link href="{{asset('DashboardAssets/assets/media/app/apple-touch-icon.png')}}" rel="apple-touch-icon" sizes="180x180"/>
    <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png"/>
    <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png"/>
    <link href="assets/media/app/favicon.ico" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="{{asset('DashboardAssets/assets/vendors/apexcharts/apexcharts.css')}}" rel="stylesheet"/>
    <link href="{{asset('DashboardAssets/assets/vendors/keenicons/styles.bundle.css')}}" rel="stylesheet"/>
    <link href="{{asset('DashboardAssets/assets/css/styles.css')}}" rel="stylesheet"/>
</head>
<body class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#f6f6f6] [--tw-page-bg-dark:var(--tw-coal-200)] [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-content-scrollbar-color:#e8e8e8] [--tw-header-height:58px] [--tw-sidebar-width:58px] [--tw-navbar-height:56px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] lg:overflow-hidden">

@include('dashboard.layouts._header')
    <!-- Wrapper -->
    <div class="flex flex-col lg:flex-row grow pt-[--tw-header-height]">
       @include('dashboard.layouts._sidebar')
        <!-- Main -->

        @include('dashboard.layouts._navbar')
        <div class="flex grow rounded-b-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border-x border-b border-gray-400 dark:border-gray-200 lg:mt-[--tw-navbar-height] mx-5 lg:ms-[--tw-sidebar-width] mb-5">
            <div class="flex flex-col grow lg:scrollable-y lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-7 lg:[&_.container-fluid]:pe-4" id="scrollable_content">
                <main class="grow" role="content">
                    <!-- Toolbar -->
                    <div class="pb-6">
                        <!-- Container -->
                        <div class="container-fluid flex items-center justify-between flex-wrap gap-3">
                            <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                                <h1 class="font-medium text-lg text-gray-900">
                                    Settings - With Sidebar
                                </h1>
                                <div class="flex items-center gap-1 text-sm font-normal">
                                    <a class="text-gray-700 hover:text-primary" href="html/demo3.html">
                                        Home
                                    </a>
                                    <span class="text-gray-400 text-sm">
            /
           </span>
                                    <span class="text-gray-700">
            My Account
           </span>
                                    <span class="text-gray-400 text-sm">
            /
           </span>
                                    <span class="text-gray-900">
            Account Home
           </span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Container -->
                    </div>
                    <!-- End of Toolbar -->


@yield('content')


@include('sweetalert::alert')

@include('dashboard.layouts._footer')

<!-- Scripts -->
<script src="{{asset('DashboardAssets/assets/js/core.bundle.js')}}">
</script>
<script src="{{asset('DashboardAssets/assets/vendors/apexcharts/apexcharts.min.js')}}">
</script>
<!-- End of Scripts -->
</body>
=======

<head>
	<base href="../../../../">
	<title>
		Metronic - Tailwind CSS Settings - With Sidebar
	</title>
	<meta charset="utf-8" />
	<meta content="follow, index" name="robots" />
	<link href="https://127.0.0.1:8001/metronic-tailwind-html/demo3/account/home/settings-sidebar" rel="canonical" />
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
	<meta content="Sidebar settings page using Tailwind CSS" name="description" />
	<meta content="@keenthemes" name="twitter:site" />
	<meta content="@keenthemes" name="twitter:creator" />
	<meta content="summary_large_image" name="twitter:card" />
	<meta content="Metronic - Tailwind CSS Settings - With Sidebar" name="twitter:title" />
	<meta content="Sidebar settings page using Tailwind CSS" name="twitter:description" />
	<meta content="assets/media/app/og-image.png" name="twitter:image" />
	<meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo3/account/home/settings-sidebar" property="og:url" />
	<meta content="en_US" property="og:locale" />
	<meta content="website" property="og:type" />
	<meta content="@keenthemes" property="og:site_name" />
	<meta content="Metronic - Tailwind CSS Settings - With Sidebar" property="og:title" />
	<meta content="Sidebar settings page using Tailwind CSS" property="og:description" />
	<meta content="assets/media/app/og-image.png" property="og:image" />
	<link href="{{ asset('DashboardAssets/assets/media/app/apple-touch-icon.png') }}" rel="apple-touch-icon"
		sizes="180x180" />
	<link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
	<link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
	<link href="assets/media/app/favicon.ico" rel="shortcut icon" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
	<link href="{{ asset('DashboardAssets/assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet" />
	<link href="{{ asset('DashboardAssets/assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet" />
	<link href="{{ asset('DashboardAssets/assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body
	class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#f6f6f6] [--tw-page-bg-dark:var(--tw-coal-200)] [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-content-scrollbar-color:#e8e8e8] [--tw-header-height:58px] [--tw-sidebar-width:58px] [--tw-navbar-height:56px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] lg:overflow-hidden">

	@include('dashboard.layouts._header')
	<!-- Wrapper -->
	<div class="flex flex-col lg:flex-row grow pt-[--tw-header-height]">
		@include('dashboard.layouts._sidebar')
		<!-- Main -->

		@include('dashboard.layouts._navbar')
		<div
			class="flex grow rounded-b-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border-x border-b border-gray-400 dark:border-gray-200 lg:mt-[--tw-navbar-height] mx-5 lg:ms-[--tw-sidebar-width] mb-5">
			<div
				class="flex flex-col grow lg:scrollable-y lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-7 lg:[&_.container-fluid]:pe-4"
				id="scrollable_content">
				<main class="grow" role="content">
					<!-- Toolbar -->
					<div class="pb-6">
						<!-- Container -->
						<div class="container-fluid flex items-center justify-between flex-wrap gap-3">
							<div class="flex items-center flex-wrap gap-1 lg:gap-5">
								<h1 class="font-medium text-lg text-gray-900">
									Settings - With Sidebar
								</h1>
								<div class="flex items-center gap-1 text-sm font-normal">
									<a class="text-gray-700 hover:text-primary" href="html/demo3.html">
										Home
									</a>
									<span class="text-gray-400 text-sm">
										/
									</span>
									<span class="text-gray-700">
										My Account
									</span>
									<span class="text-gray-400 text-sm">
										/
									</span>
									<span class="text-gray-900">
										Account Home
									</span>
								</div>
							</div>
						</div>
						<!-- End of Container -->
					</div>
					<!-- End of Toolbar -->


					@yield('content')


					@include('sweetalert::alert')

					@include('dashboard.layouts._footer')

					<!-- Scripts -->
					<script src="{{ asset('DashboardAssets/assets/js/core.bundle.js') }}"></script>
					<script src="{{ asset('DashboardAssets/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
					<!-- End of Scripts -->
</body>

>>>>>>> master
</html>
