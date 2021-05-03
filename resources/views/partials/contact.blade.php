<section id="contact">
    <!-- Contact Section -->
  <div class="relative bg-indigo-700">
    <div class="h-80 absolute bottom-0 xl:inset-0 xl:h-full xl:w-full ">
              <!-- <div class="max-w-md mx-screen bg-white overflow-hidden md:max-w-2xl"> -->
      <div class="h-full w-full xl:grid xl:grid-cols-2 ">
                <!-- <div class="md:flex"> -->
        <div class="h-screen xl:relative xl:col-start-1 xl:flex-shrink-0">
                <!-- <div class="md:flex-shrink-0"> -->
            <img class="h-full w-full object-cover md:object-scale-down opacity-75 sm:opacity-0 sm:mt-0 xl:opacity-100 xl:absolute xl:inset-y-0 left-0" src="{{ url(asset('img/office.jpg')) }}"  alt="">
                <!-- <img class="h-full w-1/2 object-cover md:object-scale-down md:w-50" src="{{ url(asset('img/office.jpg')) }}"  alt=""> -->
                <!-- <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-indigo-600 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div> -->
            <div aria-hidden="true" class="absolute right-0 top-0 h-32 bg-gradient-to-b from-indigo-100 xl:inset-y-0 xl:right-0 xl:h-full xl:w-40 xl:bg-gradient-to-l"></div>
        </div>
        
     
  
                  <!-- <div class="h-full w-full xl:grid xl:grid-cols-2 p-6 bg-indigo-100" > -->
        <div class="p-8 bg-indigo-100">

                  <!-- <div class="h-full xl:relative xl:col-start-2 p-8 bg-indigo-300"> -->
          <div bg-indigo-700>
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mt-6">
              <span class="block">Still have questions?</span>
              <span class="block bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Contact us to get your questions answered.</span>
            </h2>
            <p class="mt-4 text-lg text-gray-500 sm:mt-3">
              We’d love to hear from you! Send us a message using the form, or email us. We’d love to hear from you!
            </p>
         
            <form action="#" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            <div>
              <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
              <div class="mt-1">
                <input wire:model="" placeholder=" John" />
              </div>
            </div>
            <div>
              <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
              <div class="mt-1">
                  <input wire:model="" placeholder=" Smith" />
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <div class="mt-1">
              <input wire:model="" placeholder=" John.Smith@gmail.com" />
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
              <div class="mt-1">
              <input wire:model="" placeholder=" St. Louis Potters" />
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <span id="phone_description" class="text-sm text-gray-500">Optional</span>
              </div>
              <div class="mt-1">
              <input wire:model="" placeholder=" (232)345-2345" />
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between">
                <label for="how_can_we_help" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                <span id="how_can_we_help_description" class="text-sm text-gray-500">Max. 500 characters</span>
              </div>
              <div class="mt-1">
                <input id="how_can_we_help" name="how_can_we_help" aria-describedby="how_can_we_help_description" rows="6" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"><input>
              </div>
            </div>
            <div class="text-center sm:col-span-2">
              <x-subscribe-button type='submit'>
                Subscribe
              </x-subscribe-button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
