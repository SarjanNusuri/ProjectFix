
<header class="fixed z-100 transition-colors duration-300 w-full backdrop-blur">
  <nav class="w-full py-4 border-0 shadow-2xl bg-brand ">
    <div x-data="{open: false}" class="flex items-center justify-between px-4 mx-auto max-w-7xl md:px-8">
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <h2 class="text-white font-medium">
          <a href="{{ route('user.index') }}">Kelompok 1</a>
        </h2>
      </div>

        <!-- Navigation Menu -->
        <div  :class="open ? 'block absolute top-full mt-4 lg:mt-0 right-4 z-50 w-60 bg-brand shadow-lg md:shadow-none rounded-lg p-4' : 'hidden lg:flex lg:items-center lg:space-x-6'" class="lg:static lg:w-auto">
          <div class="flex flex-col gap-3 py-2 pl-7 lg:p-0 lg:space-x-6 lg:flex-row">
              <a @click="open = false" href="#home" class="nav-link relative text-white hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-produk after:transition-all after:duration-300 hover:after:w-full">Home</a>
              <a @click="open = false" href="#about" class="nav-link relative text-white hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-produk after:transition-all after:duration-300 hover:after:w-full">About</a>
              <a @click="open = false" href="#product" class="nav-link relative text-white hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-produk after:transition-all after:duration-300 hover:after:w-full">Product</a>
          </div>
        </div>
          
          <!-- Right Section -->
      <div class="lg:hidden">
        <button @click="open = !open" class="p-0 m-0 rounded-md sm:p-2 sm:ml-2 lg:hidden" aria-label="Toggle menu">
          <svg 
            width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-white ">
            <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>
      </div>
    </div>

  </nav>

</header>



