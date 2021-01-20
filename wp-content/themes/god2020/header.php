<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Год здоровья 2020</title>
 <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid">
        <header>
        <div class="row menu d-flex">
                <div class="col-4 col-sm-5 col-md-5 col-lg-5">
                    <div class="menu__logo">
                        <a href="<?php echo home_url() ?>">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/logo1-01.png" media="(max-width: 1200px)">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.png" alt="Год здоровья 2020">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-3 offset-md-1 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="menu__geo">
                        <select>
                            <option value="Kursk">Курская область</option>
                            <option value="Ne">Курск</option>
                            <option value="Ne">Щигровский район</option>
                            <option value="Ne">Фатежский район</option>
                        </select>
                    </div>
                </div>
                <div class="col-2 col-sm-1 col-md-1 col-lg-2 col-xl-3">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'top',
                    'menu'            => '', 
                    'container'       => 'div', 
                    'container_class' => 'menu__nav', 
                    'container_id'    => '',
                    'menu_class'      => '', 
                    'menu_id'         => '',
                    
                ) );?>
                    <!-- <div class="menu__nav d-flex">
                        <nav>
                            <ul>
                                <li><a href="index.html">Главная</a></li>
                                <li><a href="news.html">Новости</a></li>
                                <li><a href="events.html">События</a></li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
                <div class="col-3 col-sm-2 col-md-2 col-lg-1">
                    <div class="menu__pie">
                        <i class="menu__pie__open fa fa-bars" aria-hidden="true"></i>
                    </div>   
                </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Какая тема вашего вопроса?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <a href="<?get_template_directory_uri()?>/form-apple" style="text-decoration: none;">
                            <div class="row pie__health">                
                                <div class="offset-2 col-6 pie__health__title d-flex" style="border: none;">окружающая среда</div>
                                <div class="col-3 pie__health__icon d-flex">
                                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M36.3332 21.9476C36.3145 28.633 32.4584 37.603 25.1955 37.7154C24.8398 37.7154 24.5591 37.6592 24.297 37.5655C23.829 37.4532 23.1739 37.2097 22.5 37.191C21.8074 37.2097 21.171 37.4532 20.6843 37.5655C20.4222 37.6592 20.1414 37.7154 19.7858 37.7154C12.5229 37.603 8.66681 28.6517 8.64809 21.9476C8.64809 19.4569 9.28453 18.0524 10.0707 16.8914C11.381 14.9438 13.6273 13.6517 16.1543 13.6517C16.5287 13.6517 16.8844 13.6891 17.2213 13.7266C17.24 13.7266 17.2587 13.7266 17.2587 13.7453C17.6331 13.8015 17.9701 13.8764 18.2883 13.97C19.037 14.0262 20.8715 15.0562 22.4626 15.0562H22.4813H22.5C24.0911 15.0562 25.9443 14.0262 26.6743 13.97C26.9925 13.8764 27.3295 13.8015 27.6664 13.7453C27.6851 13.7453 27.7038 13.7453 27.7225 13.7266C28.0782 13.6704 28.4339 13.6517 28.7895 13.6517C31.3166 13.6517 33.5628 14.9438 34.8731 16.8914C35.6968 18.0524 36.3332 19.4382 36.3332 21.9476ZM22.5 8.78277C22.5 10.2809 19.7109 11.4981 16.2666 11.4981C12.8224 11.4981 10.0333 8.78277 10.0333 8.78277C10.0333 8.78277 12.8224 6.06742 16.2666 6.06742C19.7109 6.06742 22.5 7.28464 22.5 8.78277ZM45 22.5094C45 10.0749 34.9293 0 22.5 0C10.0707 0 0 10.0749 0 22.5094C0 34.9438 10.0707 45.0187 22.5 45.0187C34.9293 45.0187 45 34.9251 45 22.5094Z" fill="#707E8C"/>
                                    </svg>                            
                                </div>              
                            </div>
                        </a>
                        <a href="<?get_template_directory_uri()?>/form-sport" style="text-decoration: none;">
                            <div class="row pie__health">                
                                <div class="offset-2 col-6 pie__health__title d-flex" style="border: none;">здоровый образ жизни</div>
                                <div class="col-3 pie__health__icon d-flex">
                                    <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.8103 30.206L9.93844 41.3296C13.3977 43.6517 17.5341 45.0187 22 45.0187C26.4476 45.0187 30.6023 43.6517 34.0616 41.3296L23.1897 30.2247C23.1897 30.2247 22.6589 29.5318 22 29.5693C21.3411 29.5131 20.8103 30.206 20.8103 30.206ZM16.2712 16.9101H0.71381C0.274542 18.7079 0 20.5618 0 22.5094C0 28.5768 2.36106 34.0637 6.16805 38.1086L16.9484 27.1161C16.9484 27.1161 17.1681 26.9101 17.2596 26.6479C17.3328 26.3858 17.3511 26.0112 17.3511 26.0112V17.9401C17.3511 17.9401 17.3511 17.4532 17.0216 17.191C16.8203 16.985 16.2712 16.9101 16.2712 16.9101ZM22 11.5169C19.3461 11.5169 17.2047 9.32584 17.2047 6.62921C17.2047 3.91386 19.3461 1.72285 22 1.72285C24.6356 1.72285 26.777 3.91386 26.777 6.62921C26.777 9.32584 24.6356 11.5169 22 11.5169ZM22 12.8839H41.8586C38.3261 5.2809 30.7854 0 22 0C13.2146 0 5.65557 5.2809 2.12313 12.8839H22ZM44 22.5094C44 20.5805 43.7438 18.7266 43.2862 16.9476H27.7471C27.7471 16.9476 27.198 16.985 26.9967 17.2285C26.6672 17.4906 26.6672 17.9775 26.6672 17.9775V26.0487C26.6672 26.0487 26.6855 26.4232 26.7587 26.6854C26.8502 26.9476 27.0699 27.1536 27.0699 27.1536L37.8503 38.1273C41.6389 34.0262 44 28.5581 44 22.5094Z" fill="#707E8C"/>
                                    </svg>                                                    
                                </div>              
                            </div>
                        </a>
                        <a href="<?get_template_directory_uri()?>/form-heart" style="text-decoration: none;">
                            <div class="row pie__health">                
                                <div class="offset-2 col-6 pie__health__title d-flex" style="border: none;">здравоохранение</div>
                                <div class="col-3 pie__health__icon d-flex">
                                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M36.0337 18.3521C36.0337 20.0562 35.4347 21.6292 34.4426 22.8839L34.3864 22.9401C34.1993 23.1648 33.9933 23.3895 33.7874 23.5955L22.5187 35.8052L22.4813 35.7678L22.4626 35.7865L11.1938 23.5955C10.9879 23.3895 10.782 23.1835 10.5948 22.9401L10.5387 22.8839C9.54659 21.6479 8.94759 20.0749 8.94759 18.3521C8.94759 14.3258 12.2047 11.0861 16.2105 11.0861C18.8873 11.0861 21.2084 12.5281 22.4813 14.6816C23.7354 12.5281 26.0753 11.0861 28.7334 11.0861C32.7766 11.0861 36.0337 14.3446 36.0337 18.3521ZM45 22.5094C45 10.0749 34.9293 0 22.5 0C10.0707 0 0 10.0749 0 22.5094C0 34.9438 10.0707 45.0187 22.5 45.0187C34.9293 45.0187 45 34.9251 45 22.5094Z" fill="#707E8C"/>
                                    </svg>                                                    
                                </div>              
                            </div>
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
                </div>
            </div>

        </header>
        <div class="pie">
            <div class="row">
                <div class="offset-1 col-8">
                    <div class="pie__geo d-flex">
                        <select>
                            <option value="Kursk">Курская область</option>
                            <option value="Ne">Курск</option>
                            <option value="Ne">Щигровский район</option>
                            <option value="Ne">Фатежский район</option>
                        </select>
                    </div>   
                </div>
                <div class="col-3 pie__close d-flex">
                    <i class="pie__close__click fa fa-times" aria-hidden="true"></i>
                </div>
            </div>                     
            <div class="row ">                
                <div class="offset-2 col-6 pie__nav d-flex">
                    
                    <?php wp_nav_menu( array(
                    'theme_location'  => 'top',
                    'menu'            => '', 
                    'container'       => 'div', 
                    'container_class' => 'pie__nav', 
                    'container_id'    => '',
                    'menu_class'      => '', 
                    'menu_id'         => '',
                    
                ) );?>
                    
                </div>
            </div>
            <a href="<?get_template_directory_uri()?>/apple">
                <div class="row pie__health">                
                    <div class="offset-2 col-6 pie__health__title d-flex">окружающая среда</div>
                    <div class="col-3 pie__health__icon d-flex">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36.3332 21.9476C36.3145 28.633 32.4584 37.603 25.1955 37.7154C24.8398 37.7154 24.5591 37.6592 24.297 37.5655C23.829 37.4532 23.1739 37.2097 22.5 37.191C21.8074 37.2097 21.171 37.4532 20.6843 37.5655C20.4222 37.6592 20.1414 37.7154 19.7858 37.7154C12.5229 37.603 8.66681 28.6517 8.64809 21.9476C8.64809 19.4569 9.28453 18.0524 10.0707 16.8914C11.381 14.9438 13.6273 13.6517 16.1543 13.6517C16.5287 13.6517 16.8844 13.6891 17.2213 13.7266C17.24 13.7266 17.2587 13.7266 17.2587 13.7453C17.6331 13.8015 17.9701 13.8764 18.2883 13.97C19.037 14.0262 20.8715 15.0562 22.4626 15.0562H22.4813H22.5C24.0911 15.0562 25.9443 14.0262 26.6743 13.97C26.9925 13.8764 27.3295 13.8015 27.6664 13.7453C27.6851 13.7453 27.7038 13.7453 27.7225 13.7266C28.0782 13.6704 28.4339 13.6517 28.7895 13.6517C31.3166 13.6517 33.5628 14.9438 34.8731 16.8914C35.6968 18.0524 36.3332 19.4382 36.3332 21.9476ZM22.5 8.78277C22.5 10.2809 19.7109 11.4981 16.2666 11.4981C12.8224 11.4981 10.0333 8.78277 10.0333 8.78277C10.0333 8.78277 12.8224 6.06742 16.2666 6.06742C19.7109 6.06742 22.5 7.28464 22.5 8.78277ZM45 22.5094C45 10.0749 34.9293 0 22.5 0C10.0707 0 0 10.0749 0 22.5094C0 34.9438 10.0707 45.0187 22.5 45.0187C34.9293 45.0187 45 34.9251 45 22.5094Z" fill="#707E8C"/>
                        </svg>                            
                    </div>              
                </div>
            </a>
            <a href="<?get_template_directory_uri()?>/health">
                <div class="row pie__health">                
                    <div class="offset-2 col-6 pie__health__title d-flex">здоровый образ жизни</div>
                    <div class="col-3 pie__health__icon d-flex">
                        <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.8103 30.206L9.93844 41.3296C13.3977 43.6517 17.5341 45.0187 22 45.0187C26.4476 45.0187 30.6023 43.6517 34.0616 41.3296L23.1897 30.2247C23.1897 30.2247 22.6589 29.5318 22 29.5693C21.3411 29.5131 20.8103 30.206 20.8103 30.206ZM16.2712 16.9101H0.71381C0.274542 18.7079 0 20.5618 0 22.5094C0 28.5768 2.36106 34.0637 6.16805 38.1086L16.9484 27.1161C16.9484 27.1161 17.1681 26.9101 17.2596 26.6479C17.3328 26.3858 17.3511 26.0112 17.3511 26.0112V17.9401C17.3511 17.9401 17.3511 17.4532 17.0216 17.191C16.8203 16.985 16.2712 16.9101 16.2712 16.9101ZM22 11.5169C19.3461 11.5169 17.2047 9.32584 17.2047 6.62921C17.2047 3.91386 19.3461 1.72285 22 1.72285C24.6356 1.72285 26.777 3.91386 26.777 6.62921C26.777 9.32584 24.6356 11.5169 22 11.5169ZM22 12.8839H41.8586C38.3261 5.2809 30.7854 0 22 0C13.2146 0 5.65557 5.2809 2.12313 12.8839H22ZM44 22.5094C44 20.5805 43.7438 18.7266 43.2862 16.9476H27.7471C27.7471 16.9476 27.198 16.985 26.9967 17.2285C26.6672 17.4906 26.6672 17.9775 26.6672 17.9775V26.0487C26.6672 26.0487 26.6855 26.4232 26.7587 26.6854C26.8502 26.9476 27.0699 27.1536 27.0699 27.1536L37.8503 38.1273C41.6389 34.0262 44 28.5581 44 22.5094Z" fill="#707E8C"/>
                        </svg>                                                    
                    </div>              
                </div>
            </a>
            <a href="<?get_template_directory_uri()?>/heart">
                <div class="row pie__health">                
                    <div class="offset-2 col-6 pie__health__title d-flex">здравоохранение</div>
                    <div class="col-3 pie__health__icon d-flex">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36.0337 18.3521C36.0337 20.0562 35.4347 21.6292 34.4426 22.8839L34.3864 22.9401C34.1993 23.1648 33.9933 23.3895 33.7874 23.5955L22.5187 35.8052L22.4813 35.7678L22.4626 35.7865L11.1938 23.5955C10.9879 23.3895 10.782 23.1835 10.5948 22.9401L10.5387 22.8839C9.54659 21.6479 8.94759 20.0749 8.94759 18.3521C8.94759 14.3258 12.2047 11.0861 16.2105 11.0861C18.8873 11.0861 21.2084 12.5281 22.4813 14.6816C23.7354 12.5281 26.0753 11.0861 28.7334 11.0861C32.7766 11.0861 36.0337 14.3446 36.0337 18.3521ZM45 22.5094C45 10.0749 34.9293 0 22.5 0C10.0707 0 0 10.0749 0 22.5094C0 34.9438 10.0707 45.0187 22.5 45.0187C34.9293 45.0187 45 34.9251 45 22.5094Z" fill="#707E8C"/>
                        </svg>                                                    
                    </div>              
                </div>
            </a>
            <a href="">
                <div class="row pie__quest">                
                    <div class="offset-2 col-6 pie__quest__title d-flex">межведомственный совет</div>
                    <div class="col-3 pie__quest__icon d-flex">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>                                                   
                    </div>              
                </div>
            </a>
            <a  data-toggle="modal" data-target="#exampleModalCenter" style="cursor: pointer;">
                <div class="row pie__quest" style="margin-top: 10px;">                
                    <div class="offset-2 col-6 pie__quest__title d-flex">задать вопрос</div>
                    <div class="col-3 pie__quest__icon d-flex">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>                                                    
                    </div>              
                </div>
            </a>             
                   
        </div>