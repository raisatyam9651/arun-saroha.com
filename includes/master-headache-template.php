<?php
// Master Template for Headache & Migraine Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Headache & Migraine Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Expert headache and migraine treatment in " . $area . " by Dr. Arun Saroha. Advanced neurological care for chronic headaches, migraines, and cluster headaches in " . $area . ".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="canonical" href="https://www.drarunsaroha.com/headache/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>

  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Headache & Migraine Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Comprehensive Relief for Chronic Headaches</p>
        <p class="hero-subtext fade-in-up delay-1">Expert neurological care for migraines, cluster headaches, and chronic headache disorders. Dr. Arun Saroha provides lasting relief for patients in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Clinical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Headaches & Migraines in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Headaches are among the most common neurological complaints, affecting millions of people in <?php echo $area; ?>. While most headaches are benign, chronic or severe headaches can significantly impact quality of life and may indicate an underlying condition requiring specialist care.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Dr. Arun Saroha specializes in diagnosing and treating complex headache disorders including migraines, tension-type headaches, cluster headaches, and secondary headaches caused by structural abnormalities. For <?php echo $area; ?> patients, a thorough evaluation can identify triggers and effective treatment strategies.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Types of Headaches We Treat</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Migraine:</strong> Severe throbbing pain, often with nausea and light sensitivity.</li>
            <li style="margin-bottom: 12px;"><strong>Cluster Headache:</strong> Excruciating pain on one side, with eye tearing.</li>
            <li style="margin-bottom: 12px;"><strong>Tension Headache:</strong> Band-like pressure affecting both sides of head.</li>
            <li style="margin-bottom: 12px;"><strong>Chronic Daily Headache:</strong> Headache occurring 15+ days per month.</li>
            <li style="margin-bottom: 12px;"><strong>Medication Overuse Headache:</strong> Caused by excessive pain medication use.</li>
            <li style="margin-bottom: 12px;"><strong>Secondary Headache:</strong> Caused by underlying conditions like tumors or aneurysms.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">When to See a Specialist</h3>
          <p style="margin-bottom: 15px;">Consult Dr. Saroha if you experience:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Headaches that occur more than twice per week.</li>
            <li style="margin-bottom: 12px;">Pain that worsens or changes pattern over time.</li>
            <li style="margin-bottom: 12px;">Headaches not responding to over-the-counter medication.</li>
            <li style="margin-bottom: 12px;">Headaches interfering with daily activities and work.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Treatment Options for <?php echo $area; ?> Patients</h3>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Preventive Medications</h4>
            <p style="font-size: 0.9rem;">Daily medications like beta-blockers, antidepressants, or CGRP inhibitors to reduce migraine frequency and severity.</p>
          </div>
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Acute Pain Relief</h4>
            <p style="font-size: 0.9rem;">Triptans, NSAIDs, and anti-nausea medications to stop migraines once they begin for <?php echo $area; ?> patients.</p>
          </div>
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Botox Injections</h4>
            <p style="font-size: 0.9rem;">FDA-approved Botox therapy for chronic migraine prevention, administered every 12 weeks.</p>
          </div>
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Nerve Blocks</h4>
            <p style="font-size: 0.9rem;">Targeted injections to block pain signals from occipital and trigeminal nerves for cluster and migraine relief.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Lifestyle & Trigger Management</h3>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Dr. Saroha's team helps <?php echo $area; ?> patients identify and manage headache triggers through dietary modifications, sleep optimization, stress management techniques, and regular exercise programs. Keeping a headache diary can help pinpoint specific triggers unique to each patient.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">For patients whose headaches are caused by structural issues (such as cervical spine problems or vascular abnormalities), targeted interventions can provide dramatic relief and improved quality of life.</p>
      </div>
    </div>
  </section>

  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Treatment Options</span>
        <h2>Headache & Migraine Treatments for <?php echo $area; ?></h2>
      </div>
      <div class="services-grid mt-4">
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <h3>Migraine Management</h3>
          <p>Comprehensive migraine treatment including acute and preventive therapies tailored for <?php echo $area; ?> patients.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <h3>Cluster Headache Relief</h3>
          <p>Specialized treatment for cluster headaches with oxygen therapy, triptans, and nerve blocks for <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
          <h3>Botox for Chronic Migraine</h3>
          <p>FDA-approved Botox injections every 12 weeks for patients with 15+ headache days per month in <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M22 12h-4"/><path d="M6 12H2"/></svg></div>
          <h3>Occipital Nerve Block</h3>
          <p>Targeted injection to relieve pain from occipital neuralgia and chronic migraine variants for <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2Z"/></svg></div>
          <h3>Trigger Point Injections</h3>
          <p>Muscle tension and trigger point injections for cervicogenic and tension-type headaches in <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
          <h3>Headache Diary & Monitoring</h3>
          <p>Digital tracking tools and regular follow-ups to optimize treatment plans for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="international-section bg-light">
    <div class="container international-container">
      <div class="international-text">
        <span class="badge">Global Reach</span>
        <h2>Headache Care for <?php echo $area; ?></h2>
        <p>Dr. Saroha provides telemedicine consultations for international patients suffering from chronic headaches, allowing <?php echo $area; ?> patients to receive expert diagnosis before traveling.</p>
        <a href="../../../international-patients.php" class="btn btn-outline">Learn More</a>
      </div>
      <div class="international-stats">
        <div class="intl-stat-card"><div class="stat-number">5000+</div><p>Headache Patients Treated</p></div>
        <div class="intl-stat-card"><div class="stat-number">85%</div><p>Improvement Rate</p></div>
      </div>
    </div>
  </section>

  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>FAQs about Headache Treatment in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When should I see a neurosurgeon for headaches?</h3>
          <p>Consult Dr. Saroha if headaches are worsening, changing pattern, not responding to medication, or accompanied by neurological symptoms like weakness or vision changes.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is chronic migraine?</h3>
          <p>Chronic migraine is defined as headaches occurring 15 or more days per month for more than 3 months, with at least 8 days being migraines. Dr. Saroha offers specialized treatment for this condition.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How does Botox help migraines?</h3>
          <p>Botox injections block pain signals from reaching nerve endings. It's administered every 12 weeks and can reduce migraine days by 50% or more for suitable patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What triggers migraines?</h3>
          <p>Common triggers include stress, certain foods, hormonal changes, sleep disruptions, and weather changes. Dr. Saroha helps <?php echo $area; ?> patients identify and manage their specific triggers.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Headache Consultation in <?php echo $area; ?></h2>
      </div>
      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Max Hospital, Dwarka</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
          </div>
          <div class="map-card">
            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Max Hospital, Gurugram</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
          </div>
        </div>
        <div class="contact-form-wrapper">
          <form class="contact-form" action="#" method="POST">
            <div class="form-row">
              <div class="form-group"><label>Full Name</label><input type="text" name="name" required placeholder="Your name"></div>
              <div class="form-group"><label>Phone</label><input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX"></div>
            </div>
            <div class="form-row">
              <div class="form-group"><label>Email</label><input type="email" name="email" placeholder="you@example.com"></div>
              <div class="form-group"><label>Condition</label>
                <select name="condition">
                  <option value="migraine" selected>Migraine</option>
                  <option value="cluster-headache">Cluster Headache</option>
                  <option value="tension-headache">Tension Headache</option>
                  <option value="chronic-headache">Chronic Daily Headache</option>
                </select>
              </div>
            </div>
            <div class="form-group"><label>Message</label><textarea name="message" rows="4" placeholder="Describe your headache pattern and frequency"></textarea></div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Request</button>
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
        <h2>Frequently Asked Questions about Headache Treatment in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">When should I see a neurosurgeon for headaches?</h3>
          <p style="font-size: 0.95rem;">See a specialist if you have persistent morning headaches, headaches worsened by coughing/sneezing, new headaches after age 40, or headaches accompanied by neurological symptoms like weakness, numbness, or vision changes.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the difference between migraine and tension headache?</h3>
          <p style="font-size: 0.95rem;">Migraines are typically one-sided, throbbing, and accompanied by nausea, light sensitivity, and sound sensitivity. Tension headaches cause a band-like pressure on both sides of the head. Dr. Saroha's evaluation distinguishes between types for targeted treatment in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the role of Botox for chronic migraines?</h3>
          <p style="font-size: 0.95rem;">Botox injections are FDA-approved for chronic migraine (15+ headache days per month). Dr. Saroha administers Botox at specific anatomical points to reduce migraine frequency and severity for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can cluster headaches be treated surgically?</h3>
          <p style="font-size: 0.95rem;">For patients who do not respond to medication, Dr. Saroha offers advanced procedures like sphenopalatine ganglion (SPG) stimulation or nerve decompression to provide relief from severe cluster headaches.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What tests are needed to diagnose chronic headaches?</h3>
          <p style="font-size: 0.95rem;">Diagnosis typically involves neurological examination, MRI of the brain, and sometimes CT scans or lumbar puncture. Dr. Saroha identifies underlying structural causes versus primary headache disorders.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Are trigger point injections effective for headaches?</h3>
          <p style="font-size: 0.95rem;">Yes. Trigger point injections into muscles of the head, neck, and shoulders can relieve tension-type headaches and cervicogenic headaches. Dr. Saroha offers this as part of a comprehensive headache management plan.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can a brain tumor cause chronic headaches?</h3>
          <p style="font-size: 0.95rem;">Yes. Brain tumors can cause headaches due to increased intracranial pressure. These often worsen in the morning, are associated with vomiting, and progressively worsen over weeks. Dr. Saroha rules out serious causes during evaluation.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What lifestyle changes help manage chronic headaches?</h3>
          <p style="font-size: 0.95rem;">Sleep hygiene, regular meal times, hydration, stress management, and avoiding known triggers are foundational. Dr. Saroha's team in <?php echo $area; ?> creates personalized plans combining lifestyle modification with medical treatment.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="locations-linking bg-light" style="padding: 60px 0;">
    <div class="container">
      <div class="section-title text-center">
        <?php if($state == "India"): ?><h2>Headache Treatment Across India</h2>
        <?php else: ?><h2>Other Locations in <?php echo $state; ?></h2><?php endif; ?>
      </div>
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/headache/";
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../headache/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem;">Headache Treatment in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../headache/'.$state_slug.'/*', GLOB_ONLYDIR);
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; color: white; font-weight: 600; font-size: 0.9rem;">Headache Treatment in '.$state.'</a>';
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem;">Headache Treatment in '.$name.'</a>';
            }
        }
        ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>