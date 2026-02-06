<?php
/**
 * Template Name: Work Page
 *
 * Portfolio/case studies page for Fieldcraft Digital.
 *
 * @package Fieldcraft
 */

get_header(); ?>

<style>
/* Work Page Styles */
.work-hero {
    position: relative;
    padding: 10rem 0 6rem;
    background: linear-gradient(135deg, var(--color-dark-950) 0%, var(--color-primary-950) 100%);
    color: white;
    overflow: hidden;
}

.work-hero::before {
    content: "";
    position: absolute;
    top: -50%;
    right: -20%;
    width: 80%;
    height: 200%;
    background: radial-gradient(ellipse, rgba(6, 182, 212, 0.15) 0%, transparent 50%);
    pointer-events: none;
}

.work-hero-content {
    position: relative;
    z-index: 1;
    max-width: 700px;
}

.work-hero .text-label {
    color: var(--color-accent-400);
    margin-bottom: var(--space-4);
    display: block;
}

.work-hero h1 {
    font-size: var(--text-hero);
    color: white;
    margin-bottom: var(--space-6);
}

.work-hero-text {
    font-size: var(--text-xl);
    color: var(--color-dark-300);
    line-height: var(--leading-relaxed);
}

/* Filter Bar */
.work-filters {
    padding: var(--space-8) 0;
    background: white;
    border-bottom: 1px solid var(--color-neutral-200);
    position: sticky;
    top: 72px;
    z-index: 10;
}

.filter-pills {
    display: flex;
    gap: var(--space-2);
    flex-wrap: wrap;
}

.filter-pill {
    display: inline-flex;
    align-items: center;
    padding: var(--space-2) var(--space-4);
    font-size: var(--text-sm);
    font-weight: 500;
    color: var(--color-neutral-600);
    background: var(--color-neutral-100);
    border: 1px solid transparent;
    border-radius: var(--radius-full);
    cursor: pointer;
    transition: all var(--transition-fast);
}

.filter-pill:hover {
    color: var(--color-primary-600);
    background: var(--color-primary-50);
}

.filter-pill.is-active {
    color: var(--color-primary-700);
    background: var(--color-primary-50);
    border-color: var(--color-primary-200);
}

/* Projects Grid */
.work-projects {
    padding: var(--section-padding) 0;
    background: white;
}

.projects-grid {
    display: grid;
    gap: var(--space-8);
}

@media (min-width: 768px) {
    .projects-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.project-card {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    border: 1px solid var(--color-neutral-200);
    transition: border-color var(--transition-base), box-shadow var(--transition-base);
}

.project-card:hover {
    border-color: var(--color-primary-300);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
}

.project-card-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 16/10;
    background: var(--color-neutral-100);
}

.project-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--duration-slow) var(--ease-out);
}

.project-card:hover .project-card-image img {
    transform: scale(1.03);
}

.project-card-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(2, 6, 23, 0.5);
    opacity: 0;
    transition: opacity var(--transition-base);
}

.project-card:hover .project-card-overlay {
    opacity: 1;
}

.project-card-body {
    padding: var(--space-6);
}

.project-tags {
    display: flex;
    gap: var(--space-2);
    flex-wrap: wrap;
    margin-bottom: var(--space-3);
}

.project-tag {
    font-size: var(--text-xs);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: var(--tracking-wider);
    color: var(--color-primary-600);
}

.project-card-body h3 {
    font-size: var(--text-xl);
    margin-bottom: var(--space-2);
}

.project-card-body p {
    font-size: var(--text-sm);
    color: var(--color-neutral-600);
    line-height: var(--leading-relaxed);
}

/* Featured Project (spans full width) */
.project-card-featured {
    grid-column: 1 / -1;
}

@media (min-width: 768px) {
    .project-card-featured {
        display: grid;
        grid-template-columns: 1.2fr 1fr;
    }

    .project-card-featured .project-card-image {
        aspect-ratio: auto;
        min-height: 400px;
    }

    .project-card-featured .project-card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: var(--space-10);
    }
}

.project-card-featured .project-card-body h3 {
    font-size: var(--text-3xl);
}

.project-card-featured .project-card-body p {
    font-size: var(--text-base);
}

.project-result {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    margin-top: var(--space-4);
    padding: var(--space-2) var(--space-4);
    background: var(--color-primary-50);
    border-radius: var(--radius-lg);
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--color-primary-700);
}

/* Results Stats */
.work-results {
    padding: var(--section-padding) 0;
    background: var(--color-dark-950);
    color: white;
}

.work-results .section-header .text-display {
    color: white;
}

.work-results .section-header p {
    color: var(--color-dark-300);
}

.results-grid {
    display: grid;
    gap: var(--space-8);
    margin-top: var(--space-12);
    text-align: center;
}

@media (min-width: 768px) {
    .results-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.result-item .result-number {
    display: block;
    font-family: var(--font-display);
    font-size: var(--text-5xl);
    font-weight: 700;
    color: white;
    line-height: 1;
    margin-bottom: var(--space-2);
}

.result-item .result-label {
    font-size: var(--text-sm);
    color: var(--color-dark-400);
}

/* Testimonials */
.work-testimonials {
    padding: var(--section-padding) 0;
    background: var(--color-neutral-50);
}

.work-testimonial-card {
    max-width: 700px;
    margin: var(--space-12) auto 0;
    text-align: center;
}

.work-testimonial-card blockquote {
    font-size: var(--text-xl);
    color: var(--color-neutral-700);
    line-height: var(--leading-relaxed);
    font-style: italic;
    margin-bottom: var(--space-6);
}

.work-testimonial-author {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-4);
}

.work-testimonial-author img {
    width: 56px;
    height: 56px;
    border-radius: var(--radius-full);
    object-fit: cover;
}

.work-testimonial-author strong {
    display: block;
    font-size: var(--text-base);
}

.work-testimonial-author span {
    font-size: var(--text-sm);
    color: var(--color-neutral-500);
}

/* CTA Section */
.work-cta-section {
    padding: var(--section-padding) 0;
    background: white;
}

.work-cta-card {
    background: linear-gradient(135deg, var(--color-primary-700) 0%, var(--color-primary-800) 100%);
    border-radius: var(--radius-3xl);
    padding: var(--space-12);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.work-cta-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 20px 20px;
    pointer-events: none;
}

.work-cta-card h2 {
    color: white;
    margin-bottom: var(--space-4);
    position: relative;
}

.work-cta-card p {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-lg);
    max-width: 500px;
    margin: 0 auto var(--space-8);
    position: relative;
}

.work-cta-card .btn {
    position: relative;
}
</style>

<!-- Hero Section -->
<section class="work-hero">
    <div class="container">
        <div class="work-hero-content reveal">
            <span class="text-label">Our Work</span>
            <h1>Projects that speak for themselves</h1>
            <p class="work-hero-text">
                We've partnered with startups, scale-ups, and enterprise brands to deliver digital experiences that drive real business results.
            </p>
        </div>
    </div>
</section>

<!-- Filter Bar -->
<section class="work-filters">
    <div class="container">
        <div class="filter-pills">
            <button class="filter-pill is-active">All Projects</button>
            <button class="filter-pill">Web Design</button>
            <button class="filter-pill">E-Commerce</button>
            <button class="filter-pill">Web Application</button>
            <button class="filter-pill">Branding</button>
            <button class="filter-pill">Marketing</button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="work-projects">
    <div class="container">
        <div class="projects-grid">
            <!-- Featured Project -->
            <article class="project-card project-card-featured reveal">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=900&h=600&fit=crop&fm=webp&q=80"
                             alt="TechFlow Dashboard" loading="lazy" width="900" height="600">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">Web Application</span>
                        </div>
                        <h3>TechFlow Dashboard</h3>
                        <p>A comprehensive analytics dashboard for a SaaS startup, featuring real-time data visualization, custom reporting, and team collaboration tools. Built with React and a headless CMS.</p>
                        <div class="project-result">
                            <?php echo fieldcraft_icon("chart", 16); ?>
                            340% increase in user engagement
                        </div>
                    </div>
                </a>
            </article>

            <!-- Project 2 -->
            <article class="project-card reveal">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="Verde Organic" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">E-Commerce</span>
                        </div>
                        <h3>Verde Organic</h3>
                        <p>Brand identity and online store for an organic skincare company, with custom WooCommerce integration and subscription management.</p>
                    </div>
                </a>
            </article>

            <!-- Project 3 -->
            <article class="project-card reveal reveal-delay-1">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="FinanceHub" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">FinTech</span>
                        </div>
                        <h3>FinanceHub</h3>
                        <p>Modern banking experience redesign with a mobile-first approach, featuring biometric auth and real-time transaction tracking.</p>
                    </div>
                </a>
            </article>

            <!-- Project 4 -->
            <article class="project-card reveal">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="StartupX" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">Marketing Site</span>
                        </div>
                        <h3>StartupX</h3>
                        <p>High-converting landing pages for a venture-backed tech startup, driving 2x improvement in lead generation.</p>
                    </div>
                </a>
            </article>

            <!-- Project 5 -->
            <article class="project-card reveal reveal-delay-1">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="Artisan Coffee Co." loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">Brand & Web</span>
                        </div>
                        <h3>Artisan Coffee Co.</h3>
                        <p>Complete rebrand and website for a specialty coffee roaster, including e-commerce and wholesale ordering.</p>
                    </div>
                </a>
            </article>

            <!-- Project 6 -->
            <article class="project-card reveal">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="MedConnect" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">Web Application</span>
                        </div>
                        <h3>MedConnect</h3>
                        <p>Telemedicine platform connecting patients with healthcare providers, featuring video consultations and appointment scheduling.</p>
                    </div>
                </a>
            </article>

            <!-- Project 7 -->
            <article class="project-card reveal reveal-delay-1">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="LuxeHome" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">E-Commerce</span>
                        </div>
                        <h3>LuxeHome Interiors</h3>
                        <p>Premium home furnishings e-commerce experience with AR product visualization and personalized recommendations.</p>
                    </div>
                </a>
            </article>

            <!-- Project 8 -->
            <article class="project-card reveal">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="EcoTrack" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">Branding</span>
                        </div>
                        <h3>EcoTrack</h3>
                        <p>Full brand identity for a sustainability startup, including logo, visual system, and launch campaign strategy.</p>
                    </div>
                </a>
            </article>

            <!-- Project 9 -->
            <article class="project-card reveal reveal-delay-1">
                <a href="#" class="project-card-link" style="display: contents;">
                    <div class="project-card-image">
                        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=700&h=440&fit=crop&fm=webp&q=80"
                             alt="Quantum Analytics" loading="lazy" width="700" height="440">
                        <div class="project-card-overlay">
                            <span class="btn btn-white">View Project <?php echo fieldcraft_icon("arrow-up-right", 16); ?></span>
                        </div>
                    </div>
                    <div class="project-card-body">
                        <div class="project-tags">
                            <span class="project-tag">Web Application</span>
                        </div>
                        <h3>Quantum Analytics</h3>
                        <p>Enterprise data visualization platform with custom chart library, real-time updates, and role-based access controls.</p>
                    </div>
                </a>
            </article>
        </div>
    </div>
</section>

<!-- Results Stats -->
<section class="work-results">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">Our Impact</span>
            <h2 class="text-display">Results that matter</h2>
            <p>We measure success by the outcomes we deliver for our clients.</p>
        </div>

        <div class="results-grid reveal">
            <div class="result-item">
                <span class="result-number">150+</span>
                <span class="result-label">Projects Delivered</span>
            </div>
            <div class="result-item">
                <span class="result-number">98%</span>
                <span class="result-label">Client Satisfaction</span>
            </div>
            <div class="result-item">
                <span class="result-number">3.2x</span>
                <span class="result-label">Average ROI</span>
            </div>
            <div class="result-item">
                <span class="result-number">50+</span>
                <span class="result-label">Happy Clients</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="work-testimonials">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">Client Stories</span>
            <h2 class="text-display">What our clients say</h2>
        </div>

        <div class="work-testimonial-card reveal">
            <div style="color: var(--color-primary-200); margin-bottom: var(--space-4);">
                <?php echo fieldcraft_icon("quote", 40); ?>
            </div>
            <blockquote>
                "Fieldcraft transformed our online presence completely. The new website increased our conversions by 340% in just three months. Their attention to detail is unmatched and they truly felt like an extension of our team."
            </blockquote>
            <div class="work-testimonial-author">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=112&h=112&fit=crop&fm=webp&q=80"
                     alt="Sarah Chen" loading="lazy" width="56" height="56">
                <div style="text-align: left;">
                    <strong>Sarah Chen</strong>
                    <span>CEO, TechFlow</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="work-cta-section">
    <div class="container">
        <div class="work-cta-card reveal">
            <h2 class="text-display">Have a project in mind?</h2>
            <p>Let's talk about how we can bring your vision to life and deliver results that exceed expectations.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-accent btn-lg">
                Start a Conversation <?php echo fieldcraft_icon("arrow-right"); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
