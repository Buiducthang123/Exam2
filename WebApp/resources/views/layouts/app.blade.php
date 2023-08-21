<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" 
        rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{-- <div style=" background-image: url('https://scontent.xx.fbcdn.net/v/t1.15752-9/356990937_220751904205591_6866713749937705686_n.png?stp=dst-png_s206x206&_nc_cat=107&cb=99be929b-3346023f&ccb=1-7&_nc_sid=aee45a&_nc_ohc=gVqUpzeVV_wAX-5FjU8&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdT_X2kVg-ZqJ9HJvei5LMOjXGqXmVKrFh5ym-sHx-cHqQ&oe=64C3B88E');background-repeat: repeat;background-size: 200px; background-color: #43292982;background-blend-mode: multiply; /* Màu nền bạn muốn áp dụng */">
                    {{ $slot }}
                </div> --}}
                <div style="background-color: #cfcdcd82;background-blend-mode: multiply; /* Màu nền bạn muốn áp dụng */">
                    {{ $slot }}
                </div>
                
            </main>
            <footer style="background-color: rgb(86, 86, 248);">
                <div style="text-align: center; display:flex;justify-content: center;padding:40px 0px;">
                   
                    <img src="https://s.tracnghiem.net/assets/images/footer/trac-nghiem-online.png" alt="Trắc Nghiệm Online" style="width: 200px;">
                  
                </div>
                <div style="text-align: center; color: #fff">
                    <div>
                        <div style="display: inline-block; margin: 10px;">
                            <h4 style="color: #fc0;font-size: 18px;font-weight: 700;line-height: 1.38;margin-bottom: 10px;">Thi THPT QG</h4>
                            <p>Môn Toán-Văn-Anh</p>
                            <p>Môn Lý-Hoá-Sinh</p>
                            <p>Môn Sử-Địa-GDCD</p>
                        </div>
                        <div style="display: inline-block; margin: 10px;">
                            <h4 style="color: #fc0;font-size: 18px;font-weight: 700;line-height: 1.38;margin-bottom: 10px;">Đề kiểm tra</h4>
                            <p>Đề thi HK1, HK2</p>
                            <p>Kiểm tra 1 tiết</p>
                            <p>Kiểm tra 15 phút</p>
                        </div>
                        <div style="display: inline-block; margin: 10px;">
                            <h4 style="color: #fc0;font-size: 18px;font-weight: 700;line-height: 1.38;margin-bottom: 10px;">English Test</h4>
                            <p>Ngữ pháp tiếng Anh</p>
                            <p>Từ vựng Tiếng Anh</p>
                            <p>Tiếng Anh THPT QG</p>
                        </div>
                        <div style="display: inline-block; margin: 10px;">
                            <h4 style="color: #fc0;font-size: 18px;font-weight: 700;line-height: 1.38;margin-bottom: 10px;">IT Test</h4>
                            <p>Tin học văn phòng</p>
                            <p>Lập trình Web/App</p>
                            <p>Quản trị hệ thống</p>
                        </div>
                        <div style="display: inline-block; margin: 10px;">
                            <h4 style="color: #fc0;font-size: 18px;font-weight: 700;line-height: 1.38;margin-bottom: 10px;">Đại học</h4>
                            <p>Môn đại cương</p>
                            <p>Chuyên ngành Kinh tế</p>
                            <p>Chuyên ngành Kỹ thuật</p>
                        </div>
                        <div style="display: inline-block; margin: 10px;">
                            <h4 style="color: #fc0;font-size: 18px;font-weight: 700;line-height: 1.38;margin-bottom: 10px;">Hướng nghiệp</h4>
                            <p>Bằng lái xe máy/môtô</p>
                            <p>Thi Công/Viên chức</p>
                            <p>Bằng lái xe Ô tô</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <p style="color: #888;">Copyright © 2022 by Thang dz
                    </p>
                </div>
            </footer>
        </div>

       
        
    </body>

</html>
