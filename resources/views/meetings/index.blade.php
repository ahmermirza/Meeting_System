@extends('layouts.meeting_layout')
@section('title', 'Meetings')
@section('content')
    <a href="{{ route('meetings.create') }}" class="btn btn-primary mt-5 ml-5">Create New Meeting</a>
    <div class="pl-5 pt-5 pb-0">
        <h1>Meetings List</h1>
    </div>
    <table class="table p-5 m-5">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Date Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($meetings as $meeting)
                <tr>
                    <td>{{ $meeting->email }}</td>
                    <td>{{ $meeting->subject }}</td>
                    <td>{{ $meeting->time }}</td>
                    <td><a href="{{ route('meetings.get', $meeting) }}" class="btn btn-secondary">Update</a></td>
                    <td>
                        <form action="{{ route('meetings.delete', $meeting) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-0">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
