

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trac Nghiem Online ') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
            </div>
        </div>
    </div> --}}
    <section style="padding-top: 2rem; padding-bottom: 4rem;">
        <div style="max-width: 72rem; margin: 0 auto; padding-top: 1rem;  text-align: center;
       color: #333333
        
        ">
            <h1 style="font-size: 32px;font-weight: 700;">TRẮC NGHIỆM ONLINE</h1>
            <p>ĐA DẠNG - THÔNG MINH - CHÍNH XÁC</p>
        </div>
        <div style="max-width: 72rem; margin: 0 auto; padding-top: 4rem; padding-bottom: 4rem;">
            <div style="display: flex; justify-content: center;">
                @foreach ($tests as $item)
                <div class="test_item" style="width: 100%; max-width: 285px; padding-left: 1rem; padding-right: 1rem; margin-bottom: 2rem; "  >
                    <div style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.5rem; overflow: hidden; height: 100%; padding-top: 30px;  transition: all 0.3s linear; background-color: #f1f5f9;  " onmouseover="changeHeight(this)" onmouseout="resetHeight(this)">
                        <div style="display: flex;
                        justify-content: center;">
                            <img height="100" style="height: 12rem; height: 100px;" src="https://s.tracnghiem.net/assets/images/home/feature1.jpg" alt="Đề thi học kỳ">
                        </div>
                        <div style="padding: 1.5rem;">
                            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 0.5rem; height: 20%">{{$item->Name}}</h3>
                            <p style="color: #4b5563; margin-bottom: 2rem; font-size: 14px">Ngân hàng câu hỏi đầy đủ các môn cấp 1, 2, 3 được trộn tạo đề theo cấu trúc phân loại giúp các em dễ dàng ôn tập online đề thi giữa học kỳ, thi học kỳ theo các chủ đề đã học.</p>
                            <a href="{{ route('test_question', ['id'=>$item->id]) }}" style="background-color: #f97316; color: #fff; padding: 0.5rem 1rem; text-decoration: none;border-radius: 5px"

                            
                            >Làm ngay</a>
                        </div>
                    </div>
                </div>
                @endforeach



               
            
            </div>
        </div>
    </section>
    
    
    <script>
        function changeHeight(element) {
        element.style.paddingTop = "0";
        console.log(element);
}

        function resetHeight(element) {
            element.style.paddingTop = "10%";
        }

      

    </script>
</x-app-layout>

