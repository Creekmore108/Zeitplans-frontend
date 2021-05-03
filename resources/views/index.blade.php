@extends('layouts.app')

@section('content')
<div class="bg-gray-300">
    @include('partials.header')
    

    <main>
    <!-- Hero section -->
    <div class="relative">
      <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100 "></div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 z-0 mt-10">
        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
          <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="{{ url(asset('img/background.png')) }}">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-indigo-500" style="mix-blend-mode: multiply;"></div>
          </div>
          <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
              <span class="block text-gray-200">Take control of your</span>
              <span class="block text-indigo-200">Resources</span>
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-white sm:max-w-3xl">
              Zeitplans.com was designed and created by artisans who realized the need to manage resources at membership based cooperatives and guilds. We understood the challenges from both the artists stand point as well as the management team trying to keep things running smoothly. Being able to reserve a kiln or spray booth so you have enough inventory for an upcoming show or sale. Management being able to account for the ussage of the resources and receive accurate payment so that they can continue to operate. As we relized number of organizations where still using pen and paper or a spreadsheet located on a drive somewhere, providing an easy to use system that is available 24/7 from anywhere was seen as a huge benefit.
            </p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
              <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                  Get started
                </a>
                <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                  Live demo
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Alternating Calendar Sections -->
    <div class="relative pt-16 pb-32 overflow-hidden">
        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                <div>
                <div>
                    <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600">
                    <!-- Heroicon name: outline/calendar -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M7 11H17M5 21H19C20.1046 21 21 20.1046 21 19V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V19C3 20.1046 3.89543 21 5 21Z" />
                    </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                    Stay on top of everything happening
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                    In your dashboard view you can seen all resources that have been scheduled, Classes with details and scheduled meetings all in one page.
                    </p>
                    <div class="mt-6">
                    <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                        Get started
                    </a>
                    </div>
                </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-6">
            <!-- <blockquote>
                <div>
                <p class="text-base text-gray-500">
                    &ldquo;Zeitplans has helped us organize and track our resources .&rdquo;
                </p>
                </div>
                <footer class="mt-3">
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                    <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                    </div>
                    <div class="text-base font-medium text-gray-700">
                    Diane Wilks, Digital Marketing Manager
                    </div>
                </div>
                </footer>
            </blockquote> -->
            </div>
        </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
                <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="{{ url(asset('img/calendar.png')) }}" alt="Dashboard">
                </div>
            </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                <div>
                <div>
                    <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600">
                    <!-- Heroicon name: outline/ academic-cap -->

                    <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" aria-hidden="true">
                    <path d="M12 14L21 9L12 4L3 9L12 14Z" fill="none"/>
                    <path d="M12 14L18.1591 10.5783C18.7017 11.9466 19 13.4384 19 14.9999C19 15.7013 18.9398 16.3885 18.8244 17.0569C16.2143 17.3106 13.849 18.4006 12 20.0555C10.151 18.4006 7.78571 17.3106 5.17562 17.0569C5.06017 16.3885 5 15.7012 5 14.9999C5 13.4384 5.29824 11.9466 5.84088 10.5782L12 14Z" fill="none"/>
                    <path d="M12 14L21 9L12 4L3 9L12 14ZM12 14L18.1591 10.5783C18.7017 11.9466 19 13.4384 19 14.9999C19 15.7013 18.9398 16.3885 18.8244 17.0569C16.2143 17.3106 13.849 18.4006 12 20.0555C10.151 18.4006 7.78571 17.3106 5.17562 17.0569C5.06017 16.3885 5 15.7012 5 14.9999C5 13.4384 5.29824 11.9466 5.84088 10.5782L12 14ZM8 19.9999V12.5L12 10.2778" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                    Manage your classes and open lab sessions
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                    A number of guilds and cooperatives offer classes in addition to their membership. Being able to enter classes into the calendar and giving your students view only access cuts down on the number of inquiries to your teachers and staff.
                    </p>
                    <div class="mt-6">
                    <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                        Get started
                    </a>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-6"> </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="{{ url(asset('img/classes.png')) }}" alt="Classes">
                </div>
            </div>
            </div>
        </div>
        <x-indev-modal>
        </x-indev-modal>
        </div>
        
    @include('partials.features')
    @include('partials.pricing')
    @include('partials.faq')
    
   
    </main>
    @include('partials.footer')
</div>
@endsection
