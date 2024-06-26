<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img id="logo" src="/images/logo.jpg">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Apenas informe o seu endereço de email e nós vamos enviar uma email para você reconfigurar sua senha.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Enviar Email') }}
                </x-button>
            </div>
        </form>

        <style>


            #logo{
                width:150px;
                border-radius: 100px;
            }
        </style>
    </x-authentication-card>
</x-guest-layout>
