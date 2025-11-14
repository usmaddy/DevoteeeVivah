<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us | DevoteeVivaah</title>
    <link rel="icon" type="image/x-icon" href="../Resources/Images/favicon.ico">


    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/contactus.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/main.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet" />
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
    body {
        font-family: 'Poppins', sans-serif;
    }

    .letsconnect {
        font-size: 4.25rem;
        font-weight: 400;
        letter-spacing: -3px;
        color: #ffffff;
    }
</style>

<body>
    <?php include "header.php" ?>

    <section class="bg-[#03040f] text-white min-h-screen flex items-center justify-center p-6 section_one">
        <main class="max-w-7xl w-full" style="height: 100%;">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10" style="height: 100%;">
                <section class="img_side_to_contact_us">
                </section>

                <section class="lg:flex-1 max-w-lg">
                    <span
                        class="inline-block border border-[#4ade80] rounded-full px-3 py-1 text-[#4ade80] text-xs font-semibold mb-6">
                        CONTACT US
                    </span>
                    <h1 class="text-white font-semibold leading-snug mb-8 letsconnect">
                        Let's Connect
                    </h1>
                    <form onsubmit="sendEmail(); return false;" method="post" class="space-y-8 text-white">
                        <div>
                            <label class="block text-xs font-semibold mb-1" for="fullname">
                                Full Name
                                <span class="text-[#ef4444]">
                                    *
                                </span>
                            </label>
                            <input
                                class="w-full bg-transparent border-b border-gray-600 text-sm placeholder-gray-500 focus:outline-none focus:border-[#4ade80] py-1"
                                id="fullname" placeholder="Name" type="text" name="name" />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold mb-1" for="email">
                                Your Email
                                <span class="text-[#ef4444]">
                                    *
                                </span>
                            </label>
                            <input
                                class="w-full bg-transparent border-b border-gray-600 text-sm placeholder-gray-500 focus:outline-none focus:border-[#4ade80] py-1"
                                id="email" placeholder="Email" type="email" name="email" />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold mb-1" for="message">
                                Message
                                <span class="text-[#ef4444]">
                                    *
                                </span>
                            </label>
                            <textarea
                                class="w-full bg-transparent border-b border-gray-600 text-sm placeholder-gray-500 focus:outline-none focus:border-[#4ade80] py-1 resize-none"
                                id="message" placeholder="Leave us a message" rows="3" name="message"></textarea>
                        </div>
                        <button
                            class="inline-flex items-center bg-[#ffffff] hover:bg-[#ffffff] text-black text-xs font-semibold rounded-full px-5 py-2"
                            type="submit" style="padding: 20px 40px;font-weight: 500;">
                            Send Message
                            <i class="fas fa-paper-plane ml-2">
                            </i>
                        </button>
                    </form>
                </section>
            </div>
        </main>
    </section>
    <script>
        function sendEmail() {
            const name = document.getElementById("fullname").value;
            const email = document.getElementById("email").value;
            const msg = document.getElementById("message").value;

            // Format the body text
            const body =
                `Name: ${name}
                 Email: ${email}
                 Message:${msg}`;

            // Your email address
            const toEmail = "sainaik447@gmail.com";

            // Gmail compose link
            const gmailURL = `https://mail.google.com/mail/?view=cm&to=${encodeURIComponent("info@devoteevivah.com")}&su=${encodeURIComponent("New Contact Request")}&body=${encodeURIComponent(body)}`;

            window.open(gmailURL, "_blank");
        }
    </script>
    <section class="gap" style="width: 100%;height:8vh;"></section>
    <?php include "faq.php" ?>
    <?php include "footer.php" ?>
</body>

</html>