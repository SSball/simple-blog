@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Account Information</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                 <table style="width:100%">
                  <tr>
                    <td>User Name</td>
                    <td><?php echo Auth::user()['name'] ?></td>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <td><?php echo Auth::user()['email'] ?></td>
                  </tr>
                  <tr>
                    <td>Registered Date</td>
                    <td><?php echo Auth::user()['created_at'] ?></td>
                  </tr>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
