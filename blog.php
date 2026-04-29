<?php 
  $pageTitle = "Medical Blog & Patient Insights | Dr. Arun Saroha - Brain & Spine";
  $pageDesc = "Stay updated with the latest in neuroscience, spine health tips, and advanced brain surgery insights from Dr. Arun Saroha.";
  include_once 'includes/header.php'; 
?>

  <!-- Blog Hero -->
  <section class="hero secondary-hero">
    <div class="container text-center">
      <h1 class="fade-in-up">Medical <span class="text-gradient">Blog & Insights</span></h1>
      <p class="hero-tagline fade-in-up">Empowering You with Knowledge for Brain & Spine Health</p>
    </div>
  </section>

  <!-- Blog List -->
  <section class="blog-section py-8">
    <div class="container">
      <div class="blog-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2.5rem;">
        
        <!-- Post 1 -->
        <article class="blog-card glass-card overflow-hidden">
          <div style="height: 240px; background: #0f3d81; display:flex; align-items:center; justify-content:center; color:white;">
             <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2v20"/><path d="M7 6h10"/><path d="M7 12h10"/><path d="M7 18h10"/></svg>
          </div>
          <div class="p-4">
            <span class="badge mb-2">Brain Health</span>
            <h3 class="mb-2">3 Common Myths About Brain Tumours Debunked</h3>
            <p class="text-muted">Filtering fact from fiction: Dr. Saroha addresses prevalent misconceptions about brain tumor diagnosis and survival...</p>
            <a href="blog/3-common-myths-about-brain-tumours-debunked.php" class="btn btn-secondary btn-sm mt-3">Read Full Story</a>
          </div>
        </article>

        <!-- Post 2 -->
        <article class="blog-card glass-card overflow-hidden">
          <div style="height: 240px; background: #e6b325; display:flex; align-items:center; justify-content:center; color:white;">
             <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <div class="p-4">
            <span class="badge mb-2">Patient Guide</span>
            <h3 class="mb-2">Five Critical Things You Should Know About Brain Tumours</h3>
            <p class="text-muted">From warning signs to modern treatment options, here are the essential insights for patients and families...</p>
            <a href="blog/five-things-you-should-know-about-brain-tumours.php" class="btn btn-secondary btn-sm mt-3">Read Full Story</a>
          </div>
        </article>

        <!-- Post 3 -->
        <article class="blog-card glass-card overflow-hidden">
          <div style="height: 240px; background: #0f3d81; display:flex; align-items:center; justify-content:center; color:white;">
             <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12H3"/><path d="M12 3v18"/><circle cx="12" cy="12" r="9"/></svg>
          </div>
          <div class="p-4">
            <span class="badge mb-2">Spine Surgery</span>
            <h3 class="mb-2">How to Know if You Really Need Spine Surgery?</h3>
            <p class="text-muted">When is conservative therapy enough, and when is surgical intervention the best path? Dr. Saroha explains the evaluation process...</p>
            <a href="blog/how-to-know-if-you-need-spine-surgery.php" class="btn btn-secondary btn-sm mt-3">Read Full Story</a>
          </div>
        </article>

      </div>
      
      <div class="text-center mt-6">
        <p class="text-muted italic">Stay tuned for more insightful articles and patient success stories.</p>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section py-8">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">FAQs</span>
        <h2>Frequently Asked Questions – Medical Insights</h2>
      </div>
      <div class="faq-grid mt-4">
        <div class="faq-item">
          <h3>Are the blog articles written by Dr. Saroha himself?</h3>
          <p>Yes. All medical blog content on this website is written or reviewed by Dr. Arun Saroha, drawing from his 25+ years of clinical neurosurgical experience to provide accurate, patient-focused insights.</p>
        </div>
        <div class="faq-item">
          <h3>Can I use the blog information to diagnose my condition?</h3>
          <p>No. The blog is intended for educational purposes only. It does not replace a professional medical consultation. If you suspect a neurological or spinal condition, please book an appointment with Dr. Saroha.</p>
        </div>
        <div class="faq-item">
          <h3>How often are new articles published?</h3>
          <p>New articles are published regularly, covering topics such as brain tumors, spine surgery, minimally invasive techniques, and patient recovery. Subscribe to our updates for the latest insights.</p>
        </div>
        <div class="faq-item">
          <h3>Can I share a blog article with my family?</h3>
          <p>Absolutely. Sharing credible medical information is encouraged. Our articles are designed to help patients and caregivers understand conditions and treatment options better.</p>
        </div>
        <div class="faq-item">
          <h3>Are the articles peer-reviewed?</h3>
          <p>Yes. All content is reviewed by Dr. Saroha and aligned with current medical literature, ensuring accuracy and adherence to established neurosurgical and neurological care standards.</p>
        </div>
        <div class="faq-item">
          <h3>Can I request a topic to be covered in a blog article?</h3>
          <p>Yes. We welcome topic suggestions from patients. You can submit your request through the contact form, and our team will consider it for an upcoming article.</p>
        </div>
        <div class="faq-item">
          <h3>Is the information on this blog updated over time?</h3>
          <p>Medical knowledge evolves. Dr. Saroha's team periodically reviews and updates articles to reflect the latest advances in neurosurgery, brain tumor treatment, and spine care.</p>
        </div>
        <div class="faq-item">
          <h3>Does Dr. Saroha offer online consultations for blog readers?</h3>
          <p>Yes. If a blog article raises concerns about your health, you can request a tele-consultation directly via our contact form or by calling +91 98187 78811.</p>
        </div>
      </div>
    </div>
  </section>

<?php include_once 'includes/footer.php'; ?>
