<?php
/**
 * Template Name: Service Single
 *
 * Reusable template for individual service detail pages.
 * Detects the current page slug and renders matching content.
 *
 * @package Fieldcraft
 */

// Service data keyed by page slug
$services_data = [
    'web-design' => [
        'icon' => 'palette',
        'label' => 'Web Design',
        'title' => 'Beautiful designs that convert',
        'description' => 'We create stunning, user-centered designs that not only look amazing but also drive real business results. Every pixel is crafted with purpose to deliver experiences your users will love.',
        'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=600&fit=crop&fm=webp&q=80',
        'image_alt' => 'Web design workspace with creative tools',
        'features' => [
            'Custom UI/UX design tailored to your brand identity',
            'Mobile-first responsive layouts for every device',
            'Interactive prototypes and user testing',
            'Design systems and comprehensive style guides',
            'Conversion-optimized landing pages',
            'Accessibility-first design approach (WCAG 2.1)',
        ],
        'process' => [
            ['title' => 'Research & Discovery', 'description' => 'We analyze your brand, competitors, and target audience to inform a design strategy that resonates.'],
            ['title' => 'Wireframing', 'description' => 'Low-fidelity layouts define the information architecture and user flows before any visual design begins.'],
            ['title' => 'Visual Design', 'description' => 'High-fidelity mockups bring your brand to life with typography, color, imagery, and interactive elements.'],
            ['title' => 'Handoff & QA', 'description' => 'Pixel-perfect specifications and assets are delivered to development, with thorough quality reviews throughout.'],
        ],
        'deliverables' => [
            ['icon' => 'palette', 'title' => 'UI Design Files', 'description' => 'Complete Figma design files with components and variants'],
            ['icon' => 'layers', 'title' => 'Design System', 'description' => 'Reusable component library with tokens and guidelines'],
            ['icon' => 'code', 'title' => 'Prototype', 'description' => 'Interactive clickable prototype for stakeholder review'],
            ['icon' => 'target', 'title' => 'Style Guide', 'description' => 'Typography, color palette, and brand usage documentation'],
            ['icon' => 'globe', 'title' => 'Responsive Specs', 'description' => 'Layouts for mobile, tablet, and desktop breakpoints'],
            ['icon' => 'chart', 'title' => 'UX Report', 'description' => 'User research findings and design rationale documentation'],
        ],
        'related' => ['development', 'branding', 'seo'],
    ],
    'development' => [
        'icon' => 'code',
        'label' => 'Development',
        'title' => 'Code that performs',
        'description' => 'We build fast, secure, and scalable websites and applications using modern technologies. Clean code that\'s built to last and engineered for peak performance.',
        'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=800&h=600&fit=crop&fm=webp&q=80',
        'image_alt' => 'Developer writing code on screen',
        'features' => [
            'Custom WordPress & headless CMS development',
            'React, Next.js & modern JavaScript frameworks',
            'E-commerce solutions (WooCommerce, Shopify)',
            'API integrations and custom functionality',
            'Performance optimization and Core Web Vitals',
            'Automated testing and CI/CD pipelines',
        ],
        'process' => [
            ['title' => 'Technical Planning', 'description' => 'We define the technology stack, architecture, and development roadmap based on your project requirements.'],
            ['title' => 'Sprint Development', 'description' => 'Agile sprints deliver working features incrementally, with regular demos and feedback loops.'],
            ['title' => 'Testing & QA', 'description' => 'Comprehensive testing across browsers and devices ensures everything works flawlessly before launch.'],
            ['title' => 'Deploy & Support', 'description' => 'Smooth deployment to production with monitoring, maintenance, and ongoing technical support.'],
        ],
        'deliverables' => [
            ['icon' => 'code', 'title' => 'Production Code', 'description' => 'Clean, documented, version-controlled source code'],
            ['icon' => 'globe', 'title' => 'Live Website', 'description' => 'Fully deployed site on your hosting environment'],
            ['icon' => 'settings', 'title' => 'CMS Setup', 'description' => 'Content management system configured for your team'],
            ['icon' => 'lightning', 'title' => 'Performance', 'description' => '90+ Lighthouse scores across all categories'],
            ['icon' => 'layers', 'title' => 'Documentation', 'description' => 'Technical docs for maintenance and future development'],
            ['icon' => 'chart', 'title' => 'Analytics', 'description' => 'Google Analytics and tracking setup with dashboards'],
        ],
        'related' => ['web-design', 'seo', 'analytics'],
    ],
    'seo' => [
        'icon' => 'search',
        'label' => 'SEO Strategy',
        'title' => 'Get found online',
        'description' => 'Data-driven SEO strategies that improve your visibility and drive organic traffic. We help you rank for the terms that matter most to your business growth.',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop&fm=webp&q=80',
        'image_alt' => 'Analytics dashboard showing search performance',
        'features' => [
            'Comprehensive site audits and technical SEO',
            'Keyword research and content strategy',
            'On-page and off-page optimization',
            'Local SEO and Google Business Profile',
            'Link building and digital PR',
            'Monthly reporting and analytics',
        ],
        'process' => [
            ['title' => 'SEO Audit', 'description' => 'We perform a deep-dive technical and content audit to identify opportunities and fix critical issues.'],
            ['title' => 'Keyword Strategy', 'description' => 'Research-driven keyword mapping aligns your content with high-value search terms your audience uses.'],
            ['title' => 'On-Page Optimization', 'description' => 'We optimize titles, meta descriptions, content structure, and internal linking for maximum relevance.'],
            ['title' => 'Monitor & Iterate', 'description' => 'Ongoing rank tracking, traffic analysis, and strategy refinement to maintain upward momentum.'],
        ],
        'deliverables' => [
            ['icon' => 'search', 'title' => 'SEO Audit Report', 'description' => 'Detailed technical audit with prioritized action items'],
            ['icon' => 'target', 'title' => 'Keyword Map', 'description' => 'Target keywords mapped to pages with search volume data'],
            ['icon' => 'chart', 'title' => 'Monthly Reports', 'description' => 'Ranking, traffic, and conversion performance dashboards'],
            ['icon' => 'code', 'title' => 'Technical Fixes', 'description' => 'Schema markup, site speed, and crawlability improvements'],
            ['icon' => 'layers', 'title' => 'Content Plan', 'description' => 'Editorial calendar with topic clusters and briefs'],
            ['icon' => 'globe', 'title' => 'Link Strategy', 'description' => 'Outreach plan for earning high-authority backlinks'],
        ],
        'related' => ['marketing', 'analytics', 'development'],
    ],
    'marketing' => [
        'icon' => 'megaphone',
        'label' => 'Digital Marketing',
        'title' => 'Reach your audience',
        'description' => 'Comprehensive marketing campaigns that connect with your target audience across all digital channels and drive meaningful engagement that converts.',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop&fm=webp&q=80',
        'image_alt' => 'Marketing analytics and campaign data',
        'features' => [
            'Paid advertising (Google, Meta, LinkedIn)',
            'Social media strategy and management',
            'Email marketing and automation',
            'Content marketing and copywriting',
            'Conversion rate optimization (CRO)',
            'Marketing funnel design and optimization',
        ],
        'process' => [
            ['title' => 'Audience Research', 'description' => 'We identify your ideal customer profiles, their pain points, and the channels where they spend time.'],
            ['title' => 'Campaign Strategy', 'description' => 'Multi-channel campaign plans with messaging, creative direction, and budget allocation.'],
            ['title' => 'Launch & Manage', 'description' => 'We execute campaigns across platforms, managing bids, creatives, and audience targeting daily.'],
            ['title' => 'Optimize & Scale', 'description' => 'A/B testing and performance analysis drive continuous improvement and increased ROI.'],
        ],
        'deliverables' => [
            ['icon' => 'megaphone', 'title' => 'Campaign Assets', 'description' => 'Ad creatives, copy, and landing pages for all channels'],
            ['icon' => 'target', 'title' => 'Audience Profiles', 'description' => 'Detailed buyer personas and targeting parameters'],
            ['icon' => 'chart', 'title' => 'Performance Reports', 'description' => 'Weekly and monthly ROI and engagement dashboards'],
            ['icon' => 'mail', 'title' => 'Email Sequences', 'description' => 'Automated nurture flows and promotional campaigns'],
            ['icon' => 'layers', 'title' => 'Content Calendar', 'description' => 'Planned social and blog content for consistent publishing'],
            ['icon' => 'lightning', 'title' => 'CRO Playbook', 'description' => 'Testing roadmap for landing pages and conversion funnels'],
        ],
        'related' => ['seo', 'branding', 'analytics'],
    ],
    'branding' => [
        'icon' => 'layers',
        'label' => 'Brand Identity',
        'title' => 'Build a brand that resonates',
        'description' => 'Strategic branding that tells your story and creates lasting connections with your target audience. We craft visual identities that are distinctive, memorable, and built to scale.',
        'image' => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=800&h=600&fit=crop&fm=webp&q=80',
        'image_alt' => 'Brand identity design materials and mood boards',
        'features' => [
            'Brand strategy and positioning workshops',
            'Logo design and visual identity systems',
            'Typography and color palette selection',
            'Brand voice and messaging guidelines',
            'Stationery and collateral design',
            'Brand launch strategy and rollout plan',
        ],
        'process' => [
            ['title' => 'Brand Discovery', 'description' => 'We run workshops to uncover your mission, values, audience, and competitive landscape.'],
            ['title' => 'Concept Development', 'description' => 'Multiple creative directions are explored through mood boards, sketches, and early concepts.'],
            ['title' => 'Design Refinement', 'description' => 'The chosen direction is refined into a complete visual identity with all supporting assets.'],
            ['title' => 'Brand Guidelines', 'description' => 'A comprehensive brand book ensures consistent application across every touchpoint.'],
        ],
        'deliverables' => [
            ['icon' => 'layers', 'title' => 'Logo Package', 'description' => 'Primary, secondary, and icon marks in all formats'],
            ['icon' => 'palette', 'title' => 'Visual Identity', 'description' => 'Color system, typography, photography style, and iconography'],
            ['icon' => 'star', 'title' => 'Brand Guidelines', 'description' => 'Comprehensive brand book with usage rules and examples'],
            ['icon' => 'megaphone', 'title' => 'Messaging Guide', 'description' => 'Brand voice, tone, taglines, and key messaging pillars'],
            ['icon' => 'mail', 'title' => 'Collateral Design', 'description' => 'Business cards, letterhead, email signatures, and templates'],
            ['icon' => 'globe', 'title' => 'Social Templates', 'description' => 'Branded templates for social media and digital channels'],
        ],
        'related' => ['web-design', 'marketing', 'development'],
    ],
    'analytics' => [
        'icon' => 'chart',
        'label' => 'Analytics & Insights',
        'title' => 'Turn data into growth',
        'description' => 'Transform raw data into actionable insights with comprehensive analytics and performance tracking. We help you understand what\'s working, what\'s not, and where to invest next.',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop&fm=webp&q=80',
        'image_alt' => 'Data analytics dashboard with charts and metrics',
        'features' => [
            'Google Analytics 4 setup and configuration',
            'Custom dashboard and reporting design',
            'Conversion tracking and attribution modeling',
            'A/B testing and experimentation frameworks',
            'Heat mapping and user behavior analysis',
            'Data-driven recommendations and roadmaps',
        ],
        'process' => [
            ['title' => 'Analytics Audit', 'description' => 'We review your current tracking setup, identify gaps, and define the KPIs that matter most.'],
            ['title' => 'Implementation', 'description' => 'We configure analytics tools, tag management, and event tracking for comprehensive data capture.'],
            ['title' => 'Dashboard Design', 'description' => 'Custom dashboards surface the metrics your team needs to make informed decisions daily.'],
            ['title' => 'Insights & Action', 'description' => 'Regular analysis translates data patterns into concrete recommendations for growth.'],
        ],
        'deliverables' => [
            ['icon' => 'chart', 'title' => 'Analytics Setup', 'description' => 'Fully configured GA4 with custom events and conversions'],
            ['icon' => 'target', 'title' => 'KPI Framework', 'description' => 'Defined success metrics aligned to business objectives'],
            ['icon' => 'layers', 'title' => 'Custom Dashboards', 'description' => 'Real-time dashboards in Looker Studio or your preferred tool'],
            ['icon' => 'search', 'title' => 'Audit Report', 'description' => 'Detailed tracking audit with implementation roadmap'],
            ['icon' => 'lightning', 'title' => 'Testing Framework', 'description' => 'A/B testing setup with experiment prioritization matrix'],
            ['icon' => 'globe', 'title' => 'Monthly Insights', 'description' => 'Actionable analysis reports with strategic recommendations'],
        ],
        'related' => ['seo', 'marketing', 'development'],
    ],
];

// Detect current service by slug
$slug = $post->post_name ?? '';
$service = $services_data[$slug] ?? null;

if (!$service) {
    // Fallback: redirect to services page
    wp_redirect(home_url('/services'));
    exit;
}

// Build related services data
$related = [];
foreach ($service['related'] as $related_slug) {
    if (isset($services_data[$related_slug])) {
        $related[] = array_merge($services_data[$related_slug], ['slug' => $related_slug]);
    }
}

get_header(); ?>

<style>
/* Service Single Styles */
.svc-hero {
    position: relative;
    padding: 10rem 0 6rem;
    background: linear-gradient(135deg, var(--color-dark-950) 0%, var(--color-primary-950) 100%);
    color: white;
    overflow: hidden;
}

.svc-hero::before {
    content: "";
    position: absolute;
    top: -50%;
    right: -20%;
    width: 80%;
    height: 200%;
    background: radial-gradient(ellipse, rgba(6, 182, 212, 0.15) 0%, transparent 50%);
    pointer-events: none;
}

.svc-hero-content {
    position: relative;
    z-index: 1;
    max-width: 700px;
}

.svc-hero .text-label {
    color: var(--color-accent-400);
    margin-bottom: var(--space-4);
    display: block;
}

.svc-hero h1 {
    font-size: var(--text-hero);
    color: white;
    margin-bottom: var(--space-6);
}

.svc-hero-text {
    font-size: var(--text-xl);
    color: var(--color-dark-300);
    line-height: var(--leading-relaxed);
    margin-bottom: var(--space-8);
}

.svc-hero-icon {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(6, 182, 212, 0.15);
    border-radius: var(--radius-2xl);
    color: var(--color-accent-400);
    margin-bottom: var(--space-6);
}

.svc-hero-actions {
    display: flex;
    gap: var(--space-4);
    flex-wrap: wrap;
}

/* Overview Section */
.svc-overview {
    padding: var(--section-padding) 0;
    background: white;
}

.svc-overview-grid {
    display: grid;
    gap: var(--space-12);
    align-items: center;
}

@media (min-width: 1024px) {
    .svc-overview-grid {
        grid-template-columns: 1fr 1fr;
        gap: var(--space-16);
    }
}

.svc-overview-image {
    border-radius: var(--radius-3xl);
    overflow: hidden;
}

.svc-overview-image img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
}

.svc-overview-content h2 {
    font-size: var(--text-4xl);
    margin-bottom: var(--space-6);
}

.svc-features-grid {
    display: grid;
    gap: var(--space-4);
}

.svc-feature {
    display: flex;
    align-items: flex-start;
    gap: var(--space-3);
}

.svc-feature svg {
    flex-shrink: 0;
    color: var(--color-primary-500);
    margin-top: 2px;
}

.svc-feature span {
    color: var(--color-neutral-700);
    line-height: var(--leading-relaxed);
}

/* Process Section */
.svc-process {
    padding: var(--section-padding) 0;
    background: var(--color-neutral-50);
}

.svc-process-grid {
    display: grid;
    gap: var(--space-6);
    margin-top: var(--space-12);
}

@media (min-width: 768px) {
    .svc-process-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .svc-process-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.svc-process-item {
    position: relative;
    padding: var(--space-6);
    background: white;
    border-radius: var(--radius-2xl);
    border: 1px solid var(--color-neutral-200);
}

.svc-process-number {
    font-family: var(--font-display);
    font-size: var(--text-5xl);
    font-weight: 800;
    color: var(--color-primary-100);
    line-height: 1;
    margin-bottom: var(--space-4);
}

.svc-process-item h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-2);
}

.svc-process-item p {
    font-size: var(--text-sm);
    color: var(--color-neutral-600);
    line-height: var(--leading-relaxed);
}

/* Deliverables Section */
.svc-deliverables {
    padding: var(--section-padding) 0;
    background: white;
}

.svc-deliverables-grid {
    display: grid;
    gap: var(--space-6);
    margin-top: var(--space-12);
}

@media (min-width: 768px) {
    .svc-deliverables-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .svc-deliverables-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.svc-deliverable-card {
    padding: var(--space-6);
    background: var(--color-neutral-50);
    border-radius: var(--radius-2xl);
    border: 1px solid var(--color-neutral-200);
}

.svc-deliverable-icon {
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-primary-100);
    border-radius: var(--radius-xl);
    color: var(--color-primary-600);
    margin-bottom: var(--space-4);
}

.svc-deliverable-card h3 {
    font-size: var(--text-base);
    font-weight: 600;
    margin-bottom: var(--space-2);
}

.svc-deliverable-card p {
    font-size: var(--text-sm);
    color: var(--color-neutral-600);
    line-height: var(--leading-relaxed);
}

/* Related Services Section */
.svc-related {
    padding: var(--section-padding) 0;
    background: var(--color-neutral-50);
}

.svc-related-grid {
    display: grid;
    gap: var(--space-6);
    margin-top: var(--space-12);
}

@media (min-width: 768px) {
    .svc-related-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.svc-related-card {
    background: white;
    padding: var(--space-8);
    border-radius: var(--radius-2xl);
    border: 1px solid var(--color-neutral-200);
    transition: border-color var(--transition-base), box-shadow var(--transition-base);
}

.svc-related-card:hover {
    border-color: var(--color-primary-300);
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
}

.svc-related-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-primary-100);
    border-radius: var(--radius-xl);
    color: var(--color-primary-600);
    margin-bottom: var(--space-5);
}

.svc-related-card h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
}

.svc-related-card p {
    font-size: var(--text-sm);
    color: var(--color-neutral-600);
    line-height: var(--leading-relaxed);
    margin-bottom: var(--space-4);
}

.svc-related-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--color-primary-600);
    transition: gap var(--transition-fast);
}

.svc-related-link:hover {
    gap: var(--space-3);
}

/* CTA Section */
.svc-cta {
    padding: var(--section-padding) 0;
    background: var(--color-dark-950);
    color: white;
}

.svc-cta-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.svc-cta h2 {
    font-size: var(--text-4xl);
    color: white;
    margin-bottom: var(--space-4);
}

.svc-cta p {
    font-size: var(--text-lg);
    color: var(--color-dark-300);
    line-height: var(--leading-relaxed);
    margin-bottom: var(--space-8);
}

.svc-cta-actions {
    display: flex;
    gap: var(--space-4);
    justify-content: center;
    flex-wrap: wrap;
}
</style>

<!-- Hero Section -->
<section class="svc-hero">
    <div class="container">
        <div class="svc-hero-content reveal">
            <div class="svc-hero-icon">
                <?php echo fieldcraft_icon($service['icon'], 32); ?>
            </div>
            <span class="text-label"><?php echo esc_html($service['label']); ?></span>
            <h1><?php echo esc_html($service['title']); ?></h1>
            <p class="svc-hero-text">
                <?php echo esc_html($service['description']); ?>
            </p>
            <div class="svc-hero-actions">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-accent btn-lg">
                    Get Started <?php echo fieldcraft_icon("arrow-right"); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-outline btn-lg" style="border-color: rgba(255,255,255,0.2); color: white;">
                    All Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="svc-overview">
    <div class="container">
        <div class="svc-overview-grid">
            <div class="svc-overview-image reveal">
                <img src="<?php echo esc_url($service['image']); ?>"
                     alt="<?php echo esc_attr($service['image_alt']); ?>"
                     loading="lazy" width="800" height="600">
            </div>
            <div class="svc-overview-content reveal reveal-delay-1">
                <h2>What we deliver</h2>
                <div class="svc-features-grid">
                    <?php foreach ($service['features'] as $feature): ?>
                    <div class="svc-feature">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span><?php echo esc_html($feature); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="svc-process">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">Our Process</span>
            <h2 class="text-display">How we approach <?php echo esc_html(strtolower($service['label'])); ?></h2>
        </div>

        <div class="svc-process-grid">
            <?php foreach ($service['process'] as $i => $step): ?>
            <div class="svc-process-item reveal<?php echo $i > 0 ? ' reveal-delay-' . $i : ''; ?>">
                <div class="svc-process-number"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                <h3><?php echo esc_html($step['title']); ?></h3>
                <p><?php echo esc_html($step['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Deliverables Section -->
<section class="svc-deliverables">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">Deliverables</span>
            <h2 class="text-display">What you'll receive</h2>
        </div>

        <div class="svc-deliverables-grid">
            <?php foreach ($service['deliverables'] as $i => $item): ?>
            <div class="svc-deliverable-card reveal<?php echo $i > 0 && $i < 3 ? ' reveal-delay-' . $i : ''; ?>">
                <div class="svc-deliverable-icon">
                    <?php echo fieldcraft_icon($item['icon'], 22); ?>
                </div>
                <h3><?php echo esc_html($item['title']); ?></h3>
                <p><?php echo esc_html($item['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Related Services Section -->
<section class="svc-related">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">Explore More</span>
            <h2 class="text-display">Related services</h2>
        </div>

        <div class="svc-related-grid">
            <?php foreach ($related as $i => $rel): ?>
            <div class="svc-related-card reveal<?php echo $i > 0 ? ' reveal-delay-' . $i : ''; ?>">
                <div class="svc-related-icon">
                    <?php echo fieldcraft_icon($rel['icon'], 24); ?>
                </div>
                <h3><?php echo esc_html($rel['label']); ?></h3>
                <p><?php echo esc_html(mb_strimwidth($rel['description'], 0, 120, '...')); ?></p>
                <a href="<?php echo esc_url(home_url('/services/' . $rel['slug'])); ?>" class="svc-related-link">
                    Learn more <?php echo fieldcraft_icon("arrow-right", 16); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="svc-cta">
    <div class="container">
        <div class="svc-cta-content reveal">
            <h2>Ready to get started?</h2>
            <p>Tell us about your project and we'll get back to you within 24 hours with a custom proposal for <?php echo esc_html(strtolower($service['label'])); ?>.</p>
            <div class="svc-cta-actions">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-accent btn-lg">
                    Start Your Project <?php echo fieldcraft_icon("arrow-right"); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
