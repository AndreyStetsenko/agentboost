<section class="page-section">
  <div class="container">
    <div class="card card-shadow">
      <div class="card-body">
        <div class="card-search d-flex flex-wrap">
          <div class="input-group input-group--left flex-grow-1 mb-4 me-0 me-md-5">
            <input id="example-input-04" type="text" class="form-control" placeholder="Search">
            <span class="input-group__label">
              <button type="submit" class="input-group__search">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.7138 6.8382C18.1647 9.28913 18.1647 13.2629 15.7138 15.7138C13.2629 18.1647 9.28913 18.1647 6.8382 15.7138C4.38727 13.2629 4.38727 9.28913 6.8382 6.8382C9.28913 4.38727 13.2629 4.38727 15.7138 6.8382" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M19 19L15.71 15.71" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </span>
          </div>
          <button type="button" class="btn btn--md btn--shadow mb-4">
          <span class="btn__icon">
            <img src="<?= get_bloginfo('template_directory') . '/assets/img/logos_google-calendar.svg' ?>">
          </span>
          <span>Sync with Goolge Calendar</span>
          </button>
        </div>
        <div class="report-calendar">
          <div class="report-calendar__date">
            <div class="report-calendar__sidebar">
              <div class="report-calendar__sidebar-head">
                  <div class="report-calendar__current-year">
                      2021 year
                  </div>
                  <div class="report-calendar__buttons">
                      <button class="report-calendar__prev">
                          <img src="img/arrow-calendar.svg" alt="">
                      </button>
                      <button class="report-calendar__next">
                          <img src="img/arrow-calendar.svg" alt="">
                      </button>
                  </div>
              </div>
              <ul class='report-calendar__days-list'>
                  <li>
                      Mon
                  </li>
                  <li>
                      Tue
                  </li>
                  <li>
                      Wed
                  </li>
                  <li>
                      Thu
                  </li>
                  <li>
                      Fri
                  </li>
                  <li>
                      Sat
                  </li>
                  <li>
                      Sun
                  </li>
              </ul>
              <div class="report-calendar__sidebar-body">
                  <div class="data-range-group">
                      <div class="datepicker-here"></div>

                      <div class="datepicker-here"></div>

                      <div class="datepicker-here"></div>
                  </div>
              </div>
          </div>
          </div>
          <div class="report-calendar__shedule">
            <div id='report-shedule' class="shedule-report"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>