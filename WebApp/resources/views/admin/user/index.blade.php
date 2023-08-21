

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quan ly nguoi dung') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
                        <thead>
                          <tr style="background-color: #f5f5f5;">
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">#</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Tên</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Email</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Lịch sử làm bài</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Lựa chọn</th>
                           
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $item)
                          <tr>
                            <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$loop->index}}</td>
                            <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->name}}</td>
                            <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->email}}</td>
                            <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;"><a href="{{ route('history.user', ['id'=>$item->id]) }}" style="background-color: blue; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.25rem;">Xem</a>
                            </td>
                            <td style="width: 130px;  margin: auto 0px;height: 100%; text-align: left; border-bottom: 1px solid #ddd; vertical-align: middle;">
                                <form action="{{ route('user.destroy', ['user'=>$item->id]) }}" method="post"  style="margin: unset">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="" style="background-color: rgb(255, 0, 0); color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.25rem;">
                                        Delete
                                    </button>
                                </form>
                               
                                    
                                        
                                    
                                
                                
                            </td>
                           
                            
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
        </div>
    </div>
</x-app-layout>