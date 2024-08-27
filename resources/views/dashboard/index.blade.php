<x-layout>
    <div class="mt-4 flex text-center">
        <a href="{{ route('form') }}" class="text-decoration-none text-reset btn btn-light rounded-pill ">Add Your Progress</a>
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
                <th scope="col">Caption</th>
                <th scope="col">Likes</th>
                <th scope="col">Comments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</x-layout>