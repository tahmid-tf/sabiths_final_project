@extends('admin.admin-panel')

@section('content')
    <p>View All Data</p>
    <hr>

    <table id="example" class="display" style="text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>

        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($contacts as $about)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $about->name }}</td>
                <td>{{ $about->email }}</td>
                <td>{{ $about->content }}</td>
                <td>{{ $about->created_at->format('M d Y') }}</td>
                <td>{{ $about->updated_at->format('M d Y') }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>

        </tr>
        </tfoot>
    </table>
@endsection
