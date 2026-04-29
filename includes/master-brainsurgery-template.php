<?php
// Master Template for General Brain Surgery Location Pages
// Usage: Define $state and $area before including this file
include_once __DIR__ . '/config.php';

$pageTitle = "Best Brain Surgery in " . $area . " | Top Neurosurgeon - Dr. Arun Saroha";
$pageDesc = "Looking for the best brain surgery in " . $area . "? Dr. Arun Saroha is a premier neurosurgeon specializing in complex brain tumor surgery, aneurysm clipping, and stroke care in " . $area . ".";

include __DIR__ . '/header.php';
?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #0f172a 45%, rgba(15, 23, 42, 0) 100%), url('<?php echo $root; ?>assets/images/brain_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #1e293b 0%, #020617 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">World-Class Brain Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Neurosurgical Excellence for Complex Brain Conditions</p>
        <p class="hero-subtext fade-in-up delay-1">Pioneering life-saving neurosurgery with robotic precision and advanced micro-navigation. Trust India's leading neurosurgeon for your care in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Request Appointment</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Surgical Portfolio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Clinical Content -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Neurosurgical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Expert Brain Surgery Solutions in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Brain surgery demands the highest level of precision, integration of technology, and surgical intuition. For patients in <?php echo $area; ?>, Dr. Arun Saroha offers comprehensive care for a wide spectrum of cranial conditions, ranging from benign tumors to complex vascular malformations. Our facility utilizes the latest Neuronavigation systems, which act like a "GPS for the brain," ensuring that every move is mapped with sub-millimeter accuracy.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">The decision to undergo brain surgery is life-changing. That's why residents of <?php echo $area; ?> choose Dr. Saroha, whose 25+ years of experience and 8,000+ successful surgeries provide the confidence needed for such critical procedures. We prioritize minimally invasive approaches whenever possible, reducing hospital stays and preserving vital cognitive functions.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Conditions We Treat</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Brain Tumors:</strong> Gliomas, Meningiomas, and Acoustic Neuromas.</li>
            <li style="margin-bottom: 12px;"><strong>Vascular Issues:</strong> Brain Aneurysms and Arteriovenous Malformations (AVMs).</li>
            <li style="margin-bottom: 12px;"><strong>Traumatic Brain Injury:</strong> Emergency decompression and hematoma removal.</li>
            <li style="margin-bottom: 12px;"><strong>Hydrocephalus:</strong> VP Shunt and Endoscopic Third Ventriculostomy (ETV).</li>
            <li style="margin-bottom: 12px;"><strong>Functional Issues:</strong> Trigeminal Neuralgia and Hemifacial Spasms.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Surgical Technologies</h3>
          <p style="margin-bottom: 15px;">Advanced tools for <?php echo $area; ?> patients:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Neuronavigation:</strong> Real-time 3D mapping of brain structures.</li>
            <li style="margin-bottom: 12px;"><strong>Robotic Assistance:</strong> Enhancing manual dexterity for delicate maneuvers.</li>
            <li style="margin-bottom: 12px;"><strong>Intraoperative MRI:</strong> Real-time confirmation of tumor removal.</li>
            <li style="margin-bottom: 12px;"><strong>Neuro-Monitoring:</strong> Continuously checking nerve pathways during surgery.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Recognition Section -->
  <section class="awards-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Professional Excellence</span>
        <h2>A Global Authority in Neurosurgery</h2>
      </div>
      <div class="awards-grid mt-4">
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <h3>Principal Director</h3>
          <p>Heading the Neurosciences unit at Max Super Speciality Hospital.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </div>
          <h3>Global Fellowship</h3>
          <p>Extensive international training and fellowships in Singapore and more.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Research Author</h3>
          <p>Published numerous papers in peer-reviewed global neurosurgery journals.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact/Booking -->
  <section id="contact" class="contact-section" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Expert Consultation</span>
        <h2>Consult the Best Brain Surgeon in India</h2>
        <p>Book your clinical evaluation for any brain surgery needs in <?php echo $area; ?>.</p>
      </div>
      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Dwarka (Delhi)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Gurugram (India)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="contact-form-wrapper">
          <form class="contact-form" action="#" method="POST">
            <div class="form-row">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your name" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Contact number" required>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Clinical History</label>
              <textarea id="message" name="message" rows="4" placeholder="Describe symptoms or upload MRI results for our team to review for <?php echo $area; ?> patients."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Consultation Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section" style="padding: 80px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Brain Surgery in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What types of brain surgery does Dr. Saroha perform?</h3>
          <p style="font-size: 0.95rem;">Dr. Saroha performs brain tumor resection, aneurysm clipping, AVM removal, VP shunt placement, endoscopic procedures, trauma decompression, and microvascular decompression for trigeminal neuralgia.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How is brain surgery performed at Max Hospital?</h3>
          <p style="font-size: 0.95rem;">Dr. Saroha uses neuronavigational planning, intraoperative MRI, and microsurgical techniques for precise tumor removal and vascular surgery. Minimally invasive approaches are used whenever possible for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is craniotomy surgery?</h3>
          <p style="font-size: 0.95rem;">Craniotomy involves temporarily removing a bone flap to access the brain. It is used for tumor removal, aneurysm clipping, and hematoma evacuation. The bone flap is replaced after surgery for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Is brain surgery always done under general anesthesia?</h3>
          <p style="font-size: 0.95rem;">Most brain surgeries require general anesthesia. However, some procedures like biopsy or burr hole drainage can be performed under local anesthesia with sedation. Dr. Saroha determines the safest approach for each case.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How long does brain surgery take?</h3>
          <p style="font-size: 0.95rem;">Duration varies by procedure complexity, ranging from 2 to 10 hours. Complex skull base surgeries and large tumor removals take longer. Dr. Saroha prioritizes precision and patient safety over speed.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the hospital stay after brain surgery?</h3>
          <p style="font-size: 0.95rem;">Most patients from <?php echo $area; ?> stay 5–10 days for monitoring and initial recovery. Complex cases may require longer stays in the ICU or step-down unit. Dr. Saroha's team provides detailed discharge planning.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Will brain surgery change my personality or memory?</h3>
          <p style="font-size: 0.95rem;">Temporary cognitive changes can occur after major brain surgery. Dr. Saroha uses intraoperative mapping and neuromonitoring to minimize risks to critical brain areas responsible for memory, speech, and motor function.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can I send my MRI scans for a brain surgery consultation?</h3>
          <p style="font-size: 0.95rem;">Yes. Share your MRI/CT/DSA scans via WhatsApp (+91 98187 78811) or email. Dr. Saroha reviews all reports and provides a detailed treatment plan before you travel to <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>
