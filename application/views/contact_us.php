<style>
.remove_p_margin_bottom {
    margin-bottom: 0rem;
}
</style>
<div class="contact_bg">
    <!-- Banner -->
    <section id="banner">
        <div class="inner text-left">
            <h1>Contact us</h1>
            <h3>We're here to help.</h3>
            <p>Not sure about the artwork you need?</p>
            <p>Get in touch with us and let us help you.</p>
        </div>
    </section>

    <div class="container-fluid contact_section">
        <div class="row" style="margin:auto">
            <div class="col-12 text-center">
                <h5 class="text-center">Say Hello to Us!</h5>
                <img src="../assets/imagess/hr.png" class=" img-fluid align-content-center" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                    et dolore magna aliqua..</p>
            </div>
            <div class="container" style="">
                <div class="row" style="margin:auto">
                    <div class="col-lg-4">
                        <div class="contact_details bg-white">
                            <h5><i class="fa fa-map" aria-hidden="true"></i>Address:</h5>
                            <p>orem ipsum dolor sit ame</p>
                            <h5><i class="fa fa-phone" aria-hidden="true"></i>Phone:</h5>
                            <p>+123456879</p>
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i></i>Email:</h5>
                            <p class="mb-0">example@email.com</p>
                        </div>
                    </div>
                    <div class="col-lg-8 contact_form mt-3 mt-lg-0">
                        <form id="passwordForm" onsubmit="sendMessage(event)">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email"
                                    aria-describedby="helpId" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="Message"></textarea>
                            </div>
                            <!-- <a name="" id="" class="btn" href="#" role="button">Send Messages</a> -->
                            <!-- <input type="submit" class="form-control" name="submit" id="submit" onsubmit="sendMessage(event)"> -->
                            <button class="btn btn-primary" type="submit">submit</button>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div id="map" style="width:100%;height:285px;background:grey"></div>
    <script>
    function sendMessage(event) {
        console.log("Test");
        // alert($("#name").val() + " ----- " + $("#email").val() + " ----- " + $("#message").val());
        event.preventDefault();
        if ($("#name").val()) {
            if ($("#email").val()) {
                if ($("#message").val()) {
                    $.ajax({
                        url: "<?= base_url();?>home/contact",
                        type: "post",
                        data: {
                            name: $("#name").val(),
                            email: $("#email").val(),
                            message: $("#message").val(),
                        },
                        success: function(res) {
                            // alert(res);

                            swal(res).then(() => {
                                window.location.replace("<?php echo base_url('home/contact'); ?>");
                            })
                            console.log(res);
                            // alert("Message Send Successfully")
                        }
                    })
                } else {
                    alert("Please Enter Your Message")
                }
            } else {
                alert("Please Enter Your Email")
            }

        } else {
            alert("Please Enter Your Name")
        }
    }
    // function initMap() {
    // 	// The location of Saya Frames
    // 	const Saya Frames = {
    // 		lat: 33.5504003,
    // 		lng: 73.1250135
    // 	};
    // 	// The map, centered at Saya Frames
    // 	const map = new google.maps.Map(document.getElementById("map"), {
    // 		zoom: 4,
    // 		center: Saya Frames,
    // 	});
    // 	// The marker, positioned at Saya Frames
    // 	const marker = new google.maps.Marker({
    // 		position: Saya Frames,
    // 		map: map,
    // 	});
    // }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>

</div>
