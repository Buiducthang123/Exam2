@extends('admin.question.index')
@section('questions')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="" style=" margin-bottom: 20px; width: 100%;">
            <form action="{{ route('questions.search') }}" method="GET">
                @csrf
                <select
                    style="background-color: #f2f2f2; color: #333; padding: 10px; border: none; border-radius: 4px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); cursor: pointer; width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
                    name="typeOfTest">
                        <option value="0" style="background-color: #fff; color: #333; padding: 10px; padding-right:30px;">Tất cả</option>
                    @foreach ($test as $item)
                        <option
                            style="background-color: #fff; color: #333; padding: 10px; padding-right:30px;"
                             @if ($item->id == $select_option)
                              selected
                             @endif
                            value="{{ $item->id }}">
                            {{ $item->Name }}
                        </option>
                    @endforeach

                       
                </select>
                <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); pointer-events: none;">
                    <svg style="fill: #999; width: 8px; height: 8px;" viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"></path>
                    </svg>
                </span>

                <input type="text" placeholder="Tìm kiếm"
                    class="py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    name="search">
                <button
                    style="background-color: #4CAF50; color: white; padding: 5px 15px; border: none; cursor: pointer; border-radius: 5px; margin-left: 10px;"
                    type="submit">Tìm kiếm</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded"
                        style="background: rgb(9, 13, 249)">
                        <a href="{{ route('questions.create') }}">Thêm</a>
                    </button>
            </form>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div>
                <table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
                    <thead>
                        <tr style="background-color: hsl(0, 0%, 96%);">
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">#</th>

                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Noi dung cau hoi
                            </th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">A</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">B</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">C</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">D</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Dap an</th>
                            <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Option</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $item)
                            <tr>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $loop->index + 1 }}</td>

                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $item->QuestionContent }}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $item->OptionA }}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $item->OptionB }}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $item->OptionC }}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $item->OptionD }}</td>
                                <td style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">
                                    {{ $item->CorrectOption }}</td>
                                <td class=""
                                    style="width: 130px;  margin: auto 0px;height: 100%; text-align: left; border-bottom: 1px solid #ddd;">



                                    <form action="{{ route('questions.destroy', ['question' => $item->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded"
                                            style="background: rgb(1, 129, 1)">
                                            <a href="{{ route('questions.edit', ['question' => $item->id]) }}"> Sửa</a>
                                        </button>
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded">
                                            Xóa
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
@endsection
