

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trang Quan Tri Vien ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <ul>
                  <li class="bg-red-500 mb-4 text-center h-16 rounded-lg text-xl font-sans text-white"><a style="line-height: 4rem" href="{{ route('questions.index') }}">Quan ly cau hoi</a></li>
                  <li class="bg-red-500 mb-4 text-center h-16 rounded-lg text-xl font-sans text-white"><a style="line-height: 4rem" href="{{ route('user.index') }}">Quan ly nguoi dung</a></li>
                  <li class="bg-red-500 mb-4 text-center h-16 rounded-lg text-xl font-sans text-white"><a style="line-height: 4rem" href="">Quan ly bai kiem tra</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>