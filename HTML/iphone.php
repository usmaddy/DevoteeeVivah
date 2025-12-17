<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | DevoteeVivaah</title>
    <link rel="icon" type="image/x-icon" href="../Resources/Images/favicon.ico">


    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/faq.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://unpkg.com/feather-icons" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poltawski+Nowy:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .coming_soon {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image: url("../Resources/Images/peacock_feather.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        overflow: hidden;
    }

    .coming_soon_h1 {
        font-family: poppins;
        height: 30%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .coming_soon_h1 h1 {
        font-size: 78px;
        width: 50%;
        font-weight: 500;
        line-height: 68px;
        letter-spacing: -4px;
    }

    .coming_soon_p {
        text-align: center;
    }

    .coming_soon_subscribe {
        /* font-size: 78px; */
        width: 100%;
        font-weight: 500;
        /* line-height: 68px; */
        display: flex;
        /* letter-spacing: -4px; */
        justify-content: center;
        height: 10%;
        align-items: center;
    }

    .form_coming_soon {
        width: 100%;
        font-weight: 500;
        /* line-height: 68px; */
        display: flex;
        /* letter-spacing: -4px; */
        justify-content: center;
        height: 100%;
        align-items: center;
        gap: 10px;
        font-family: poppins;
    }


    .btn_subscribe_coming_soon {
        height: 100%;
        width: 8%;
        border: none;
        border-radius: 50px;
        font-family: 'Poppins';
        cursor: pointer;
        background-color: black;
        color: white;
        transition: 0.3s ease-in-out;
    }

    .btn_subscribe_coming_soon:hover {
        background-color: rgba(0, 0, 0, 0.644);
        transition: 0.3s ease-in-out;
    }

    .input_email_coming_soon {
        font-size: 18px;
        width: 30%;
        font-family: poppins;
        font-weight: 500;
        /* line-height: 68px; */
        display: flex;
        /* letter-spacing: -4px; */
        justify-content: center;
        height: 100%;
        align-items: center;
        border-radius: 50px;
        background-color: rgba(240, 248, 255, 0);
        border: 1px solid black;
        padding: 0 35px;
        min-width: 250px;
        max-width: 350px;
    }

    .input_email_coming_soon:focus {
        outline: none;
    }

    @media (max-width: 500px) {
        .form_coming_soon {
            flex-direction: column;
        }

        .coming_soon_h1 {
            font-family: poppins;
            height: 17%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .coming_soon_h1 h1 {
            font-size: 50px;
            width: 100%;
            font-weight: 500;
            line-height: 48px;
            letter-spacing: -4px;
        }

        .input_email_coming_soon {
            font-size: 18px;
            width: 80%;
            font-family: poppins;
            font-weight: 500;
            /* line-height: 68px; */
            display: flex;
            /* letter-spacing: -4px; */
            justify-content: center;
            height: 40%;
            align-items: center;
            border-radius: 50px;
            background-color: rgba(240, 248, 255, 0);
            border: 1px solid black;
            padding: 0 35px;
            min-width: 250px;
            max-width: 350px;
        }

        .btn_subscribe_coming_soon {
            height: 35%;
            width: 50%;
            border: none;
            border-radius: 50px;
            font-family: 'Poppins';
            cursor: pointer;
            background-color: black;
            color: white;
            transition: 0.3s ease-in-out;
        }

        .coming_soon_subscribe {
            /* font-size: 78px; */
            width: 100%;
            font-weight: 500;
            /* line-height: 68px; */
            display: flex;
            /* letter-spacing: -4px; */
            justify-content: center;
            height: 25%;
            align-items: center;
        }

        .info_with_images {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            align-items: center;
        }

        .images_info {
            width: 99%;
            height: 58%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .info_of_images {
            width: 90%;
            height: 62%;
            font-family: 'Poppins';
        }
    }

    .info_with_images {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: row;
        align-items: center;
    }

    .images_info {
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .images_info img {
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .info_of_images {
        width: 45%;
        height: 62%;
        font-family: 'Poppins';
    }

    .info_of_images h1 {
        font-weight: 600;
    }

    .info_of_images p {
        font-size: 14px;
    }
</style>

<body>
    <?php include "header.php"; ?>
    <section class="coming_soon">
        <div class="coming_soon_h1">
            <h1>We are Almost Ready to Launch</h1>
        </div>
        <div class="coming_soon_subscribe">
            <form action="mailto:info@devoteevivah.com?subject=Subcribe to DevoteeVivah Iphone&body=I have to subscribe as an iPhone user" method="get" class="form_coming_soon" enctype="text/plain">
                <input type="email" placeholder="Please Enter your Email" name="email" required
                    class="input_email_coming_soon">
                <input type="submit" value="Subscribe" class="btn_subscribe_coming_soon">
            </form>
        </div>
    </section>
    <!-- <section class="faq_section">
        <div class="faq-container">
            <div class="faq-header">
                <small style="color: #3b82f6; font-weight: 500;">FAQ</small>
                <h2 style="font-weight: 500;">Frequently Asked Questions</h2>
                <p>We compiled a list of answers to address your most pressing questions regarding our Services.</p>
            </div>
            <div class="faq-list">

                <div class="faq-item">
                    <div class="faq-question">How can I contact customer support?</div>
                    <div class="faq-answer">You can contact customer support via email, live chat, or our toll-free
                        number
                        available on our contact page.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How can I contact customer support?</div>
                    <div class="faq-answer">You can contact customer support via email, live chat, or our toll-free
                        number
                        available on our contact page.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How can I contact customer support?</div>
                    <div class="faq-answer">You can contact customer support via email, live chat, or our toll-free
                        number
                        available on our contact page.</div>
                </div>
                <div class="faq-item active">
                    <div class="faq-question">What services do you offer?</div>
                    <div class="faq-answer">We provide a range of services, including digital banking solutions, payment
                        processing, risk management, and compliance tools.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How secure are your digital banking solutions?</div>
                    <div class="faq-answer">Our digital banking solutions are built with state-of-the-art encryption and
                        multi-factor authentication to ensure complete data protection.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What types of payment methods do you support?</div>
                    <div class="faq-answer">We support credit/debit cards, bank transfers, mobile wallets, and
                        international
                        payment gateways.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can your software integrate with existing systems?</div>
                    <div class="faq-answer">Yes, our software is built to be modular and easily integrates with most
                        enterprise
                        systems through secure APIs.</div>
                </div>
            </div>
        </div>
    </section> -->
    <?php include "faq.php"; ?>
    <?php include "footer.php"; ?>
</body>
<script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
</script>

</html>