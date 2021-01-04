<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block.'/libs/lessc.inc.php');
    }

    $less = new lessc;
    $less->compileFile('less/33.less', 'css/33.css');

?>
<div class="type-33">


    <div class="container">
        <div class="row ">
            <div class="col-md-3 active_33">
                <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                <h3>Phone</h3>
                <p>+1 201 918 47 81</p>
                <p>+1 201 890 81 40</p>
            </div>
            
            <div class="col-md-3 active_33">
                <i class="fas fa-map-marker-alt fa-3x" aria-hidden="true"></i>
                <h3>Adpress</h3>
                <p>477 Jehovah Drive</p>
                <p>Lexington, VA 24450</p>
            </div>

            <div class="col-md-3 active_33">
                <i class="far fa-envelope fa-3x" aria-hidden="true"></i>
                <h3>Phone</h3>
                <p>+1 201 918 47 81</p>
                <p>+1 201 890 81 40</p>
            </div>
            
        </div>
        


        <h2 class="text-center">Contact Form</h2>
        <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="#" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Leave A Message</h3>
                                    
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre1" name="nombre" placeholder="Name" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre2" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Write a message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
        </div>
    </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4796.4208899469295!2d106.75675744937607!3d10.851573281922445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527bd532d45d9%3A0x6b46595d312dcffe!2zNTMgVsO1IFbEg24gTmfDom4sIExpbmggQ2hp4buDdSwgVGjhu6cgxJDhu6ljLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1608363007521!5m2!1svi!2s" width="1362" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>