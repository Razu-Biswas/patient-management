<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Patient Management Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

  <nav class="bg-blue-600 text-white px-4 py-3 shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center">

      <a href="{{ route('patients.index') }}" class="text-lg md:text-xl font-bold hover:text-blue-200 transition">
        🏥 Patient Portal
      </a>


      <div class="flex items-center space-x-4">
        @auth

          <span class="hidden sm:inline font-semibold">
            👋 Hello, <span class="text-yellow-300">{{ auth()->user()->name }}</span>
          </span>


          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
              class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md transition text-sm md:text-base">
              Logout
            </button>
          </form>
        @else

          <a href="{{ route('login') }}" class="font-semibold text-yellow-400 hover:text-yellow-300 transition">Login</a>
        @endauth
      </div>
    </div>
  </nav>


  <main class="flex-1 p-4 md:p-6 max-w-7xl mx-auto w-full">
    @yield('content')
  </main>


  <footer class="bg-gray-800 text-gray-300 text-center py-3 text-sm mt-auto">
    © {{ date('Y') }} Patient Management Portal — All Rights Reserved.
  </footer>
</body>
</html>
