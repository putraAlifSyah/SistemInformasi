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
      <form method="POST" action="{{ route('register') }}">
        @csrf
            <img src="Assets/avatar.svg" class="w-32" />
            <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-left">
              Registrasi  
            </h2>

            <div class="relative mt-8">
                <i class="fa fa-user absolute text-primarycolor text-xl"></i>
                <input id="name" type="name" name="name" placeholder="Name"
                class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500  text-lg" required autofocus/>
            </div>

            <div class="relative mt-8" >
                <i class="fa fa-at absolute text-primarycolor text-xl"></i>
                <input id="email" type="email" name="email" :value="old('email')" placeholder="Email"
                class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500  text-lg" required/>
            </div>

            <div class="relative mt-8">
                <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
                <input id="password" type="password" name="password" placeholder="password"
                class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500  text-lg" required autocomplete="current-password" />
            </div>

            <div class="relative mt-8">
                <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password"
                class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500  text-lg" required autocomplete="current-password" />
            </div>
            
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <label for="terms">
                        <div class="flex items-center">
                            <checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </label>
                </div>
            @endif
            <button class="py-3 px-20 bg-primarycolor rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">
              Login
            </button>
                <a href="{{ route('login') }}" class="self-end mt-4 text-gray-600 font-bold">Already registered?</a>
        </form>
    </div>
  </body>
</html>
