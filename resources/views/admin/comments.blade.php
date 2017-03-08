@extends('layouts.admin')
@section('content')
<div class="w3-container">
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Comment</th>
                <th>PostID</th>
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
        ajax: '{!! url('/admin/commentsdata') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'body', name: 'body' },
            { data: 'post_id', name: 'post_id' },
            { data: 'user_id', name: 'user_id' },
        ]
    });
});
</script>
@endpush
