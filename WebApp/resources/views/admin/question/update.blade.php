<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('questions.update', ['question'=>$question->id]) }}" method="POST" style="max-width: 400px; margin: 0 auto;">
                    @csrf
                    @method('PATCH')
                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Test ID:</span>
                        {{-- <input type="text" name="test_id" required style="width: 100%; padding: 5px;"> --}}
                        <select name="test_id" style="width: 100%; height: 30px; padding: 5px; font-size: 14px;">
                            <option value="1" style="font-size: 14px; background-color: #f2f2f2; color: #333;">
                                {{ $question->test_id }}</option>
                            @for ($i = 1; $i < 4; $i++)
                                @if ($i == $question->test_id)
                                    @continue
                                @endif
                                    <option value="{{$i}}" style="font-size: 14px; background-color: #f2f2f2; color: #333;">
                                    {{ $i }}</option>
                                <!-- Loop content -->
                            @endfor
                        </select>

                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Question Content:</span>
                        <textarea type="text" name="QuestionContent" required style="width: 100%; padding: 5px;" id="questionContent">{{$question->QuestionContent}}</textarea>
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option A:</span>
                        <input type="text" name="OptionA" required style="width: 100%; padding: 5px;" value="{{$question->OptionA}}">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option B:</span>
                        <input type="text" name="OptionB" required style="width: 100%; padding: 5px;" value="{{$question->OptionB}}">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option C:</span>
                        <input type="text" name="OptionC" required style="width: 100%; padding: 5px;" value="{{$question->OptionC}}">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Option D:</span>
                        <input type="text" name="OptionD" required style="width: 100%; padding: 5px;" value="{{$question->OptionD}}">
                    </label>

                    <label style="display: block; margin-bottom: 10px;">
                        <span style="font-weight: bold;">Correct Option:</span>
                        <input type="text" name="CorrectOption" required style="width: 100%; padding: 5px;" value="{{$question->CorrectOption}}">
                    </label>

                    <input type="submit" value="Submit"
                        style="display: block; width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                </form>

            </div>
        </div>
    </div>
    <script>
        var questionContent = document.getElementById('questionContent');
    
        questionContent.addEventListener('change', function(event) {
            // Get the updated value of the textarea
            var updatedValue = event.target.value;
            
            // Do something with the updated value
            console.log(updatedValue);
            questionContent.value = updatedValue;
        });
    </script>
</x-app-layout>
