<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
              <button type="submit" style="background-color: #4CAF50; color: white; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer; margin: 30px auto"><a href="{{ route('create.upload') }}">Upload file csv</a></button>
              <hr>
              <span style="display: block;; margin: 20px auto;font-size: 20px;font-weight: bold">Or: </span>
                
                <form action="{{ route('questions.store') }}" method="POST" style="max-width: 400px; margin: 0 auto;"
                    enctype="multipart/form-data">
                    @csrf
                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Test ID:</span>
                        {{-- <input type="text" name="test_id" required style="width: 100%; padding: 5px;"> --}}
                        <select name="test_id" style="width: 100%; height: 30px; padding: 5px; font-size: 14px;">
                            <option value="1" style="font-size: 14px; background-color: #f2f2f2; color: #333;">1
                            </option>
                            <option value="2" style="font-size: 14px; background-color: #f2f2f2; color: #333;">2
                            </option>
                            <option value="3" style="font-size: 14px; background-color: #f2f2f2; color: #333;">3
                            </option>
                        </select>

                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Question Content:</span>
                        <textarea type="text" name="QuestionContent" required style="width: 100%; padding: 5px;"></textarea>
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option A:</span>
                        <input type="text" name="OptionA" required style="width: 100%; padding: 5px;">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option B:</span>
                        <input type="text" name="OptionB" required style="width: 100%; padding: 5px;">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option C:</span>
                        <input type="text" name="OptionC" required style="width: 100%; padding: 5px;">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option D:</span>
                        <input type="text" name="OptionD" required style="width: 100%; padding: 5px;">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Correct Option:</span>
                        <input type="text" name="CorrectOption" required style="width: 100%; padding: 5px;">
                    </label>

                    <input type="submit" value="Submit"
                        style="display: block; width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
