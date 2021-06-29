@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>

                    <div class="panel-body">
                        @forelse($users as $user)
                            <table class="table">
                                <tr>
                                    <td>
                                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}">
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        <a href="{{route('message.read', ['id' => $user->id])}}"
                                           class="btn btn-success pull-right">
                                            Send Message
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        @empty
                            <div class="btn btn-primary btn-block">
                                No users available!
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <div class="text-center">
                    {{ $users->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection
