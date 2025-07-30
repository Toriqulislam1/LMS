@extends('web.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('frontend')}}/images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Study Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Study Abroad</a></li>
                <li class="active text-gray-silver">Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <!-- Section: Student Details -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-60 pl-sm-15">
              <div>
                <h3>Dr. Jonathon Alex</h3>
                <h5 class="text-theme-colored">MBBS (Sydney), FRACS (Paediatric Surgery)</h5>
                <p>After graduating from West Virginia University Medical School, Dr. Jonathon Alex completed a two-year fellowship in sports medicine at Akron Children’s Hospital. During his training at Akron, Dr. Jonathon Alex was team physician for the University of Akron and Walsh University.</p>
              </div>
                <ul class="nav nav-tabs mt-30">
                  <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="false">Profile</a></li>
                  <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="true">Experience</a></li>
                  <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Accolades</a></li>
                </ul>
                <div class="tab-content">
                  <div id="tab1" class="tab-pane fade active in">
                    <dl class="dl-horizontal doctor-info">
                      <dt>Speciality</dt>
                      <dd>
                        <ul class="list theme-colored angle-double-right m-0">
                          <li class="mt-0">Endocrinology</li>
                          <li>Paediatric Medicine</li>
                          <li>Urology</li>
                        </ul>
                      </dd>
                      <hr>
                      <dt>Education</dt>
                      <dd>
                        <ul class="list theme-colored angle-double-right m-0">
                          <li class="mt-0">Doctor of Medicine, University of Texas, USA (1990)</li>
                          <li>Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)</li>
                        </ul>
                      </dd>
                      <hr>
                      <dt>Experience</dt>
                      <dd>
                        25 years of Experience in Medicine
                      </dd>
                      <hr>
                      <dt>Education</dt>
                      <dd>
                        <ul class="list theme-colored angle-double-right m-0">
                          <li class="mt-0">Vice President and Chief Medical Officer, Kessler Institute for Rehabilitation</li>
                          <li>Medical Corporation Professor, Institute Of Coast Private Hospital Campus</li>
                        </ul>
                      </dd>
                      <hr>
                      <dt>Birth Day:</dt>
                      <dd>
                        Year: 1982  Month: July  Date:3
                      </dd>
                      <hr>
                      <dt>Age:</dt>
                      <dd>
                        35
                      </dd>
                      <hr>
                      <dt>Height:</dt>
                      <dd>
                        5 feet 6 inches
                      </dd>
                      <hr>
                      <dt>Eyes:</dt>
                      <dd>
                        Blue
                      </dd>
                      <hr>
                      <dt>Website</dt>
                      <dd>
                        www.yourdomain.com
                      </dd>
                    </dl>
                  </div>
                  <div id="tab2" class="tab-pane fade">
                    <h5>Experience In:</h5>
                    <ul class="list angle-double-right">
                      <li>Represented individuals and their S-Corporation with respect to accounting malpractice and overbilling claims against a top 5 accounting firm.</li>
                      <li>Represented an employment services and immigration company and its former officers and employees in civil actions alleging fraud and breach of contract.</li>
                      <li>Represented an employment services and immigration company in a civil forfeiture action resulting in the return of over $500,000 in funds seized by the government.</li>
                      <li>Represented an employment services and immigration company in a civil forfeiture action resulting in the return of over $500,000 in funds seized by the government.</li>
                      <li>Represented an employment services and immigration company in a civil forfeiture action resulting in the return of over $500,000 in funds seized by the government.</li>
                      <li>Represented a government contractor in a theft of trade secrets action.</li>
                    </ul>
                  </div>
                  <div id="tab3" class="tab-pane fade">
                    <ul class="list angle-double-right">
                      <li>Represented individuals and their S-Corporation with respect to accounting malpractice and overbilling claims against a top 5 accounting firm.</li>
                      <li>Represented an employment services and immigration company and its former officers and employees in civil actions alleging fraud and breach of contract.</li>
                    </ul>
                  </div>
                </div>
              <!-- Portfolio Gallery Grid -->
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4 sidebar pull-left">
              <div class="doctor-thumb">
                <img src="images/team/b1.jpg" alt="">
              </div>
              <h4 class="line-bottom">About Me:</h4>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-book text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Education:</h5>
                        <p>Bachelor’s degree in Engineering<br>From Rutgers University, California.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Address:</h5>
                        <p>Village 856 Broadway New York</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Phone:</h5>
                        <p>+262 695 2601</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-envelope-o text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Email:</h5>
                        <p>you@yourdomain.com</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-laptop text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Web Address:</h5>
                        <p>www.abc.com</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
<!-- end wrapper --> 
@endsection
