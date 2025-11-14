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
          <div class="faq-question">How can I contact customer support?</div>
          <div class="faq-answer">You can contact customer support via email, live chat, or our toll-free number
            available on our contact page.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">How can I contact customer support?</div>
          <div class="faq-answer">You can contact customer support via email, live chat, or our toll-free number
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
          <div class="faq-answer">We support credit/debit cards, bank transfers, mobile wallets, and international
            payment gateways.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Can your software integrate with existing systems?</div>
          <div class="faq-answer">Yes, our software is built to be modular and easily integrates with most enterprise
            systems through secure APIs.</div>
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