<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dap an') }}
        </h2>
    </x-slot>

    <div class="py-12">
       
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
                            @foreach ($questions as $question)
                                @php
                                $position++;
                                @endphp

                                <li class="p-2">Cau {{ $loop->index + 1 }}: {{ $question->QuestionContent }}</li>
                                <div class="block mb-4 ml-4"  style="
                                
                                @php
                                    if ($question->CorrectOption===$question->UserAnswer
                                    &&
                                    $question->CorrectOption===$question->OptionA) {
                                        echo "background-color: #24f95d;";
                                    }
                                    elseif ($question->CorrectOption!==$question->UserAnswer
                                    &&
                                    $question->UserAnswer===$question->OptionA) {
                                         echo "background-color: #f92424";

                                    }
                                    elseif ($question->CorrectOption===$question->OptionA&&$question->UserAnswer!==$question->OptionA) {
                                        echo "background-color: #24f95d;";
                                        
                                    }
                                @endphp
                                "
                                >
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionA }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}" >
                                        A.{{ $question->OptionA }}</label>
                                </div>
                                <div class="block mb-4 ml-4" style="
                                
                                @php
                                    if ($question->CorrectOption===$question->UserAnswer
                                    &&
                                    $question->CorrectOption===$question->OptionB) {
                                        echo "background-color: #24f95d;";
                                    }
                                    elseif ($question->CorrectOption!==$question->UserAnswer
                                    &&
                                    $question->UserAnswer===$question->OptionB) {
                                         echo "background-color: #f92424";
                                    }
                                    elseif ($question->CorrectOption===$question->OptionB&&$question->UserAnswer!==$question->OptionB) {
                                        echo "background-color: #24f95d;";
                                        
                                    }
                                @endphp
                                ">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionB }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        B.{{ $question->OptionB }}</label>
                                </div>
                                <div class="block mb-4 ml-4" style="
                                
                                @php
                                    if ($question->CorrectOption===$question->UserAnswer
                                    &&
                                    $question->CorrectOption===$question->OptionC) {
                                        echo "background-color: #24f95d;";
                                    }
                                    elseif ($question->CorrectOption!==$question->UserAnswer
                                    &&
                                    $question->UserAnswer===$question->OptionC) {
                                         echo "background-color: #f92424";
                                    }
                                    elseif ($question->CorrectOption===$question->OptionC&&$question->UserAnswer!==$question->OptionC) {
                                        echo "background-color: #24f95d;";
                                        
                                    }
                                @endphp
                                ">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionC }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        C.{{ $question->OptionC }}</label>
                                </div>
                                <div class="block mb-4 ml-4" style="
                                
                                @php
                                    if ($question->CorrectOption===$question->UserAnswer
                                    &&
                                    $question->CorrectOption===$question->OptionD) {
                                        echo "background-color: #24f95d;";
                                    }
                                    elseif ($question->CorrectOption!==$question->UserAnswer
                                    &&
                                    $question->UserAnswer===$question->OptionD) {
                                         echo "background-color: #f92424";
                                    }
                                    elseif ($question->CorrectOption===$question->OptionD&&$question->UserAnswer!==$question->OptionD) {
                                        echo "background-color: #24f95d;";
                                        
                                    }
                                @endphp
                                ">
                                    <input type="radio" name="question[{{ $question->id }}][{{$position}}]"
                                        id="question_id{{ $question->id }} " value="{{ $question->OptionD }}">
                                    <label class="ml-2" for="question_id{{ $question->id }}">
                                        D.{{ $question->OptionD }}</label>
                                </div>
                            @endforeach

                        </ul>
                        <div style="text-align: center">
                            <button  class=" bg-rose-900 border-1"
                                style="background-color: rgb(0, 108, 34); color: #fff; margin: 20px 0px; padding: 5px 20px;border-radius: 5px;">
                                <a href="{{ route('home') }}">Quay về trang chủ</a>
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
</x-app-layout>
