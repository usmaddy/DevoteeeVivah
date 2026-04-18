<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .section_one {
        width: 100%;
        min-height: 100vh; /* Changed from 300vh to accommodate content length dynamically */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding-bottom: 50px;
    }

    .privacy_policy {
        width: 95%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .privacy_policy_container {
        width: 100%;
        height: 20vh; /* Standardizing header height */
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    .privacy_policy_container h1 {
        font-size: 30px;
        font-weight: 600;
        letter-spacing: -1px;
        margin: 0;
    }

    .privacy_policy_content {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin-bottom: 30px;
    }

    .privacy_policy_content p {
        letter-spacing: -1px;
    }

    .privacy_policy_content_points {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin-bottom: 25px;
    }

    .privacy_policy_content_points h2 {
        font-size: 20px;
        font-weight: 600;
        color: #000000;
        letter-spacing: -1px;
        margin-bottom: 10px;
    }

    .privacy_policy_content_points p {
        font-size: 16px;
        font-weight: 400;
        color: #000000;
        margin: 5px 0;
    }

    .privacy_policy_content_points ul {
        list-style: none;
        padding: 0;
        margin: 10px 0;
    }

    .privacy_policy_content_points ul li {
        font-size: 14px;
        font-weight: 400;
        color: #000000;
        margin-bottom: 8px;
        display: flex;
        align-items: flex-start;
    }

    /* marker */
    .privacy_policy_content_points ul li::before {
        content: '•';
        color: #000000;
        font-size: 20px;
        font-weight: 600;
        margin-right: 10px;
        line-height: 18px;
    }
</style>

<body>
    <?php include "header.php"; ?>
    <section class="section_one">
        <section class="privacy_policy">
            <div class="privacy_policy_container">
                <h1>Terms of Service</h1>
            </div>
            
            <div class="privacy_policy_content">
                <p style="font-size: 17px; font-weight: 500;">Last updated: 10/04/2026</p>
                <p style="font-size: 15px;">Welcome to Devoteevivah.com. Your privacy is of paramount importance to us. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you visit our platform and use our matchmaking services tailored for the devotee community.</p>
            </div>

            <div class="privacy_policy_content_points">
                <h2>1. Information We Collect</h2>
                <p>To provide a personalized and spiritual matchmaking experience, we collect:</p>
                <ul>
                    <li>Personal Data: Name, age, gender, date of birth, and contact details (email and phone number).</li>
                    <li>Devotional Profiles: Information regarding your spiritual practices, initiation status, and temple affiliation.</li>
                    <li>Media Content: Photos and videos you choose to upload to your profile.</li>
                    <li>Technical Data: IP address, browser type, and usage patterns collected via cookies.</li>
                </ul>
            </div>

            <div class="privacy_policy_content_points">
                <h2>2. How We Use Your Information</h2>
                <p>We use the information we collect to:</p>
                <ul>
                    <li>Create and manage your account.</li>
                    <li>Suggest compatible matches based on spiritual and personal criteria.</li>
                    <li>Communicate with you regarding account updates and community news.</li>
                    <li>Maintain a safe and secure environment by verifying user authenticity.</li>
                </ul>
            </div>

            <div class="privacy_policy_content_points">
                <h2>3. Sharing Your Information</h2>
                <p>We do NOT sell your personal data to third parties. Your information is shared only in these contexts:</p>
                <ul>
                    <li>With Other Users: Your profile details (excluding private contact info) are visible to registered members.</li>
                    <li>Service Providers: Trusted vendors who assist in hosting, analytics, and security.</li>
                    <li>Legal Requirements: If required by law or to protect the safety of our community.</li>
                </ul>
            </div>

            <div class="privacy_policy_content_points">
                <h2>4. Data Security</h2>
                <p>We implement robust technical and organizational measures to protect your data:</p>
                <ul>
                    <li>Encryption: Using SSL/TLS encryption for all data transmission.</li>
                    <li>Access Control: Limiting data access to authorized personnel only.</li>
                    <li>Regular Audits: Periodically reviewing our security practices and database safety.</li>
                </ul>
            </div>

            <div class="privacy_policy_content_points">
                <h2>5. Your Rights and Choices</h2>
                <ul>
                    <li>Access & Edit: You can update your profile information at any time via your dashboard.</li>
                    <li>Account Deletion: You may request to delete your account, which removes your profile from public view.</li>
                    <li>Communication: You can opt-out of marketing emails via the "Unsubscribe" link.</li>
                </ul>
            </div>

            <div class="privacy_policy_content_points">
                <h2>6. Cookies</h2>
                <p>We use cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings, though some features of the site may not function properly as a result.</p>
            </div>

            <div class="privacy_policy_content_points">
                <h2>7. Contact Information</h2>
                <ul>
                    <li>If you have any questions regarding this policy, please contact us at:</li>
                    <li>Email: info@devoteevivah.com</li>
                </ul>
            </div>

        </section>
    </section>
    <?php include "footer.php"; ?>
</body>

</html>