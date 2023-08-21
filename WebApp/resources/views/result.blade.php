<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ket qua thi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3><a href="{{ route('history') }}">Lich su lam bai</a></h3>
                    @if (session('test'))
                    <h3><a href="{{ route('AnswerQuestion', ['id'=> session('test')]) }}">Xem đáp án</a></h3>
                        
                    @endif
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <div style="width: 300px; height: 300px; background-color: #1a0a75; border-radius: 20px">
                            <div style="width: 100%; height: 100%; padding-top: 40px;">
                                <div style="width: 100%; text-align: center; padding-top: 15px;">
                                    <h1 class="" style="color: aliceblue;font-size: 36px">
                                        @if (session('score') == false)
                                            Score: 0
                                        @else
                                            {{ session('score') }}
                                        @endif
                                    </h1>

                                </div>
                                <div style="width: 100%; text-align: center">
                                    <h1 style="color:aliceblue;font-size: 28px">
                                        @if (session('true_question'))
                                            So cau tra loi dung: {{ session('true_question') }}
                                        @endif
                                    </h1>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div style="display: flex; justify-content: center; margin-bottom: 40px;">

                    <div style="width: 30%; display: flex;flex-wrap: wrap">

                        @if (session('CorrectAnswer'))
                            @foreach (session('questions') as $item)
                                <div class=" "

                                
                                
                            
                                    style="width: 10%; aspect-ratio: 1 / 1;  margin: 10px; text-align: center; display: flex; justify-content: center; align-items: center; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4);border-radius: 3px; background-color: #15f419; color: #fff;
                                    font-weight: 600;
                                    
                                    <?php 
                                    if (in_array($loop->index + 1,session('CorrectAnswer'))) {
                                        echo "background-color: #15f419";
                                    } else {
                                        echo "background-color: #ed5656";
                                    }

                                ?>
                                    
                                    
                                    ">
                                    <span>{{ $loop->index + 1 }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
