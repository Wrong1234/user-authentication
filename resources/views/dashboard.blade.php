@extends('layouts.app')

@section('content')


<div style="display: flex; gap: 2rem; justify-content: center; margin-top: 2rem;">
<div class="card-das">
    <h3>Total Users</h3>
    <p>{{$totalUsers}}</p>
</div>
<div class="card-das">
    <h3>Total Profiles</h3>
    <p>{{$totalProfiles}}</p>
</div>

</div>
@endsection