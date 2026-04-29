<?php
// Master Template for Spinal Stenosis Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Spinal Stenosis Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced Spinal Stenosis treatment and decompression surgery in " . $area . " by Dr. Arun Saroha. Expert relief for neurogenic claudication and leg pain in " . $area . ".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Modern Styling -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!-- Canonical Tag -->
    <link rel="canonical" href="https://www.drarunsaroha.com/spinal-stenosis/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/stenosis_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Spinal Stenosis Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Walk Without Pain & Restore Your Leg Strength</p>
        <p class="hero-subtext fade-in-up delay-1">Premium neurosurgical decompression for spinal canal narrowing. Dr. Arun Saroha specializes in minimally invasive relief for patients in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Clinical Overview</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Clinical Content (800+ Words for SEO & E-E-A-T) -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Clinical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Spinal Stenosis in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Spinal stenosis is a narrowing of the spaces within your spine, which can put pressure on the nerves that travel through the spine. For many patients in <?php echo $area; ?>, this condition manifests as a "heavy" feeling in the legs or pain that occurs specifically while walking—a clinical phenomenon known as neurogenic claudication. Dr. Arun Saroha specializes in advanced decompression techniques designed to create space and relieve this debilitating pressure.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Most people with spinal stenosis in <?php echo $area; ?> find that their pain subsides almost immediately when they lean forward or sit down. This is because leaning forward temporarily opens the spinal canal. At our center, our objective is to provide a permanent clinical solution through surgical decompression, allowing patients to walk unlimited distances without the need to stop and rest.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Key Symptoms We Treat</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Difficulty walking long distances due to leg pain or weakness.</li>
            <li style="margin-bottom: 12px;">Pain that improves significantly when leaning on a shopping cart or walker.</li>
            <li style="margin-bottom: 12px;">Numbness, "pins and needles," or coldness in the feet or legs.</li>
            <li style="margin-bottom: 12px;">Cramping in the calves after short periods of activity in <?php echo $area; ?> patients.</li>
            <li style="margin-bottom: 12px;">Loss of balance or a tendency to trip and fall (Neurological deficit).</li>
            <li style="margin-bottom: 12px;">Severe lower back pain that radiates into both legs simultaneously.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Anatomic Causes of Narrowing</h3>
          <p style="margin-bottom: 15px;">Multiple degenerative changes contribute to stenosis for patients in <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Ligamentum Flavum Hypertrophy:</strong> Thickening of ligaments that take up space in the canal.</li>
            <li style="margin-bottom: 12px;"><strong>Bone Spurs (Osteophytes):</strong> Overgrowth of bone into the nerve tunnels.</li>
            <li style="margin-bottom: 12px;"><strong>Bulging Discs:</strong> Discs pushing backward into the spinal canal.</li>
            <li style="margin-bottom: 12px;"><strong>Facet Joint Arthritis:</strong> Enlarged joints that compress the central and side channels.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Diagnostic Mapping in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Identifying the exact level and degree of stenosis is critical for a successful decompression. Our diagnostic suite for <?php echo $area; ?> residents includes:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Coronal MRI</h4>
            <p style="font-size: 0.9rem;">To visualize the "thecal sac" and determine where the nerves are being pinched.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Post myelogram CT</h4>
            <p style="font-size: 0.9rem;">Detailed imaging used for complex cases to see the exact flow of spinal fluid.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Dynamic Views</h4>
            <p style="font-size: 0.9rem;">Checking for abnormal movement (Spondylolisthesis) that often accompanies stenosis in <?php echo $area; ?>.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical Decompression & Recovery</h3>
        <p style="margin-bottom: 20px;">The definitive treatment for symptomatic spinal stenosis in <?php echo $area; ?> is a Laminectomy or Laminotomy. Dr. Saroha utilizes minimally invasive microsurgical techniques to remove the bone and ligament tissue that is compressing the nerves. Unlike older "open" methods, our microsurgical approach preserves the stabilizing muscles and ligaments of the back.</p>
        <p style="margin-bottom: 20px;">Patients from <?php echo $area; ?> often report an "instant" relief of their leg pain following the procedure. Recovery is focused on early mobilization; most patients are up and walking the same evening and can return home within 24–48 hours. By providing more room for the nerves to breathe, we restore your ability to walk, stand, and enjoy the beautiful sights of <?php echo $area; ?> without physical limitation.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for Stenosis) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Clinical Portfolio</span>
        <h2>Decompression Options for <?php echo $area; ?></h2>
        <p>Targeted neurosurgical interventions designed to open the spinal canal and restore nerve function.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Laminectomy -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 12h6"/></svg>
          </div>
          <h3>Microsurgical Laminectomy</h3>
          <p>The gold standard for central stenosis. Creating space by removing the posterior part of the vertebrae using a high-powered clinical microscope for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 2. Foraminotomy -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Posterior Foraminotomy</h3>
          <p>Specifically opening the exit tunnels where individual nerves are compressed. Ideal for relieving localized leg pain for <?php echo $area; ?> residents.</p>
        </div>

        <!-- 3. Over-the-Top -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h6"/><path d="M15 12h6"/><path d="M12 15V9"/><circle cx="12" cy="12" r="3"/></svg>
          </div>
          <h3>Over-the-Top Decompression</h3>
          <p>A sophisticated technique to decompress both sides of the spine through a single, tiny incision, preserving maximum stability for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 4. Lumbar Fusion -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M8 8h8"/><path d="M8 16h8"/></svg>
          </div>
          <h3>Decompression + Fusion</h3>
          <p>Necessary for <?php echo $area; ?> patients who have both stenosis and spinal instability (slippage), providing lasting structural integrity.</p>
        </div>

        <!-- 5. Endoscopic -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M22 12h-4"/><path d="M6 12H2"/></svg>
          </div>
          <h3>Endoscopic Decompression</h3>
          <p>The least invasive option, using a camera-enabled tube (8mm) to remove bone spurs and ligaments for certain <?php echo $area; ?> stenosis cases.</p>
        </div>

        <!-- 6. Non-Surgical -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Epidural Management</h3>
          <p>Targeted clinical injections into the spinal canal to reduce inflammation and provide temporary relief for patients in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Stenosis in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Why does my pain go away when I sit or lean forward?</h3>
          <p>Leaning forward (flexion) physically opens the spinal canal and nerve tunnels, providing more room for the nerves and immediate relief for patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is spinal stenosis just a normal part of aging?</h3>
          <p>While degenerative changes are common in <?php echo $area; ?> residents over 60, "clinical stenosis" that limits your ability to walk or function is not normal and should be treated.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is neurogenic claudication?</h3>
          <p>This is the medical term for the leg pain, numbness, or heaviness that occurs when walking due to nerve compression in the spine. It's the hallmark symptom of stenosis in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can stenosis lead to permanent paralysis?</h3>
          <p>Severe, untreated stenosis can lead to progressive nerve damage. In rare cases, it can cause "Cauda Equina Syndrome," a medical emergency requiring immediate surgery in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is a "microsurgical" decompression?</h3>
          <p>It's a surgery performed through a tiny incision using a high-powered microscope. This allows Dr. Saroha to see the nerves in <?php echo $area; ?> patients with incredible detail and safety.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long can I walk after surgery?</h3>
          <p>Our goal is to restore unlimited walking tolerance. Most patients in <?php echo $area; ?> find they can walk much further within just a few weeks of the decompression surgery.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is a laminectomy a major surgery?</h3>
          <p>While it is a spine surgery, modern minimally invasive techniques have made it a very efficient procedure with rapid recovery for our <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you treat cervical stenosis?</h3>
          <p>Yes. Stenosis can occur in the neck (cervical) as well as the lower back (lumbar). We provide specialized decompression for both types for patients in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Consult for Stenosis in <?php echo $area; ?></h2>
        <p>Expert relief for spinal canal narrowing. Fill out the form below and our clinical team will get back to you within 24 hours.</p>
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
                <input type="text" id="name" name="name" placeholder="Your full name" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com">
              </div>
              <div class="form-group">
                <label for="condition">Diagnostic Required</label>
                <select id="condition" name="condition">
                  <option value="stenosis" selected>Spinal Stenosis Treatment</option>
                  <option value="claudication">Leg Pain / Walking Issues</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your symptoms or walking limits in <?php echo $area; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Consultation Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- SEO Internal Linking Section -->
  <section class="locations-linking bg-light" style="padding: 60px 0; border-top: 1px solid rgba(0,0,0,0.05);">
    <div class="container">
      <div class="section-title text-center" style="margin-bottom: 30px;">
        <span class="badge">Regional Access</span>
        <?php if($state == "India"): ?>
          <h2>Spinal Stenosis Treatment Across India</h2>
        <?php else: ?>
          <h2>Other Locations in <?php echo $state; ?></h2>
        <?php endif; ?>
      </div>
      
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/spinal-stenosis/";
        
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../spinal-stenosis/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Spinal Stenosis Treatment in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../spinal-stenosis/'.$state_slug.'/*', GLOB_ONLYDIR);
            
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: white; font-weight: 600; font-size: 0.9rem;">Spinal Stenosis Treatment in '.$state.'</a>';
            
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) {
                    echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Spinal Stenosis Treatment in '.$name.'</a>';
                }
            }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
