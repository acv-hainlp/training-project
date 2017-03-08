@extends('layouts.admin')
@section('title','All Posts')
@section('content')
<div class="w3-container">
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>UserID</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('/admin/postsdata') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'body', name: 'body' },
            { data: 'user_id', name: 'user_id' },
        ]
    });
});
</script>
@endpush
