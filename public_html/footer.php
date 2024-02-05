<footer>
<style>
    background-color: #222;
    color: #fff;
    padding: 40px 0;
}

.footerInfo {
    text-align: center;
}

.footerContainer {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

.footerItem {
    display: flex;
}

.mainTitle {
    margin-bottom: 15px;
}

h4 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

h4 span {
    border-bottom: 2px solid #fff;
}

.socialItem a {
    display: block;
    color: #fff;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 16px;
}

.socialLink i {
    font-size: 24px;
    margin-right: 10px;
}

.socialInfo:nth-child(2) h4 {
    color: #ffc107;
}


.socialInfo:nth-child(3) h4 {
    color: #e91e63;
}

.addressTitle {
    color: #ffc107;
    margin-top: 10px;
}

.callInfo {
    display: flex;
    align-items: center;
}

.callInfo h6 {
    margin-right: 5px;
}

.callInfo span {
    font-weight: bold;
}

/* Social Links */
.facebook {
    background-color: #3b5998; /* Facebook Blue */
}

.instagram {
    background-color: #e4405f; 
}

.twitter {
    background-color: #1da1f2;
}

.socialLink {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.socialLink:hover {
    background-color: #fff;
    color: #222;
    transition: background-color 0.3s, color 0.3s;
}
</style>
    <div class="footerInfo">
        <div class="footerContainer">
            <div class="footerItem">

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Follow Us <span></span></h4>
                    </div>
                    <div class="socialItem">
                        <div class="socialLink facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="socialLink instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="socialLink twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </div>

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Services <span></span></h4>
                    </div>
                    <div class="socialItem">
                    <a href="Login.php">Bus Ticket Booking</a>
                        <a href="#">Route Information</a>
                        <a href="#">Student Discounts</a>
                    </div>
                </div>

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Contact Information <span></span></h4>
                    </div>
                    <div class="socialItem">
                    <a href="#">Route UiTM Office</a>                        
                    <a href="#">Email: Route_UiTM@gmail.com</a>
                        <a href="#">Phone: (+60) 012 7686 7890</a>
  <a href="https://www.google.com/maps/place/UiTM+Machang/@5.7569976,102.2734988,15z/data=!4m6!3m5!1s0x31b68fe6f50d123f:0xaeb67217536d6442!8m2!3d5.7569976!4d102.2734988!16s%2Fg%2F122zq9mf?hl=en-GB&entry=ttu" target="_blank">Address: UiTM Kelantan, Kampung Belukar, 18500 Machang, Kelantan</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


