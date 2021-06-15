<x-dashboard-layout title="Home">

    <!-- button create -->
    <div class="table-toolbar mb-3">
         <a href="{{ route('Link.create')}}" class="btn btn-info">Create Link</a>
    </div>

    <table class="table">
        <thead  class="table-danger">
            <tr>
                <th>Id</th>
                <th>Link Path</th>
                <th>Short-Path</th>
                <th>UserId</th>
                <th>Views</th>
            </tr>
        </thead>
        <tbody>
            @foreach($links as $link)
            <tr>
                <td>{{ $link->id }}</td>
                <td>{{ $link->linkPath }}</td>
                <td>
                    <a class="text-decoration-none" href="{{ $link->linkPath }}" target="_blank" >{{ $link->shortPath }}</a>
                </td>
                <td>{{ Auth::user()->id }}</td>
                <td>50</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</x-dashboard-layout>