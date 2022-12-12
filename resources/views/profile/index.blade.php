@extends('layouts.base')

@section('content')
<div class="mdc-card">
    <h6 class="card-title">Raised Button</h6>
    <div class="template-demo">
      <a class="mdc-button mdc-button--raised mdc-ripple-upgraded" href="/profile/edit/{{ $user }}">
        <i class="material-icons mdc-button__icon">favorite</i>
        Edit Profile
      </a>
    </div>
  </div>
</div>
@endsection