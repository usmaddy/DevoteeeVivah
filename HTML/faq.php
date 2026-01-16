<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ Section</title>
  <link rel="stylesheet" href="../CSS/faq.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poltawski+Nowy:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }


  </style>
</head>

<body>
  <section class="faq_section">
    <div class="faq-container">
      <div class="faq-header">
        <small style="color: #3b82f6; font-weight: 500;">FAQ</small>
        <h2 style="font-weight: 500;">Frequently Asked Questions</h2>
        <p>We compiled a list of answers to address your most pressing questions regarding our Services.</p>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question">What is DevoteeVivah?</div>
          <div class="faq-answer">DevoteeVivah is a matrimony platform designed exclusively for devotees, helping them find life partners who share similar spiritual values, beliefs, and devotion.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Who can join DevoteeVivah?</div>
          <div class="faq-answer">Anyone who follows a devotional path and is genuinely looking for a marriage alliance can join, regardless of location. DevoteeVivah connects devotees worldwide.</div>
        </div>
        <div class="faq-item active">
          <div class="faq-question">How is DevoteeVivah different from other matrimony apps?</div>
          <div class="faq-answer">Unlike general matrimony platforms, DevoteeVivah focuses on spiritual compatibility, devotional lifestyle, and value-based matching rather than just basic demographics.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Can I search profiles based on my preferences?</div>
          <div class="faq-answer">Yes, DevoteeVivah offers preference-based search allowing you to filter profiles by devotion type, location, age, lifestyle, and other important criteria.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Does DevoteeVivah provide chat and communication features?</div>
          <div class="faq-answer">Yes, verified users can securely chat within the app, ensuring safe and meaningful communication between interested matches.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Is my personal information safe on DevoteeVivah?</div>
          <div class="faq-answer">Absolutely. DevoteeVivah uses secure data protection measures to keep your personal information private and accessible only to authorized users.</div>
        </div>
      </div>
    </div>
  </section>

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
</body>

</html>