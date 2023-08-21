<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Up load') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <span class="" style="margin:20px auto; display: inline-block;">Up load file</span>
                <form method="POST" action="{{ route('handleUpLoad') }}" enctype="multipart/form-data"
                    style="max-width: 400px; margin: 0 auto;">
                    @csrf
                    <select name="test" id="" style="margin: 20px 0px 40px 0px">
                        @foreach ($tests as $item)
                            <option value="{{$item->id}}">{{$item->Name}}</option>
                        @endforeach
                    </select>
                    <input type="file" name="csv_file" style="margin-bottom: 10px;">
                    <button type="submit"
                        style="background-color: #4CAF50; color: white; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer;">Upload</button>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
