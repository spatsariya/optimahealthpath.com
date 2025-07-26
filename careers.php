
<?php
$pageTitle = "Careers at Optima Health Path | Work With Us";
$pageDescription = "Join Optima Health Path and be part of the digital healthcare revolution. Explore our current openings and discover how you can make a difference in teleradiology, technology, sales, and more.";
include __DIR__ . '/includes/header.php';
?>

<section class="min-h-screen pt-24 lg:pt-32 bg-gradient-to-br from-blue-50 to-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6 py-16 relative">
        <div class="max-w-3xl mx-auto text-center animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">Careers at Optima Health Path</h1>
            <p class="text-xl text-secondary mb-10">Be part of a rapidly growing leader in teleradiology and digital healthcare. Join us in transforming healthcare delivery across North America and Asia.</p>
        </div>
        <div class="max-w-6xl mx-auto animate-slide-up">
            <h2 class="text-2xl font-semibold text-primary mb-8 text-center">Current Openings</h2>
            <div class="grid md:grid-cols-2 gap-10" id="jobCards">
                <!-- Job Card: Sales Agent -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 border border-gray-100 shadow-lg flex flex-col cursor-pointer transition-transform duration-200 hover:scale-105" data-job="sales-agent">
                    <span class="inline-block bg-accent/10 text-accent px-3 py-1 rounded-full text-xs font-semibold mb-3 w-max">Sales</span>
                    <h3 class="text-xl font-bold text-primary mb-2">Sales Agent (Commission-Only) – Remote, Canada</h3>
                    <p class="mb-4 text-secondary line-clamp-3">Build the future of digital healthcare. Work from anywhere in Canada. Unlimited earning potential, total flexibility, and a chance to shape the future of teleradiology sales.</p>
                    <div class="mt-auto text-accent font-semibold text-sm pt-2">View Details</div>
                </div>
                <!-- Example: Technology Domain (future role, uncomment to add) -->
                <!--
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 border border-gray-100 shadow-lg flex flex-col cursor-pointer transition-transform duration-200 hover:scale-105" data-job="software-engineer">
                    <span class="inline-block bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-semibold mb-3 w-max">Technology</span>
                    <h3 class="text-xl font-bold text-primary mb-2">Software Engineer</h3>
                    <p class="mb-4 text-secondary line-clamp-3">Help us build secure, scalable healthcare platforms. Work with a modern stack and a mission-driven team. (Sample future posting)</p>
                    <div class="mt-auto text-accent font-semibold text-sm pt-2">View Details</div>
                </div>
                -->
            </div>
            <div class="text-center mt-16">
                <h3 class="text-xl font-semibold text-primary mb-2">Don’t see a role that fits?</h3>
                <p class="text-secondary">We’re always looking for talented professionals in radiology, technology, operations, and more. Email your resume to <a href="mailto:careers@optimahealthpath.com" class="text-accent underline">careers@optimahealthpath.com</a> and tell us how you can make a difference at Optima Health Path.</p>
            </div>
            <!-- Modal for Job Details -->
            <div id="jobModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 hidden px-2">
                <div class="bg-white rounded-2xl w-full max-w-2xl md:max-w-3xl p-4 md:p-8 relative shadow-2xl animate-fade-in-up overflow-y-auto max-h-[90vh] flex flex-col">
                    <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-accent text-2xl font-bold">&times;</button>
                    <div id="modalContent" class="overflow-y-auto max-h-[75vh] md:max-h-[70vh] pr-2">
                        <!-- Dynamic job details will be injected here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
// Job data (expandable for more roles)
const jobs = {
  'sales-agent': {
    domain: 'Sales',
    title: 'Sales Agent (Commission-Only) – Remote, Canada',
    intro: 'Optima Health Path is a fast-growing provider of telediagnosis and teleradiology solutions for clinics, hospitals, and diagnostic centers across Canada. We’re looking for results-driven, independent sales agents to help us expand our client base nationwide.',
    details: `
      <ul class='mb-4 text-secondary list-disc list-inside space-y-1'>
        <li><strong>Type:</strong> Commission Only (Unlimited earning potential)</li>
        <li><strong>Location:</strong> Remote (Must be based in Canada)</li>
      </ul>
      <h4 class='text-lg font-semibold text-accent mb-1 mt-4'>Key Responsibilities</h4>
      <ul class='list-disc list-inside text-secondary mb-3 space-y-1'>
        <li><strong>Hunt for Opportunities:</strong> Identify and reach out to medical clinics, hospitals, imaging centers, and healthcare providers that could benefit from our services.</li>
        <li><strong>Cold Outreach & Prospecting:</strong> Drive new business through cold calls, emails, LinkedIn outreach, and creative strategies.</li>
        <li><strong>Close Deals:</strong> Present solutions, handle objections, and turn leads into paying clients.</li>
        <li><strong>Own the Relationship:</strong> Manage ongoing client relationships and identify upsell opportunities.</li>
        <li><strong>Expand Our Reach:</strong> Bring new healthcare clients into the Optima Health Path network.</li>
      </ul>
      <h4 class='text-lg font-semibold text-accent mb-1 mt-4'>What We’re Looking For</h4>
      <ul class='list-disc list-inside text-secondary mb-3 space-y-1'>
        <li><strong>Proven Healthcare Sales Experience:</strong> Background in medical, healthcare, or pharma sales is a big plus.</li>
        <li><strong>Strong Communicator & Closer:</strong> Confident pitching to decision-makers, including C-suite and medical directors.</li>
        <li><strong>Independent & Proactive:</strong> A self-starter who thrives on hitting targets without needing hand-holding.</li>
        <li><strong>Lead Gen Mindset:</strong> Resourceful at sourcing, qualifying, and converting leads.</li>
        <li><strong>Industry Connections:</strong> Existing network in healthcare is highly valued.</li>
      </ul>
      <h4 class='text-lg font-semibold text-accent mb-1 mt-4'>Why Join Us?</h4>
      <ul class='list-disc list-inside text-secondary mb-3 space-y-1'>
        <li>Work Anywhere in Canada – 100% remote</li>
        <li>No Cap on Commission – You control your income</li>
        <li>Be Part of Healthcare Innovation</li>
        <li>Support When You Need It – Resources and team backing provided</li>
      </ul>
      <div class='mt-4'>
        <h4 class='text-lg font-semibold text-accent mb-1'>How to Apply</h4>
        <p class='text-secondary'>Send your resume and a short note highlighting your sales and healthcare experience to:<br>
        <span class='font-semibold'>📧 <a href='mailto:careers@optimahealthpath.com' class='text-accent underline'>careers@optimahealthpath.com</a></span><br>
        Nothing fancy – just the basics.</p>
      </div>
    `
  },
  // Add more jobs here as needed
};

// Modal logic
document.addEventListener('DOMContentLoaded', function() {
  const jobCards = document.querySelectorAll('[data-job]');
  const modal = document.getElementById('jobModal');
  const modalContent = document.getElementById('modalContent');
  const closeModal = document.getElementById('closeModal');

  jobCards.forEach(card => {
    card.addEventListener('click', function() {
      const jobKey = this.getAttribute('data-job');
      const job = jobs[jobKey];
      if (job) {
        modalContent.innerHTML = `
          <span class="inline-block bg-accent/10 text-accent px-3 py-1 rounded-full text-xs font-semibold mb-3 w-max">${job.domain}</span>
          <h3 class="text-2xl font-bold text-primary mb-2">${job.title}</h3>
          <p class="mb-4 text-secondary">${job.intro}</p>
          ${job.details}
        `;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
      }
    });
  });

  closeModal.addEventListener('click', function() {
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  });

  // Close modal on outside click
  modal.addEventListener('click', function(e) {
    if (e.target === modal) {
      modal.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    }
  });

  // ESC key closes modal
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      modal.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    }
  });
});
</script>
