<section class="bg-light">
    <div style="background-color: #e3f2fd " class="ml-3 mr-3">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <h3 class="text-center"><i class="fa fa-address-book" aria-hidden="true"></i> About Us</h3><hr>
                <p class="lead">This website is used book selling system where students can sell or buying book.Also this website user friendly.</p>

            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <h3 class="text-center"><i class=" fas fa-location-arrow"></i> Address</h3><hr>
                <P ><i class="h4 fas fa-location-arrow"></i> Dhaka</P>
                <P><i class=" h4 fas fa-phone"></i> 02384923</P>
                <P><i class=" h4 fas fa-envelope"></i> abc@example.com</P>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                <h3><i class="fas fa-thumbtack"></i> Follow Us</h3><hr>
                <a href="https://www.facebook.com/" class=""><i class=" h3 fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" class=""> <i class=" h3 fab fa-instagram-square"></i> </a>
                <a href="http://skype.com/" class=""><i class=" h3 fab fa-skype"></i></a><br>
                <a href="https://www.linkedin.com/" class=""><i class="h3 fab fa-linkedin"></i></a>
                <a href="http://twitter.com/" class=""><i class="h3 fab fa-twitter-square"></i></a><br>

            </div>

                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <h3 class=""><i class=" fas fa-phone"></i> Contact Us</h3><hr>
                    
                        <form action="{{ url('message') }}" method="POST">
                            @csrf
                            <div class="form-gorup">
                                <label for="">Enter Your Mail</label>
                                <input type="email" name="email" class="form-control" id="">
                            </div>
                            <div class="form-gorup">
                                <label for="">Enter Your Message</label>
                                <input type="text" name="message" class="form-control" id="">
                            </div>
                            <div class="form-gorup text-center my-3">
                                <input style="background-color:#2ecc71" type="submit" name="" value="Submit" class="btn text-light" id="">
                            </div>

                        </form>
                    

                </div>


        </div>
    </div>
</section>


