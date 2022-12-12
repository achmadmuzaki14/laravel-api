<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell--span-12">
        <div class="mdc-card">
          <h6 class="card-title">Text Field</h6>
          <div class="template-demo">
            <div class="mdc-layout-grid__inner">
            <form method="post" action="{{ route('kecamatan.store') }}">
                @csrf
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field">
                  <input class="mdc-text-field__input" id="text-field-hero-input" name="name">
                  <div class="mdc-line-ripple"></div>
                  <label for="text-field-hero-input" class="mdc-floating-label">Nama Product</label>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" id="text-field-hero-input" name="stok">
                  <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                      <label for="text-field-hero-input" class="mdc-floating-label">Stok Product</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" id="text-field-hero-input" name="harga">
                  <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                      <label for="text-field-hero-input" class="mdc-floating-label">Harga Product</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" id="text-field-hero-input" name="tahun">
                  <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                      <label for="text-field-hero-input" class="mdc-floating-label">Tahun Product</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>