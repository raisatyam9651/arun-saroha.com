<?php 
  $pageTitle = "Contact Dr. Arun Saroha | Book Appointment with Best Neurosurgeon";
  $pageDesc = "Get in touch with Dr. Arun Saroha at Max Hospital Dwarka or Gurgaon. Book your appointment for brain tumor, spine surgery, or second opinions today.";
  include 'includes/header.php'; 
?>

  <!-- Contact Hero -->
  <section class="hero secondary-hero">
    <div class="container text-center">
      <h1 class="fade-in-up">Get in <span class="text-gradient">Touch</span></h1>
      <p class="hero-tagline fade-in-up">Expert Consultation for Brain & Spine Health</p>
    </div>
  </section>

  <!-- Contact Methods -->
  <section class="contact-info-section py-8">
    <div class="container">
      <div class="contact-grid-info" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 60px;">
        <div class="contact-method-card text-center p-5 bg-light rounded-20" style="border: 1px solid rgba(0,0,0,0.05);">
          <div class="icon mb-3" style="font-size: 2.5rem;">📞</div>
          <h4>Phone</h4>
          <p>Direct Appointment Line</p>
          <a href="tel:+919818778811" class="text-primary h5" style="text-decoration: none; font-weight: 700;">+91 98187 78811</a>
        </div>
        <div class="contact-method-card text-center p-5 bg-light rounded-20" style="border: 1px solid rgba(0,0,0,0.05);">
          <div class="icon mb-3" style="font-size: 2.5rem;">✉️</div>
          <h4>Email</h4>
          <p>Medical Reports & Inquiries</p>
          <a href="mailto:info@drarunsaroha.com" class="text-primary h5" style="text-decoration: none; font-weight: 700;">info@drarunsaroha.com</a>
        </div>
        <div class="contact-method-card text-center p-5 bg-light rounded-20" style="border: 1px solid rgba(0,0,0,0.05);">
          <div class="icon mb-3" style="font-size: 2.5rem;">🏥</div>
          <h4>Hospitals</h4>
          <p>Max Hospital (Delhi & Gurgaon)</p>
          <p class="h6">Principal Director - Neurosurgery</p>
        </div>
      </div>

      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Dwarka (Delhi)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Max Hospital Dwarka Location"></iframe>
          </div>
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Gurugram (India)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Max Hospital Gurugram Location"></iframe>
          </div>
        </div>
        <div class="contact-form-wrapper">
          <form class="contact-form" action="#" method="POST">
             <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
             </div>
             <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your mobile number">
             </div>
             <div class="form-group">
                <label for="message">How can Dr. Saroha help you?</label>
                <textarea id="message" name="message" rows="4" placeholder="Briefly describe your condition (e.g. Back pain, Brain tumor, etc.)"></textarea>
             </div>
             <button type="submit" class="btn btn-primary btn-large">Request Consultation</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>

  <!-- FAQ Section -->
  <section class="faq-section py-8">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">FAQs</span>
        <h2>Frequently Asked Questions – Contact & Appointments</h2>
      </div>
      <div class="faq-grid mt-4">
        <div class="faq-item">
          <h3>How quickly will I get a response after submitting the form?</h3>
          <p>Our team responds to all consultation requests within 24 hours during business days. For urgent matters, call us directly at +91 98187 78811 for immediate assistance.</p>
        </div>
        <div class="faq-item">
          <h3>What information should I include in my consultation request?</h3>
          <p>Please provide your full name, phone number, a brief description of your symptoms or condition (e.g., back pain, brain tumor, dizziness), and any previous scan reports or diagnoses you may have received.</p>
        </div>
        <div class="faq-item">
          <h3>Can I book an emergency appointment?</h3>
          <p>Yes. For emergency neurological or spinal conditions, call +91 98187 78811 immediately. Dr. Saroha's team is available 24/7 for urgent consultations at Max Hospital.</p>
        </div>
        <div class="faq-item">
          <h3>What hospitals can I visit Dr. Saroha at?</h3>
          <p>Dr. Saroha consults at Max Super Speciality Hospital, Dwarka (Delhi) and Max Hospital, Gurugram. Both locations offer full diagnostic, surgical, and post-operative care facilities.</p>
        </div>
        <div class="faq-item">
          <h3>Is tele-consultation available?</h3>
          <p>Yes. Dr. Saroha offers video consultations for patients who cannot visit in person. Submit the form on this page or call us to schedule a remote consultation at your convenience.</p>
        </div>
        <div class="faq-item">
          <h3>What is the cost of an in-person consultation?</h3>
          <p>Consultation fees depend on the appointment type. Priority consultations may have different pricing. Contact our team at +91 98187 78811 or via the form for detailed fee information.</p>
        </div>
        <div class="faq-item">
          <h3>What should I bring to my first appointment?</h3>
          <p>Bring all recent MRI/CT scans on a CD, a list of current medications, any previous surgical reports, and your insurance or identification documents if applicable.</p>
        </div>
        <div class="faq-item">
          <h3>Can a family member accompany me to the consultation?</h3>
          <p>Absolutely. We welcome family members at consultations. For international patients, our team can assist with arranging accommodation for accompanying family members near the hospital.</p>
        </div>
      </div>
    </div>
  </section>

