<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trac Nghiem Online ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="time-remain"
            style="text-align: center;position: -webkit-sticky;
                    position: sticky;top: 0;margin-bottom: 20px;">
            <div class="time" style="display: flex; align-items: center; justify-content: center; font-size: 24px;">
                <div style="background-color: #f76262;padding: 2px 20px;border-radius: 8px; color: #fff">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span id="countdown" style="font-weight: bold;
                    ">42:47</span>
                </div>

            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- @if (session('score'))
                    <h1>{{ session('score') }}</h1>
                @endif --}}
                <form action="{{ route('checkCorrectoption') }}" method="post" id="testForm">
                    @csrf
                    <div>
                       @php
                             $position = 0;
                       @endphp
                        <ul>
                            {{-- @foreach ($questions->shuffle() as $question) --}}
                            @foreach ($questions as $question)
                                @php
                                $position++;
                                @endphp

                                <li class="p-2">Cau {{ $loop->index + 1 }}: {{ $question->QuestionContent }}</li>
                                <div class="block mb-4 ml-4">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionA }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        A.{{ $question->OptionA }}</label>
                                </div>
                                <div class="block mb-4 ml-4">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionB }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        B.{{ $question->OptionB }}</label>
                                </div>
                                <div class="block mb-4 ml-4">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionC }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        C.{{ $question->OptionC }}</label>
                                </div>
                                <div class="block mb-4 ml-4">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionD }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        D.{{ $question->OptionD }}</label>
                                </div>
                            @endforeach

                        </ul>
                        <input type="hidden" name="test" id="" value="{{ $test }}">
                        <div style="text-align: center">
                            <button type="submit" class=" bg-rose-900 border-1"
                                style="background-color: rgb(0, 108, 34); color: #fff; margin: 20px 0px; padding: 3px 20px;border-radius: 5px;">Nộp
                                bài</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        //Dem nguoc
        var timeFromDatabase = "00:50:00";
        var timeComponents = timeFromDatabase.split(':');
        var hours = parseInt(timeComponents[0], 10);
        var minutes = parseInt(timeComponents[1], 10);
        var seconds = parseInt(timeComponents[2], 10);
        var totalSeconds = (hours * 3600) + (minutes * 60) + seconds;

        var countdownElement = document.getElementById('countdown');
        var countdownTime = totalSeconds;

        function startCountdown() {
            var countdownInterval = setInterval(function() {
                countdownTime--; // Giảm giá trị đếm ngược

                var hours = Math.floor(countdownTime / 3600);
                var minutes = Math.floor((countdownTime % 3600) / 60);
                var seconds = countdownTime % 60;

                var formattedTime = ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' +
                    seconds).slice(-2);

                countdownElement.innerHTML = formattedTime;

                if (countdownTime === 0) {
                    clearInterval(countdownInterval);
                    countdownElement.innerHTML = "Hết giờ!";
                }
            }, 1000);
        }

        //check input
      

        window.onload = startCountdown;
    </script>
</x-app-layout>
