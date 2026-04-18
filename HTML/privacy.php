<!-- create a privacy policy page for the website -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Privacy Policy | DevoteeVivah</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

        <style>
            :root {
                --primary-color: #2c3e50;
                --text-color: #444;
                --heading-color: #1a1a1a;
                --bg-color: #ffffff;
            }

            .main {
                font-family: 'Poppins', sans-serif;
                line-height: 1.6;
                color: var(--text-color);
                background-color: var(--bg-color);
                margin: 0;
                padding: 40px 20px;
                display: flex;
                justify-content: center;
            }

            .container {
                max-width: 800px;
                width: 100%;
            }

            h1,
            h2,
            h3 {
                color: var(--heading-color);
                font-weight: 600;
                /* Semibold */
                letter-spacing: -1px;
                margin-top: 1.5em;
            }

            h1 {
                font-size: 2.5rem;
                border-bottom: 2px solid #f0f0f0;
                padding-bottom: 10px;
                margin-top: 0;
            }

            p {
                font-weight: 400;
                /* Simple Poppins */
                letter-spacing: -1px;
                margin-bottom: 1.2em;
            }

            .effective-date {
                font-style: italic;
                color: #666;
                margin-bottom: 30px;
            }

            hr {
                border: 0;
                height: 1px;
                background: #eee;
                margin: 40px 0;
            }

            .contact-box {
                background: #f9f9f9;
                padding: 20px;
                border-radius: 8px;
                border-left: 4px solid var(--primary-color);
            }

            /* Responsive Adjustments */
            @media (max-width: 600px) {
                h1 {
                    font-size: 1.8rem;
                }

                body {
                    padding: 20px 15px;
                }
            }
        </style>
    </head>

    <body>
        <?php include "header.php"; ?>
        <section class="main">
            <div class="container">
                <header>
                    <h1>Privacy Policy</h1>
                    <p class="effective-date">Effective Date: April 10, 2026</p>
                </header>

                <section>
                    <p>Welcome to <strong>DevoteeVivah</strong>. Your privacy is of paramount importance to us. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you visit our website and use our matchmaking services tailored for the devotee community.</p>
                </section>

                <hr>

                <section>
                    <h2>1. Information We Collect</h2>
                    <p>To provide a personalized and spiritual matchmaking experience, we collect several types of information including your name, age, gender, and contact details. We also collect "Devotional Profiles" regarding your spiritual practices and temple affiliation.</p>
                </section>

                <section>
                    <h2>2. How We Use Your Information</h2>
                    <p>We use the information we collect to create and manage your account, suggest compatible matches based on spiritual criteria, and maintain a safe and secure environment by verifying user authenticity.</p>
                </section>

                <section>
                    <h2>3. Sharing Your Information</h2>
                    <p>We do <strong>not</strong> sell your personal data to third parties. Your information is shared only with other registered members to facilitate matchmaking or with trusted service providers who assist in hosting and security.</p>
                </section>

                <section>
                    <h2>4. Data Security</h2>
                    <p>We implement robust technical measures, including SSL/TLS encryption and strict access controls, to ensure your data remains protected against unauthorized access.</p>
                </section>

                <section>
                    <h2>5. Your Rights</h2>
                    <p>You have the right to access, edit, or delete your account at any time. You can manage your visibility settings through your profile dashboard.</p>
                </section>

                <hr>

                <section class="contact-box">
                    <h3>Contact Us</h3>
                    <p>If you have any questions or concerns about this Privacy Policy, please reach out to our privacy team:</p>
                    <p><strong>Email:</strong> info@devoteevivah.com</p>
                </section>
            </div>
        </section>
        <?php include "footer.php"; ?>

        <script>
            // Simple script to log when the policy is viewed (Optional/Demonstration)
            document.addEventListener('DOMContentLoaded', () => {
                console.log("Privacy Policy loaded for DevoteeVivah.");

                // Example: Smooth scroll to sections if needed in the future
                const headings = document.querySelectorAll('h2');
                headings.forEach(heading => {
                    heading.style.cursor = 'pointer';
                    heading.addEventListener('click', () => {
                        console.log(`User interested in: ${heading.innerText}`);
                    });
                });
            });
        </script>
    </body>

    </html>
</body>

</html>