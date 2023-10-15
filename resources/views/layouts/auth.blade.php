<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('img/linac-icon.webp') }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <title>
      Assement Test Website
    </title>
    <meta name="description" content="Internet Accelerator Laboratory" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="canonical" href="" />
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="path/to/styles.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark')
      }
  </script>
  </head>
  <body>
    <!--Content-->
    @yield('content')
  </body>
</html>
