<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr" lang="en">
 <head><base href="../../../../../">
  <title>
   Metronic - Tailwind CSS Sign In
  </title>
  <meta charset="utf-8"/>
  <meta content="follow, index" name="robots"/>
  <link href="https://127.0.0.1:8001/metronic-tailwind-html/demo3/authentication/classic/sign-in/index.html" rel="canonical"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <meta content="Sign in page using Tailwind CSS" name="description"/>
  <meta content="@keenthemes" name="twitter:site"/>
  <meta content="@keenthemes" name="twitter:creator"/>
  <meta content="summary_large_image" name="twitter:card"/>
  <meta content="Metronic - Tailwind CSS Sign In" name="twitter:title"/>
  <meta content="Sign in page using Tailwind CSS" name="twitter:description"/>
  <meta content="{{asset('DashboardAssets/assets/media/app/og-image.png')}}" name="twitter:image"/>
  <meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo3/authentication/classic/sign-in/index.html" property="og:url"/>
  <meta content="en_US" property="og:locale"/>
  <meta content="website" property="og:type"/>
  <meta content="@keenthemes" property="og:site_name"/>
  <meta content="Metronic - Tailwind CSS Sign In" property="og:title"/>
  <meta content="Sign in page using Tailwind CSS" property="og:description"/>
  <meta content="{{asset('DashboardAssets/assets/media/app/og-image.png')}}" property="og:image"/>
  <link href="{{asset('DashboardAssets/assets/media/app/apple-touch-icon.png')}}')}}" rel="apple-touch-icon" sizes="180x180"/>
  <link href="{{asset('DashboardAssets/assets/media/app/favicon-32x32.png')}}" rel="icon" sizes="32x32" type="image/png"/>
  <link href="{{asset('DashboardAssets/assets/media/app/favicon-16x16.png')}}" rel="icon" sizes="16x16" type="image/png"/>
  <link href="{{asset('DashboardAssets/assets/media/app/favicon.ico')}}" rel="shortcut icon"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="{{asset('DashboardAssets/assets/vendors/apexcharts/apexcharts.css')}}" rel="stylesheet"/>
  <link href="{{asset('DashboardAssets/assets/vendors/keenicons/styles.bundle.css')}}" rel="stylesheet"/>
  <link href="{{asset('DashboardAssets/assets/css/styles.css')}}" rel="stylesheet"/>
 </head>
 <body class="antialiased flex h-full text-base text-gray-700 dark:bg-coal-500">
  <!-- Page -->
  <style>
   .page-bg {
			background-image: url('{{asset('DashboardAssets/assets/media/images/2600x1200/bg-10.png')}}');
		}
		.dark .page-bg {
			background-image: url('{{asset('DashboardAssets/assets/media/images/2600x1200/bg-10-dark.png')}}');
		}
  </style>
  <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
   <div class="card max-w-[370px] w-full">
    <form action="{{route('login')}}" class="card-body flex flex-col gap-5 p-10" id="sign_in_form" method="post">
        @csrf
     <div class="text-center mb-2.5">
      <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
       Sign in
      </h3>
     </div>


     <div class="flex flex-col gap-1">
      <label class="form-label font-normal text-gray-900">
       Email
      </label>
      <input class="input" placeholder="email@email.com" type="text" name="email"/>
     </div>
     <div class="flex flex-col gap-1">
      <div class="flex items-center justify-between gap-1">
       <label class="form-label font-normal text-gray-900">
        Password
       </label>
      </div>
      <div class="input" data-toggle-password="true">
       <input name="password" placeholder="Enter Password" type="password" />
       <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
        <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
        </i>
        <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
        </i>
       </button>
      </div>
     </div>
     <label class="checkbox-group">
      <input class="checkbox checkbox-sm" name="check" type="checkbox" value="1"/>
      <span class="checkbox-label">
       Remember me
      </span>
     </label>
     <button class="btn btn-primary flex justify-center grow">
      Sign In
     </button>
    </form>
   </div>
  </div>
  <!-- End of Page -->
  <!-- Scripts -->
  <script src="{{asset('DashboardAssets/assets/js/core.bundle.js')}}">
  </script>
  <script src="{{asset('DashboardAssets/assets/vendors/apexcharts/apexcharts.min.js')}}">
  </script>
  <!-- End of Scripts -->
 </body>
</html>
