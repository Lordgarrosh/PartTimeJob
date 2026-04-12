<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PartTime PH — Part time hours. Full Time Results.</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --purple: #3300CC;
    --purple-light: #5533FF;
    --purple-dark: #220088;
    --yellow: #FFD600;
    --teal: #00BFA5;
    --bg: #E8E8E8;
    --white: #FFFFFF;
    --text: #111111;
    --text-muted: #555555;
    --card-radius: 16px;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    overflow-x: hidden;
  }

  /* NAV */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    background: var(--white);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 40px;
    height: 64px;
    border-bottom: 1px solid #eee;
  }

  .nav-logo {
    font-family: 'Syne', sans-serif;
    font-size: 22px; font-weight: 800;
    display: flex; align-items: center; gap: 6px;
  }
  .nav-logo span.p { color: var(--purple); }
  .nav-logo span.b { color: var(--text); }
  .nav-flag { font-size: 20px; }

  .nav-links {
    display: flex; gap: 32px; list-style: none;
  }
  .nav-links a {
    text-decoration: none; color: var(--text-muted);
    font-size: 14px; font-weight: 500;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--purple); }

  .nav-cta {
    display: flex; gap: 12px;
  }
  .btn {
    padding: 10px 22px; border-radius: 50px; font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 600; cursor: pointer; border: none;
    transition: all 0.2s; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
  }
  .btn-outline {
    background: transparent; color: var(--purple);
    border: 2px solid var(--purple);
  }
  .btn-outline:hover { background: var(--purple); color: white; }
  .btn-primary {
    background: var(--purple); color: white;
  }
  .btn-primary:hover { background: var(--purple-dark); transform: translateY(-1px); }
  .btn-lg { padding: 14px 32px; font-size: 16px; border-radius: 50px; }
  .btn-white { background: white; color: var(--purple); }
  .btn-white:hover { background: #f0f0f0; }

  /* HERO */
  .hero {
    padding: 120px 40px 80px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
    max-width: 1200px; margin: 0 auto; align-items: center;
    min-height: 100vh;
  }

  .hero-tag {
    display: inline-flex; align-items: center; gap: 8px;
    background: #EEE9FF; color: var(--purple);
    padding: 6px 14px; border-radius: 50px; font-size: 13px; font-weight: 600;
    margin-bottom: 24px;
  }
  .hero-tag-dot { width: 8px; height: 8px; background: var(--purple); border-radius: 50%; animation: pulse 2s infinite; }
  @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.4} }

  .hero h1 {
    font-family: 'Syne', sans-serif;
    font-size: clamp(36px, 5vw, 58px); font-weight: 800; line-height: 1.1;
    margin-bottom: 20px;
  }
  .hero h1 .accent { color: var(--purple); }
  .hero h1 .accent2 { color: var(--teal); }

  .hero-sub {
    font-size: 17px; color: var(--text-muted); line-height: 1.6; margin-bottom: 36px; max-width: 480px;
  }

  .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 48px; }

  .hero-stats {
    display: flex; gap: 32px;
  }
  .stat { }
  .stat-num { font-family: 'Syne', sans-serif; font-size: 28px; font-weight: 800; color: var(--purple); }
  .stat-label { font-size: 13px; color: var(--text-muted); margin-top: 2px; }

  /* PHONE MOCKUP */
  .hero-visual {
    display: flex; justify-content: center; align-items: center; position: relative;
  }
  .phone {
    width: 280px; height: 560px;
    background: var(--white);
    border-radius: 40px;
    border: 3px solid #ddd;
    overflow: hidden;
    position: relative;
    box-shadow: 0 40px 80px rgba(0,0,0,0.15);
    animation: float 4s ease-in-out infinite;
  }
  @keyframes float { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-12px)} }

  .phone-status {
    background: var(--white); padding: 12px 20px 8px;
    display: flex; align-items: center; justify-content: space-between;
    font-size: 11px; font-weight: 600;
  }
  .phone-header {
    padding: 8px 16px 10px;
    display: flex; align-items: center; justify-content: space-between;
  }
  .phone-avatar {
    width: 36px; height: 36px; border-radius: 50%;
    background: linear-gradient(135deg, #a080ff, #5533FF);
    display: flex; align-items: center; justify-content: center; color: white; font-size: 13px; font-weight: 700;
    position: relative;
  }
  .phone-avatar-badge {
    position: absolute; bottom: -2px; right: -2px;
    width: 14px; height: 14px; background: var(--purple); border-radius: 50%;
    display: flex; align-items: center; justify-content: center; color: white; font-size: 9px;
    border: 2px solid white;
  }
  .phone-title { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 15px; }

  .phone-search {
    margin: 0 16px 10px;
    background: #F0F0F0; border-radius: 50px;
    padding: 8px 14px; font-size: 12px; color: #888;
    display: flex; justify-content: space-between; align-items: center;
  }
  .phone-filters {
    display: flex; gap: 8px; margin: 0 16px 12px;
  }
  .phone-filter {
    background: white; border: 1px solid #ddd;
    border-radius: 50px; padding: 5px 12px; font-size: 11px;
    display: flex; align-items: center; gap: 4px;
  }

  .phone-card {
    margin: 0 16px 10px;
    background: white; border-radius: 12px;
    padding: 12px; border: 1px solid #eee;
    display: flex; align-items: center; gap: 10px;
    animation: slideIn 0.5s ease forwards;
    opacity: 0;
  }
  .phone-card:nth-child(1) { animation-delay: 0.1s; }
  .phone-card:nth-child(2) { animation-delay: 0.25s; }
  .phone-card:nth-child(3) { animation-delay: 0.4s; }
  @keyframes slideIn { to { opacity: 1; transform: translateY(0); } from { transform: translateY(10px); } }

  .phone-company-logo {
    width: 44px; height: 44px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-family: 'Syne', sans-serif; font-size: 11px; font-weight: 800; color: white;
    flex-shrink: 0;
  }
  .logo-jollibee { background: #E31B23; }
  .logo-sbux { background: #00704A; }
  .logo-sti { background: #FFD600; color: #003087; }

  .phone-card-info { flex: 1; }
  .phone-card-title { font-weight: 600; font-size: 12px; }
  .phone-card-company { font-size: 11px; color: #888; }
  .phone-card-meta { display: flex; gap: 6px; margin-top: 4px; font-size: 10px; color: var(--purple); font-weight: 600; }

  .phone-apply {
    background: var(--purple); color: white;
    border-radius: 8px; padding: 5px 10px; font-size: 10px; font-weight: 600;
    border: none; cursor: pointer;
  }

  /* decorative blobs */
  .blob1, .blob2 {
    position: absolute; border-radius: 50%; filter: blur(40px); opacity: 0.25; z-index: -1;
  }
  .blob1 { width: 300px; height: 300px; background: var(--purple); top: 10%; right: -50px; }
  .blob2 { width: 250px; height: 250px; background: var(--teal); bottom: 10%; right: 50px; }

  /* HOW IT WORKS */
  .section { padding: 80px 40px; max-width: 1200px; margin: 0 auto; }
  .section-label {
    font-size: 12px; font-weight: 700; letter-spacing: 2px;
    text-transform: uppercase; color: var(--purple); margin-bottom: 12px;
  }
  .section-title {
    font-family: 'Syne', sans-serif; font-size: clamp(28px, 4vw, 42px); font-weight: 800;
    line-height: 1.2; margin-bottom: 16px;
  }
  .section-sub { font-size: 16px; color: var(--text-muted); max-width: 540px; line-height: 1.6; }

  .steps {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 52px;
  }
  .step-card {
    background: var(--white); border-radius: var(--card-radius); padding: 32px;
    border: 1px solid #e8e8e8; position: relative; overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .step-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
  .step-num {
    font-family: 'Syne', sans-serif; font-size: 64px; font-weight: 800;
    color: #F0EDFF; position: absolute; top: 12px; right: 20px; line-height: 1;
  }
  .step-icon {
    width: 48px; height: 48px; background: #EEE9FF; border-radius: 12px;
    display: flex; align-items: center; justify-content: center; margin-bottom: 20px;
    font-size: 22px;
  }
  .step-card h3 { font-family: 'Syne', sans-serif; font-size: 18px; font-weight: 700; margin-bottom: 10px; }
  .step-card p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

  /* FOR EMPLOYERS / EMPLOYEES tabs */
  .roles-section {
    background: var(--purple);
    padding: 80px 40px;
    color: white;
  }
  .roles-inner { max-width: 1200px; margin: 0 auto; }
  .roles-section .section-label { color: var(--yellow); }
  .roles-section .section-title { color: white; }
  .roles-section .section-sub { color: rgba(255,255,255,0.7); }

  .roles-tabs {
    display: flex; gap: 12px; margin-top: 40px; margin-bottom: 36px;
  }
  .role-tab {
    padding: 10px 24px; border-radius: 50px; font-size: 14px; font-weight: 600;
    cursor: pointer; border: 2px solid rgba(255,255,255,0.3); color: rgba(255,255,255,0.7);
    background: transparent; transition: all 0.2s;
  }
  .role-tab.active { background: var(--yellow); color: var(--text); border-color: var(--yellow); }

  .role-content { display: none; }
  .role-content.active { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }

  .role-features { list-style: none; }
  .role-features li {
    display: flex; gap: 14px; align-items: flex-start; margin-bottom: 20px;
  }
  .role-check {
    width: 24px; height: 24px; background: var(--yellow); border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 12px; flex-shrink: 0; margin-top: 2px;
  }
  .role-features li strong { display: block; font-size: 15px; margin-bottom: 2px; }
  .role-features li span { font-size: 13px; color: rgba(255,255,255,0.65); line-height: 1.5; }

  .role-phone {
    background: rgba(255,255,255,0.1); border-radius: 20px; padding: 20px;
    backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);
  }
  .role-phone-screen {
    background: var(--white); border-radius: 14px; overflow: hidden;
  }
  .rps-header {
    background: var(--purple); padding: 14px 16px;
    color: white; font-family: 'Syne', sans-serif; font-weight: 700; font-size: 16px;
    display: flex; align-items: center; justify-content: space-between;
  }
  .rps-back { font-size: 18px; }
  .job-status-item {
    padding: 14px 16px; border-bottom: 1px solid #f0f0f0;
    display: flex; gap: 12px; align-items: center;
  }
  .job-logo {
    width: 48px; height: 48px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 11px; flex-shrink: 0;
  }
  .job-info { flex: 1; }
  .job-info strong { display: block; font-size: 13px; font-weight: 600; }
  .job-info span { font-size: 12px; color: #888; }
  .job-info .pay { color: var(--purple); font-weight: 600; font-size: 12px; }
  .badge {
    padding: 4px 10px; border-radius: 50px; font-size: 11px; font-weight: 600;
  }
  .badge-saved { background: #E8F5E9; color: #2E7D32; }
  .badge-progress { background: #FFF3E0; color: #E65100; }
  .badge-pending { background: #EEE9FF; color: var(--purple); }

  /* JOB CATEGORIES */
  .categories-section { padding: 80px 40px; max-width: 1200px; margin: 0 auto; }
  .cats-grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 48px;
  }
  .cat-card {
    background: var(--white); border-radius: var(--card-radius); padding: 24px;
    text-align: center; border: 1px solid #e8e8e8;
    transition: all 0.2s; cursor: pointer;
  }
  .cat-card:hover { border-color: var(--purple); background: #F8F6FF; transform: translateY(-2px); }
  .cat-icon { font-size: 32px; margin-bottom: 12px; }
  .cat-name { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 14px; margin-bottom: 4px; }
  .cat-count { font-size: 12px; color: var(--text-muted); }

  /* CTA BANNER */
  .cta-banner {
    background: var(--yellow); margin: 0 40px 80px;
    border-radius: 24px; padding: 60px;
    display: flex; justify-content: space-between; align-items: center;
    gap: 32px;
  }
  .cta-banner h2 {
    font-family: 'Syne', sans-serif; font-size: 36px; font-weight: 800; max-width: 500px; line-height: 1.2;
  }
  .cta-actions { display: flex; gap: 12px; flex-shrink: 0; }
  .btn-dark { background: var(--text); color: white; }
  .btn-dark:hover { background: #333; }

  /* FOOTER */
  footer {
    background: var(--text); color: white; padding: 48px 40px 32px;
  }
  .footer-inner {
    max-width: 1200px; margin: 0 auto;
    display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px;
    margin-bottom: 40px;
  }
  .footer-logo {
    font-family: 'Syne', sans-serif; font-size: 20px; font-weight: 800; margin-bottom: 12px;
  }
  .footer-logo span { color: var(--purple-light); }
  .footer-tagline { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.6; max-width: 240px; }
  .footer-col h4 { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px; color: rgba(255,255,255,0.5); }
  .footer-col a { display: block; font-size: 14px; color: rgba(255,255,255,0.7); text-decoration: none; margin-bottom: 10px; transition: color 0.2s; }
  .footer-col a:hover { color: white; }
  .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 24px; display: flex; justify-content: space-between; align-items: center; }
  .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.4); }

  /* LOGIN MODAL */
  .modal-overlay {
    position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 1000;
    display: flex; align-items: center; justify-content: center;
    opacity: 0; pointer-events: none; transition: opacity 0.3s;
  }
  .modal-overlay.open { opacity: 1; pointer-events: all; }
  .modal {
    background: #E8E8E8; border-radius: 24px; padding: 40px; width: 100%; max-width: 400px;
    transform: translateY(20px); transition: transform 0.3s;
  }
  .modal-overlay.open .modal { transform: translateY(0); }
  .modal-logo {
    font-family: 'Syne', sans-serif; font-size: 26px; font-weight: 800; margin-bottom: 4px;
  }
  .modal-logo span { color: var(--purple); }
  .modal-tagline { font-size: 13px; color: var(--text-muted); margin-bottom: 28px; }
  .modal-illus { text-align: center; font-size: 48px; margin-bottom: 24px; }
  .form-group { margin-bottom: 14px; }
  .form-group input {
    width: 100%; padding: 13px 16px; background: white;
    border: 1px solid #ddd; border-radius: 12px; font-size: 14px;
    font-family: 'DM Sans', sans-serif; outline: none;
    transition: border-color 0.2s;
  }
  .form-group input:focus { border-color: var(--purple); }
  .modal-btn {
    width: 100%; padding: 14px; border-radius: 12px; font-size: 15px; font-weight: 600;
    cursor: pointer; border: none; margin-bottom: 10px; font-family: 'DM Sans', sans-serif;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    transition: all 0.2s;
  }
  .modal-btn-employee { background: var(--purple); color: white; }
  .modal-btn-employee:hover { background: var(--purple-dark); }
  .modal-btn-employer { background: transparent; color: var(--purple); border: 2px solid var(--purple); }
  .modal-btn-employer:hover { background: var(--purple); color: white; }
  .modal-or { text-align: center; font-size: 13px; color: var(--text-muted); margin: 8px 0; }
  .modal-signup { text-align: center; font-size: 13px; color: var(--text-muted); margin-top: 16px; }
  .modal-signup a { color: var(--purple); font-weight: 600; text-decoration: none; }
  .modal-close { position: absolute; top: 16px; right: 20px; background: none; border: none; font-size: 22px; cursor: pointer; color: #888; }

  /* google G icon */
  .g-icon {
    width: 18px; height: 18px; border-radius: 50%;
    background: white; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .g-icon svg { width: 12px; height: 12px; }

  @media (max-width: 900px) {
    .hero { grid-template-columns: 1fr; text-align: center; padding-top: 100px; }
    .hero-stats { justify-content: center; }
    .hero-actions { justify-content: center; }
    .hero-sub { margin: 0 auto 36px; }
    .hero-visual { display: none; }
    .steps { grid-template-columns: 1fr; }
    .cats-grid { grid-template-columns: repeat(2, 1fr); }
    .role-content.active { grid-template-columns: 1fr; }
    .cta-banner { flex-direction: column; text-align: center; }
    .cta-actions { flex-direction: column; width: 100%; }
    nav { padding: 0 20px; }
    .nav-links { display: none; }
    .footer-inner { grid-template-columns: 1fr 1fr; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <span class="p">PartTime</span><span class="b"> PH</span>
    <span class="nav-flag">🇵🇭</span>
  </div>
  <ul class="nav-links">
    <li><a href="#">Find Jobs</a></li>
    <li><a href="#">For Employers</a></li>
    <li><a href="#">Job Categories</a></li>
    <li><a href="#">How It Works</a></li>
  </ul>
  <div class="nav-cta">
    <button class="btn btn-outline" onclick="openModal()">Sign In</button>
    <button class="btn btn-primary" onclick="openModal()">Get Started</button>
  </div>
</nav>

<!-- HERO -->
<section style="background: var(--bg);">
  <div class="hero">
    <div class="hero-text">
      <div class="hero-tag">
        <span class="hero-tag-dot"></span>
        #1 Part-Time Job Platform in PH
      </div>
      <h1>
        Part time <span class="accent">hours.</span><br>
        Full time <span class="accent2">results.</span>
      </h1>
      <p class="hero-sub">
        Connect with thousands of employers across the Philippines. Find flexible work that fits your schedule — from 1-day gigs to recurring part-time roles.
      </p>
      <div class="hero-actions">
        <button class="btn btn-primary btn-lg" onclick="openModal()">Find Jobs Now</button>
        <button class="btn btn-outline btn-lg" onclick="switchToEmployer()">Post a Job</button>
      </div>
      <div class="hero-stats">
        <div class="stat">
          <div class="stat-num">12K+</div>
          <div class="stat-label">Active Jobs</div>
        </div>
        <div class="stat">
          <div class="stat-num">8K+</div>
          <div class="stat-label">Companies</div>
        </div>
        <div class="stat">
          <div class="stat-num">50K+</div>
          <div class="stat-label">Workers Hired</div>
        </div>
      </div>
    </div>

    <div class="hero-visual">
      <div class="blob1"></div>
      <div class="blob2"></div>
      <div class="phone">
        <div class="phone-status">
          <span>9:41</span>
          <span>●●●</span>
        </div>
        <div class="phone-header">
          <div class="phone-avatar">AP
            <div class="phone-avatar-badge">+</div>
          </div>
          <div class="phone-title">Home</div>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </div>
        <div class="phone-search">
          <span>Search Jobs</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        </div>
        <div class="phone-filters">
          <div class="phone-filter">Job Category <span>▾</span></div>
          <div class="phone-filter">Timeframe <span>▾</span></div>
        </div>
        <div style="padding: 0;">
          <div class="phone-card">
            <div class="phone-company-logo logo-jollibee">JOY</div>
            <div class="phone-card-info">
              <div class="phone-card-title">Service Crew</div>
              <div class="phone-card-company">Jollibee</div>
              <div class="phone-card-meta"><span>₱700/day</span><span>·</span><span>8am–5pm</span></div>
            </div>
            <button class="phone-apply">Apply</button>
          </div>
          <div class="phone-card">
            <div class="phone-company-logo logo-sbux">SBX</div>
            <div class="phone-card-info">
              <div class="phone-card-title">Barista</div>
              <div class="phone-card-company">Starbucks</div>
              <div class="phone-card-meta"><span>₱600/day</span><span>·</span><span>9am–2pm</span></div>
            </div>
            <button class="phone-apply">Apply</button>
          </div>
          <div class="phone-card">
            <div class="phone-company-logo logo-sti">STI</div>
            <div class="phone-card-info">
              <div class="phone-card-title">IT Professor</div>
              <div class="phone-card-company">STI Ortigas</div>
              <div class="phone-card-meta"><span>Negotiable</span><span>·</span><span>School</span></div>
            </div>
            <button class="phone-apply">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section style="background: var(--white); padding: 80px 0;">
  <div class="section">
    <div class="section-label">How It Works</div>
    <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:20px;">
      <div>
        <h2 class="section-title">Get hired in 3 simple steps</h2>
        <p class="section-sub">From sign-up to your first paycheck — PartTimePH makes it fast and easy.</p>
      </div>
    </div>
    <div class="steps">
      <div class="step-card">
        <div class="step-num">01</div>
        <div class="step-icon">👤</div>
        <h3>Create your profile</h3>
        <p>Sign up as an employee, verify your account, and showcase your skills and work experience.</p>
      </div>
      <div class="step-card">
        <div class="step-icon">🔍</div>
        <div class="step-num">02</div>
        <h3>Browse and apply</h3>
        <p>Filter jobs by category, timeframe, and location. Save your favorites and apply in one tap.</p>
      </div>
      <div class="step-card">
        <div class="step-icon">✅</div>
        <div class="step-num">03</div>
        <h3>Get hired and earn</h3>
        <p>Track your application status in real-time. Get matched, show up, and start earning.</p>
      </div>
    </div>
  </div>
</section>

<!-- FOR EMPLOYERS / EMPLOYEES -->
<div class="roles-section">
  <div class="roles-inner">
    <div class="section-label">Built for everyone</div>
    <h2 class="section-title">One platform, two powerful sides</h2>
    <p class="section-sub">Whether you're looking for work or looking for workers — PartTimePH has you covered.</p>
    <div class="roles-tabs">
      <button class="role-tab active" onclick="switchTab('employee', this)">For Employees</button>
      <button class="role-tab" onclick="switchTab('employer', this)">For Employers</button>
    </div>

    <div class="role-content active" id="tab-employee">
      <ul class="role-features">
        <li>
          <div class="role-check">✓</div>
          <div><strong>Browse hundreds of part-time jobs</strong><span>Filter by category, location, timeframe, and salary. Find exactly what fits your schedule.</span></div>
        </li>
        <li>
          <div class="role-check">✓</div>
          <div><strong>Save and track applications</strong><span>Save jobs for later and monitor your application status — Saved, In Progress, or Pending.</span></div>
        </li>
        <li>
          <div class="role-check">✓</div>
          <div><strong>Build a professional profile</strong><span>Showcase your skills, experience, and availability to stand out from other applicants.</span></div>
        </li>
        <li>
          <div class="role-check">✓</div>
          <div><strong>Get verified and get hired faster</strong><span>Verify your account to unlock premium job listings and increase your hire rate.</span></div>
        </li>
      </ul>
      <div class="role-phone">
        <div class="role-phone-screen">
          <div class="rps-header">
            <span class="rps-back">←</span>
            <span>Job Status</span>
            <span></span>
          </div>
          <div style="padding: 12px 12px 0; display:flex; gap:8px;">
            <span style="background:#00BFA5;color:white;padding:5px 12px;border-radius:50px;font-size:11px;font-weight:600;">Saved Jobs ▾</span>
            <span style="background:var(--yellow);color:#333;padding:5px 12px;border-radius:50px;font-size:11px;font-weight:600;">Date Posted ▾</span>
          </div>
          <div style="padding:12px 14px 4px;font-size:13px;font-weight:700;">2 Jobs Found</div>
          <div class="job-status-item">
            <div class="job-logo logo-sbux" style="color:white;font-size:10px;">SBX</div>
            <div class="job-info">
              <strong>Barista</strong>
              <span>Starbucks · 9AM–2PM</span><br>
              <span class="pay">₱600 / Day</span>
            </div>
            <span class="badge badge-saved">Saved</span>
          </div>
          <div class="job-status-item">
            <div class="job-logo logo-jollibee" style="color:white;font-size:10px;">JOY</div>
            <div class="job-info">
              <strong>Service Crew</strong>
              <span>Jollibee · 8am–5pm</span><br>
              <span class="pay">₱700 / Day</span>
            </div>
            <span class="badge badge-pending">Pending</span>
          </div>
        </div>
      </div>
    </div>

    <div class="role-content" id="tab-employer">
      <ul class="role-features">
        <li>
          <div class="role-check">✓</div>
          <div><strong>Post jobs in minutes</strong><span>Create a job listing with title, location, category, salary, and schedule in a guided 3-step flow.</span></div>
        </li>
        <li>
          <div class="role-check">✓</div>
          <div><strong>Find qualified applicants fast</strong><span>Browse profiles of verified workers filtered by skill, availability, and location.</span></div>
        </li>
        <li>
          <div class="role-check">✓</div>
          <div><strong>Register your business</strong><span>Get a verified employer badge to attract more applicants and build company credibility.</span></div>
        </li>
        <li>
          <div class="role-check">✓</div>
          <div><strong>Manage all your job postings</strong><span>Track draft, active, and completed job ads from your employer dashboard in one place.</span></div>
        </li>
      </ul>
      <div class="role-phone">
        <div class="role-phone-screen">
          <div class="rps-header">
            <span></span>
            <span>Home</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <div style="background:#FFF3CD;border-left:3px solid #E6A800;padding:10px 12px;font-size:11px;color:#7A5800;line-height:1.4;">
            ⚠ Account not yet verified. <u>Resend Now</u> or contact Customer Service.
          </div>
          <div style="padding:14px;">
            <div style="font-family:'Syne',sans-serif;font-weight:700;font-size:14px;margin-bottom:4px;">Hi Alexander 👋</div>
            <div style="font-size:12px;color:#888;margin-bottom:14px;">Find suitable talents for your business.</div>
            <button style="background:var(--purple);color:white;border:none;border-radius:8px;padding:9px 18px;font-size:12px;font-weight:600;cursor:pointer;margin-bottom:14px;">+ Create a Job</button>
            <div style="font-size:12px;font-weight:700;margin-bottom:8px;">Recent Posted Jobs</div>
            <div style="border:1.5px solid #ddd;border-radius:10px;padding:12px;">
              <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
                <span style="font-size:12px;color:#888;">Draft</span>
                <span style="font-size:16px;color:#aaa;">✕</span>
              </div>
              <div style="font-size:12px;font-weight:600;">Job</div>
              <div style="font-size:12px;text-decoration:underline;font-style:italic;color:var(--purple);margin-bottom:10px;">City Name</div>
              <button style="width:100%;background:#333;color:white;border:none;border-radius:8px;padding:8px;font-size:12px;font-weight:600;cursor:pointer;">Finalize Drafts</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JOB CATEGORIES -->
<section style="background: var(--bg);">
  <div class="categories-section">
    <div class="section-label">Job Categories</div>
    <h2 class="section-title">Find work in your field</h2>
    <div class="cats-grid">
      <div class="cat-card"><div class="cat-icon">💻</div><div class="cat-name">Information Technology</div><div class="cat-count">240+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">🍔</div><div class="cat-name">Food & Service</div><div class="cat-count">1,200+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">📚</div><div class="cat-name">Education</div><div class="cat-count">380+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">📦</div><div class="cat-name">Storage & Distribution</div><div class="cat-count">520+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">🏥</div><div class="cat-name">Healthcare</div><div class="cat-count">190+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">🛒</div><div class="cat-name">Retail</div><div class="cat-count">870+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">🧠</div><div class="cat-name">Psychology</div><div class="cat-count">95+ jobs</div></div>
      <div class="cat-card"><div class="cat-icon">🎨</div><div class="cat-name">Creative & Design</div><div class="cat-count">310+ jobs</div></div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div style="background:var(--bg); padding: 0 0 80px;">
  <div class="cta-banner">
    <h2>Ready to start earning on your own terms?</h2>
    <div class="cta-actions">
      <button class="btn btn-dark btn-lg" onclick="openModal()">Sign Up as Employee</button>
      <button class="btn btn-outline btn-lg" onclick="switchToEmployer()" style="border-color: var(--text); color: var(--text);">Post a Job</button>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-logo"><span>PartTime</span> PH 🇵🇭</div>
      <p class="footer-tagline">Part time hours. Full time results. The Philippines' trusted platform for flexible work.</p>
    </div>
    <div class="footer-col">
      <h4>For Workers</h4>
      <a href="#">Browse Jobs</a>
      <a href="#">Job Categories</a>
      <a href="#">My Applications</a>
      <a href="#">Profile Setup</a>
    </div>
    <div class="footer-col">
      <h4>For Employers</h4>
      <a href="#">Post a Job</a>
      <a href="#">Find Applicants</a>
      <a href="#">Register Business</a>
      <a href="#">Pricing</a>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <a href="#">About</a>
      <a href="#">Contact</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2026 PartTimePH. All rights reserved.</p>
    <p>Made with ❤ for Filipino workers</p>
  </div>
</footer>

<!-- LOGIN MODAL -->
<div class="modal-overlay" id="modal" onclick="closeModalOutside(event)">
  <div class="modal" style="position:relative;">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <div class="modal-logo"><span>PartTime</span> PH 🇵🇭</div>
    <div class="modal-tagline">Part time hours. Full Time Results.</div>
    <div class="modal-illus">👷‍♂️👷‍♀️</div>
    <div class="form-group"><input type="email" placeholder="Email Address"></div>
    <div class="form-group"><input type="password" placeholder="Password"></div>
    <button class="modal-btn modal-btn-employee">
      <div class="g-icon"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg></div>
      Continue As Employee
    </button>
    <div class="modal-or">or</div>
    <button class="modal-btn modal-btn-employer">
      <div class="g-icon"><svg viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg></div>
      Continue As Employer
    </button>
    <div class="modal-signup">Don't have an account? <a href="#">Sign Up</a></div>
  </div>
</div>

<script>
  function openModal() { document.getElementById('modal').classList.add('open'); }
  function closeModal() { document.getElementById('modal').classList.remove('open'); }
  function closeModalOutside(e) { if(e.target.id === 'modal') closeModal(); }
  function switchToEmployer() { openModal(); }

  function switchTab(tab, el) {
    document.querySelectorAll('.role-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.role-content').forEach(c => c.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('tab-' + tab).classList.add('active');
  }
</script>
</body>
</html>
