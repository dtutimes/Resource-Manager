<footer id="footer" class="footer">
    <div id="copyrights" style="background-color:#111111;">
        <div class="footer-content">
            <div class="container">
                <div class="row" style="margin:auto; text-align:center;">

                    <div class="footer-col col-md-5 col-sm-6 col-xs-12" style="display:inline-block; box-sizing:border-box;">
                        <div class="footer-col-inner">
                            <div class="footer-col-inner" style="text-align:justify;">
                                <h3 style="color:white; text-align:center;">About</h3>
                                <p style="margin-top:45px;">DTU Times is the Official Newsletter of Delhi Technological University, formerly known as
                                    Delhi College of Engineering.<br> We warmly welcome you to the revamped DTU Times Website.
                                    Explore the various sections, browse the blog or scan out the archive. You are sure to
                                    find content to suit your appetite, and more. There’s something in store for everyone!</p>

                            </div>
                        </div>
                        <!--//footer-col-inner-->
                    </div>

                    <div class="footer-col col-md-7 col-sm-6 col-sm-pull-0 col-xs-12" style="display:inline-block; box-sizing:border-box;">
                        <div class="footer-col-inner" style="text-align:center;">
                            <h3 style="color:white;">Connect with us</h3>

                            <div class="widget subscribe-widget clearfix dark" style="margin:30px 0; width:300px; display:inline-block;">
                                <h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
                                <div class="widget-subscribe-form-result" style="display:inline-block;"></div>

                                <form id="widget-subscribe-form" action="{{ route('subscribers.join') }}" role="form" method="post" class="nobottommargin">
                                    <div class="input-group divcenter" style="margin-top:-20px;">
                                        @csrf
                                        <span class="input-group-addon"><i class="icon-email2"></i></span>
                                        <input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
                                        <span class="input-group-btn">
                                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                                    </span>
                                    </div>
                                </form>
                            </div>

                            <!--
                            <div class="footer-col col-md-12 col-mf-offset-1 col-sm-12 col-xs-12 col-xs-offset-0" style=" box-sizing:border-box;">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdtutimes&tabs&width=270&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
                                    width="270" height="130" style="border:none;overflow:auto;margin:20px 0px;display:inline-block;"
                                    scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                          -->
                        </div>
                        <!--//footer-col-inner-->

                        <!-- InstaWidget -->
                        <!--
                        <div class="footer-col col-md-5 col-sm-5 col-xs-12" style="text-align:center; margin-top:0px; padding:0px; box-sizing:border-box;">
                            <a style="" href="https://instawidget.net/v/user/dtu_times" id="link-61708c0555b801885f4641cb4a7da195bb8fa5c93906abdfe397b99cf9ae6706">@dtu_times</a>
                            <script src="https://instawidget.net/js/instawidget.js?u=61708c0555b801885f4641cb4a7da195bb8fa5c93906abdfe397b99cf9ae6706&width=170px"></script>
                        </div>
                      -->

                    </div>
                    <!--//foooter-col-->
                </div>
            </div>
        </div>
        <!--//footer-content-->

        <div class="bottom-bar" style="text-align:center;">
          <!--
            <div class="widget subscribe-widget clearfix dark" style="margin:30px 0; width:300px; display:inline-block;">
                <h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
                <div class="widget-subscribe-form-result" style="display:inline-block;"></div>

                <form id="widget-subscribe-form" action="{{ route('subscribers.join') }}" role="form" method="post" class="nobottommargin">
                    <div class="input-group divcenter" style="margin-top:-20px;">
                        @csrf
                        <span class="input-group-addon"><i class="icon-email2"></i></span>
                        <input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
                        <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
                    </div>
                </form>
            </div>
          -->

            <div class="container" style="margin-top:30px">
                <small class="copyright col-md-12 col-sm-12 col-xs-12" style="color:white; text-align:center;">Copyright &copy; 2019 DTU Times</small>
                <small class="copyright col-md-12 col-sm-12 col-xs-12" style="color:gray; text-align:center;">
                  <a href="http://dtutimes.live/pdf/privacypolicy.pdf"> Privacy Policy </a>
                </small>
            </div>
            <!--//container-->
        </div>
        <!--//bottom-bar-->
    </div>
    <!-- #copyrights end -->
</footer>
