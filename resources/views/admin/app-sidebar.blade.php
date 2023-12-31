<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('website.home') }}">
                <img src="../assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/icon-white.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="../assets/images/brand/icon-dark.png" class="header-brand-img light-logo" alt="logo">
                <img src="../assets/images/brand/logo-dark.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Accueil</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Tableau de bord</span></a>
                </li>
                <li class="sub-category">
                    <h3>Configurations</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span
                            class="side-menu__label">Gestion des utilisateurs</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Accueil</a></li>
                                            <li><a href="#" class="slide-item">Enregister un utilisateur</a></li>
                                            <li><a href="#" class="slide-item"> Liste des utilisateurs</a></li>
                                            <li><a href="#" class="slide-item"> Restauration utilisateur</a></li>
                                        </ul>
                                        <div class="menutabs-content mt-5 p-0">
                                            <div class="Annoucement_card">
                                                <div class="text-center">
                                                    <div>
                                                        <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                        <div class="bg-layer">
                                                            <img src="../assets/../assets/images/media/37.png" alt="img" class="text-center mx-auto">
                                                        </div>
                                                        <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side2">
                                        <h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                        <div class="main-chat-list tab-pane">
                                            <div class="media border-0 px-1 new border-top-0">
                                                <div class="main-img-user online">
                                                    <img alt="" src="../assets/images/users/5.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Raymart Santiago</span> <span>10 min</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <img alt="" src="../assets/images/users/6.jpg"> <span>3</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Ariana Monino</span> <span>30 min</span>
                                                    </div>
                                                    <p>Good Morning</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user online"><img alt="" src="../assets/images/users/9.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Reynante Labares</span> <span>9.40 am</span>
                                                    </div>
                                                    <p> Nice to meet you </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Joyce Chua</span> <span>11.20 am</span>
                                                    </div>
                                                    <p> Hi, How are you? </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/4.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                    </div>
                                                    <p>Typing...</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/21.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/5.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Daniel Padilla</span> <span>5 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/3.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>John Pratts</span> <span>20/06/2021</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/7.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new border-bottom-0">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/6.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-package"></i><span
                            class="side-menu__label">Gestions des rôles</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu mega-slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side5" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
                                        <li><a href="#side6" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side5">
                                        <ul class="sidemenu-list mega-menu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Gestions des roles</a></li>
                                            <li><a href="alerts.html" class="slide-item"> Liste des roles</a></li>
                                            <li><a href="buttons.html" class="slide-item"> Attribution de rôles utilisateur</a></li>
                                            <li><a href="colors.html" class="slide-item"> Configuration - rôle et privilèges</a></li>
                                        </ul>
                                        <div class="menutabs-content mt-5 p-0">
                                            <div class="Annoucement_card">
                                                <div class="text-center">
                                                    <div>
                                                        <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                        <div class="bg-layer">
                                                            <img src="../assets/../assets/images/media/37.png" alt="img" class="text-center mx-auto">
                                                        </div>
                                                        <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side6">
                                        <h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                        <div class="main-chat-list tab-pane">
                                            <div class="media border-0 px-1 new border-top-0">
                                                <div class="main-img-user online">
                                                    <img alt="" src="../assets/images/users/5.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Raymart Santiago</span> <span>10 min</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <img alt="" src="../assets/images/users/6.jpg"> <span>3</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Ariana Monino</span> <span>30 min</span>
                                                    </div>
                                                    <p>Good Morning</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user online"><img alt="" src="../assets/images/users/9.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Reynante Labares</span> <span>9.40 am</span>
                                                    </div>
                                                    <p> Nice to meet you </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Joyce Chua</span> <span>11.20 am</span>
                                                    </div>
                                                    <p> Hi, How are you? </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/4.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                    </div>
                                                    <p>Typing...</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/21.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/5.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Daniel Padilla</span> <span>5 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/3.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>John Pratts</span> <span>20/06/2021</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/7.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new border-bottom-0">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/6.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i
                            class="side-menu__icon fe fe-zap"></i><span
                            class="side-menu__label">Landing Page</span><span class="badge bg-green br-5 side-badge blink-text pb-1">New</span></a>
                </li>
                <li class="sub-category">
                    <h3>Misc Pages</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span
                            class="side-menu__label">Authentication</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side21" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
                                        <li><a href="#side22" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side21">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                            <li><a href="login.html" class="slide-item"> Login</a></li>
                                            <li><a href="register.html" class="slide-item"> Register</a></li>
                                            <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                                            <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                                            <li class="sub-slide">
                                                <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                        class="sub-side-menu__label">Error Pages</span><i
                                                        class="sub-angle fe fe-chevron-right"></i></a>
                                                <ul class="sub-slide-menu">
                                                    <li><a href="400.html" class="sub-slide-item"> 400</a></li>
                                                    <li><a href="401.html" class="sub-slide-item"> 401</a></li>
                                                    <li><a href="403.html" class="sub-slide-item"> 403</a></li>
                                                    <li><a href="404.html" class="sub-slide-item"> 404</a></li>
                                                    <li><a href="500.html" class="sub-slide-item"> 500</a></li>
                                                    <li><a href="503.html" class="sub-slide-item"> 503</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="menutabs-content mt-5 p-0">
                                            <div class="Annoucement_card">
                                                <div class="text-center">
                                                    <div>
                                                        <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                        <div class="bg-layer">
                                                            <img src="../assets/../assets/images/media/37.png" alt="img" class="text-center mx-auto">
                                                        </div>
                                                        <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side22">
                                        <h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                        <div class="main-chat-list tab-pane">
                                            <div class="media border-0 px-1 new border-top-0">
                                                <div class="main-img-user online">
                                                    <img alt="" src="../assets/images/users/5.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Raymart Santiago</span> <span>10 min</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <img alt="" src="../assets/images/users/6.jpg"> <span>3</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Ariana Monino</span> <span>30 min</span>
                                                    </div>
                                                    <p>Good Morning</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user online"><img alt="" src="../assets/images/users/9.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Reynante Labares</span> <span>9.40 am</span>
                                                    </div>
                                                    <p> Nice to meet you </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Joyce Chua</span> <span>11.20 am</span>
                                                    </div>
                                                    <p> Hi, How are you? </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/4.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                    </div>
                                                    <p>Typing...</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/21.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/5.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Daniel Padilla</span> <span>5 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/3.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>John Pratts</span> <span>20/06/2021</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/7.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new border-bottom-0">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/6.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-cpu"></i>
                        <span class="side-menu__label">Submenu items</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side25" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
                                        <li><a href="#side26" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side25">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                                            <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                                            <li class="sub-slide">
                                                <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                                        class="sub-side-menu__label">Submenu-2</span><i
                                                        class="sub-angle fe fe-chevron-right"></i></a>
                                                <ul class="sub-slide-menu">
                                                    <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a></li>
                                                    <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a></li>
                                                    <li class="sub-slide2">
                                                        <a class="sub-side-menu__item2" href="javascript:void(0)"
                                                            data-bs-toggle="sub-slide2"><span
                                                                class="sub-side-menu__label2">Submenu-2.3</span><i
                                                                class="sub-angle2 fe fe-chevron-right"></i></a>
                                                        <ul class="sub-slide-menu2">
                                                            <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                            <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                            <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a></li>
                                                    <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="menutabs-content mt-5 p-0">
                                            <div class="Annoucement_card">
                                                <div class="text-center">
                                                    <div>
                                                        <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                                        <div class="bg-layer">
                                                            <img src="../assets/../assets/images/media/37.png" alt="img" class="text-center mx-auto">
                                                        </div>
                                                        <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                                    </div>
                                                </div>
                                                <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side26">
                                        <h5 class="mt-3 fw-600 mb-4">Recent Chats</h5>
                                        <div class="main-chat-list tab-pane">
                                            <div class="media border-0 px-1 new border-top-0">
                                                <div class="main-img-user online">
                                                    <img alt="" src="../assets/images/users/5.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Raymart Santiago</span> <span>10 min</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <img alt="" src="../assets/images/users/6.jpg"> <span>3</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Ariana Monino</span> <span>30 min</span>
                                                    </div>
                                                    <p>Good Morning</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user online"><img alt="" src="../assets/images/users/9.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Reynante Labares</span> <span>9.40 am</span>
                                                    </div>
                                                    <p> Nice to meet you </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Joyce Chua</span> <span>11.20 am</span>
                                                    </div>
                                                    <p> Hi, How are you? </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/4.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user">
                                                    <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                    </div>
                                                    <p>Typing...</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/21.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/5.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Daniel Padilla</span> <span>5 days ago</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/3.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>John Pratts</span> <span>20/06/2021</span>
                                                    </div>
                                                    <p>I have some work</p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/7.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                            <div class="media border-0 px-1 new border-bottom-0">
                                                <div class="main-img-user"><img alt="" src="../assets/images/users/6.jpg"></div>
                                                <div class="media-body">
                                                    <div class="media-contact-name">
                                                        <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                    </div>
                                                    <p> Hey! there I'm available </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
