
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lich su thi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                      <div>
                        <table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
                            <thead>
                              <tr style="background-color: #f5f5f5;">
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">#</th>
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Test</th>
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Date Taken</th>
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Score</th>
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Duration</th>
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Status</th>
                                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Option</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($result as $item)
                              <tr>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$loop->index}}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->test->Name}}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->DateTaken}}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->Score}}</td>
                        
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->Duration}}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">{{$item->Status}}</td>
                                <td style="width: 130px;  margin: auto 0px;height: 100%; text-align: left; border-bottom: 1px solid #ddd; vertical-align: middle;">
                                  <form action="{{ route('results.destroy', ['result'=>$item->id]) }}" method="post"  style="margin: unset">
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
        </div>
    </div>
</x-app-layout>