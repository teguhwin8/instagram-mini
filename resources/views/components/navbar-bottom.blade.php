<div class="relative">
  <div class="block fixed w-full max-w-sm bottom-0">
    <div class="flex justify-between border-t border-gray-100">
      <a href="#" class="w-full px-2 flex justify-center items-center hover:bg-gray-100 py-3 text-center mx-auto bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
      </a>
      <a href="#" class="w-full px-2 flex justify-center items-center hover:bg-gray-100 py-3 text-center bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </a>
      <a href="#" class="w-full px-2 flex justify-center items-center hover:bg-gray-100 py-3 text-center bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </a>
      <a href="#" class="w-full px-2 flex justify-center items-center hover:bg-gray-100 py-3 text-center bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        </svg>
      </a>
      <a href="/profile" class="w-full px-2 flex justify-center items-center hover:bg-gray-100 py-3 text-center bg-white">
        @if ($data->avatar)
          <img src="{{ asset('images/avatar/' . $data->avatar) }}" alt="{{ $data->username }}" class="rounded-full w-6 h-6 object-cover">
        @else
          <img src="{{ 'https://ui-avatars.com/api/?size=128&name=' . $data->username }}" alt="{{ $data->username }}" class="rounded-full w-6 h-6 object-cover">
        @endif
      </a>
    </div>
  </div>
</div>
