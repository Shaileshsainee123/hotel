@livewire('admin.fixedtop')
@livewire('admin.leftmenu')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Analytics spakline & chartjs  -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
              <div class="card-header border-0-bottom">
                <h4 class="card-title">Visitors Overview</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="row my-1">
                    <div class="col-lg-4 col-12">
                      <div class="text-center">
                        <h3>23,454</h3>
                        <p class="text-muted">Page Views
                          <span class="success"><i class="ft-arrow-up"></i> 8.16%</span>
                        </p>
                        <div id="sp-tristate-bar-total-revenue"></div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="text-center">
                        <h3>6,630</h3>
                        <p class="text-muted">Unique Visitor
                          <span class="danger"><i class="ft-arrow-down"></i> 2.30%</span>
                        </p>
                        <div id="sp-stacked-bar-total-sales"></div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="text-center">
                        <h3>86,578</h3>
                        <p class="text-muted">Total Visits
                          <span class="warning"><i class="ft-arrow-up"></i> 4.27%</span>
                        </p>
                        <div id="sp-bar-total-cost"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="chartjs">
                        <canvas id="line-stacked-area" height="300"></canvas>
                      </div>
                      <ul class="list-inline text-center mt-1">
                        <li class="mr-1">
                          <h6><i class="fa fa-circle success"></i>
                            <span>Page Views</span>
                          </h6>
                        </li>
                        <li class="mr-1">
                          <h6><i class="fa fa-circle warning"></i>
                            <span>Total Visits</span>
                          </h6>
                        </li>
                        <li class="mr-1">
                          <h6><i class="fa fa-circle danger"></i>
                            <span>Unique Visitor</span>
                          </h6>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Analytics spakline & chartjs  -->
        <!--stats-->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body text-left w-100">
                      <h3 class="primary">78%</h3>
                      <span>New Session</span>
                    </div>
                    <div class="media-right media-middle">
                      <i class="icon-user-follow primary font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body text-left w-100">
                      <h3 class="danger">423</h3>
                      <span>Total Visits</span>
                    </div>
                    <div class="media-right media-middle">
                      <i class="icon-social-dropbox danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body text-left w-100">
                      <h3 class="success">64.89 %</h3>
                      <span>Bounce Rate</span>
                    </div>
                    <div class="media-right media-middle">
                      <i class="icon-layers success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body text-left w-100">
                      <h3 class="warning">02.12</h3>
                      <span>Session Duration</span>
                    </div>
                    <div class="media-right media-middle">
                      <i class="icon-globe warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@livewire('admin.foot.footer')
