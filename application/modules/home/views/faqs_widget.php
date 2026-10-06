<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => 'What services does Make My Shift Packers and Movers offer?',
        'answer' => 'We provide household shifting, office relocation, local/domestic moving, car transportation, bike transportation, packing, loading, unloading and other services related to relocation.'
    ],
    [
        'question' => 'How many years of experience does Make My Shift have?',
        'answer' => $company3 . ' has ' . $experience . ' years of experience in the packing and moving industry.'
    ],
    [
        'question' => 'Who is the Director of Make My Shift Packers and Movers?
',
        'answer' => '<b>Alok Kumar Chaudhary</b> is the Director of Make My Shift Packers and Movers.'
    ],
    [
        'question' => 'Why should I choose professional packers and movers?
',
        'answer' => 'Professional movers can help with planning, packing, handling, transportation and unloading of things and make the relocation easier.
'
    ],
    [
        'question' => 'Does Make My Shift provide vehicle transportation?
',
        'answer' => 'Make My Shift provides<b> car and bike transportation</b> support as part of its relocation services.'
    ],
    [
        'question' => 'How long does the moving process take?',
        'answer' => 'Local shifting is usually accomplished within a few hours to the same day. For domestic and long-distance moving, transit time depends on distance, typically taking 2 to 5 days.'
    ],
    [
        'question' => 'Can you move vehicles like cars and bikes?',
        'answer' => 'Yes, we have specialized enclosed and open vehicle carriers equipped with safety harnesses to safely transport your 2-wheelers and 4-wheelers nationwide.'
    ],
    [
        'question' => 'What items are not allowed to be moved?',
        'answer' => 'We do not transport hazardous materials, inflammable substances, compressed gases, perishable foods, cash, jewelry, and personal confidential legal documents.'
    ]
];
?>

<section class="faq-clean-section" id="faqs">
    <div class="container">
        
        <!-- Main 2-Column Row (Matching media_1788863451443.png) -->
        <div class="row align-items-start g-4 g-lg-5">
            
            <!-- Left Column: Eyebrow, Title, Subtitle & Still Have Questions Box -->
            <div class="col-lg-5 col-md-5">
                <div class="faq-eyebrow">
                    <span class="faq-eyebrow-dash"></span>
                    <span class="faq-eyebrow-text">FAQS</span>
                </div>
                <h3 class="faq-title">
                    Frequently Asked<br>
                    <span class="text-brand-red">Questions</span>
                </h3>
                <p class="faq-subtitle">
                    Find quick answers to common questions about our packing and moving services.
                </p>

                <!-- Ready to Move Contact Box -->
                <div class="faq-contact-box">
                    <span class="faq-contact-dash"></span>
                    <span class="faq-contact-title">Ready to Move?</span>
                    <p class="faq-contact-desc">
                        Make My Shift Packers and Movers is here to make your relocation easier. Call <?= htmlspecialchars($phone2) ?> for a quick quote and book your move today.
                    </p>
                    <a href="<?= $phonehtml2 ?>" class="btn-faq-contact">
                        CALL NOW <span class="btn-arrow">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Accordion Questions -->
            <div class="col-lg-7 col-md-7">
                <div class="faq-accordion-list" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <?php $isOpen = ($index === 0); ?>
                        <div class="faq-accordion-item <?= $isOpen ? 'active-faq' : '' ?>">
                            <button class="faq-accordion-btn <?= $isOpen ? '' : 'collapsed' ?>" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#faqCollapse<?= $index ?>" 
                                    aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                                    aria-controls="faqCollapse<?= $index ?>">
                                <span class="faq-question-text"><?= htmlspecialchars($faq['question']) ?></span>
                                <span class="faq-accordion-chevron" aria-hidden="true">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </button>
                            <div id="faqCollapse<?= $index ?>" 
                                 class="collapse <?= $isOpen ? 'show' : '' ?>" 
                                 data-bs-parent="#faqAccordion">
                                <div class="faq-accordion-body-wrap">
                                    <div class="faq-body-divider"></div>
                                    <p class="faq-answer-text">
                                        <?= htmlspecialchars($faq['answer']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var accordion = document.getElementById('faqAccordion');
    if (accordion) {
        accordion.addEventListener('show.bs.collapse', function(e) {
            var item = e.target.closest('.faq-accordion-item');
            if (item) item.classList.add('active-faq');
        });
        accordion.addEventListener('hide.bs.collapse', function(e) {
            var item = e.target.closest('.faq-accordion-item');
            if (item) item.classList.remove('active-faq');
        });
    }
});
</script>
