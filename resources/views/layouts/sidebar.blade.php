<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header">
      <a href="index.html" class="brand-logo">
        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
      </a>
    </div>
    <div class="mdc-drawer__content">
      <div class="user-info">
        <p class="name">Clyde Miles</p>
        <p class="email">clydemiles@elenor.us</p>
      </div>
      <div class="mdc-list-group">
        <nav class="mdc-list mdc-drawer-menu">
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="index.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
              Dashboard
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/forms/basic-forms.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
              Forms
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
              UI Features
              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="ui-sub-menu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/ui-features/buttons.html">
                    Buttons
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/ui-features/typography.html">
                    Typography
                  </a>
                </div>
              </nav>
            </div>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/tables/basic-tables.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
              Tables
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/charts/chartjs.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
              Charts
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
              Sample Pages
              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="sample-page-submenu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/blank-page.html">
                    Blank Page
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/403.html">
                    403
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/404.html">
                    404
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/500.html">
                    500
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/505.html">
                    505
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/login.html">
                    Login
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="pages/samples/register.html">
                    Register
                  </a>
                </div>
              </nav>
            </div>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.html" target="_blank">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
              Documentation
            </a>
          </div>
        </nav>
      </div>
      <div class="profile-actions">
        <a href="javascript:;">Settings</a>
        <span class="divider"></span>
        <a href="javascript:;">Logout</a>
      </div>
    </div>
  </aside>