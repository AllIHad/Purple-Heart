<x-layout>
    <div class="mt-4 flex text-center">
        <a href="{{ route('form') }}" class="text-decoration-none text-reset btn btn-light rounded-pill ">Add Your Content</a>
    </div>

    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> <a href="{{ route('dahsboard') }}" class=" text-decoration-none text-reset">Dashboard</a></li>
            <li class="breadcrumb-item "> <a href="{{ route('dahsboard') }}" class="text-decoration-none text-reset">Your Progress</a></li>
        </ol>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Social Media</th>
                <th scope="col">Caption</th>
                <th scope="col">Likes</th>
                <th scope="col">Comments</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contents as $content)
            <tr>
                <td class="text-bolder ">{{ $content->user->name }}</td>
                <td class="text-bolder">{{ $content->user->name }}</td>
                <td class="text-bolder">{{ $content->caption }}</td>
                <td class="text-bolder">{{ $content->likes }} <span><img src="{{ url('/img/day.png') }}" alt="Heart Icon" height="15" loading="lazy"> </span></td>
                <td class="text-bolder">{{ $content->comments }} <span><img src="{{ url('/img/chat.png') }}" alt="Comment Icon" height="15" loading="lazy"> </span></td>
                <td class="text-bolder"><a href="{{ $content->comments }}" class="text-decoration-none text-reset">Link <img src="{{ url('/img/link.png') }}" alt="Link Icon" height="15" loading="lazy"> </a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>