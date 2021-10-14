@extends('layouts.layouthome')

@section('content')
        <header class="masthead text-center mt-5 " style="height: 90% ;">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="figure-img img-fluid rounded-circle mb-5" style="height: 30%; width: 15%;" src="{{('img/profile1.jpeg')}}" alt="Photo_Profile" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-1 fw-bold">ZAIDAN ZULHAKIM</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">DevOps - Fullstack Dev - Machine Learner</p>
            </div>
        </header>
        <section class="page-section bg-dark mb-0 p-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img class="figure-img img-fluid mb-0" style="height: 100%; width:75%;" src="{{('img/profile.jpeg')}}" alt="profile_foto">
                    </div>
                    <div class="col">
                        <!-- About Section Heading-->
                        <h2 class="page-section-heading mb-1 text-secondary">DISCOVER</h2>
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h1 class="page-section-heading mb-5">ABOUT ME</h1>
                        <!-- Icon Divider-->
                        <div class="divider-custom divider-light">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- About Section Content-->
                        <div class="row mb-5">
                            <div class="col-lg"><p class="lead">My name is Zaidan Zulhakim, I'm a Student from Surabaya State University. i'm a Fullstack Dev, DevOps, and a Machine Learner based in Bogor, Jawa Barat. i'm very passionate and dedicated to my work. With my 3 Years experience. I have acquired the skills necessary to build great and premium results. </p></div>
                        </div>
                        <div class="container-fluid border border-white p-2 mb-5">
                            <div class="row">
                                <div class="col-6 col-sm-5">Name : Zaidan Zulhakim</div>
                                <div class="col-6 col-sm-5">Experience : 3 Years</div>

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>

                                <div class="col-6 col-sm-5">Age : 20</div>
                                <div class="col-6 col-sm-5">Language : Bahasa, English</div>

                                <div class="col-6 col-sm-5">Phone : +62 851 5670 4525</div>
                                <div class="col-6 col-sm-5">Freelance : Available</div>

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>

                                <div class="col-6 col-sm-5">Address : Bogor, Jawa Barat</div>
                                <div class="col-6 col-sm-5">Github : Zaidannzzz</div>
                                
                            </div>
                        </div>
                        <!-- About Section Button-->
                        <div class="mt-5">
                            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                                <i class="fas fa-download me-1"></i>
                                Download CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-transparant mb-5">
            <div class="container">
                <h1 class="mb-5 mt-5">MY SKILLS</h1>
                <h3 class="text-secondary">Programming</h3>
                <div class="row mb-2">
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">C</h4>
                            <h4 class="col-6 text-end">60%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 60%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">C++</h4>
                            <h4 class="col-6 text-end">70%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">C#</h4>
                            <h4 class="col-6 text-end">40%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">JAVA</h4>
                            <h4 class="col-6 text-end">50%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h3 class="text-secondary mt-2 mb-2">Web Developing</h3>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">HTML</h4>
                            <h4 class="col-6 text-end">70%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">CSS</h4>
                            <h4 class="col-6 text-end">70%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">PHP</h4>
                            <h4 class="col-6 text-end">55%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">JAVASCRIPT</h4>
                            <h4 class="col-6 text-end">40%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">Laravel</h4>
                            <h4 class="col-6 text-end">70%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">Bootstrap</h4>
                            <h4 class="col-6 text-end">70%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">SQL</h4>
                            <h4 class="col-6 text-end">60%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <h4 class="col-6 text-start">Vue.js</h4>
                            <h4 class="col-6 text-end">30%</h4>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-dark" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Bogor, Jawa Barat
                            <br />
                            Indonesia
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1 m-2" href="instagram.com/zaidannzz">Instagram : zaidannzz</a>
                        <a class="btn btn-outline-light btn-social mx-1 m-2" href="github.com/Zaidannzzz">Github : zaidannzzz</a>
                        <a class="btn btn-outline-light btn-social mx-1 m-2" href="twitter.com/notzaidan">Twitter : @notzaidan</a>
                        <a class="btn btn-outline-light btn-social mx-1 m-2" href="gmail.com/">Email : zaidan.zulhakim@gmail.com</a>
                    </div>
                </div>
            </div>
        </footer>
@endsection