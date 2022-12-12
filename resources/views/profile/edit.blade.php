@extends('layouts.base')


@section('content')
<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
          <h6 class="card-title">Edit Profile</h6>
          <div class="template-demo">
            {{-- <div class="mdc-layout-grid__inner"> --}}
            <form method="POST" action="{{ route('profile.store') }}">
                @csrf
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                  <div class="mdc-text-field mdc-text-field--outlined">
                    <input class="mdc-text-field__input" id="text-field-hero-input" name="address">
                    <div class="mdc-notched-outline">
                      <div class="mdc-notched-outline__leading"></div>
                      <div class="mdc-notched-outline__notch">
                        <label for="text-field-hero-input" class="mdc-floating-label">Alamat</label>
                      </div>
                      <div class="mdc-notched-outline__trailing"></div>
                    </div>
                  </div>
                </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" id="text-field-hero-input" name="gender">
                  <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                      <label for="text-field-hero-input" class="mdc-floating-label">Jenis Kelamin</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" type="date" id="text-field-hero-input" name="dob">
                  <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                      <label for="text-field-hero-input" class="mdc-floating-label">Tanggal Lahir</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" id="text-field-hero-input" name="phone_number">
                  <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                      <label for="text-field-hero-input" class="mdc-floating-label">Nomor HP</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                  </div>
                </div>
              </div>
              <button type="submit" class="mdc-button mdc-button--raised mdc-ripple-upgraded my-3">Submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection