<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Algorithm Visualization</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('welcome/css/welcome.css') }}">
    <p class="hidden sm:block">Visit Count: {{ $visitCount }}</p>
    {{--
        sm: Small screens (640px and above)
        md: Medium screens (768px and above)
        lg: Large screens (1024px and above)
        xl: Extra-large screens (1280px and above)
        2xl: Larger screens (1536px and above)
     --}}

    {{--
  - Header
  - Logo
  - Navigation Menu
    - Home
    - About Us
    - Services
    - Portfolio
    - Contact Us
- Hero Section
  - Main Heading
  - Subheading
  - Call-to-Action Button
- Features Section
  - Feature 1
  - Feature 2
  - Feature 3
- About Us Section
  - Image/Icon
  - Title
  - Description
- Services Section
  - Service 1
  - Service 2
  - Service 3
- Portfolio Section
  - Project 1
    - Image/Thumbnail
    - Project Name
    - Description
  - Project 2
    - Image/Thumbnail
    - Project Name
    - Description
  - Project 3
    - Image/Thumbnail
    - Project Name
    - Description
- Testimonials Section
  - Testimonial 1
    - Name
    - Role
    - Testimonial Text
  - Testimonial 2
    - Name
    - Role
    - Testimonial Text
- Contact Us Section
  - Contact Form
    - Name
    - Email
    - Message
    - Submit Button
- Footer
  - About Us
  - Latest News
  - Contact Us
  - Social Media Icons --}}
</head>

<body class="">
    {{-- <div class="">
        <x-welcome.cookie />
    </div> --}}

    <div class="main">
        <div class="" id="NavBar">
            <x-welcome.nav-bar>
                <x-welcome.dark-mode />
            </x-welcome.nav-bar>
        </div>
        {{-- <div class="">
            <x-welcome.header />
        </div>
        <div class="grid grid-cols-3 border p-1">
            <div class="">

            </div>
            <div class="">

            </div>
            <div class="">
                <x-welcome.weather />
            </div>
        </div>

        <div class="">
            <x-welcome.footer />
        </div> --}}
    </div>


</body>

</html>
