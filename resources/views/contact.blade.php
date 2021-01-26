<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8">
                    <div class="flex flex-wrap -mx-1 overflow-hidden">

                        <div class="my-1 px-1 w-1/2 overflow-hidden sm:w-full lg:w-1/2">
                            <h1 class="text-3xl">{{ __('Contact Page') }}</h1>
                            <div class="p-8">
                                <h2 class="pb-4 text-xl">Lorem ipsum, dolor sit.</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laboriosam autem
                                    tempora quod soluta. Consequatur, at a. Autem quo, repudiandae commodi dolor
                                    consequuntur quam ipsum cupiditate <strong>ratione quis ex amet</strong>  natus aliquam asperiores
                                    quas explicabo cumque magnam. Aut, quos iusto?
                                </p>
                                <p class="bg-gray-900 p-4 text-white mt-2 rounded-lg shadow-xl">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur enim doloribus
                                    non <strong>illum distinctio repellat, corporis rem, delectus eos</strong> et minima, quidem quas
                                    quod animi voluptas aliquam maxime at natus vero iste? Neque tempora necessitatibus
                                    omnis labore assumenda illo corrupti?
                                </p>
                                <h2 class="text-xl mt-2">
                                    Lorem, ipsum.
                                </h2>
                                <p class="mt-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eos vero soluta
                                    laboriosam ipsa quam beatae. Porro quas doloremque at.
                                </p>
                            </div>
                        </div>

                        <div class="my-1 px-1 w-1/2 overflow-hidden sm:w-full lg:w-1/2">
                            <form action="{{ route('send-form') }}" method="post">
                                @csrf
                                <div>
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="phone" value="{{ __('Phone') }}" />
                                    <x-jet-input id="phone" class="block mt-1 w-full" type="tel" name="phone"
                                        :value="old('phone')" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="message" value="{{ __('Message') }}" />
                                    <textarea
                                        class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                        name="message" id="message" rows="8"></textarea>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-jet-button class="ml-4">
                                        {{ __('Send') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
