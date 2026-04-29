<?php
// Master Template for Degenerative Disc Disease Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Degenerative Disc Disease Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced treatment for Degenerative Disc Disease (DDD) in " . $area . " by Dr. Arun Saroha. Specializing in disc replacement, fusion, and minimally invasive relief for " . $area . " patients.";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/degenerative-disc/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/degenerative_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Degenerative Disc Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Restore Your Spinal Health & Core Stability</p>
        <p class="hero-subtext fade-in-up delay-1">Comprehensive clinical expertise for age-related spinal wear and tear. Dr. Arun Saroha offers advanced motion-preserving treatments for residents of <?php echo $area; ?>.</p>
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
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Degenerative Disc Disease in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Degenerative Disc Disease (DDD) is not actually a disease, but a condition in which a damaged spinal disc causes chronic pain. For patients in <?php echo $area; ?>, this often feels like a constant low-grade ache punctuated by severe flare-ups. As we age, our spinal discs lose their water content and elasticity, leading to a loss of cushion between the vertebrae. Dr. Arun Saroha specializes in reversing the impact of this "wear and tear" using the most modern neurosurgical protocols available today.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">When a disc degenerates, it can lead to secondary issues such as spinal stenosis, osteoarthritis, or disc herniation. In <?php echo $area; ?>, we see many patients who have been told that "aging back pain" is something they just have to live with. At our center, we believe in active intervention—identifying the exact segment of degeneration and restoring the biomechanical integrity of the spine.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Common Symptoms of DDD</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Pain that is worse when sitting (as discs bear 3x more load than standing).</li>
            <li style="margin-bottom: 12px;">Frequent flare-ups of intense pain that last from days to months.</li>
            <li style="margin-bottom: 12px;">Relief when walking or running compared to sitting or standing still.</li>
            <li style="margin-bottom: 12px;">Increased pain when bending, lifting, or twisting (biomechanical stress).</li>
            <li style="margin-bottom: 12px;">Feeling of "giving way" in the back or neck due to localized instability.</li>
            <li style="margin-bottom: 12px;">Muscle tension and spasms as the body attempts to stabilize the joint.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">How Degeneration Happens</h3>
          <p style="margin-bottom: 15px;">Several factors accelerate disc breakdown for patients in <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Disc Dehydration:</strong> Loss of fluid that allows discs to absorb shocks.</li>
            <li style="margin-bottom: 12px;"><strong>Cracking (Tears):</strong> Small tears in the outer wall (annulus) of the disc causing pain.</li>
            <li style="margin-bottom: 12px;"><strong>Inflammation:</strong> Proteins leaking from the disc space irritating nearby nerves.</li>
            <li style="margin-bottom: 12px;"><strong>Micro-instability:</strong> The vertebrae shifting because the disc is no longer firm.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">DDD Diagnostic Protocol in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Diagnosing degenerative changes requires more than just an MRI; it requires a clinical correlation between imaging and your physical symptoms. Our map for <?php echo $area; ?> residents includes:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Discography</h4>
            <p style="font-size: 0.9rem;">Specifically identifying which disc is the primary source of pain (The Pain Generator).</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">High-Tes MRI</h4>
            <p style="font-size: 0.9rem;">Checking for Modic changes and annular tears that indicate active degeneration.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">CT Reconstruct</h4>
            <p style="font-size: 0.9rem;">Assessing the facet joints and endplate health for surgical planning in <?php echo $area; ?>.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical & Biological Restoration</h3>
        <p style="margin-bottom: 20px;">Treatment for Degenerative Disc Disease in <?php echo $area; ?> follows a hierarchical ladder. We begin with biological restoration and core stabilization. However, when the mechanical pain becomes life-altering, Dr. Saroha utilizes advanced "Motion Preservation" techniques. Unlike older fusion methods, modern artificial disc replacements allow patients to maintain their natural spinal movement, significantly reducing the "adjacent segment disease" risk.</p>
        <p style="margin-bottom: 20px;">Our surgical outcomes for <?php echo $area; ?> patients are enhanced by the use of biocompatible titanium and PEEK implants that mimic the natural density of human bone. This encourages long-term integration and structural permanence, allowing you to return to an active lifestyle in <?php echo $area; ?>—whether that's golfing, traveling, or simply playing with your grandchildren—without the fear of back pain.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for DDD) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Clinical Portfolio</span>
        <h2>Restorative Procedures for <?php echo $area; ?></h2>
        <p>Targeted interventions designed to halt degeneration and restore spinal mechanics.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Disc Replacement -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Total Disc Replacement</h3>
          <p>The premium choice for DDD. Replacing the worn-out natural disc with a high-tech artificial one that preserves full bending and rotation for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 2. Spine Fusion -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M8 8h8"/><path d="M8 16h8"/></svg>
          </div>
          <h3>3D-Printed Fusion</h3>
          <p>Providing permanent structural stability. We use patient-specific 3D-printed titanium cages to fuse painful spinal segments for residents in <?php echo $area; ?>.</p>
        </div>

        <!-- 3. ALIF/XLIF -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 12H3"/><path d="M17 18H3"/><path d="M17 6H3"/><path d="M21 12l-4-4v8l4-4z"/></svg>
          </div>
          <h3>Anterior/Lateral Access</h3>
          <p>Treating DDD through the side or front of the body to avoid disturbing the back muscles, resulting in much faster recovery for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 4. Foraminotomy -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 12h6"/></svg>
          </div>
          <h3>Nerve Decompression</h3>
          <p>Relieving specific nerve compression caused by disc height loss, effectively stopping the "sciatica" leg pain for many <?php echo $area; ?> residents.</p>
        </div>

        <!-- 5. Intradiscal Therapy -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Biological Disc Repair</h3>
          <p>Newer regenerative protocols aimed at improving the internal environment of the disc for early-stage DDD patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Rehabilitation -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M2 12h20"/></svg>
          </div>
          <h3>Functional Restoration</h3>
          <p>Specialized core strengthening programs designed to unload the painful disc and stabilize the spine naturally for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about DDD in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is Degenerative Disc Disease actually a disease?</h3>
          <p>No, it's a condition where spinal discs naturally wear down over time. It is called a "disease" because the resulting symptoms can be life-altering and chronic.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Does everyone get DDD as they age?</h3>
          <p>While most people in <?php echo $area; ?> will show some disc wear on an MRI after age 40, only a small percentage will experience the chronic pain and inflammation associated with clinical DDD.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can a degenerated disc heal on its own?</h3>
          <p>Once a disc loses its water content and structural height, it cannot "regrow." However, the inflammation can subside, and the body can adapt if the area is properly stabilized in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is the best exercise for DDD?</h3>
          <p>Low-impact activities like swimming and specialized core strengthening (Pilates-based) are excellent for unloading the spine and providing relief for <?php echo $area; ?> residents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When is disc replacement better than fusion?</h3>
          <p>Disc replacement is often preferred if the degeneration is limited to one level and the bones are healthy, as it preserves natural movement for active patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How do you identify which disc is the pain generator?</h3>
          <p>We use a combination of MRI findings and "Discography," where we gently pressurize the disc to see if it replicates your specific back pain symptoms in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What happens if DDD is left untreated?</h3>
          <p>It can lead to secondary issues like spinal stenosis (narrowing of the canal) and severe osteophytes (bone spurs), which can compress vital nerves in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you treat out-of-state patients for DDD?</h3>
          <p>Yes, Dr. Saroha regularly consults with patients from <?php echo $area; ?> and across India for definitive surgical planning for degenerative spinal conditions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Consultation in <?php echo $area; ?></h2>
        <p>Take the first step toward a pain-free life. Fill out the form below and our clinical team will get back to you within 24 hours.</p>
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
                  <option value="ddd" selected>Degenerative Disc Treatment</option>
                  <option value="spine-surgery">Spine Surgery</option>
                  <option value="disc-replacement">Disc Replacement</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your spinal symptoms or disc issues in <?php echo $area; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Consultation Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
