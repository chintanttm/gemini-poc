@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h5 class="card-title mb-0"><i class="fa fa-code me-2"></i>Development Setup</h5>
                        <span>To get started, you need to do the following:</span>
                    </div>
                </div>
                <ul class="nav nav-tabs tab-card" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-grunt" role="tab">Grunt</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-gulp" role="tab">Gulp</a></li>
                    <li class="nav-item d-none"><a class="nav-link" data-bs-toggle="tab" href="#nav-react" role="tab">
                        <svg class="avatar sm d-block d-lg-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" fill="none">
                            <path d="M13.1553 4.76506C12.985 4.70726 12.8132 4.65372 12.6402 4.60448C12.6689 4.48912 12.6954 4.37324 12.7198 4.25691C13.1097 2.38433 12.8548 0.875791 11.9842 0.379203C11.1496 -0.0970683 9.78449 0.39952 8.40581 1.58655C8.26996 1.70379 8.13713 1.8244 8.00743 1.94828C7.92058 1.86591 7.8322 1.78514 7.74232 1.70601C6.29744 0.436652 4.84916 -0.0981893 3.97954 0.39987C3.14567 0.877473 2.89869 2.29571 3.24969 4.07034C3.28462 4.24608 3.32405 4.42091 3.36795 4.59467C3.16302 4.65226 2.96511 4.71363 2.77576 4.77893C1.08184 5.36323 0 6.27906 0 7.22894C0 8.21007 1.16129 9.19414 2.92574 9.79077C3.06881 9.83893 3.21307 9.88355 3.35839 9.92459C3.31118 10.1118 3.26927 10.3003 3.2327 10.4898C2.89805 12.2336 3.15941 13.6182 3.99108 14.0928C4.85008 14.5829 6.29177 14.0792 7.69566 12.865C7.80662 12.769 7.918 12.6672 8.02953 12.5605C8.17 12.6946 8.31423 12.8248 8.46204 12.951C9.82188 14.1087 11.1649 14.5763 11.9958 14.1003C12.854 13.6088 13.1329 12.1213 12.7708 10.3116C12.7432 10.1734 12.7109 10.0322 12.6748 9.88844C12.7761 9.85887 12.8754 9.82833 12.9724 9.79652C14.8066 9.19526 16 8.22317 16 7.22894C16 6.27563 14.8833 5.35364 13.1553 4.76506Z" fill="#53C1DE"/>
                            <path d="M12.7574 9.15461C12.6699 9.18326 12.5801 9.21093 12.4886 9.23777C12.2861 8.60351 12.0128 7.92904 11.6784 7.23229C11.9976 6.552 12.2603 5.88622 12.4571 5.25603C12.6208 5.30297 12.7797 5.35236 12.9328 5.40456C14.4134 5.90878 15.3165 6.65443 15.3165 7.22893C15.3165 7.8409 14.3411 8.63539 12.7574 9.15461H12.7574ZM12.1003 10.4429C12.2604 11.2432 12.2832 11.9667 12.1772 12.5323C12.0818 13.0405 11.8902 13.3793 11.6533 13.515C11.1491 13.8038 10.0707 13.4284 8.90786 12.4383C8.77453 12.3248 8.6402 12.2036 8.50552 12.0754C8.95637 11.5875 9.40693 11.0203 9.84666 10.3905C10.6202 10.3226 11.3509 10.2115 12.0137 10.06C12.0462 10.1903 12.0753 10.318 12.1003 10.4429ZM5.45475 13.4651C4.96212 13.6373 4.56976 13.6422 4.33262 13.5069C3.82789 13.2189 3.61815 12.1071 3.90429 10.6159C3.93832 10.4396 3.97728 10.2644 4.02113 10.0903C4.67647 10.2337 5.40192 10.3369 6.17729 10.3991C6.61992 11.0154 7.08352 11.5819 7.55072 12.078C7.45143 12.173 7.34978 12.2657 7.24588 12.3557C6.62509 12.8927 6.00303 13.2735 5.45482 13.4651H5.45475ZM3.14684 9.15082C2.36665 8.88698 1.72235 8.5441 1.28071 8.16998C0.883894 7.83369 0.683502 7.49985 0.683502 7.22893C0.683502 6.65254 1.55213 5.91726 3.00083 5.41752C3.18266 5.35507 3.3663 5.2979 3.55152 5.24608C3.75177 5.89042 4.0144 6.56412 4.33135 7.24539C4.01029 7.93682 3.74391 8.62124 3.54182 9.27315C3.40916 9.23558 3.27746 9.19479 3.14684 9.15082ZM3.92051 3.94043C3.61978 2.41991 3.81946 1.27296 4.322 0.985148C4.85732 0.678564 6.04091 1.11574 7.28844 2.21169C7.36817 2.28175 7.44826 2.35511 7.52849 2.43098C7.06369 2.92484 6.60435 3.48707 6.16554 4.09982C5.41304 4.16883 4.69269 4.27967 4.03048 4.42812C3.98968 4.26648 3.95302 4.10384 3.92051 3.94036V3.94043ZM10.8221 5.62658C10.6657 5.35926 10.5035 5.0953 10.3356 4.83489C10.8461 4.89865 11.3352 4.98342 11.7945 5.08718C11.6566 5.52443 11.4848 5.98164 11.2824 6.45035C11.1345 6.17275 10.9811 5.89811 10.8221 5.62658ZM8.00766 2.91426C8.3229 3.25216 8.63864 3.62951 8.94922 4.03887C8.31922 4.00941 7.68817 4.00927 7.05817 4.03845C7.36902 3.63287 7.68745 3.25608 8.00766 2.91426ZM5.17512 5.6312C5.01816 5.90057 4.86758 6.17353 4.72349 6.44986C4.52445 5.98276 4.35415 5.52352 4.21508 5.08004C4.67159 4.97894 5.15841 4.89634 5.66562 4.83363C5.49583 5.09565 5.33229 5.36158 5.17512 5.6312ZM5.68021 9.67249C5.15621 9.61462 4.66203 9.53623 4.20566 9.43793C4.34692 8.9866 4.52098 8.51748 4.72427 8.04037C4.86896 8.3169 5.02021 8.59002 5.17788 8.85951C5.33877 9.13442 5.50626 9.40549 5.68021 9.67249ZM8.02656 11.5914C7.70261 11.2455 7.3795 10.863 7.0639 10.4515C7.37023 10.4634 7.68257 10.4694 8.00001 10.4694C8.32616 10.4694 8.64856 10.4622 8.96586 10.4482C8.65429 10.8672 8.33968 11.2503 8.02656 11.5914ZM11.2889 8.01606C11.5028 8.49835 11.683 8.96495 11.8262 9.40864C11.3623 9.51338 10.8614 9.59774 10.3337 9.66037C10.5028 9.3951 10.6666 9.12653 10.8249 8.85482C10.9858 8.57867 11.1406 8.29902 11.2889 8.01606ZM10.2328 8.51699C9.99042 8.93356 9.73442 9.34223 9.46521 9.74234C8.9905 9.7759 8.49993 9.79321 8.00001 9.79321C7.50214 9.79321 7.0178 9.77786 6.55138 9.74795C6.27518 9.34877 6.01434 8.93939 5.76943 8.5207C5.52565 8.10423 5.29795 7.67875 5.08682 7.24518C5.29742 6.81148 5.52443 6.38578 5.76737 5.96896V5.9691C6.01024 5.5522 6.26902 5.14458 6.54317 4.74711C7.01901 4.71152 7.50689 4.69288 8.00008 4.69288C8.49547 4.69288 8.98398 4.71166 9.45969 4.74753C9.73105 5.14438 9.98818 5.55059 10.2306 5.96539C10.4744 6.38127 10.7044 6.8049 10.9204 7.23558C10.7066 7.67066 10.4773 8.09806 10.2329 8.51699H10.2328ZM11.6428 0.96504C12.1786 1.27078 12.387 2.50364 12.0503 4.12042C12.0283 4.22574 12.0043 4.33066 11.9784 4.43513C11.3146 4.28359 10.5938 4.17079 9.83908 4.10073C9.39942 3.48133 8.9439 2.91811 8.48661 2.43063C8.60644 2.31633 8.72912 2.205 8.85454 2.09673C10.0358 1.07959 11.1398 0.678003 11.6428 0.96504Z" fill="white"/>
                            <path d="M7.99996 5.81543C8.78907 5.81543 9.4287 6.44836 9.4287 7.22904C9.4287 8.0098 8.78907 8.64273 7.99996 8.64273C7.21093 8.64273 6.57123 8.0098 6.57123 7.22904C6.57123 6.44836 7.21093 5.81543 7.99996 5.81543Z" fill="#53C1DE"/>
                        </svg>
                        <span class="d-lg-block d-none">ReactJs</span>
                    </a></li>
                    <li class="nav-item d-none"><a class="nav-link" data-bs-toggle="tab" href="#nav-vuejs" role="tab">
                        <svg class="avatar sm d-block d-lg-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 11" fill="none">
                            <g clip-path="url(#clip0)">
                            <path d="M4.61476 -8.58307e-06L6.00036 2.54028L7.38597 -8.58307e-06H12.0002L6.00036 10.9999L0.00051403 -8.58307e-06H4.61476Z" fill="#41B883"/>
                            <path d="M4.61471 5.10216e-05L6.00031 2.54034L7.38591 5.10216e-05H9.60022L6.00031 6.59985L2.4004 5.10216e-05H4.61471Z" fill="#34495E"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="12" height="11" fill="white" transform="matrix(-1 0 0 1 12 0)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span class="d-lg-block d-none">VueJs</span>
                    </a></li>
                    <li class="nav-item d-none"><a class="nav-link" data-bs-toggle="tab" href="#nav-angular" role="tab">
                        <svg class="avatar sm d-block d-lg-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77 81" fill="none">
                            <path d="M38.5 0.119999L0.887604 13.5328L6.6244 63.2652L38.5 80.92L70.3756 63.2652L76.1124 13.5328L38.5 0.119999Z" fill="#DD0031"/>
                            <path d="M38.5 0.119999V9.0888V9.0484V49.9736V80.92L70.3756 63.2652L76.1124 13.5328L38.5 0.119999Z" fill="#C3002F"/>
                            <path d="M38.5 9.0484L14.9872 61.7704H23.754L28.4808 49.9736H48.4384L53.1652 61.7704H61.932L38.5 9.0484ZM45.368 42.7016H31.632L38.5 26.178L45.368 42.7016Z" fill="white"/>
                        </svg>
                        <span class="d-lg-block d-none">Angular</span>
                    </a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-laravel" role="tab">
                        <svg class="avatar sm d-block d-lg-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14" fill="none">
                            <path d="M19.9198 6.36663C19.7771 6.2247 17.9467 3.93018 17.6376 3.5517C17.3048 3.17323 17.1622 3.24419 16.9482 3.26785C16.7343 3.2915 14.4284 3.69363 14.1669 3.71729C13.9054 3.7646 13.739 3.85922 13.9054 4.09577C14.048 4.30866 15.5695 6.43759 15.9023 6.93434L9.84036 8.37729L5.03837 0.358303C4.84819 0.0744447 4.80065 -0.0201746 4.37275 0.00348027C3.94485 0.0271351 0.592969 0.310993 0.355247 0.310993C0.117525 0.334648 -0.143969 0.429267 0.093753 0.996983C0.331475 1.5647 4.13503 9.70196 4.23012 9.93851C4.3252 10.1751 4.61047 10.5535 5.25232 10.4116C5.91794 10.246 8.20007 9.65465 9.46 9.32348C10.1256 10.5062 11.4569 12.919 11.7184 13.2738C12.0512 13.7469 12.2889 13.6523 12.7881 13.5104C13.1922 13.3921 19.0164 11.3105 19.2779 11.1922C19.5394 11.0739 19.7058 11.003 19.5156 10.7428C19.373 10.5535 17.8516 8.49556 17.0433 7.4311C17.5901 7.28917 19.5632 6.76876 19.7771 6.6978C20.0149 6.62683 20.0624 6.50856 19.9198 6.36663ZM8.91324 8.61384C8.84192 8.63749 5.4425 9.44176 5.27609 9.48907C5.08592 9.53638 5.08592 9.51272 5.08592 9.44176C5.03837 9.37079 1.04464 1.13891 0.973324 1.04429C0.92578 0.949673 0.92578 0.855054 0.973324 0.855054C1.02087 0.855054 4.18257 0.571196 4.27766 0.571196C4.39652 0.571196 4.37275 0.594851 4.42029 0.665815C4.42029 0.665815 8.86569 8.30632 8.93701 8.4246C9.0321 8.54287 8.98456 8.59018 8.91324 8.61384ZM18.4697 10.3879C18.5172 10.4826 18.5885 10.5299 18.3983 10.5772C18.2319 10.6482 12.6692 12.5169 12.5504 12.5642C12.4315 12.6115 12.3602 12.6352 12.2176 12.4223C12.0749 12.2094 10.2683 9.11059 10.2683 9.11059L16.1875 7.57303C16.3302 7.52572 16.3777 7.50206 16.4728 7.64399C16.5679 7.80957 18.4221 10.317 18.4697 10.3879ZM18.85 6.2247C18.7074 6.24835 16.5441 6.79242 16.5441 6.79242L14.7612 4.37962C14.7137 4.30866 14.6661 4.23769 14.785 4.21404C14.9038 4.19038 16.9245 3.83556 17.0196 3.81191C17.1146 3.78825 17.186 3.7646 17.3048 3.93018C17.4237 4.07211 18.9451 6.01181 19.0164 6.08277C19.0877 6.15374 18.9927 6.20105 18.85 6.2247Z" fill="#FB503B"/>
                        </svg>
                        <span class="d-lg-block">Lavarvel</span>
                    </a></li>
                </ul>
                <div class="card-body tab-content">
                    <div class="tab-pane fade show active" id="nav-grunt" role="tabpanel">
                        <ol class="fs-6 lh-lg">
                            <li><strong>Installing Grunt:</strong> Run <code>npm install grunt --save-dev</code> command from your teminal to install grunt within your project.</li>
                            <li><strong>Grunt Sass:</strong> Run <code>grunt sass</code> command from your project directory. It will compile SASS to CSS for the project. This will read the file `scss/filename.scss` and output a plain-css file to `dist/assets/css/filename.css`. </li>
                            <li><strong>Grunt JSHint:</strong> Run <code>grunt jshint</code> command from your project directory. It will checks all *.js files under `assetsjs/filename` for common syntax or coding errors using the JSHint utility.</li>
                            <li><strong>Grunt Sprite:</strong> Run <code>grunt sprite</code> command from your project directory. </li>
                            <li><strong>Further help:</strong> To get more help on the grunt checkout <a href="https://gruntjs.com/getting-started" target="_blank">Grunt</a></li>
                            <li><strong>Note:</strong> However, any SASS code you write must be able compile via Grunt as well.It will generate pre-compiled javascript templates. Reads all the *.html files from `assets/js/filename` and outputs `assets/js/filename.templates.js`. Template.js will contains code of UI design and will be change each time you build solution through above command.</li>
                        </ol>
                        <p><a href="https://gruntjs.com/" target="_blank"><strong>Grunt</strong></a> is a JavaScript task runner, a tool used to automatically perform frequent tasks such as minification, compilation, unit testing, and linting. It uses a command-line interface to run custom tasks defined in a file.</p>
                    </div>
                    <div class="tab-pane fade show" id="nav-gulp" role="tabpanel">
                        <p>If you've previously installed gulp globally, run <code>npm rm --global gulp</code> before following these instructions. For more information, read this <a href="https://medium.com/gulpjs/gulp-sips-command-line-interface-e53411d4467" target="_blank" rel="noopener noreferrer">Sip</a>.</p>
                        <a class="btn px-3 bg-primary text-white text-uppercase fs-6" href="https://gulpjs.com/docs/en/getting-started/quick-start">Quick start Gulp</a>
                    </div>
                    <div class="tab-pane fade" id="nav-react" role="tabpanel">
                        <ol class="fs-6 lh-lg">
                            <li>This template is built in ReactJS and requires Node 12.3.1 and NPM 6.9.0 to be Installed</li>
                            <li>This template is built on react 17+</li>
                            <li><strong>Node.js and NPM:</strong> You can download Node.js from <a href="https://nodejs.org" target="_blank" rel="noopener noreferrer nofollow external">NodeJS</a>. NPM comes bundled with Node.js</li>
                            <li><strong>Project setup:</strong> After installing Node, NPM and Angular CLI run <code>npm install</code> command from the root of your project directory into terminal. It will install all the necessary dependencies for the application using package.json file.</li>
                            <li><strong>Development server:</strong> Run <code>ng serve</code> command from project directory and navigate to <strong>http://localhost:4200/</strong> into your browser.</li>
                            <li><strong>Build:</strong> Run <code>ng build</code> command from project directory to build the project. The build artifacts will be stored in the dist/ directory.</li>
                            <li><strong>Further help:</strong> To get more help on the project setup, go and check out <a href="https://reactjs.org/" target="_blank" rel="noopener noreferrer nofollow external">https://reactjs.org/</a>.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="nav-vuejs" role="tabpanel">
                        <ol class="fs-6 lh-lg">
                            <li>This template is built in Vue.js and requires Node 12.3.1 and NPM 6.9.0 to be installed.</li>
                            <li><strong>Vue.js</strong> version 2+ is used to build vue application.</li>
                            <li><strong>Node.js and NPM:</strong> You can download Node.js from NodeJS. NPM comes bundled with Node.js</li>
                            <li><strong>Project setup:</strong> After installing Node, NPM and Angular CLI run <code>npm install</code> command from the root of your project directory into terminal. It will install all the necessary dependencies for the application using package.json file.</li>
                            <li><strong>Development server:</strong> Run <code>npm run serve</code> command from project directory and navigate to http://localhost:8080/ into your browser.</li>
                            <li><strong>Build:</strong> Run npm run build command from project directory to build the project. The build artifacts will be stored in the dist/ directory.</li>
                            <li><strong>Further help</strong> To get more help on the Vue.js check out <a href="https://vuejs.org/" target="_blank">Vue.js</a> documentation.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="nav-angular" role="tabpanel">
                        <ol class="fs-6 lh-lg">
                            <li>This template is also built in Angular and requires Node 12.3.1 and NPM 6.9.0 to be installed.</li>
                            <li>Angular version 10+ is used to build angular application.</li>
                            <li><strong>Node.js and NPM:</strong> You can download Node.js from <a href="https://nodejs.org" target="_blank" rel="noopener noreferrer nofollow external">NodeJS</a>. NPM comes bundled with Node.js</li>
                            <li><strong>Angular-CLI:</strong> You can install angular-cli by executing following command from your terminal <code>install -g @angular/cli/</code>. More details can be found here <a href="https://github.com/angular/angular-cli" target="_blank" rel="noopener noreferrer nofollow external">Angular-CLI</a></li>
                            <li><strong>Project setup:</strong> After installing Node, NPM and Angular CLI run <code>npm install</code> command from the root of your project directory into terminal. It will install all the necessary dependencies for the application using package.json file.</li>
                            <li><strong>Development server:</strong> Run <code>ng serve</code> command from project directory and navigate to <strong>http://localhost:4200/</strong> into your browser.</li>
                            <li><strong>Build:</strong> Run <code>ng build</code> command from project directory to build the project. The build artifacts will be stored in the dist/ directory.</li>
                            <li><strong>Further help:</strong> To get more help on the angular-cli use <code>ng --help</code> or go check out <a href="https://github.com/angular/angular-cli" target="_blank" rel="noopener noreferrer nofollow external">Angular-CLI</a>.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="nav-laravel" role="tabpanel">
                        <ol class="fs-6 lh-lg">
                            <li>This template is built in Laravel and requires PHP 7.3+, Node 12.3.1 and NPM 6.9.0 to be installed</li>
                            <li>This template is built on Laravel Boilerplate 5</li>
                            <li><strong>Node.js and NPM:</strong> You can download Node.js from <a href="https://nodejs.org" target="_blank" rel="noopener noreferrer nofollow external">NodeJS</a>. NPM comes bundled with Node.js</li>
                            <li><strong>Project Setup:</strong> After Installing Node and NPM, run 'num install' command to install npm related dependencies</li>
                            <li><strong>Environment setup:</strong> This package ships with a .env.example file in the root of the project. You must rename this file to just .env (Make sure you have hidden files shown on your system).</li>
                            <li><strong>Composer:</strong> Install composer from https://getcomposer.org/ and run 'composer install' command</li>
                            <li><strong>Create Database:</strong> <span>You must create your database on your server and on your .env file update the following lines:</span>
                                <ul>
                                    <li>DB_CONNECTION=mysql</li>
                                    <li>DB_HOST=127.0.0.1</li>
                                    <li>DB_PORT=3306</li>
                                    <li>DB_DATABASE=homestead</li>
                                    <li>DB_USERNAME=homestead</li>
                                    <li>DB_PASSWORD=secret</li>
                                </ul>
                                <p>Change these lines to reflect your new database settings.</p>
                            </li>
                            <li>
                                <strong>Artisan Commands:</strong> The first thing we are going to do is set the key that Laravel will use when doing encryption.
                                <div class="text-danger">run 'php artisan key:generate'</div>
                                You should see a green message stating your key was successfully generated. As well as you should see the APP_KEY variable in your .env file reflected.<br>
                                It's time to see if your database credentials are correct.
                            </li>
                            <li>
                                <strong>Migration:</strong> We are going to run the built in migrations to create the database tables:
                                <div class="text-danger">run 'php artisan migrate'</div>
                                You should see a message for each table migrated, if you don't and see errors, than your credentials are most likely not correct.<br>
                                We are now going to set the administrator account information. To do this you need to navigate to seed file and change the name/email/password of the Administrator account.<br>
                                You can delete the other dummy users, but do not delete the administrator account or you will not be able to access the backend.
                            </li>
                            <li><strong>Now seed the database with:</strong> <span class="text-danger">run 'php artisan db:seed'</span></li>
                            <li><strong>NPM Run '*':</strong> Now that you have the database tables and default rows, you need to build the styles and scripts.
                                <div class="text-danger">run 'npm run <command>' (generally 'npm run dev' in local)</div>
                            </li>
                            <li><strong>PHPUnit:</strong> After your project is installed, make sure you run the test suite to make sure all of the parts are working correctly. From the root of your project run 'phpunit'</li>
                            <li><strong>Storage:</strong> After your project is installed you must run this command to link your public storage folder for user avatar uploads, run 'php artisan storage:link'</li>
                            <li><strong>Login:</strong> After your project is installed and you can access it in a browser, click the login button on the right of the navigation bar.</li>
                        </ol>
                        <strong>The administrator credentials are:</strong>
                        <div class="text-danger mt-3">Username: admin@admin.com</div>
                        <div class="text-danger mb-3">Password: secret</div>
                        <span>You will be automatically redirected to the backend. If you changed these values in the seeder prior, then obviously use the ones you updated to.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
