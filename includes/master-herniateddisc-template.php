<?php
// Master Template for Herniated Disc Surgery Location Pages
// Usage: Define $state and $area before including this file
include_once __DIR__ . '/config.php';

$pageTitle = "Best Herniated Disc Surgery in " . $area . " | Slip Disc Treatment - Dr. Arun Saroha";
$pageDesc = "Suffering from a slip disc? Get the best herniated disc surgery in " . $area . " with Dr. Arun Saroha. Expert in minimally invasive microdiscectomy for sciatica and nerve relief in " . $area . ".";

include __DIR__ . '/header.php'; 
?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('<?php echo $root; ?>assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Expert Herniated Disc Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Advanced Sciatica & Slip Disc Relief by Dr. Arun Saroha</p>
        <p class="hero-subtext fade-in-up delay-1">Relieving nerve compression with precision microdiscectomy and ultra-minimally invasive techniques. Experience India's leading slip disc care in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Request Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Learn About Procedures</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Clinical Content -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Condition Overview</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Managing Herniated Discs in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">A herniated disc (commonly known as a slip disc) occurs when the soft, jelly-like center of a spinal disc pushes through a tear in the tougher exterior casing. For patients in <?php echo $area; ?>, this often manifests as sharp, shooting pain down the leg (sciatica) or arm, accompanied by numbness or weakness. Dr. Arun Saroha provides a definitive, micro-surgical approach to treating these conditions, ensuring that nerve health is restored with minimal disruption to surrounding tissues.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">While many clinics offer general pain management, permanent relief from a herniated disc in <?php echo $area; ?> requires a clinical expert who understands the nuances of neuro-anatomy. Dr. Saroha's approach focuses on decompressing the nerve root while preserving the maximum amount of natural disc material. This precision-driven philosophy is why patients from across <?php echo $area; ?> trust us for their spinal health.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Classic Symptoms</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Sciatica:</strong> Radiating pain that starts in the lower back and travels down the leg.</li>
            <li style="margin-bottom: 12px;"><strong>Numbness:</strong> A "pins and needles" sensation in the part of the body served by the affected nerves.</li>
            <li style="margin-bottom: 12px;"><strong>Weakness:</strong> Muscles served by the affected nerves tend to weaken, causing stumbling or inability to lift items.</li>
            <li style="margin-bottom: 12px;"><strong>Localize Pain:</strong> Sharp pain in the lower back (lumbar) or neck (cervical) when moving.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Why Discs Herniate?</h3>
          <p style="margin-bottom: 15px;">Understanding the risk factors for patients in <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Age-Related Wear:</strong> Natural degeneration where discs lose water content and become less flexible.</li>
            <li style="margin-bottom: 12px;"><strong>Lifting Injuries:</strong> Using back muscles instead of leg muscles to lift heavy objects.</li>
            <li style="margin-bottom: 12px;"><strong>Repetitive Stress:</strong> Jobs that require frequent lifting, pulling, or twisting for residents of <?php echo $area; ?>.</li>
            <li style="margin-bottom: 12px;"><strong>Traumatic Events:</strong> Sudden falls or impacts to the back.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Advanced Microdiscectomy in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">For cases where conservative therapy fails, Dr. Saroha offers the most advanced surgical solution: <strong>Microdiscectomy</strong>. This gold-standard procedure for <?php echo $area; ?> patients involves:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">15mm Incision</h4>
            <p style="font-size: 0.9rem;">Tiny incisions mean minimal muscle damage and smaller scars.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Micro-Precision</h4>
            <p style="font-size: 0.9rem;">Using high-powered microscopes to see nerves with extreme clarity.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Rapid Recovery</h4>
            <p style="font-size: 0.9rem;">Most patients from <?php echo $area; ?> return home within 24 hours of surgery.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recognition Section -->
  <section class="awards-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Neurosurgical Excellence</span>
        <h2>Trusted by Over 10,000+ Spine Patients</h2>
      </div>
      <div class="awards-grid mt-4">
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <h3>Best Neurosurgeon Award</h3>
          <p>National recognition for outstanding success in complex spinal interventions.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Spine Surgery Icon</h3>
          <p>Awarded for pioneering minimally invasive techniques for disc herniation.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>8,000+ Success Stories</h3>
          <p>A benchmark of trust and clinical excellence in brain and spine surgery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials-section bg-light">
    <div class="container">
      <div class="section-title text-center">
        <h2>Slip Disc Recovery Stories in <?php echo $area; ?></h2>
      </div>
      <div class="testimonials-grid mt-4">
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"The sciatica pain was unbearable. After Dr. Saroha's microdiscectomy, the leg pain vanished immediately. I'm grateful to have found the best disc surgeon in <?php echo $area; ?>."</p>
          <div class="testimonial-author">
            <strong>Karan Mehra</strong>
            <span>Recovered Patient</span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"Professional care from start to finish. I was worried about spine surgery, but the minimally invasive approach made recovery in <?php echo $area; ?> very smooth."</p>
          <div class="testimonial-author">
            <strong>Anita Yadav</strong>
            <span>Business Professional</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Education</span>
        <h2>FAQs about Herniated Discs in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can a herniated disc heal on its own?</h3>
          <p>Many mild cases can improve with rest, physical therapy, and medication. However, if the disc is severely compressing a nerve, surgery may be necessary for patients in <?php echo $area; ?> to prevent permanent nerve damage.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is microdiscectomy a major surgery?</h3>
          <p>It is considered a major procedure but performed using minimally invasive techniques. In <?php echo $area; ?>, we perform this through a tiny incision, allowing for a much faster recovery than traditional open surgery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get Expert Care</span>
        <h2>Book a Consultation in <?php echo $area; ?></h2>
        <p>Expert diagnostic and surgical planning for herniated disc patients.</p>
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
              <label for="condition">Specify Condition</label>
              <select id="condition" name="condition">
                <option value="herniated-disc" selected>Herniated / Slip Disc</option>
                <option value="sciatica">Sciatica Pain</option>
                <option value="neck-pain">Cervical Disc Issues</option>
                <option value="other">Other Spinal issues in <?php echo $area; ?></option>
              </select>
            </div>
            <div class="form-group">
              <textarea id="message" name="message" rows="4" placeholder="Describe your pain, numbness or MRI results in <?php echo $area; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Case for Review</button>
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
        <h2>Frequently Asked Questions about Slip Disc / Herniated Disc in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is a herniated or slipped disc?</h3>
          <p style="font-size: 0.95rem;">A herniated disc occurs when the soft jelly-like center of a spinal disc pushes through a tear in the outer ring. This can press on nearby nerves, causing pain, numbness, or weakness radiating down the arm or leg.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is microdiscectomy surgery?</h3>
          <p style="font-size: 0.95rem;">Microdiscectomy is the gold-standard surgery for herniated discs. Using a high-powered microscope and small incision, Dr. Saroha removes only the herniated fragment pressing on the nerve, relieving sciatica and leg pain.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How do I know if I need surgery for my slipped disc?</h3>
          <p style="font-size: 0.95rem;">Surgery is recommended when there is progressive weakness, significant pain unresponsive to 6–12 weeks of conservative treatment, or bowel/bladder dysfunction. Dr. Saroha reviews your MRI and symptoms to determine the best course for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Is minimally invasive surgery possible for herniated discs?</h3>
          <p style="font-size: 0.95rem;">Yes. Endoscopic discectomy uses an 8mm incision and a tiny camera to remove the herniated disc fragment. Benefits include less pain, faster recovery, and same-day discharge for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the difference between microdiscectomy and endoscopic discectomy?</h3>
          <p style="font-size: 0.95rem;">Microdiscectomy uses a microscope through a 2–3cm incision, while endoscopic discectomy uses a tube and camera through an 8mm incision. Both effectively remove the herniated fragment — the choice depends on your specific condition.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How long is recovery after slip disc surgery?</h3>
          <p style="font-size: 0.95rem;">Most patients are walking the same day and return to desk work within 1–2 weeks. Light activities resume in 4–6 weeks, with full recovery in 8–12 weeks for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can the disc herniate again after surgery?</h3>
          <p style="font-size: 0.95rem;">There is a small risk of recurrence (about 5–10%). Maintaining core strength through physical therapy significantly reduces this risk. Dr. Saroha's team provides a rehabilitation plan to protect your spine long-term.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Does insurance cover slip disc surgery?</h3>
          <p style="font-size: 0.95rem;">Most health insurance plans cover herniated disc surgery. Our team in <?php echo $area; ?> assists with insurance pre-authorization and can discuss payment options for international patients.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Internal Linking -->
  <section class="locations-linking bg-light" style="padding: 60px 0; border-top: 1px solid rgba(0,0,0,0.05);">
    <div class="container">
      <div class="section-title text-center" style="margin-bottom: 30px;">
        <span class="badge">Regional Access</span>
        <h2>Herniated Disc Treatment in <?php echo $state; ?></h2>
      </div>
      
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/herniated-disc/";
        $state_slug = strtolower(str_replace(' ', '-', $state));
        $city_dirs = glob(__DIR__ . '/../herniated-disc/'.$state_slug.'/*', GLOB_ONLYDIR);
        
        echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; color: white; font-weight: 600; font-size: 0.9rem;">Slip Disc Care in '.$state.'</a>';
        
        foreach($city_dirs as $dir) {
            $slug = basename($dir);
            $name = ucwords(str_replace('-', ' ', $slug));
            if($name != $area) {
                echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);">Slip Disc Surgeon in '.$name.'</a>';
            }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>
