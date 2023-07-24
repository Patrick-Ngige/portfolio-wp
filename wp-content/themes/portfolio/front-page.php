<?php get_header();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $nameError = "Please enter your name.";
    }


    if (empty($email)) {
        $emailError = "Please enter your email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
    }

    if (empty($message)) {
        $messageError = "Please enter your message.";
    }

    if (empty($nameError) && empty($emailError) && empty($messageError)) {


        $name = $email = $message = "";
    }
}
?>

<style>
    #home{
        padding: 3rem;
        gap:1
    }
    .home{
        display: flex; 
        flex-direction: row; 
        width: 100vw;
    }
    .home-desc{
        width: 50vw; 
        margin-top: 5rem; 
        margin-left:3rem;
        line-height: 1rem;
    }
    .home-desc h4{
        opacity: .8;
    }
    .home-desc a {
        background-color: #FF9B5D; 
        color: #FAFAFA; 
        border-radius: 5px; 
        text-decoration: none;
        margin-top:4px; 
        width: fit-content; 
        padding: 10px; 
        border: none; 
        font-weight: 600
    }
    .home-img{
        width: 40vw;
    }
    .home-img a {
        background-color: #FAFAFA;
        height: 60vh;
        border-radius:50%
    }
    .contact-us{
        display:flex;
        flex-direction:row;
        gap:1rem;
        justify-content:center;
    }
  
    #jobTitle{
        color: #FF9B5D;
        font-size:2.8rem;
    }
    #job-desc{
        margin-bottom:2rem;
    }
    .contact-btn {
        background-color: #F5F5F5;
        width: 10rem;
        height: 3.5rem;
        border: 1px solid #BCBCBC;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        text-decoration: none;
        color: #000;   
    }
    .email{
        width:13rem;
        padding-left: .8rem;
    }
    #text {
        opacity:0.6;
        padding-left: 1.5rem;
    }
    #text1 {
        opacity:0.6;
        padding-left: .1rem;
    }

    span {
        font-weight:600;
        padding-left: 3rem;
    }
    .contact-btn:hover{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        background-color: #FF9B5D;
        color: #FAFAFA;

    }
    .about-me{
        display:flex;
        flex-direction:row;
        margin-top:2rem;
        width:100vw;
        gap:0rem;
    }
   #img-div{
    width:40vw;
   }
   .about-me img{
    background-color:#FAFAFA;
    height:60vh;
    border-radius:50%
   }
   #about-me{
    width:38vw;
   }
   #skills{
    display:flex;
    gap:6rem;
   }
   #skills ul{
    height:5rem;
    flex:3;
    flex-wrap:wrap;
   }
  

    .projects:hover {
        box-shadow:
            1px 1px #53a7ea,
            2px 2px #53a7ea,
            3px 3px #53a7ea;
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
    }
</style>

<section id="home">
    <div class="home" >
        <div class="home-desc">
            <h4>Hi There!</h4>
            <h1 id="jobTitle" >I am a<span class="dynamicText"></span><span class="cursor">|</span></h1>
            <h4 id="job-desc">I make custom unique websites that are SEO friendly.</h4>
            <a href="#contact-me">Reach out </a>
        </div>
        <div class="home-img" >
            <img src="http://localhost/portfolio/wp-content/uploads/2023/06/me.png"
                 alt="my image">
        </div>
    </div>
</section>


<section style="padding:0 10rem">

    <!-- CONTACT US -->
    <section id="contact-us">
        <div class="contact-us">
            <!-- <button  > -->
                <a class="contact-btn email" href="#"><span>Email </span><br> <p><span id="text1"> wakemanjajr@gmail.com</span></p></a>
            <!-- </button> -->
            
                <a class="contact-btn" href="#"><span>Phone </span><br> <span id="text" >+254700165451</span></p></a>
            
                <a class="contact-btn" href="https://github.com/patrick-ngige"><span>GitHub </span><br> <span id="text"
                            >Patrick-Ngige</span></a>
            
                <a class="contact-btn" href="www.linkedin.com/in/patrick-ngige-4b772623b"><span>LinkedIn </span>
                    <br> <span id="text" >Patrick-Ngige</span></a>
        </div>
    </section>

    <!-- ABOUT ME -->
    <Section id="about-me">


        <div class="about-me" >
            <div id="img-div">
                <img src="http://localhost/portfolio/wp-content/uploads/2023/06/me.png"
                     alt="my photo">
            </div>
            <div id="about-me">
                <h4 style="color:#FF9B5D">Who am I?</h4>
                <h3>I am Patrick Ngige, a WordPress Developer and a Branding Manager.</h3>
                <p>I am a passionate and experienced WordPress Developer. I am all about designing, creating and
                    branding
                    your website to hit global standards both in tech and business fields. I combine my graphic design
                    skills and branding knowledge to develop eye-catching global standard websites. </p><br>
                <h4>Skill Set</h4>
                <div id="skills">
                    <div>
                        <ul>
                            <li>PHP</li>
                            <li>WordPress</li>
                            <li>SEO</li>
                            <li>Graphic Design</li>
                    </div>
                    <div>
                        <li>Javascript(React Framework)</li>
                        <li>CSS (Bootstrap & Tailwind)</li>
                        <li>Branding</li>
                        <li>REST API</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </Section>


    <!-- MY SERVICES -->
    <section id="my-services">
        <div style="margin-top:2rem;">
            <h4 style="color:#FF9B5D">My Services</h4>
            <div style="display:flex;gap:2rem;margin-left:7rem;margin-top:3rem">
                <div
                    style="width:25rem;height:15rem;background-color:#F5F5F5;box-shadow: rgba(99, 78, 99, 0.2) 0px 2px 8px 0px;border-radius:10px;padding:2rem">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/code.png"
                        style="width:3rem;height:3rem;" alt="">
                    <h5>Web Development</h5>
                    <p>Experience a dream custom website that is going to blow your mind away.</p>
                </div>
                <div
                    style="width:25rem;height:15rem;background-color:#F5F5F5;box-shadow: rgba(99, 78, 99, 0.2) 0px 2px 8px 0px;border-radius:10px;padding:2rem">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/brand.png"
                        style="width:3rem;height:3rem;" alt="">
                    <h5>Branding</h5>
                    <p>Let’s make your website or business stand out from your competitors</p>
                </div>
                <div
                    style="width:25rem;height:15rem;background-color:#F5F5F5;box-shadow: rgba(99, 78, 99, 0.2) 0px 2px 8px 0px;border-radius:10px;padding:2rem">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/photoshop.png"
                        style="width:3rem;height:3rem;" alt="">
                    <h5>Graphic Design</h5>
                    <p>Art-design your idea with me into reality and win the hearts of your audience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MY PROJECTS -->
    <section id="projects">
        <div style="margin-top:2rem;">
            <h4 style="color:#FF9B5D">My Projects</h4>
            <a href="https://github.com/Patrick-Ngige/ContactManagementSystem" >
                <div style="display:flex;gap:2rem;margin-left:7rem;margin-top:3rem;display:flex;flex-wrap:wrap">
                    <div class="projects">
                        <img src="http://localhost/portfolio/wp-content/uploads/2023/06/code.png"
                             alt="">
                        <h3>Contact System</h3>
                        <p>Experience a dream custom website that is going to blow your mind away.</p>
                    </div>
            </a>
            <a href="https://github.com/Patrick-Ngige/ticketing-system" >
                <div class="projects">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/brand.png"
                         alt="">
                    <h3>Ticketing System</h3>
                    <p>This is a ticketing system used to book tickets of upcoming events</p>
                </div>
            </a>

            <a href="https://github.com/Patrick-Ngige/may-project" >
                <div class="projects">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/seo.png"
                         alt="">
                    <h3>Project System</h3>
                    <p>A system used to create and assign members projects </p>
                </div>
            </a>

            <a href="https://github.com/brianMunyao/ShopIT" >
                <div class="projects">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/code.png"
                         alt="">
                    <h3>ShopIT</h3>
                    <p>This is an e-commerce site called Shopit that is developed useing custom theme and custom plugin
                    </p>
                </div>
            </a>

            <a href="https://github.com/1Eve/event-management-system" >
                <div class="projects">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/code.png"
                         alt="">
                    <h3>Event Management</h3>
                    <p>An event management system use to create events using custom theme and plugins.</p>
                </div>
            </a>

            <a href="https://github.com/Patrick-Ngige/Easy-manage" >
                <div class="projects">
                    <img src="http://localhost/portfolio/wp-content/uploads/2023/06/program-manager-dashboard.png"
                         alt="">
                    <h3>Easy-manage</h3>
                    <p>a management application that helps Trainers keep track of all their trainees and assign projects
                        to them. </p>
                </div>
            </a>
        </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact-me">
        <div style="margin-top:2rem;width:100vw">
            <h3 style="color:#FF9B5D">Contact Form</h3>
            <div
                style="width:60rem;display:flex;justify-content:center;align-items:center;flex-direction:column;background-color:#F5F5F5;padding:1rem">
                <form style="width:50vw">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">Name:</label>
                        <input type="text" id="form4Example1" class="form-control"placeholder="Enter your name"
                            value="<?php echo isset($name) ? $name : ''; ?>" />
                        <span class="error">
                            <?php echo isset($nameError) ? $nameError : ''; ?>
                        </span>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example2">Email address:</label>
                        <input type="email" id="form4Example2" class="form-control"placeholder="Enter your email"
                            value="<?php echo isset($email) ? $email : ''; ?>" />
                        <span class="error">
                            <?php echo isset($emailError) ? $emailError : ''; ?>
                        </span>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Message:</label>
                        <textarea name="message" placeholder="Please enter the message you want to pass across" rows="4"
                            cols="85"><?php echo isset($message) ? $message : ''; ?></textarea>
                        <span class="error">
                            <?php echo isset($messageError) ? $messageError : ''; ?>
                        </span>

                    </div>
                    <button type="submit" class="btn btn-block mb-4 w-100"
                        style="background-color:#FF9B5D;color:#FAFAFA;font-weight:600">Send</button>
                </form>
            </div>

        </div>
    </section>
</section>


<style>
    .projects{
        width:11rem;
        height:12rem;
        background-color:#F5F5F5;
        box-shadow: rgba(99, 78, 99, 0.2) 0px 2px 8px 0px;
        border-radius:10px;
        padding:2rem
    }
    #projects a{
        text-decoration:none;
        color:#000;

    }
    #projects img{
        width:6rem;height:3rem;

    }
    #projects h4{
        line-height: normal;
        font-weight: 500;
    }
    .dynamicText {
        display: inline-block;
        padding-left: .8rem;
    }

    .cursor {
        display: inline-block;
        animation: blinkCursor 0.5s infinite;
    }

    @keyframes blinkCursor {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>

<div>
    <span class="dynamicText"></span><span class="cursor">|</span>
</div>

<script>
    const jobTitles = ['WordPress Developer', 'Brand Manager', 'Graphic Designer', 'SEO Manager'];
    let currentJobTitleIndex = 0;
    let currentText = '';
    let isDeleting = false;
    let typingSpeed = 100;
    let delayAfterTyping = 3000;
    let delayBeforeDeleting = 3000;

    const dynamicText = document.querySelector('.dynamicText');
    const cursor = document.querySelector('.cursor');

    function type() {
        const currentTitle = jobTitles[currentJobTitleIndex];
        if (isDeleting) {
            currentText = currentTitle.substring(0, currentText.length - 1);
            typingSpeed = 50;
           
        } else {
            currentText = currentTitle.substring(0, currentText.length + 1);
            typingSpeed = 100;
        }
        dynamicText.textContent = currentText;

        if (!isDeleting && currentText === currentTitle) {
            isDeleting = true;
            delayAfterTyping = 3000;
            delayBeforeDeleting = 3000;
        } else if (isDeleting && currentText === '') {
            isDeleting = false;
            currentJobTitleIndex = (currentJobTitleIndex + 1) % jobTitles.length;
            delayAfterTyping = 3000;
        }

        setTimeout(type, typingSpeed);

        if (isDeleting && currentText === '') {
            setTimeout(type, delayAfterTyping);
        }
    }

    setTimeout(type, delayAfterTyping);
</script>




