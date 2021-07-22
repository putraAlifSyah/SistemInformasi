<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login project</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
  </head>
  <body>
    <img
      src="Assets/wave.png"
      class="fixed hidden lg:block inset-0 h-full"
      style="z-index: -1;"/>
    <div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
      <img src="Assets/undraw_security_o890.svg" class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto" />
      <form method="POST" action="{{ route('login') }}">
        @csrf
            <img src="Assets/avatar.svg" class="w-32" />
            <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-left">
              Silahkan Login  
            </h2>

            <div class="relative" >
                <i class="fa fa-at absolute text-primarycolor text-xl"></i>
                <input id="email" type="email" name="email" :value="old('email')" placeholder="Email"
                class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-lg" required autofocus />
            </div>

            <div class="relative mt-8">
                <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
                <input id="password" type="password" name="password" placeholder="password"
                class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg" required autocomplete="current-password" />
            </div>
            
            <button class="py-3 px-20 bg-primarycolor rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">
              Login
            </button>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="self-end mt-4 text-gray-600 font-bold">Forgot password?</a>
            @endif
            <a href="{{ route('register') }}" class="self-end mt-4 text-gray-600 font-bold">Register </a>

        </form>
    </div>
  </body>
</html>
